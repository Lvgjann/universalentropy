<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "cos", "Thunder Road");?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Thunder Road</h2>
            <span class="byline">Plot</span></div>
        <p class="general"><span style="font-style: italic;">
            The Apocalypse has decimated more than 90% of the population, there are less than 300 million people
            scattered all over the planet. The Earth is  unrecognizable after the drying up of the oceans, so that
            almost all of its surface is uninhabitable because too far from a water point or because the ozone layer
            has been completely destroyed. <br> Although groups formed to try to find a normal life, wars quickly broke
            out for the monopoly of essential resources: water and oil. Each megalopolis is a fortress run by its own
            tyrant. We do not know the alliances between each leader, nor how far they can extend. The reign is in
            mystery and terror.<br>
        </span></p>
        <div class="title">
            <h2>Game System</h2>
            <span class="byline">Classes</span></div>
        <p class="general">
            Each player creates his character based on the five classes avaiable below.
        </p>
        <h4>Soldier</h4>
        <p class="general">
            The Soldier is a military expert, specializing in firearms and command. Charismatic leader, it is often him
            that civilians follow during riots or evacuations. He is accustomed to all terrains, urban as deserts, and
            has a strong capacity of adaptation. Unfortunately, the number of soldiers on the planet has dropped
            dramatically, and the training of new recruits is very versatile and sometimes too crude to let them
            specialize.
        </p>
        <h4>Scout</h4>
        <p class="general">
            As its name suggests, the Scout is more of a character working alone or as independently as possible. He
            excels in the field of camouflage, tracking and sabotage. Often less socially interactive, the scout is
            discreet when he is in a group, but its effectiveness is no less breathtaking in the field. It is not
            surprising to lose track for days before seeing it reappear.
        </p>
        <h4>Medic</h4>
        <p class="general">
            Unlike the Mercenary and the Scout, the Doctor is a regular user and is very empathetic. He will know with
            three times to concoct the minimum remedies necessary to put anyone back on their feet. Despite his urban
            environment, he has a good knowledge of nature, by profession, but is very dependent on the field.
        </p>
        <h4>Scrap dealer</h4>
        <p class="general">
            We may not realize it, but the Scrap dealer plays a key role in this new company. He can do anything,
            whatever he finds, whatever his condition. He has a gift for manufacturing and repair, all in an inhumanly
            short time. Like the Doctor, the Scrap dealer is weaker in an unknown environment, but once the materials in
            hand, he will build a camp for the night or a fort in case of storm.
        </p>
        <h4>Mercenary</h4>
        <p class="general">
            The Mercenary is a kind of upgraded Scout. He does not depend on anyone and has always made his way alone or
            with other vagabonds, far from the megalopolises. He has a very advanced learning ability: he can assimilate
            the handling of a weapon, its manufacture, or study a field in a short time. However, gis main weakness
            remains the most populated territories, in which he will be more difficult to hide. His violent and
            impulsive character at the sight of other humans makes him very aggressive in urban areas.
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_dante_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>

<script type="application/javascript" src="../../js/general_script.js"></script>
</body>
</html>
