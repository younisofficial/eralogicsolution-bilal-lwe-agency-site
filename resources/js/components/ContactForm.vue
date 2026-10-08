<script setup>
import { reactive, ref } from 'vue';

const props = defineProps({
    action: { type: String, required: true },
    services: { type: Array, default: () => [] },
    selected: { type: String, default: '' },
});

const blank = () => ({ name: '', email: '', phone: '', service: props.selected, message: '', website: '' });

const form = reactive(blank());
const errors = ref({});
const sending = ref(false);
const success = ref('');
const failure = ref('');

async function submit() {
    sending.value = true;
    errors.value = {};
    success.value = '';
    failure.value = '';

    try {
        const response = await fetch(props.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                Accept: 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
            },
            body: JSON.stringify(form),
        });
        const data = await response.json().catch(() => ({}));

        if (response.ok) {
            success.value = data.message;
            Object.assign(form, blank());
        } else if (response.status === 422) {
            errors.value = data.errors ?? {};
            failure.value = 'Please correct the highlighted fields.';
        } else if (response.status === 429) {
            failure.value = 'Too many messages. Please wait a minute and try again.';
        } else if (response.status === 419) {
            failure.value = 'This page has expired. Reload the page and send again.';
        } else {
            failure.value = 'Your message was not sent. Please try again or email us directly.';
        }
    } catch {
        failure.value = 'No connection. Check your internet and try again.';
    } finally {
        sending.value = false;
    }
}
</script>

<template>
    <form class="form" novalidate @submit.prevent="submit">
        <p v-if="success" class="form-msg ok" role="status">{{ success }}</p>
        <p v-if="failure" class="form-msg fail" role="alert">{{ failure }}</p>

        <div class="field" :class="{ bad: errors.name }">
            <label for="cf-name">Your name</label>
            <input id="cf-name" v-model.trim="form.name" maxlength="100" autocomplete="name" />
            <span v-if="errors.name" class="err">{{ errors.name[0] }}</span>
        </div>

        <div class="field" :class="{ bad: errors.email }">
            <label for="cf-email">Email</label>
            <input id="cf-email" v-model.trim="form.email" type="email" maxlength="150" autocomplete="email" />
            <span v-if="errors.email" class="err">{{ errors.email[0] }}</span>
        </div>

        <div class="field" :class="{ bad: errors.phone }">
            <label for="cf-phone">Phone (optional)</label>
            <input id="cf-phone" v-model.trim="form.phone" maxlength="30" autocomplete="tel" />
            <span v-if="errors.phone" class="err">{{ errors.phone[0] }}</span>
        </div>

        <div class="field" :class="{ bad: errors.service }">
            <label for="cf-service">Service</label>
            <select id="cf-service" v-model="form.service">
                <option value="">Select a service</option>
                <option v-for="name in services" :key="name" :value="name">{{ name }}</option>
            </select>
            <span v-if="errors.service" class="err">{{ errors.service[0] }}</span>
        </div>

        <div class="field full" :class="{ bad: errors.message }">
            <label for="cf-message">Project details</label>
            <textarea id="cf-message" v-model.trim="form.message" maxlength="3000"></textarea>
            <span v-if="errors.message" class="err">{{ errors.message[0] }}</span>
        </div>

        <div class="hp" aria-hidden="true">
            <label for="cf-website">Website</label>
            <input id="cf-website" v-model="form.website" tabindex="-1" autocomplete="off" />
        </div>

        <div class="field full">
            <button class="btn btn-p" type="submit" :disabled="sending">
                {{ sending ? 'Sending…' : 'Send Message' }}
                <svg class="ico"><use href="#i-arrow" /></svg>
            </button>
        </div>
    </form>
</template>
