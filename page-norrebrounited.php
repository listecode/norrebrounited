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

	<article class="forsidenyheder" id="header">
		<img class="nyhed" src="" alt="">
		
		

	</article>

    <!-- <article class="forsideflex">
		<h1></h1>
         <img class="forsidebillede" src="" alt="">
		 <div class="tilmeldcontainer">
		 <p class="tilmeldcirkel"></p>
		</div>
    </article> -->
	
</template>

<!-- <article class="forsidenyheder">
		<img class="nyhed" src="" alt="">
		
		

	</article> -->


    <article class="forsideflex">
		<h1></h1>
         <img class="forsidebillede" src="" alt="">
		 <div class="tilmeldcontainer">
		 <a href="https://www.listeportfolio.dk/kea/09_cms/norrebrounited/tilmeld-nu/" class="tilmeldcirkel"></a>
		</div>
    </article> 

<section id="forside-oversigt"></section>
<h1 class="nyheder-banner">Nyheder</h1>
<section id="nyheds-oversigt"></section>
<!-- <div class="h1flex">
<h1 class="fodbold-h1">Fodbold</h1>
<h1 class="hondbold-h1">Håndbold</h1>
</div> -->
<section id="hold"></section>
<section class="sponsor">
	<img class="viderudvikling" src="<?php echo get_stylesheet_directory_uri() ?>/sponsorerer.webp" alt="hold carousel og sponsorere">
</section>



	<!-- <div id="content" class="site-content clr"> -->

<script>
    let forsider;



    const dburl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/forside";

    async function getJson() {
    const data = await fetch(dburl);
	forsider = await data.json();
	visSider();

}



   
    function visSider() {
        let liste = document.querySelector("#forside-oversigt");
        // let skabelon = document.querySelector("template");
        // liste.innerHTML = "";
        // forsider.forEach(forside => {
			let forside = forsider[0];
            // const klon = skabelon.cloneNode(true).content;
            document.querySelector(".forsidebillede").src = forside.billede.guid;
			document.querySelector(".tilmeldcirkel").textContent = forside.tekst;
			document.querySelector(".tilmeldcirkel").addEventListener("click", ()=> {location.href = forside.link; })
			// liste.appendChild(klon);
            // })
		}
        

              getJson();     





	let forsidenyheder;

	const nyhedsdburl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/nyhed";

    async function getJson1() {
    const nyhedsdata = await fetch(nyhedsdburl);
	forsidenyheder = await nyhedsdata.json();
	visForsideNyheder();

}



   
    function visForsideNyheder() {
        let liste = document.querySelector("#nyheds-oversigt");
        let skabelon = document.querySelector("template");
        // liste.innerHTML = "";
        forsidenyheder.forEach(nyhed => {
			// let nyhed = forsidenyheder[0];
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector(".nyhed").src = nyhed.billede.guid;  
			// klon.querySelector("p").textContent = nyhed.tekst;
			klon.querySelector(".forsidenyheder").addEventListener("click", ()=> {location.href = nyhed.link; })
            liste.appendChild(klon);
			  })
		}
      
		getJson1();
          
</script>
	

	<!-- </div> -->
<?php
get_footer();


