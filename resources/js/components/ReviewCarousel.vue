<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

const props = defineProps({
    reviews: { type: Array, required: true },
    // Time between automatic slides, in milliseconds.
    interval: { type: Number, default: 4000 },
});

const index = ref(0);
const perPage = ref(3);
let timer = null;

// Last position the track can move to without showing empty space.
const maxIndex = computed(() => Math.max(0, props.reviews.length - perPage.value));
const offset = computed(() => `translateX(-${(index.value * 100) / perPage.value}%)`);

function next() {
    index.value = index.value >= maxIndex.value ? 0 : index.value + 1;
}

function prev() {
    index.value = index.value <= 0 ? maxIndex.value : index.value - 1;
}

function go(position) {
    index.value = position;
}

function measure() {
    perPage.value = window.innerWidth <= 560 ? 1 : window.innerWidth <= 900 ? 2 : 3;
    if (index.value > maxIndex.value) index.value = maxIndex.value;
}

function play() {
    stop();
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    timer = setInterval(next, props.interval);
}

function stop() {
    clearInterval(timer);
    timer = null;
}

onMounted(() => {
    measure();
    window.addEventListener('resize', measure);
    play();
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', measure);
    stop();
});
</script>

<template>
    <div
        class="carousel"
        role="region"
        aria-label="Customer reviews"
        @mouseenter="stop"
        @mouseleave="play"
        @focusin="stop"
        @focusout="play"
    >
        <div class="car-view">
            <div class="car-track" :style="{ transform: offset, '--per': perPage }">
                <div v-for="(review, i) in reviews" :key="i" class="car-slide">
                    <article class="rev">
                        <p>"{{ review.text }}"</p>
                        <footer>
                            <div class="who">
                                <i><svg class="ico"><use href="#i-user" /></svg></i>
                                <div>
                                    <b>{{ review.name }}</b>
                                    <span>{{ review.role }}</span>
                                </div>
                            </div>
                            <span class="stars" :aria-label="`${review.rating} out of 5 stars`">{{ '★'.repeat(review.rating) }}</span>
                        </footer>
                    </article>
                </div>
            </div>
        </div>

        <div v-if="maxIndex > 0" class="car-nav">
            <button class="car-btn prev" type="button" aria-label="Previous review" @click="prev">
                <svg class="ico"><use href="#i-arrow" /></svg>
            </button>
            <div class="car-dots">
                <button
                    v-for="n in maxIndex + 1"
                    :key="n"
                    class="car-dot"
                    :class="{ on: index === n - 1 }"
                    type="button"
                    :aria-label="`Go to review ${n}`"
                    @click="go(n - 1)"
                ></button>
            </div>
            <button class="car-btn" type="button" aria-label="Next review" @click="next">
                <svg class="ico"><use href="#i-arrow" /></svg>
            </button>
        </div>
    </div>
</template>
