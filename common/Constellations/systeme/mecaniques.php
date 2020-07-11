<?php include '../../decide-lang.php';
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Mécaniques</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link href="../../../css/style_const.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<?php set_menu(1); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Mécaniques de jeu</h2>
            <span class="byline">Caractéristiques</span></div>
        <p>
            Les caractéristiques sont des constantes déterminées par le joueur sur [2-7] (ou 1 + 1d6 + modificateurs
            âge/race)
        </p>
        <ul>
            <li>
                <b>Physique</b> : Représente la forme physique du personnage, sa force, son endurance, sa constitution,
                sa vitesse…
                C'est aussi la valeur de combat au corps-à-corps de base du personnage, et la valeur qui détermine son
                nombre de points de vie.
            </li>
            <li>
                <b>Dextérité</b> : Représente l'agilité, la minutie et la dextérité du personnage, sa capacité à réussir
                des
                travaux de précision et ses réflexes. C'est la valeur de combat à distance de base du personnage.
            </li>
            <li>
                <b>Intellect</b> : L'intellect est la somme des connaissances du personnage, mais aussi ses facultés de
                raisonnement, de compréhension et de mémorisation. C'est aussi l'intellect qui représente la capacité de
                discernement du personnage, son esprit critique et sa volonté. 
            </li>
            <li>
                <b>Sagacité</b> : La sagacité représente la vivacité d'esprit du personnage, son astuce, mais aussi son
                charisme,
                ses capacités à diriger et à bien parler en public, sa créativité et ses capacités d'observation.
            </li>
            <li>
                <b>Magie</b> : La Magie est l'affinité avec la Magie du personnage, c'est-à-dire sa capacité à manipuler
                le saàp,
                apprendre des sorts et réaliser des Magies complexes. C'est aussi cette valeur qui détermine la réserve
                de
                saàp de base du personnage.
            </li>
        </ul>
        <div class="title">
            <span class="byline">Connaissances, compétences et maîtrises</span></div>
        <p>
            20 points (SP) à répartir, Novice coûte 1, avancé coûte 3, maîtrise coûte 3 <br>
            Si -15 ans, 15 points au lieu de 20 <br>
            Si +25 ans, bonus de 3 par tranche de 5 ans <br>
            Si +40 ans, malus de Physique (-1) <br>
            Si +60 ans, malus (-1) sur toutes les caractéristiques , donc physique passe à -2 au total <br>
            Il y a des modificateurs liés à la race <br>
        </p>
        <p>
            <b>Connaissances</b> : Sur un jet d’intellect. Si le personnage possède la connaissance, il bénéficiera d’un
            bonus
            à son jet d’intellect. S’il ne l’a pas, il fera un jet de bluff. Une connaissance novice (basique) rajoute
            +1 dé, une connaissance avancée rajoute 2 dés et les échecs critiques deviennent des échecs normaux.
        </p>
        <p>
            <b>Compétences</b> : Sur un jet normal ou un péril de force, dextérité, intellect ou sagacité. Si le
            personnage
            possède la compétence, il a des bonus. Sinon, il utilise simplement la valeur de sa caractéristique. 
            Une compétence novice (basique) rajoute +1 dé, une compétence avancée rajoute 2 dés et les échecs critiques
            deviennent des échecs normaux.
        </p>
        <p>
            <b>Maîtrises</b> : Permet de débloquer l’utilisation de véhicules, d’armes, ou d’objets complexes. Ne
            s’applique
            pas  forcément sur un jet (compétence passive), sauf en cas d’utilisation “complexe” (ex, pour la conduite,
            il faudra faire un jet pour réussir une course-poursuite en voiture même si on a la maîtrise
            correspondante).
        </p>
        <p>
            <b>Choisir un métier</b> : Choisir un métier coûte 6 points à la création du personnage et ne peut pas être
            modifié
            par la suite. Cependant, cela permet d’obtenir des compétences, connaissances et maîtrises spécifiques au
            métier gratuitement, données par le MJ

        </p>
        <div class="title">
            <h2>Jets de dés</h2>
            <span class="byline">Jets classiques</span></div>
        <p>
            Le MJ annonce un niveau de difficulté sur une caractéristique.
            Le joueur lance autant de d6 que de points qu’il possède dans sa caractéristique (+ éventuels bonus de
            compétences). <br>
            Les [4-6] sont des réussites et les [6] explosent (le joueur relance les dés, application récursive). <br>
            Le jet est réussi si le joueur fait un nombre de réussites supérieur ou égal à la difficulté donnée. <br>
            S’il ne fait aucune réussite, c’est un échec critique. <br>
            Si un [6] explose sur un [6], c’est une réussite critique.
        </p>
        <div class="title">
            <span class="byline">Périls</span></div>
        <p>
            Le MJ annonce les valeurs de d6 à matcher sur une caractéristiques.
            Le joueur lance autant de d6 que de points qu’il possède dans sa caractéristique (+ éventuels bonus de
            compétences). <br>
            Si le joueur fait correspondre les valeurs de son jet aux valeurs données par le MJ, c’est une réussite.
            S’il ne fait aucun match, c’est un échec critique. <br>
            Il n’y a pas de réussite critique. <br>
            Chaque allié présent (joueur ou PNJ) peut décider aider le joueur qui affronte le péril à hauteur d’un dé
            supplémentaire par joueur.
        </p>
        <div class="title">
            <h2>Points de vue et Saàp</h2></div>
        <p>
            Par défaut, la jauge de PV est égale à la caractéristique de Physique, et la jauge de Saàp à la
            caractéristique de Magie. <br>
            Les PVs sont rares et chers, on les perd en faisant des échecs critiques sur des périls, ou en combat. <br>

            On peut en gagner en se reposant (un par nuit de sommeil), avec des sorts de soins, ou en se faisant
            soigner. <br>
            Les points de Saàp sont la jauge de Mana du jeu. On les consomme en lançant des sorts, en fonction de la
            complexité et de la puissance du sort (en général de 1 à 3). <br>

            On en regagne un par heure (on considère qu’une nuit de sommeil les régénère entièrement). <br>

            Tomber à 0 en Saàp n’est pas grave, mis à part qu’on ne peut plus faire de Magie. Par contre, on ne peut pas
            aller en négatif. <br>

            Tomber à 0 PV met le joueur instantanément KO, et on peut passer dans les négatifs. <br>

            Entre - [PV max du personnage ] et 0, le personnage est encore en vie, mais dans un état critique. Il mourra
            s’il ne reçoit pas de soins intensifs (hôpital ou mage de soin professionnel) dans l’heure qui suit. <br>
            Si un personnage tombe en-dessous de - [ Nb de PV max], en une fois ou au cours d’un combat, il meurt
            directement. <br>
        </p>
        <div class="title">
            <h2>Combat</h2></div>
        <p>
            Il y a 3 possibilités pour le combat : au corps-à-corps, à distance, et Magique. <br>
            Toutes les descriptions sont faites comme si le personnage joueur était l’attaquant, et l’ennemi le
            défenseur, mais fonctionnent à l’inverse (joueur défenseur et ennemi attaquant).
        </p>
        <div class="title">
            <span class="byline">Au corps-à-corps</span></div>
        <p>
            Le joueur engage un (ou plusieurs) ennemis au corps-à-corps. <br>
            Il lance autant de dés que sa caractéristique physique, plus le bonus de compétence s’il en a un. 
            Les 4 comptent comme des attaques, les 6 comptent comme des attaques et explosent, les 3 comptent comme des
            défenses. <br>
            Il ajoute de plus les éventuels bonus d’attaque et de défense donnés par ses équipements.
        </p>
        <p>
            Chaque ennemi peut décider de contre-attaquer ou d’essayer de s’enfuir. <br>
            S’il essaie de contre-attaquer, il fait le même jet que le joueur (physique + compétence + bonus
            d’équipement).
            On fait le compte des attaques et défenses totales, chaque dé “défense” annule un dé “attaque”, les attaques
            restantes à la fin sont les PVs perdus par chaque participant au combat. <br>

            S’il essaie de s’enfuir, il fait un jet de dextérité (+ compétence évasion). Toutes ses attaques (y compris
            les 6 qui explosent) comptent comme des défenses, et on rajoute les défenses de ses équipements de
            protection. <br>

            S’il a plus de défenses que le joueur n’a d’attaque, il réussit à s’échapper et est considéré comme hors de
            portée d’attaque au corps-à-corps au tour suivant. Dans le cas contraire, il prend les dégâts des attaques
            non bloquées, et reste à portée pour le tour suivant. 
        </p>
        <div class="title">
            <span class="byline">À distance</span></div>
        <p>
            Pour engager le combat à distance, il faut obligatoirement posséder une arme à distance (ou une arme
            improvisée à distance, en gros un truc à lancer qui fait mal quand il atterrit) ET être hors de portée
            corps-à-corps. <br>

            Le joueur ne peut attaquer à distance qu’un ennemi à la fois, sauf s’il possède une arme qui précise le
            contraire. Il lance autant de dés que sa caractéristique de dextérité, les 4 comptent comme des attaques,
            les 6 comptent comme des attaques et explosent. Il n’y a pas de défense. On rajoute les bonus éventuels de
            l’arme aux dégâts. <br>

            L’ennemi attaqué peut contre-attaquer (même jet que le joueur) s’il possède lui-même une arme à distance, ou
            il peut essayer d’esquiver. L’esquive se déroule comme pour la tentative de fuite au corps-à-corps : jet de
            dextérité + compétence évasion, les attaques comptent pour des défenses et on rajoute les équipements de
            défense. La seule différence est que, même si l’esquive réussit, l’ennemi est toujours considéré comme étant
            à portée de tir du joueur. 
        </p>
        <div class="title">
            <span class="byline">Magie</span></div>
        <p>
            Lorsque l’on parle de combat Magique, il s’agit plutôt d’utilisation de la Magie pendant un combat. Lancer
            un sort prend le tour de combat complet (action principale + complémentaire)  et est fait sur un jet de
            Magie comme un jet classique, que ça soit pour lancer une boule de feu, tenter de prendre le contrôle d’un
            ennemi, créer un compagnon animé par Magie, se métamorphoser, ou soigner un allié. <br>

            La seule exception est pour l’utilisation de potion, de charmes ou d’objets magiques déjà possédés, qui ne
            prend qu’une action complémentaire.
        </p>
        <div class="title">
            <span class="byline">Déroulement d'un combat et initiative</span></div>
        <p>
            Au début du combat, on écrit sur une carte blanche ou des bouts de cartons/papiers le nom de chaque
            personnage/PNJ/ennemi participant au combat, on les mélange face cachée, puis on les tire une par une pour
            les placer sur une file (“piste d’initiative”) du haut vers le bas. <br>

            Si un personnage a plusieurs actions par tour (un boss, typiquement), on met dans la piste autant de cartes
            qu’il a d’action. De même, si un nouveau personnage quitte ou arrive dans le combat durant le combat, on
            rajoute ou enlève sa carte de façon appropriée.
        </p>
        <p>
            On résout l’ordre des tours dans l’ordre, du haut vers le bas, si rien n’est venu modifier cet ordre
            (embuscade, pouvoir, compétence…). <br>
            Un tour de combat correspond à un cycle de piste d’initiative complet, c’est-à-dire que tous les personnages
            jouent au moins une fois. <br>
            Il est conseillé de jouer avec des pions représentants les joueurs et les ennemis, sur une carte
            représentant le champs de bataille, autant que c’est possible, pour mieux visualiser les placements et
            lignes de vues/tir existantes. <br>

            Lorsque c’est son tour de jouer, chaque personnage (allié ou ennemi) dispose d’une action complémentaire et
            d’une action principale. Certaines actions peuvent prendre le tour complet, notamment l’utilisation de la
            Magie. <br>
        </p>
        <p>
            Actions complémentaires : 
        </p>
        <ul>
            <li>
                Sortir son arme (si elle n’est pas déjà dégainée)
            </li>
            <li>
                Se déplacer sur une courte distance (2-3m)
            </li>
            <li>
                Utiliser un charme ou une potion
            </li>
            <li>
                Activer un artefact
            </li>
            <li>
                etc.
            </li>
        </ul>
        <p>
            Actions principales :
        </p>
        <ul>
            <li>
                Attaquer (au corps à corps ou à distance)
            </li>
            <li>
                Essayer de déséquilibrer, entraver ou désarmer un ennemi (au corps-à-corps)
            </li>
            <li>
                Se déplacer sur une distance > 3m
            </li>
            <li>
                Recharger son arme
            </li>
            <li>
                etc.
            </li>
        </ul>
        <p>
            Actions qui prennent le tour entier : 
        </p>
        <ul>
            <li>
                Toutes les utilisations de la Magie
            </li>
            <li>
                Premiers secours sur allié
            </li>
            <li>
                Menotter ou ligoter un ennemi
            </li>
            <li>
                etc.
            </li>
        </ul>
        <p>
            La liste est non-exhaustive, c’est au MJ de voir au cas par cas. <br>

            Pour information, les actions complémentaires sont censées prendre 1 seconde ou moins, les actions
            principales entre 1 et 4 secondes, tout ce qui est plus long prend le tour entier, voire plusieurs tours si
            c’est très long (10 secondes ou plus). 
        </p>
        <div class="title">
            <span class="byline">Embuscade</span></div>
        <p>
            Une embuscade peut arriver seulement au début d’un combat, pour le premier tour. On doit annoncer
            l’embuscade à l’avance. <br>

            Si ce sont les personnages joueurs qui veulent embusquer les ennemis, ils doivent réussir chacun un jet de
            discrétion. Tous les personnages joueurs qui réussissent passent en début de piste d’initiative, en
            respectant leur ordre relatif. <br>

            Exemple : La piste d’initiative donne l’ordre E1 -> J1 -> J2 -> E2 -> E3 -> J3 (E= ennemi, J= joueur) <br>
            J1 et J3 réussissent leur jet de discrétion mais pas J2 <br>
            La piste devient : J1 -> J3 -> E1 -> J2 -> E2 -> E3 <br>

            Au contraire, s’ils se font embusquer, chaque personnage doit subir un jet de vigilance. Ceux qui ratent
            leur jet passent à la fin de la piste d’initiative, toujours en respectant leur ordre relatif entre eux. 
        </p>
        <div class="title">
            <span class="byline">À terre, entravé, désarmé</span></div>
        <p>
            Durant les combats, les personnages peuvent se retrouver à terre, entravés ou désarmés. <br>
            Lorsqu’un personnage est à terre, il prend tout son tour à se relever. <br>
            Lorsqu’un personnage est entravé, il doit réussir un jet d’évasion pour réussir à se débarrasser de ses
            entraves. Chaque jet d’évasion prend un tour complet, et tant que le joueur est entravé il ne peut plus se
            déplacer ni attaquer. <br>
            Lorsqu’un personnage est désarmé, il doit jouer sans son arme, ou prendre un tour pour la récupérer. <br>
            Il existe d’autres états encore, qui ont des effets très explicites : apeuré (le personnage essaie de fuir
            le combat à tous les tours avec un jet d’évasion), charmé (le personnage passe temporairement dans le camps
            de celui qui l’a charmé), KO (le personnage ne peut plus du tout attaquer) etc, etc...
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
<script type="application/javascript" target="_parent" src="../../../js/general_script.js"></script>
</body>
</html>
