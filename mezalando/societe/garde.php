<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Garde et police"); ?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <span class="byline">Garde et police</span></div>
        <p>
            Les forces de l’ordre sont composées de deux entités séparées mais travaillant ensemble : la garde royale,
            en uniforme bleu roi et or et la police, en civil ou en uniforme noir et blanc.
        </p>
        <p>
            La garde royale est chargée du maintien de l’ordre et de la prévention. Elle patrouille, surveille, protège
            les lieux ou les personnes stratégiques et se charge des petits délits et problèmes du quotidien. Pour une
            voiture mal garée, du tapage nocturne ou du vol à l’étalage dans une épicerie, c’est la garde royale qu’on
            appelle en premier lieu, car il y a toujours une patrouille ou une caserne proche.
        </p>
        <p>
            Les secouristes et gardes de tous les milieux naturels de l'île (eau douce, côtes, montagne, forêt, plaine)
            sont des organismes particuliers rattachés à la garde Royale. Ils reçoivent une formation spécialisée en
            plus de la formation de garde, et leurs uniformes sont différents de ceux des gardes classiques. Les
            garde-côtes ont un uniforme bleu clair et blanc, celui des secouristes est orange, les autres sont dans des
            tons de brun, kaki et vert. <br>
            Dans les zones rurales, côtières et montagneuses, ce sont en général les seuls représentants des forces de
            l'ordre qu'on croise régulièrement.
        </p>
        <p>
            Enfin, les sapeurs-pompiers, en uniforme rouge et blanc, sont également un organisme de la garde. Cependant,
            leur formation se sépare des autres gardes très tôt et ils ont des grades et des dirigeants différents. En
            pratique, ils forment un organe pratiquement autonome de la garde.
        </p>
        <p>
            La police elle, est chargée de la résolution des crimes. Son travail principal est d’enquêter, de
            rechercher, d’appréhender et d’interroger les suspects. Souvent les scènes de crimes sont signalées par la
            garde royale.
        </p>
        <p>
            La police est bien inférieure en nombre à la garde royale, et moins entraînée pour les situations
            dangereuses. Sur les grosses affaires et les appréhensions de suspects qui risquent de dégénérer, comme par
            exemple dans le cas d’une prise d’otages, il est rare de ne pas voir de membres de la garde royale en
            renfort.
        </p>
        <p>
            Les policiers et les gardes commencent leur formation ensemble avant d’être répartis entre les deux forces.
            Bien que la vision soit très simpliste, il n’est pas complètement faux de dire que les recrues qui sont les
            plus fortes vont dans la garde alors que les plus intelligentes vont dans la police.
        </p>
        <p>
            La formation des policiers et des gardes est proche de celle des militaires, avec une part beaucoup plus
            importante dédiée à la connaissance de la législation d’Erentia. <br>
            Les gardes royaux vivent dans des casernes et ont une hiérarchie assez militaire, bien que les grades aient
            d’autres noms. Dans les grandes villes, chaque quartier a sa caserne de gardes royaux. Il existe une
            caserne-mère par district qui abrite des unités spécialisées dans un type d’intervention et peuvent être
            envoyés dans tout le district, voire en renfort dans un district voisin.
        </p>
        <p>
            Les policiers travaillent dans des commissariats mais dorment dans leurs propres logements (pour ceux qui
            dorment, car les policiers sont connus pour ne pas avoir ce luxe très souvent). Chaque district a un ou
            plusieurs commissariats (selon le nombre d'habitants) qui sont organisés en services en fonction du type de
            crime ou de délit commit, les différents experts de la police étant des services à part.
        </p>
        <p>
            Bien que dans l’opinion publique les policiers aient un statut supérieur aux gardes, dans la réalité il n’y
            a pas de hiérarchie entre la police et la garde. L’entente entre les deux est en général plutôt cordiale,
            même s'il peut y avoir des rivalités entre différentes personnes ou unités dans certains quartiers.
        </p>
        <p>
            Il faut noter que la ville d’Icnoyalt ne compte ni commissariat ni caserne, et que ni les policiers ni les
            gardes ne veulent risquer d’y mettre un pied.
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
