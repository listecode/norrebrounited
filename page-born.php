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
    <article>
		<h1></h1>
         <img src="" alt="">
		 <p></p>
    </article>
</template>

<section id="bornehold-oversigt"></section>




	<!-- <div id="content" class="site-content clr"> -->

<script>
    let bornehold;



    const dburl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/bornehold";

    async function getJson() {
    const data = await fetch(dburl);
	bornehold = await data.json();
	visSider();


}



   
    function visSider() {
        let liste = document.querySelector("#bornehold-oversigt");
        let skabelon = document.querySelector("template");
        // liste.innerHTML = "";
        bornehold.forEach(bornehold => {
            const klon = skabelon.cloneNode(true).content;
			klon.querySelector("h1").textContent = bornehold.title.rendered;
			klon.querySelector("p").textContent = bornehold.beskrivelse;
			klon.querySelector("article").addEventListener("click", ()=> {location.href = bornehold.link; })
            liste.appendChild(klon);
            })
		}
        

              getJson();     
</script>
	

	<!-- </div> -->
<?php
get_footer();


