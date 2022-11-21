<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>



	<article class="nyhedsingle">
        <h1 class="singleover"></h1>
		<img class="nyhedbilledesingle" src="" alt="">
         <p class="langnyhedtekst"></p>
        	<img class="nyhedbilledesingle1" src="" alt="">
       
	</article>



<section id="forside-oversigt-single"></section>


	<!-- <div id="content" class="site-content clr"> -->

<script>
    let bornehold;



    const dburl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/bornehold/"+<?php echo get_the_ID() ?>;

async function getJson() {
    const data = await fetch(dburl);
	bornehold = await data.json();
	visSider();

}



   
    function visSider() {
        // let liste = document.querySelector("#forside-oversigt-single");
        // let skabelon = document.querySelector("template");
        // liste.innerHTML = "";
        // forsider.forEach(forside => {
			// let forside = forsider[0];
            // const klon = skabelon.cloneNode(true).content;
            console.log("nyhed",bornehold)
            document.querySelector(".singleover").textContent = bornehold.title.rendered;
            document.querySelector(".nyhedbilledesingle").src = bornehold.billede.guid;
            document.querySelector(".nyhedbilledesingle1").src = bornehold.formular.guid;

			document.querySelector(".langnyhedtekst").textContent = bornehold.text;

			// liste.appendChild(klon);
            // })
		}
        

              getJson();     
          
</script>
	

	<!-- </div> -->
<?php
get_footer();


