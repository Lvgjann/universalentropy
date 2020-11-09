<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Invocations"); ?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Invocations</h2></div>
        <p>
            L’invocation consiste à téléporter un objet ou un animal déjà existant quelque part sur Mezalando à
            l’endroit où on se situe actuellement. <br>
            Lorsqu’il s’agit d’un animal, mieux vaut avoir de bonnes bases de contrôle mental pour le contrôler à
            l’arrivée, car, même si c’est un animal dressé, il est en général apeuré et désorienté après la
            téléportation (et souvent un peu malade). <br>
            Une invocation reste “sur place” tant que l’on ne l’a pas renvoyée d’où elle vient, il faut donc deux
            utilisations de Magie pour faire de l’invocation, une pour l’aller et une pour le retour.
        </p>
        <p>
            Il existe des artefacts magiques qui contiennent des sorts de téléportation et qui fonctionnent comme suit :
        </p>
        <ul>
            <li>
                L’objet à transporter est enchanté, ce qui le transforme en artefact
            </li>
            <li>
                Un second artefact, souvent un bracelet ou une bague, à mettre sur soi (balise “aller”)
            </li>
            <li>
                Un troisième artefact à placer à l’endroit de stockage de l’objet quand on ne l’utilise pas (balise
                “retour”)
            </li>
        </ul>
        <p>
            Une courte invocation (en général un seul mot) permet de faire passer l’objet de la balise “aller” à la
            “retour” et inversement, et doit être prononcée à proximité de la balise “aller”.
        </p>
        <p>
            Ces artefacts sont extrêmement chers, on parle du coût d’une voiture environ. Il est possible de ne pas
            avoir de second artefact mais d’être lié directement par l’enchanteur à l’objet (on devient soi-même la
            balise “aller”) ce qui permet que l’invocation ne soit possible que par soi-même. Ils ont l’avantage d’avoir
            une limite de portée extrêmement élevée entre la balise “aller” et celle de “retour” (plusieurs centaines de
            km).
        </p>
        <p>
            Il existe également une version plus rudimentaire de ces artefacts, les artefacts de “retour automatique”,
            qui consistent en un tout petit artefact à fixer à l’objet que l’on veut invoquer, et une balise aller sans
            balise retour. <br>
            Cette version, qui n’a que deux artefacts et ne demande pas de rendez-vous avec un enchanteur, est beaucoup
            moins chère, mais ne permet que de récupérer sur soi un objet, pas de le renvoyer, et la portée est moins
            longue (quelques km au maximum, pour le prix d’un smartphone d’entrée de gamme).
        </p>
        <div class="title">
            <h2>Animations</h2></div>
        <p>
            L’animation consiste à insuffler directement le saàp du créateur dans un objet pour l’animer. Les objets
            animés n’ont pas de volonté propre, ils sont une extension de la volonté de leur créateur et bougent
            seulement sous ses ordres.
        </p><p>
            Tout objet animé a un cœur qui est l’objet qu’on a enchanté au départ. Lorsqu’on crée un objet animé de
            grande taille ou fragile, on n’enchante en effet pas tout l’objet, mais seulement une petite partie, et le
            sort d’enchantement s’étendra au reste de l’objet pour le contrôler.
        </p><p>
            Un objet animé reste animé tant qu’il n’a pas consommé le saàp qu’on lui avait donné au départ, ou qu’on n’a
            pas détruit son cœur, ou qu’on n’a pas trempé cet objet dans l’eau salée.
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_mezalando_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../../js/general_script.js"></script>
</body>
</html>
