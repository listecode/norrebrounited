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

 <template>

	<article class="forsidenyheder">
		<img class="forsidebillede" src="" alt="">
		
		

	</article>
</template>

<section id="forside-oversigt-single"></section>


	<!-- <div id="content" class="site-content clr"> -->

<script>
    let forside;



    const dburl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/forside";

    async function getJson() {
    const data = await fetch(dburl);
	forside = await data.json();
	visSider();

}



   
    function visSider() {
        // let liste = document.querySelector("#forside-oversigt-single");
        // let skabelon = document.querySelector("template");
        // liste.innerHTML = "";
        // forsider.forEach(forside => {
			// let forside = forsider[0];
            // const klon = skabelon.cloneNode(true).content;
            document.querySelector(".forsidebillede").src = forside.billede.guid;
			document.querySelector("p").textContent = forside.tekst;

			// liste.appendChild(klon);
            // })
		}
        

              getJson();     
          
</script>
	

	<!-- </div> -->
<?php
get_footer();


