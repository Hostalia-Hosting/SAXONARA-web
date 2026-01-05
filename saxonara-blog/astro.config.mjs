// @ts-check
import { defineConfig } from 'astro/config';

// https://astro.build/config
export default defineConfig({
    site: 'https://saxonara.com',
    base: '/life', // Això és el que diu a Astro: "encara que jo estigui a l'arrel del meu PC, a internet viuré a /life"
    });