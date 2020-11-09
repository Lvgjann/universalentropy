<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Langues et noms"); ?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <span class="byline">Langue et noms</span></div>
        <p>
            Erentia est une île proche de la nouvelle-Zélande. Historiquement, on y parle français, mais la population
            parle en général très bien anglais. Les noms de rue, de bâtiments publiques, et d’organisations publiques
            sont en français. Les noms des entreprises, organisations et bâtiments privés peuvent être indifféremment en
            français et en anglais. <br>
            Les lieux et organisations prévus spécifiquement pour une race reprennent des noms aux mêmes consonances que
            la race en question. <br>
        </p><p>
            Pour les noms de personnes, races par race (incluant les races non jouables) : <br>
            <b>Humains, Mutants et Derwenn</b> :  toute consonance de culture humaine contemporaine <br>
            <b>Démons</b> : culturellement, consonance plutôt grecque antique ou hébraïque, mais beaucoup ont aussi pris des
            noms humains pour s’intégrer <br>
            <b>Anges</b> : noms issus du bas latin ou du latin classique <br>
            <b>Archanges</b> : noms issus des textes des religions Abrahamiques (judaïsme, chrisitiannisme, islam) <br>
            <b>Valkyries</b> : noms issus du vieux norrois, ou de langues scandinaves modernes <br>
            <b>Einherjärs</b> : ils ont des noms humains, mais beaucoup ont changé de nom à leur résurrection pour prendre des
            noms aux mêmes consonances que les Valkyries <br>
            <b>Loenn</b> : noms courts, le plus souvent 1 ou 2 syllabes. Ils vivent mêlés aux humains et adoptent les mêmes
            conventions et consonances pour les noms que les humains de la même origine géographique. <br>
            <b>Alfren</b> : noms de famille rappelant la nature, et des prénoms composés. Les consonances rappellent les
            langues celtiques. Les Alfren historiques sont plus souvent nommés dans les textes par un titre ou un surnom
            (exemple : “Feur-Louarn Le-Perspicace Koadeg” sera le plus souvent nommé “Louarn le Perspicace”)
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
