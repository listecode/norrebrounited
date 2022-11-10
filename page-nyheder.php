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
    
         <img src="" alt="">
    </article>
</template>


<div id="primary" class="content-area clr">

<script>
    let sider;

    let filterRet = "alle";

    const dburl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/side";

    async function getJson() {
    const data = await fetch (dburl);


    sider = await data.json();

    visRetter();

}



   
    function visRetter() {
        let liste = document.querySelector("#ret-oversigt");
        let skabelon = document.querySelector("template");
        liste.innerHTML = "";
        sider.forEach(side => {
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector("img").src = side.billede.guid;
            liste.appendChild(klon);
            })
        }

              getJson();     
</script>
	

	</div>
<?php
get_footer();


