<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>



<template>

<article class="holdarticle">
    <img class="holdbillede" src="" alt="">
    <!-- <h1></h1> -->
    <p class="holdtekst"></p>

</article>
</template>

  <nav id="seniorholdmenu"><button data-seniorhold="alle">Alle</button></nav>

<section id="seniorhold-oversigt"></section>
  
 
<script>
    let flereseniorhold;
    let categories;
    let filterHold = "alle";
    const caturl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/categories"
    const dburl = "https://www.listeportfolio.dk/kea/09_cms/norrebrounited/wp-json/wp/v2/seniorhold"

    async function getJson() {
    const data = await fetch (dburl);
    const catdata = await fetch(caturl);
    categories = await catdata.json();
    flereseniorhold = await data.json();
    console.log(categories);
    console.log(flereseniorhold);
    visHold();
    opretknapper();
}

function opretknapper(){

    categories.forEach(cat =>{
        document.querySelector("#seniorholdmenu").innerHTML += `<button class="filter" data-seniorhold="${cat.id}">${cat.name}</button>`

    })

    addEventListenersToButtons();
}
    function addEventListenersToButtons(){
        document.querySelectorAll("#seniorholdmenu button").forEach(elm =>{
            elm.addEventListener("click", filtrering);
        })
    }

    function filtrering(){
        // let filterRet;
        filterHold = this.dataset.seniorhold;

        visHold();
    }

    function visHold() {
        let liste = document.querySelector("#seniorhold-oversigt");
        let skabelon = document.querySelector("template");
        liste.innerHTML = "";
        flereseniorhold.forEach(seniorhold => {
            if ( filterHold == "alle" || seniorhold.categories.includes(parseInt(filterHold))){
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector(".holdbillede").src = seniorhold.formular.guid;
            klon.querySelector(".holdtekst").textContent = seniorhold.text;
            klon.querySelector(".holdarticle").addEventListener("click", ()=> {location.href = seniorhold.link; })
            liste.appendChild(klon);
            }
        })
    }
              getJson();     
</script>



<?php
get_footer();
