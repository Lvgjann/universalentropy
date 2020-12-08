<?php

function generate($n, $section, $title, $content) {
    set_head($n, $section, $title);
    //set_menu(2);
    set_menu_d($n, $section);
    set_page($content, $n);
    set_footer("cos", $n);
    // Footer
    //echo TXT_FOOTER;
    // Copyright
    echo TXT_COPYRIGHT;
    echo '
    </body>
    </html>';
}

function set_mezalando_sidebar($n)
{
    $target = target($n);
    
    echo '
    <nav id="sidebar">
        <div class="title">
            <h4>Contexte général</h4>
        </div>
        <ul>
            <li>
                <a href="' . $target . 'index.php">L\'univers en 5 minutes</a>
            </li>
            <li>
                <a href="' . $target . 'projets.php">Les projets autour de Mezalando</a>
            </li>
        </ul>
        <div class="title">
            <h4>L\'encyclopédie de Mezalando</h4>
        </div>
        <ul>
            <li>
                <a href="' . $target . 'histoire/factions.php">Factions et conflits</a>
            </li>
            <li>
                <button class="dropdown-btn">Races  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="' . $target . 'races/alters.php">Les races Alters</a>
                    <a href="' . $target . 'races/derwenn.php">Derwenn</a>
                    <a href="' . $target . 'races/mutants.php">Mutants</a>
                    <a href="' . $target . 'races/loenn.php">Loenn</a>
                    <a href="' . $target . 'races/mirien.php">Mirien</a>
                    <a href="' . $target . 'races/anges.php">Anges</a>
                    <a href="' . $target . 'races/demons.php">Démons</a>
                    <a href="' . $target . 'races/esprits.php">Esprits</a>
                    <a href="' . $target . 'races/gwarden.php">Gwarden</a>
                    <a href="' . $target . 'races/alfren.php">Alfren</a>
                    <a href="' . $target . 'races/einherjars.php">Einherjärs</a>
                    <a href="' . $target . 'races/maestri.php">Maestri</a>
                </div>
            </li>
            <li>
                <button class="dropdown-btn">Magie  <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="' . $target . 'magie/magie.php">Magie</a>
                    <a href="' . $target . 'magie/voies.php">Voies et branches</a>
                    <a href="' . $target . 'magie/objets.php">Objets enchantés</a>
                    <a href="' . $target . 'magie/invocations.php">Invocations et animations</a>
                </div>
            </li>
            <li>
                <button class="dropdown-btn">Religions et croyances  <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="' . $target . 'societe/enseignes.php">Invocations et animations</a>
                </div>
            </li>
            <li>
                <a href="' . $target . 'societe/alternet.php">Alternet</a>
            </li>
            <li>
                <a href="' . $target . 'societe/noms.php">Noms</a>
            </li>
        </ul>
        </ul>
        <div class="title">
            <h4>Erentia</h4>
        </div>
        <ul>
            <li>
                <a href="' . $target . 'erentia/histoire.php">Histoire</a>
            </li>
            <li>
                <a href="' . $target . 'erentia/geographie.php">Géographie</a>
            </li>
            <li>
                <button class="dropdown-btn">Société  <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="' . $target . 'erentia/certificats.php">Cartificats de magie</a>
                    <a href="' . $target . 'erentia/guildes.php">Guildes</a>
                    <a href="' . $target . 'erentia/gouvernance.php">Gouvernance et économie</a>
                    <a href="' . $target . 'erentia/lois.php">Lois de l\'île</a>
                    <a href="' . $target . 'erentia/garde.php">Garde et police</a>
                    <a href="' . $target . 'erentia/traditons.php">Célébrations et traditions</a>
                    <a href="' . $target . 'erentia/education.php">Éducation</a>
                </div>
            </li>
            <li>
                <button class="dropdown-btn">Vie pratique  <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-container">
                    <a href="' . $target . 'erentia/langue.php">Langue, monnaie et calendrier</a>
                    <a href="' . $target . 'erentia/acces.php">Accès à l\'île</a>
                    <a href="' . $target . 'erentia/technologie.php">Technologie</a>
                    <a href="' . $target . 'erentia/communication.php">Communication</a>
                    <a href="' . $target . 'erentia/deplacements.php">Déplacements</a>
                    <a href="' . $target . 'erentia/drogues.php">Drogues et alcool</a>
                    <a href="' . $target . 'erentia/medecine.php">Médecine et accès aux soins</a>
                    <a href="' . $target . 'erentia/sports.php">sports</a>
                </div>
            </li>
        </ul>
        <div class="title">
            <h4>Nenien</h4>
        </div>
        <ul>
            <li>
                <a href="' . $target . 'nenien/generalites.php">Généralités</a>
            </li>
            <li>
                <a href="' . $target . 'nenien/vie.php">Vie pratique</a>
            </li>
            <li>
                <a href="' . $target . 'nenien/lieux.php">Lieux</a>
            </li>
            <li>
                <a href="' . $target . 'nenien/personnages.php">Personnages importants</a>
            </li>
        </ul>
        <div class="title">
            <h4>Système</h4>
        </div>
        <ul>
            <li>
                <a href="' . $target . 'systeme/mecanique.php">Mécaniques</a>
            </li>
            <li>
                <a href="' . $target . 'systeme/fiches.php">Fiches de personnage</a>
            </li>
        </ul>
    </nav>
<script >
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
var sidebar = document.querySelector("#sidebar");
var initialSidebarPos = sidebar.getBoundingClientRect();
var mainContent = document.querySelector("main");

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var arrow = this.querySelector(".fa-caret-down");
    if(arrow) {
        arrow.classList.toggle("caret-up");
    }
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.maxHeight === "500px") {
      dropdownContent.style.maxHeight = "0px";
    } else {
      dropdownContent.style.maxHeight = "500px";
    }
  });
}

document.addEventListener("scroll", function () {
    if (!sidebar || !mainContent) return;
    var pos = sidebar.getBoundingClientRect();
    var mainPos = mainContent.getBoundingClientRect();
    if (initialSidebarPos.top - window.scrollY <= 0) {
        sidebar.style.position = "fixed";
        console.log(mainPos.bottom - 50 <= pos.bottom);
        if (mainPos.bottom <= pos.bottom - pos.top) {
            sidebar.style.bottom = (window.innerHeight - mainPos.bottom) + "px";
            sidebar.style.top = "auto";
        } else {
            sidebar.style.top = "2rem";
            sidebar.style.bottom = "auto";
        }
    } else {
        sidebar.style.position = "relative";
        sidebar.style.top = "auto";
    }
});
</script>';
}