<script setup>
import { ref } from 'vue';

defineProps({
    items: { type: Array, required: true },
});

const active = ref(0);

function toggle(index) {
    active.value = active.value === index ? -1 : index;
}
</script>

<template>
    <div v-for="(item, index) in items" :key="item.q" class="faq-item">
        <button
            class="faq-q"
            type="button"
            :aria-expanded="active === index"
            :aria-controls="`faq-panel-${index}`"
            @click="toggle(index)"
        >
            {{ item.q }}
            <span aria-hidden="true">{{ active === index ? '–' : '+' }}</span>
        </button>
        <p v-show="active === index" :id="`faq-panel-${index}`" class="faq-a">{{ item.a }}</p>
    </div>
</template>
