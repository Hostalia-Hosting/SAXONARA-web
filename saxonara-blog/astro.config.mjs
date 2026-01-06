// @ts-check
import { defineConfig } from 'astro/config';

import sitemap from '@astrojs/sitemap';

// https://astro.build/config
export default defineConfig({
  site: 'https://www.saxonara.com',

  // Això és el que diu a Astro: "encara que jo estigui a l'arrel del meu PC, a internet viuré a /life"
  base: '/life',

  integrations: [sitemap()]
});