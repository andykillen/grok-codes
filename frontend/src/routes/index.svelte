<script context="module">
    import { variables } from '$lib/modules/Variables.js'; 
    
    export async function load({error, status}) {        

        let url = variables.cms + '/wp-content/uploads/json/excerpts.json';

        const res = await fetch(url);

		if (res.ok) {
			return {
				props: {
					feed: await res.json()
				}
			};
		}

		return {
			status: res.status,
			error: new Error(`Could not load ${url}`)
		};

	}
</script>
<script>
	import Listing from '$lib/excerpt/Listing.svelte';

    export let feed;

	let data = feed.data; 
    console.log(data);
</script>
<Listing {data} />