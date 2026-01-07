import { defineCollection, z } from 'astro:content';

const blog = defineCollection({
	type: 'content',
	// "schema" defineix els camps del Frontmatter (el que hi ha entre ---)
	schema: z.object({
		title: z.string(),
		description: z.string(),
		// Convertim strings de data en objectes de data de JS automàticament
		pubDate: z.coerce.date(),
		author: z.string(),
		heroImage: z.string().optional(),
		heroImageAlt: z.string().optional(),
        tags: z.array(z.string()).default(['Saxophonist']),
	}),
});

export const collections = { blog };