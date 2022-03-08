import  sveltePreprocess  from 'svelte-preprocess';
import node from '@sveltejs/adapter-node';
/** @type {import('@sveltejs/kit').Config} */
const config = {
	kit: {
		target: '#svelte'
	},
	preprocess: sveltePreprocess({
		scss: { 
			includePaths: ['src/styles'], 
			prependData: '@use "variables" as *;' 
		}		
	})
};

export default config;
