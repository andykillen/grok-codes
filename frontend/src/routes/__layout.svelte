<script>
 	import Header from '$lib/head/Header.svelte';
	import Footer from '$lib/footer/Footer.svelte';
</script>
<style lang="scss">
	:global(html) {
		font-size: 100%;
		padding: 0;
		margin: 0;
	}
	:global(body) {
		padding: 0;
		margin: 0;
		font-family: $body_font_family;
		color: $color;
		font-size:1rem;
		font-weight:300;
		line-height:1.6;
		word-spacing:.15rem;
	}
	@media(min-width:800px){
		:global(body) {
			font-size: 1.3rem;
		}
	}
	*,::after,::before{box-sizing:border-box}
	:global(img){
		width:100%;
		height:auto;
		object-fit:cover;
		aspect-ratio:16/9;
	}
	
	main {
		position: relative;
		z-index: 1;
	}
	:global(#page) {
				max-width: 90rem;
				margin: 0 auto;
				padding-left:1rem;
				padding-right:1rem;
		}
:global(a) {
	text-decoration: none;
	color: $link_color;
	padding-bottom: 1px;
}
:global(a:hover) {
	border-bottom: 1px dotted $link_hover_color;
	padding-bottom: 0;
}
:global(img){
	vertical-align: middle;
}
</style>

<Header />
<main>
	<slot />
</main>
<Footer/>
