<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Voies et branches"); ?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Les Voies et branches de Magie</h2></div>
        <p>
            La Magie a été pratiquée traditionnellement comme un art ancestral, raffinée pendant des siècles, des
            millénaires, par chaque race et chaque culture d'Alter. Elle est divisée en grandes "voies" en fonction du
            type d'effets et de la façon de la pratiquer. Ces voies sont elles-mêmes parfois subdivisées en "branches",
            qui sont des spécialisations d'une voie. <br>

            Le saàp est universel, donc en théorie chaque Alter disposant de réserves assez grandes et de suffisamment
            de persévérance pourrait apprendre n'importe quelle forme de Magie et en inventer de nouvelles. En pratique,
            chaque race et chaque individu a des prédispositions spécifiques. <br>
            De plus, l'influence culturelle est très forte : l'écrasante majorité des Alters apprend la même forme de
            Magie que ses parents ou tuteurs.
        </p>
        <div class="tab">
            <button class="tablinks" onclick="openTabs('P1')">Élémentalisme</button>
            <button class="tablinks" onclick="openTabs('P2')">Psychisme</button>
            <button class="tablinks" onclick="openTabs('P3')">Magie spatiale</button>
            <button class="tablinks" onclick="openTabs('P4')">Enchantement</button>
            <button class="tablinks" onclick="openTabs('P5')">Divination</button>
            <button class="tablinks" onclick="openTabs('P6')">Métamorphose</button>
            <button class="tablinks" onclick="openTabs('P7')">Créomancie</button>
            <button class="tablinks" onclick="openTabs('P8')">Combination</button>
            <button class="tablinks" onclick="openTabs('P9')">Anti-magie</button>
        </div>

        <div class="tabcontent" id="P1">
            <p class="general">
                L'élémentalisme est la capacité à contrôler et modifier la matière inerte, et même, à haut niveau, à la
                créer. La Voie porte ce nom car on apprend traditionnellement à contrôler un type de matière à la fois.
                Chaque élément est devenu une branche à part entière. <br>
                La télékinésie est une branche de l'élémentalisme qui n'est pas centrée sur un élément en particulier,
                mais sur la capacité à contrôler n'importe quel type de matière. À haut niveau, la télékinésie permet
                même de déplacer des êtres vivants, ce qui sort du domaine de l'élémentalisme classique.
            </p>
            <span class="byline">Branches</span>
            <p>
                Maîtrise du feu (pyrokinésie), de l'eau (hydrokinésie), de l'air (aérokinésie), de la terre
                (géokinésie), de la glace (cryokinésie), mais aussi du métal, des cendres, des cristaux, du sable...
                Beaucoup plus rare et difficile à maîtriser, on trouve l'élémentalisme de la foudre, de la lumière et
                des ténèbres. Ces deux derniers sont intimement liés, car il faut maîtriser la lumière pour créer de
                l'ombre.
            </p>
        </div>
        <div class="tabcontent" id="P2">
            <p class="general">
                Le psychisme est la Voie de la Magie de l'esprit. Elle s'utilise sur d'autres êtres conscients, rarement
                sur soi-même. Les différentes branches de la Voie sont très proches et s'apprennent presque de la même
                manière, il est donc fréquent que les personnes douées en magie psychique maîtrisent toutes les
                branches, contrairement à d'autres Voies.
                C'est aussi la Voie pour laquelle l'anti-Magie est la plus développée, notamment à cause des nombreuses
                utilisations délictueuses que l'on peut en faire, allant de tricher pendant un examen jusqu'à provoquer
                des suicides de masse.
            </p>
            <span class="byline">Branches</span>
            <p>
                La Télépathie à haut niveau permet de comprendre n'importe quelle langue, communiquer avec les animaux
                via des images et des émotions, et "discuter" à longue voire très longue distance avec plusieurs
                interlocuteurs en même temps. Elle permet également de fouiller les souvenirs d'une personne et même de
                modifier sa mémoire.
            </p>
        </div>
        <div class="tabcontent" id="P3">
            <p class="general">
                La Magie spatiale court-circuite la notion d'espace-temps, et demande des quantités de saàp extrêmement
                importantes. En théorie, il est impossible de la pratiquer sur Mezalando, mais pourtant les Alters ont
                trouvé des moyens d'en maîtriser des bribes. <br>
                La première possibilité est de limiter la cible à soi-même, et la portée à des distances très courtes :
                c'est le principe de la téléportation.<br>
                La seconde possibilité est de se lier avec un objet ou une créature en lui insufflant un peu de son
                propre saàp, pour ensuite pouvoir la téléporter vers nous à volonté, puis la faire revenir à sa position
                initiale. C'est l'invocation. <br>
                La téléportation demande de grandes réserves personnelles de saàp, et, à part les mutants, rares sont
                ceux capables de la maîtriser. L'invocation est par contre une Voie assez fréquente.
            </p>
            <span class="byline">Branches</span>
            <p>
                Téléportation, invocation d'objets, invocation de créatures vivantes. <br>
                Lorsque l'on invoque une créature vivante, il est très fortement conseillé d'avoir de bonnes bases en
                contrôle mental, pour le contrôler à l'arrivée. L'invocation de créature vivantes n'est pratiquée
                couramment que par les Loenn, dont c'est une spécialité.
            </p>
        </div>
        <div class="tabcontent" id="P4">
            <p class="general">
                L'enchantement consiste à donner des propriétés magiques à de la matière inerte. C'est une discipline
                très vaste dans les effets possibles et pratiquée par de nombreuses races et cultures. Sa séparation en
                branches dépend de la source de saàp utilisée pour donner à la cible ses capacités : saàp du créateur ou
                source extérieure. Sur le principe, l'enchantement n'est pas une discipline compliquée, mais il est
                extrêmement difficile d'obtenir l'effet désiré.
            </p>
            <span class="byline">Branches</span>
            <p>
                La maîtrise des potions, charmes et amulettes forme la branche principale de l'Enchantement et est
                communément appelée enchantement elle-même. C'est une branche qui utilise des ingrédients animaux ou
                végétaux comme source principale de saàp, parfois accompagnée d'ingrédients minéraux. <br>
                La création d'objets enchantés utilise des cristaux Maen comme source de saàp pour obtenir des effets
                permanents, et est soit considérée comme une branche à part entière, soit comme une extension de la
                précédente. <br>
                Enfin, l'animation est la branche qui consiste à insuffler directement le saàp du créateur dans un objet
                pour l'animer. Les objets animés n'ont pas de volonté propre, ils sont une extension de la volonté de
                leur créateur et bougent seulement sous ses ordres. Ils restent animés tant qu'ils n'ont pas consommé
                tout le saàp qu'on leur a insufflé, qu'on ne les trempe pas dans l'eau salée, ou qu'on ne les détruit
                pas.
            </p>
        </div>
        <div class="tabcontent" id="P5">
            <p class="general">
                La Divination n'est pas à proprement parler une Voie, mais plutôt un pouvoir : sans avoir le Don à la
                naissance, on ne peut pas apprendre la Voie peu importe ses efforts. <br>
                la divination tend à se manifester spontanément par des visions ou dans les rêves, mais on peut
                apprendre à provoquer et contrôler son don. De plus, il existe des techniques pour l'amplifier,
                notamment par la consommation de certains psychotropes et l'utilisation d'objets particuliers
                (ossements, cartes de tarot....) <br>
                Les Alters ayant un don pour la divination sont aussi doués de la capacité à voir l'invisible,
                communiquer avec les esprits des morts, et même pratiquer des exorcismes avec assez d'entraînement.
                Le Don est présent à divers degrés chez tous les Derwenn, et très rare chez les races non humaines. La
                divination est donc culturellement très associée aux Derwenn.
            </p>
            <span class="byline">Branches</span>
            <p>
                Il existe deux branches principales de divination, la clairvoyance et la communion. La clairvoyance est
                la divination au sens classique : précognition, rétrocognition et localisation d'objets ou de personnes.
                La communion comprend tout ce qui touche aux esprits : vision de l'invisible, communication avec les
                esprits et exorcisme. Il est courant de se spécialiser dans une branche tout en possédant de solides
                bases dans l'autre.
            </p>
        </div>
        <div class="tabcontent" id="P6">
            <p class="general">
                La métamorphose consiste à transformer tout ou partie de son corps en quelque chose d'autre : animal,
                autre personne, ou même objet. Il faut un très haut niveau de maîtrise de la métamorphose pour être
                capable de copier non seulement l'apparence, mais aussi les caractéristiques physiques de la cible,
                comme par exemple les capacités sensorielles exacerbées de certains animaux.
            </p>
            <span class="byline">Branches</span>
            <p>
                La polymorphie est l'art de modifier son apparence à volonté tout en restant sur une apparence générale
                humanoïde. Les plus doués et respectés des doubleurs sont appelés doppelgängers, et ils peuvent copier
                parfaitement l'apparence de n'importe qui. La transfiguration quant à elle consiste à maîtriser
                totalement la métamorphose en une cible le plus souvent animale, pouvoir se transformer partiellement ou
                totalement, et prendre les capacités physiques de ce dernier. Les Loenn sont bien entendus les plus
                doués dans cette branche. Une sous-branche minoritaire de la transfiguration est la capacité à se
                transformer partiellement en objet, le plus souvent transformer un bras en arme.
            </p>
        </div>
        <div class="tabcontent" id="P7">
            <p class="general">
                La créomancie, ou Voie de la Chaire, regroupe toutes les formes de magie qui influent directement sur le
                corps humain. C'est une Voie ancienne aux effets puissants mais temporaires. L'idée générale est de
                contrôler le flux de saàp dans son propre corps ou celui des personnes que l'on touche, pour le
                concentrer à des endroits précis en fonction de l'effet désiré. Concentrer le saàp dans les jambes
                permet de sauter plus haut, tandis que le concentrer dans les yeux augmente l'acuité visuelle de façon
                démesurée par exemple. <br>
                La créomancie est également la Voie privilégiée pour la magie de soin et la régénération.
            </p>
            <span class="byline">Branches</span>
            <p>
                La créomancie se dérive en branche de la guérison et branche de l'augmentation. La première regroupe le
                soin des blessures, des maladies, des poisons, et l'accélération de la régénération. La seconde permet
                d'outrepasser les limites de son corps, parfois de façon très impressionnante. Dans les deux cas, un
                versant entier de la branche consiste à non pas améliorer mais diminuer les capacités de la cible. Il
                est possible par exemple de rendre un adversaire temporairement aveugle et sourd, d'accélérer la
                diffusion d'un poison dans l'organisme, ou d'empêcher les plaies de se refermer pour provoquer une
                hémorragie.
            </p>
        </div>
        <div class="tabcontent" id="P8">
            <p class="general">
                Les Derwenn ont la particularité d'avoir des prédispositions pour toutes les Voies, plus ou moins fortes
                chez les individus. Ce sont donc eux les plus à même d'apprendre plusieurs branches et de les combiner
                entre elles. <br>
                Par exemple, en apprenant plusieurs branches d'élémentalisme, on peut les combiner pour contrôler la
                température ou les conditions météorologiques. En combinant l'invocation et l'enchantement on peut
                enchanter un objet pour lui donner la capacité à invoquer une créature, etc... <br>

                Les combinaisons sont rarement des combinaisons de plus de 2 voies différentes, tout simplement à cause
                du temps nécessaire pour maîtriser la Magie et de l'espérance de vie des Derwenn.


            </p>
        </div>
        <div class="tabcontent" id="P9">
            <p class="general">
                Il est possible de résister aux effets de la Magie ou d'annuler ses effets : bannir de force une
                invocation, dissiper une illusion, désenchanter un objet magique, etc... <br>
                Pour cela, il faut cependant maîtriser la Voie que l'on essaie de contrer à un haut niveau. L'anti-Magie
                n'est pas une voie en elle-même, mais une extension de chaque voie. <br>

                Les lunettes anti-illusions et les bracelets limiteurs sont des exemples d'objets enchantés créés
                spécialement pour des effets anti-Magie. <br>

                On n'est donc pas "par défaut" immunisé aux effets de sa propre magie sans un entraînement spécifique
                pour cela. C'est particulièrement important pour les élémentalistes: les pyrokinésistes ne sont pas
                ignifugés naturellement et doivent faire attention aux brûlures en s'entraînant, par exemple, jusqu'à
                maîtriser leur branche au point où ils peuvent annuler les effets de leur magie sur eux-mêmes.

            </p>
        </div>

        <br>
        <div class="title">
            <h2>Les Voies Orphelines</h2></div>
        <p>
            Il existe des Voies de magie dont l'existence est connue, mais qui sont mal étudiées et comprises car elles
            demandent trop de saàp, ou n'ont été maîtrisées que par une poignée de Mutants de dans l'Histoire, ou les
            connaissances de la Voie ont été perdues.
            Il s'agit des Voies orphelines.
        </p>
        <div class="tab">
            <button class="tablinks" onclick="openTabs('P10')">Animancie</button>
            <button class="tablinks" onclick="openTabs('P11')">Magie spatiale de haut niveau</button>
            <button class="tablinks" onclick="openTabs('P12')">Magie temporelle</button>
            <button class="tablinks" onclick="openTabs('P13')">Magie gravitationnelle</button>
            <button class="tablinks" onclick="openTabs('P14')">Magnétisme</button>
            <button class="tablinks" onclick="openTabs('P15')">Chance et probabilités</button>
        </div>

        <div class="tabcontent" id="P10">
            <p class="general">
                L'art de donner vie à l'inanimé. Contrairement aux objets enchantés, qui ne sont qu'une extension de la
                volonté de leur créateur, les créatures créées par animancie sont douées d'une volonté propre, et d'un
                intellect plus ou moins complexe. <br>
                Les Alfren étaient des maîtres en Animancie, ainsi que les Anciens d'Erentia, et on trouve encore des
                Golems Alfren actifs dans les mines de cristaux Maen, et des créatures gardiennes dans les ruines des
                anciens. <br>
                L'animancie contient aussi la résurrection (que les Valkyries pratiquent pour créer les Einherjärs), et
                la nécromancie. <br>
                Comme les Anciens et les Alfren ont disparu avec leurs connaissances, et que la Magie des Valkyries est
                inaccessible au commun des Alters, la Voie est considérée orpheline aujourd'hui.
            </p>
        </div>
        <div class="tabcontent" id="P11">
            <p class="general">
                On parle ici de se téléporter sur de longues distances, de passer d'un plan d'existence à l'autre, ou
                d'invoquer depuis d'autres dimensions. Cette Voie est la spécialité des Valkyries, et sur Mezalando ce
                sont les seules à pouvoir la pratiquer.
            </p>
        </div>
        <div class="tabcontent" id="P12">
            <p class="general">
                Seuls quelques mutants sont connus pour avoir eu des pouvoirs en rapport avec le contrôle du temps, et à
                un niveau très faible. Il semble que le temps soit encore plus difficile à manipuler que l'espace.
            </p>
        </div>
        <div class="tabcontent" id="P13">
            <p class="general">
                Un seul mutant est connu pour avoir eu un pouvoir maîtrisant la gravité autour de lui, et une poignée de
                mutants ont eu le pouvoir de maîtriser la gravité sur eux-mêmes et ce qu'ils touchaient, dont une mutante
                toujours vivante aujourd'hui qui vit sur Erentia.
            </p>
        </div>
        <div class="tabcontent" id="P14">
            <p class="general">
                La manipulation du magnétisme ou des ondes électromagnétiques est un pouvoir relativement fréquent chez
                les Mutants, par rapport aux autres voies orphelines citées précédemment. Cependant, comme chaque mutant
                a un pouvoir unique, il est difficile de tirer des généralités sur son fonctionnement, et aucune autre
                race n'a réussi à reproduire des effets de contrôle du magnétisme.
            </p>
        </div>
        <div class="tabcontent" id="P15">
            <p class="general">
                Il n'y a aucun mutant recensé comme ayant des pouvoirs directement liés au contrôle de la chance ou des
                probabilités. Cependant, il existe des Mutants avec des pouvoirs ayant des effets aléatoires, et dans la
                vieille magie démoniaque il existe des sorts pour "forcer le destin". La Voie existe donc sur le papier,
                même si on ne connaît personne qui la pratique aujourd'hui, tous mondes confondus.
            </p>
        </div>

        <br>
        <div class="title">
            <h2>Les grandes règles de la Magie</h2></div>
        <p>
            Bien que la Magie permette d'outrepasser les lois traditionnelles de l'univers, elle-même semble obéir à ses
            propres règles, et les Alters s'efforcent depuis longtemps de les comprendre. La classification actuelle de
            la Magie en Voies et Branches trouve ses origines au XVIIIème siècle, bien qu'elle ait été modifiée depuis.
            <br>

            Si une grande partie de la communauté savante étudiant la Magie se concentre sur l'étude d'une Voie ou d'une
            branche particulière, certains cherchent au contraire les grandes constantes et règles communes qui les
            relient toutes entre elles. De cette volonté d'unifier les voies est née une nouvelle classification, qui
            n'est réellement utilisée que dans le monde scientifique et les cas limites car la classification
            traditionnelle reste la seule utilisée dans la vie de tous les jours.
            Cette classification est celle en domaines et types d'actions.
        </p>
        <div class="title">
            <span class="byline">Les domaines d'action</span></div>
        <p>
            Il existe 5 domaines d'actions, en fonction de la cible de la Magie :
        </p>
        <ul>
            <li>
                L'inerte : tout ce qui est matériel est non vivant
            </li>
            <li>
                La Chair : la partie matérielle des êtres vivants (végétaux inclus malgré le nom)
            </li>
            <li>
                L'Esprit : tout ce qui touche au mental des êtres vivants, en général les Alters et Nerics
            </li>
            <li>
                La Magie : lorsque la cible de la Magie est une autre Magie, par exemple dans le cas de l'anti-Magie
            </li>
            <li>
                L'Univers : la Magie qui influe directement sur les lois de l'univers elles-mêmes
            </li>
        </ul>
        <p>
            L'ordre donné est celui du "plus simple" au "plus complexe" : la Magie du domaine de l'Inerte est celle qui
            demande le moins de saàp à effet (type d'action) équivalent, tandis que la Magie de l'Univers est la plus
            difficile à pratiquer.
        </p>
        <div class="title">
            <span class="byline">Les types d'action</span></div>
        <p>
            Il existe 5 types d'actions, elles aussi classées par ordre de difficulté : ressentir, contrôler,
            lier/combiner (exemple dans la création de potions, d'objets animés...), modifier et créer. <br>
            Il est facile de relier les voies traditionnelles à un domaine, et de comprendre, selon cette
            classification, pourquoi un élémentaliste expérimenté peut créer son élément à partir de rien alors que
            créer de nouveaux souvenirs pour un spécialiste du contrôle mental est très compliqué.
        </p>
        <div class="title">
            <span class="byline">La portée, la durée et la quantité</span></div>
        <p>
            En plus du domaine et du type d'action, la "difficulté" à créer un effet magique dépend de la portée, de la
            durée de l'effet et/ou de la quantité. <br>
            Si le concept est connu depuis la nuit des temps et que chaque Alter l'a déjà expérimenté personnellement,
            il est assez difficile de le formaliser précisément, en particulier les interactions complexes entre les 3.
        </p>
        <div class="title">
            <span class="byline">Les conditions et les pénalités</span></div>
        <p>
            Dans la pratique traditionnelle de la Magie, plus on recherche un effet puissant, plus le rituel nécessaire
            pour l'obtenir devient compliqué, qu'il s'agisse d'une incantation orale, d'une chorégraphie, d'ingrédients
            multiples et complexes à obtenir ou encore de dates et conditions météorologiques à réunir. <br>
            Pour les mutants, on retrouve un peu la même tendance : plus leurs pouvoirs sont puissants, plus ils ont de
            pénalités ou de conditions à remplir pour les utiliser, et, en général, plus leurs handicaps sont lourds.
            Les scientifiques ont déterminé que ces deux observations étaient en fait liées à un même phénomène, dit
            "phénomène de focus" : plus on s'impose de contraintes pour utiliser la Magie, mieux on peut focaliser notre
            Saàp pour obtenir des effets puissants.
        </p>
        <div class="title">
            <span class="byline">La pratique traditionnelle et l'individualité</span></div>
        <p>
            La pratique traditionnelle de la Magie est codifiée, et ces codes sont un savoir qui se transmet d'un Alter
            aux autres, que ça soit par apprentissage direct, écriture de livres ou transmission orale. <br>
            Cette pratique codifiée correspond à une "recette" qui marche pour le plus grand nombre, mais elle n'est pas
            "optimale" pour chaque individu. <br>
            Tout Alter doit donc pratiquer de façon intensive chaque nouveau sort, potion ou charme qu'il apprend, afin
            de l'adapter légèrement pour lui-même et d'en tirer le meilleur parti. <br>
            Ces petites différences entre chaque Alter sont appelées "l'individualité", et elles sont partiellement
            génétiques. C'est la raison pour laquelle un enfant Alter qui apprend la Magie auprès de ses parents apprend
            souvent plus vite que dans une classe avec un professeur.
        </p>

    </div>
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
