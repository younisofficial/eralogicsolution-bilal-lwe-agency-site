import { createApp } from 'vue';
import SiteNav from './components/SiteNav.vue';
import FaqAccordion from './components/FaqAccordion.vue';
import ContactForm from './components/ContactForm.vue';
import ReviewCarousel from './components/ReviewCarousel.vue';

// Pages are rendered by Laravel (Blade) so search engines get full HTML.
// Vue then takes over each element marked with data-vue="ComponentName".
const components = { SiteNav, FaqAccordion, ContactForm, ReviewCarousel };

document.querySelectorAll('[data-vue]').forEach((el) => {
    const component = components[el.dataset.vue];
    if (!component) return;
    const props = el.dataset.props ? JSON.parse(el.dataset.props) : {};
    createApp(component, props).mount(el);
});
