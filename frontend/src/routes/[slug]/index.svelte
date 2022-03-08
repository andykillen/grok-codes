<script context="module">
	
import { variables } from '$lib/modules/Variables.js'; 

export async function load({page, fetch, status}) {
  if(page.params.slug.includes('.')) return false;

  let url = `${variables.cms}/wp-json/blogjson/v1/slug/?slug=${page.params.slug}`;

  const res = await fetch(url);

  if (res.ok) {
      return {
          props: {
              feed: await res.json(),
              page: page,
              variables: variables
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
	// import { variables } from '$lib/modules/Variables.js'; 
    
//	import Metadata from '$lib/components/head/Metadata.svelte';
	import Single from '$lib/content/Single.svelte';
	import Content from '$lib/modules/Content.js';
	import Meta from '$lib/modules/social/Meta.js';


  export let variables;
	export let feed;

  console.log('feed', feed.data.seo);

	let data = feed.data;
	// let Layer = feed.dataLayer;
  
	export let page;

	let meta = new Meta({
		title : data.seo.title,
		description : data.seo.description,
		url : page.path,
		image : variables.share
	});

	let article = new Content(data, []);

  console.log(article);
	let jsonld = {
      "@context": "https://schema.org",
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://google.com/article"
      },
      "headline": article.title(),
      "image": article.imageArray(variables.static),
      "datePublished": "2015-02-05T08:00:00+08:00",
      "dateModified": "2015-02-05T09:20:00+08:00",
      "author": {
        "@type": "Person",
        "name": "Andrew Killen"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Grok Codes",
        "logo": {
          "@type": "ImageObject",
          "url": variables.share
        }
      }
    };
  jsonld = JSON.stringify(jsonld);
  let jsonldScript = `<script type="application/ld+json">${jsonld + "<"}/script>`;

</script>


<svelte:head>
  <link href='/single.min.css'	media='screen' rel='stylesheet'>
  <!-- <Metadata {meta} /> -->
  {@html jsonldScript}
  
</svelte:head>


<Single {article} />
