<script setup>
import { ref } from 'vue';

defineProps({
    links: { type: Array, required: true },
    cta: { type: String, required: true },
});

const open = ref(false);
</script>

<template>
    <nav id="site-links" class="links" :class="{ open }">
        <a v-for="link in links" :key="link.href" :href="link.href" @click="open = false">{{ link.label }}</a>
    </nav>
    <a class="btn btn-p" :href="cta">
        Get Started
        <svg class="ico"><use href="#i-arrow" /></svg>
    </a>
    <button
        class="menu-btn"
        type="button"
        :aria-label="open ? 'Close menu' : 'Open menu'"
        :aria-expanded="open"
        aria-controls="site-links"
        @click="open = !open"
    >
        <svg class="ico"><use href="#i-menu" /></svg>
    </button>
</template>
