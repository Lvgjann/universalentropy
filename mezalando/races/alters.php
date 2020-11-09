<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Les Alters"); ?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>La société des Alters</h2></div>
        <p>
            Quand on parle des "Alters", on fait en général référence à seulement un sous-ensemble des races existantes,
            celles qui vivent dans les Refuges et/ou parmi les humains.
            En pratique, ces races constituent la plus grande majorité des Alters vivants, ce qui explique le
            raccourcis. <br>
            Le nom des races est donné au pluriel, le singulier est entre parenthèses à la suite.
        </p>
        <div class="tab">
            <button class="tablinks" onclick="openTabs('P1')">Mutants</button>
            <button class="tablinks" onclick="openTabs('P2')">Derwenn</button>
            <button class="tablinks" onclick="openTabs('P3')">Loenn</button>
            <button class="tablinks" onclick="openTabs('P4')">Mirien</button>
            <button class="tablinks" onclick="openTabs('P5')">Alfren</button>
            <button class="tablinks" onclick="openTabs('P6')">Démons</button>
            <button class="tablinks" onclick="openTabs('P7')">Anges</button>
            <button class="tablinks" onclick="openTabs('P8')">Esprits</button>
            <button class="tablinks" onclick="openTabs('P9')">Einherjär</button>
            <button class="tablinks" onclick="openTabs('P10')">Gardwen</button>
            <button class="tablinks" onclick="openTabs('P11')">Maestri</button>
        </div>

        <div class="tabcontent" id="P1">
            <h2>Mutants</h2>
            <p class="general">
                Ce sont des humains possédant une mutation leur donnant un réserve personnelle de saàp immense, qui
                s'exprime sous forme de "pouvoirs" uniques pour chaque individu, et parfois très puissants. Cependant,
                ces pouvoirs sont accompagnés d'une grande faiblesse physique, et très souvent de handicaps et maladies
                plus ou moins graves. <br> Les Mutants, autrefois très rares, semblent devenir de plus en plus fréquents
                avec
                les années. Ce sont les seuls Alters qui ne sont pas pourchassés par les Witch Hunters, mais recherchés
                pour rejoindre leurs rangs : les WH les considèrent en effet comme les sauveurs de l'Humanité.
            </p>
        </div>
        <div class="tabcontent" id="P2">
            <h2>Derwenn</h2>
            <p class="general">
                De très loin la race d'Alter la plus nombreuse, ce sont les premiers humains à avoir maîtrisé la Magie.
                Il en existe de très nombreuses lignées sur Mezalando, avec des noms, des traditions et des pratiques de
                Magie très différentes. Il existe des sorciers et des chamanes partout dans le monde avec différentes
                variantes régionales, et aussi des lignées plus spécifiques à une région géographique comme les druides
                ou les omnyôjis. <br>
                Les Derwenn sont les Alters qui ont le plus de facilités pour apprendre n'importe quelle voie, mais ils
                ont une affinité particulière pour l'enchantement. De plus, le don pour la divination est systématique
                chez les Derwenn, ce qui est une de leurs caractéristiques principales.
            </p>
        </div>
        <div class="tabcontent" id="P3">
            <h2>Loenn</h2>
            <p class="general">
                Les Loenn sont des Alters liés à un animal-totem, dont ils ont partiellement l'apparence. Ils peuvent
                comprendre et communiquer avec tous les animaux. Particulièrement versés dans la métamorphose, ils
                peuvent prendre une apparence totalement animale ou humaine à volonté. Ils ont aussi des prédispositions
                pour l'invocation d'animaux et leur contrôle. Ils ont donné naissance aux mythes des loups-garous, des
                Kitsune, et un grand nombre d'autres créatures légendaires métamorphes.
            </p>
        </div>
        <div class="tabcontent" id="P4">
            <h2>Mirien</h2>
            <p class="general">
                Les Mirien sont des Alters humanoïdes de grande taille et de forte carrure. Leur peau est épaisse et
                dure comme du cuir tanné, rouge, verte, brune ou bleue selon les ethnies (les Mirien orientaux ont la
                peau rouge et sont nommés "Onis" dans le folklore japonais). Ils ont des canines inférieures très
                développées, qui dépasse de leur bouche comme de petites défenses. <br>
                Leur société se base sur l'apprentissage auprès d'un maître, la transmission orale du savoir, le respect
                de la puissance et la recherche de la parfaite maîtrise de soi. Tous les Mirien sans exception sont
                entraînés au combat, la plupart sont des combattants exceptionnels, mais presque aucun ne fera étalage
                de sa force. <br>
                Les Mirien ont énormément d'énergie à dépenser et ne tiennent pas en place, ce qui rend leur quête de la
                maîtrise de soi encore plus importante. Ils maîtrisent le Nibaasa, qui est la fusion d'un art martial et
                de Magie dérivée de l'élémentalisme qui leur permet notamment de faire de la télékinésie.
            </p>
        </div>
        <div class="tabcontent" id="P5">
            <h2>Alfren</h2>
            <p class="general">
                Les Alfrens, plus connus sous le nom d'Elfes, ne sont pas une race mais un ensemble de races partageant
                un ancêtre commun. Il existait des Alfren sylvains, des plaines, des roches, des sables, des lacs, des
                glaces… chacune avec des caractéristiques physiques, une culture et un mode de vie différents. Ils
                avaient néanmoins en commun d'avoir des oreilles plus ou moins longues et pointues, et de maîtriser à
                l'extrême un élément en lien avec leur race. Les Alfrens étaient aussi les maîtres de l'animancie. Ils
                ont créé les golems, les totems de téléportation, et le système d'extraction des cristaux Maen dont ils
                étaient les gardiens. <br>
                Ils ont aujourd'hui disparus, massacrés par les Witch Hunters.
            </p>
        </div>
        <div class="tabcontent" id="P6">
            <h2>Démons</h2>
            <p class="general">
                Les Démons viennent originellement d'Ignïs qu'ils ont fuis quand elle est devenue inhabitable, mais les
                grosses vagues de réfugiés datent maintenant d'il y a plus de 300 ans et les démons sont devenus une
                race à part entière de Mezalando, comptant parmi les races d'Alters les plus courantes. <br>
                Ils présentent une apparence globalement humanoïde, plus ou moins relevée de cornes, queues, griffes,
                crocs, yeux fendus dans un sens ou dans l'autre, écailles plus ou moins présentes et cheveux de
                couleurs non naturelles. Vivipares et à sang froid, ils ont besoin de soleil ou de rester proche d'une
                source de chaleur plusieurs heures par jour. <br>
                Ils sont doués d'empathie (dans le sens magique du terme), et se nourrissent des émotions des Nerics et
                des autres Alters autour d'eux, occasionnellement de leur viande ou de leur sang. Sur Mezalando, ils ne
                peuvent pas faire usage de la Magie sans cristaux Maen, mais sous réserve d'en disposer ils ont des
                prédispositions pour toutes les formes de psychisme, la métamorphose et la créomancie.
            </p>
        </div>
        <div class="tabcontent" id="P7">
            <h2>Anges</h2>
            <p class="general">
                Contrairement aux démons, les Anges sont extrêmement rares sur Mezalando, rarement plus d'une douzaine
                d'individus en même temps se trouve sur la planète. Ils sont originaires de Celestùn, et ne viennent
                pas volontairement sur Mezalando: ils y sont bannis pour une raison ou une autre par leurs pairs. <br>
                Aux yeux des autres Alters, ils se ressemblent tous énormément : ils sont grands et minces, avec des
                cheveux blonds tirant parfois sur le blanc, des yeux clairs, des traits fins et une paire d'ailes dans
                le dos. La plupart des autres Alters ne savent rien d'autre sur eux du fait de leur rareté. <br>
                Comme les Démons, les Anges ne peuvent pas utiliser la Magie sans cristaux Maen, et même avec l'un
                d'entre eux ils ne peuvent pas voler (cela consomme beaucoup trop de saàp). Leur spécialité est
                l'élémentalisme, qu'ils maîtrisent à un niveau très poussé, et souvent pour plusieurs éléments.
            </p>
        </div>
        <div class="tabcontent" id="P8">
            <h2>Esprits</h2>
            <p class="general">
                Les esprits sont une catégorie d'êtres surnaturels qui ont la particularité d'être déjà morts ou d'avoir
                un lien étroit avec la mort. Ils ne sont pas vivants au sens biologique du terme, et ne "meurent" pas
                comme les autres Alters. La plupart sont inoffensifs, mais quelques-uns sont malveillants ou dangereux
                et doivent être exorcisés pour être renvoyés dans l'au-delà ou scellés. Les Esprits maîtrisent en
                général la magie psychique, en particulier la possession et les illusions. Ils sont aussi capables de se
                rendre invisibles, et sont souvent plus ou moins doués pour la télékinésie. <br>
                Les esprits ne sont pas forcément des fantômes, il en existe en fait de nombreux types et certains sont
                uniques.
            </p>
        </div>
        <div class="tabcontent" id="P9">
            <h2>Gardwen</h2>
            <p class="general">
                Les Gwarden sont un cas un peu à part des esprits, une anomalie dans le fonctionnement classique de la
                vie et de la mort. <br>
                Un Gward est un esprit né de la fusion de l'âme d'un animal et son maître, si ces derniers étaient
                extrêmement proches et sont morts peu de temps l'un après l'autre. Le Gward possède un corps physique
                humain qui ne vieillit pas, mais peut repasser sous sa forme animale ou sous une forme incorporelle
                ("forme d'esprit"). Le passage d'une forme à l'autre guérit toutes les blessures, ce qui rend les
                Gwarden virtuellement immortels. <br>
                Ils sont cependant sensibles à l'exorcisme comme les esprits.
                Malgré les conditions très spécifiques pour leur apparition, les Gwarden sont relativement nombreux.
                L'écrasante majorité d'entre eux sont des Gwarden chiens, qui ont tendance à se regrouper en meutes. On
                trouve cependant aussi des Gwarden chats, chevaux, perroquets….
            </p>
        </div>
        <div class="tabcontent" id="P10">
            <h2>Einherjärs</h2>
            <p class="general">
                Les Einherjärs sont des combattants humains d'exception, morts de façon héroïque sur le champs de
                bataille, et ramenés à la vie par une Valkyrie à qui ils sont liés à jamais.
                Théoriquement, les Einherjärs sont les serviteurs des Valkyries, et leurs intermédiaires avec les autres
                races et le monde mortel. En réalité, la relation entre Einherjärs et Valkyrie est quasiment
                symbiotique, et à double-sens. <br>
                Si certains Einherjärs restent toujours au plus près de leur Valkyrie, la plupart mènent leur propre vie
                tant qu'ils ne sont pas appelés par leur créatrice. <br>
                Les Einherjärs ne maîtrisent pas la Magie au sens strict du terme, mais possèdent des capacités
                surnaturelles : un corps qui ne vieillit pas, un pouvoir de régénération extrême, des capacités
                physiques et des sens surdéveloppés. De plus, ils peuvent augmenter encore leur puissance via ce qu'on
                appelle communément la "rage berserk" en puisant dans la puissance de leur Valkyrie. <br>
                Rien n'est plus dangereux qu'un Einherjär énervé, si ce n'est une Valkyrie énervée proche d'un ou
                plusieurs de ses Einherjärs.

            </p>
        </div>
        <div class="tabcontent" id="P11">
            <h2>Maestri</h2>
            <p class="general">
                Les Maestri sont à l'origine des humains. Ce sont des artistes, des artisans ou même des Hommes de
                science exceptionnels. Ils ont été reconnus pour leur expertise dans leur domaine par un autre Maestro,
                qui leur a proposé de devenir l'un des leurs. <br>
                Les Maestri sont dotés d'un corps théoriquement immortel et d'une forte capacité de régénération. De
                plus, chacun a un pouvoir unique, comme celui d'un mutant, qui est lié de façon plus ou moins lointaine
                à son art, sa vie passée ou ses passions. <br>
                Il y a cependant un lourd tribu à payer pour l'immortalité : les Maestri ont pour particularités de ne
                pas pouvoir rêver, et de ne pas pouvoir manger de nourriture solide autre que la chair humaine. Cette
                dernière, ou, à défaut, du sang humain, constituent la base de leur alimentation et ils en ont besoin
                pour pouvoir pratiquer la Magie et activer leur pouvoir de régénération. Enfin, l'état de leur corps
                physique dépend directement de leur santé mentale : s'ils perdent la raison, leur corps commence à
                tomber en lambeaux. Jusqu'à un certain point leur pouvoir de régénération peut néanmoins compenser cela,
                et il peut se passer des années d'agonie entre le moment où leur corps commence à se désagréger et leur
                véritable mort. <br>
                Les Maestri sont une société assez secrète, et les membres sont chargés de devenir des "gardiens" de
                leur domaine d'expertise, surveillant son évolution, repérant de nouveaux génies qui seront de
                potentiels futurs compagnons, et influençant l'Histoire dans l'ombre. Certains choisissent de ne pas
                suivre cette voie, mais ils sont ostracisés par les autres Maestri, et, sans tâche à accomplir ni
                relations avec leurs pairs, finissent à plus ou moins long terme par sombrer dans la folie.
            </p>
        </div>

        <br>
        <div class="title">
            <h2>Les autres Alters</h2></div>
        <p>
            Ce sont des races d'êtres magiques extrêmement méconnus car ils vivent cachés et repliés sur eux-mêmes,
            limitant au maximum les contacts avec d'autres races. Ils sont également chassés par les Witch Hunters, et
            la plupart sont en danger critique d'extinction à l'heure actuelle.
        </p>
        <p>
            Certaines populations ont migré sur Erentia, souvent dans le but de se protéger des Witch Hunter.
            Mais même sur l'île, ils vivent séparés des autres races, sur leurs propres territoires et selon leurs
            propres règles. Les éventuels visiteurs sur leurs terres ne sont plus soumis aux lois d'Erentia mais aux
            règles locales.
        </p>
        <p>
            Néanmoins, il existe toujours des individus qui, pour une raison ou une autre, partent faire leur vie dans
            un refuge d'Alter, loin des leurs. Les Faüns et les Korrigans en particulier sont plus enclins que les
            autres à se mêler à la société Alter.
        </p>
        <div class="tab">
            <button class="tablinks" onclick="openTabs('P12')">Sirènes</button>
            <button class="tablinks" onclick="openTabs('P13')">Naïades</button>
            <button class="tablinks" onclick="openTabs('P14')">Faüns</button>
            <button class="tablinks" onclick="openTabs('P15')">Centaures</button>
            <button class="tablinks" onclick="openTabs('P16')">Korrigans</button>
            <button class="tablinks" onclick="openTabs('P17')">Fæës</button>
            <button class="tablinks" onclick="openTabs('P18')">Nains</button>
            <button class="tablinks" onclick="openTabs('P19')">Jötunns / Géants</button>
            <button class="tablinks" onclick="openTabs('P20')">Valkyries</button>
            <button class="tablinks" onclick="openTabs('P21')">Harpies / Tengus</button>
        </div>

        <div class="tabcontent" id="P12">
            <h2>Sirènes</h2>
            <p class="general">
                Femmes-poissons habitant les eaux salées. La partie inférieure de leur corps ressemble à celle des
                poissons, mais le haut du corps est humanoïde. Elles n'ont pas de cheveux et possèdent des branchies.
                Hors de l'eau, elles ne peuvent pas utiliser de langage parlé. Elles vivent et chantent avec les
                baleines et d'autres grands cétacés. Il existe des hommes sirènes mais ils sont encore plus discrets que
                les femmes et n'ont virtuellement pas de contacts avec le monde terrestre.
                Selon la légende, les Sirènes guident vers l'au-delà les âmes perdues en mer.
                Vivant dans l'eau salée, les Sirènes ne pratiquent pas la Magie.
            </p>
        </div>
        <div class="tabcontent" id="P13">
            <h2>Naïades</h2>
            <p class="general">
                Femmes plus proches des mammifères marins que des poissons, habitant les eaux douces.
                Pas de queue ni de branchies, mais des pieds très longs et palmés et des cheveux. Elles ont un mode de
                vie presque amphibie même si elles passent toujours plus de temps dans l'eau que dehors.
                Il n'y a plus du tout de Naïades dans les pays fortement peuplés et/ou industrialisés, les quelques
                populations restantes se trouvent en Asie du sud-est et au sud-ouest de l'Amérique du sud. Elles
                attirent les jeunes femmes humaines vers la noyade pour les transformer en Naïades à leur tour. Le plus
                grand nombre de survivantes se trouve sur Erentia.
            </p>
        </div>
        <div class="tabcontent" id="P14">
            <h2>Faüns</h2>
            <p class="general">
                Hommes avec des oreilles, une queue, des cornes et des jambes de caprins ou d'ovins, bipèdes.
                Parmi les moins réticents à se mêler aux humains et autres alters, ils restent néanmoins très secrets.
                Vivent surtout en basse et moyenne montagne. La plupart sont très sociables, et même de nature joviale,
                mais leur humeur est changeante et leurs accès de colère sont destructeurs. Ils aiment la bonne chair et
                l'alcool, et entretiennent leur réputation de très bons amants.
            </p>
        </div>
        <div class="tabcontent" id="P15">
            <h2>Centaures</h2>
            <p class="general">
                Hommes dont la partie inférieure du corps est le corps d'un équidé ou d'un bovin, quadripèdes (6 membres
                en tout). Vivent en forêts et parfois en plaines. Ils avaient une relation d'amitié très forte avec les
                alfrens sylvains (et eux exclusivement). Ils sont si secrets qu'on ne sait pas s'ils sont éteints ou
                pas, mais leur nombre est en tous cas très réduit. Ce sont des archers hors pairs, qui fabriquaient les
                armes des alfrens sylvains.
            </p>
        </div>
        <div class="tabcontent" id="P16">
            <h2>Korrigans</h2>
            <p class="general">
                Aussi appelés lutins, pixies, gnomes… <br>
                Des êtres de petites taille (30-50 cm selon les individus) aux oreilles pointues et extrêmement longues.
                Ils sont encore très nombreux, car leur capacité à se rendre invisible les aide à échapper aux Witch
                Hunters. Auparavant ils se mêlaient volontiers aux humains mais sont devenus repliés sur eux-même à
                cause des chasses et des persécutions. <br>
                On en sait plus sur eux que sur la plupart des autres races : ils vivent une quarantaine d'années
                environ, peuvent pratiquer la magie en plus de leurs pouvoirs d'invisibilité, et semblent manger, dormir
                et se reproduire comme les humains.
            </p>
        </div>
        <div class="tabcontent" id="P17">
            <h2>Fæës</h2>
            <p class="general">
                Plus communément appelées Fées, ou parfois Pixie (il y a confusion dans le folklore entre les races).
                Ce sont de très petites créatures (10-15 cm) possédant des ailes, et vivant une vingtaine d'années au
                maximum. Elles ont des pouvoirs psychiques, notamment celui de désorienter ou faire perdre la mémoire
                aux autres Alters et aux humains. Ce sont ces capacités qui ont protégé leurs populations contre les
                Witch Hunters. Elles vivent en tribus ou clans qui peuvent atteindre la centaine d'individus. On
                distingue deux sous-espèces : les Fæës des plaines, vivant dans des régions tempérées et possédant des
                ailes de papillons, et les Fæës des jungles, vivant dans les régions tropicales et ayant des ailes de
                Libellules. <br>
                Les Fæës des jungles sont de farouches guerrières très territoriales, qui s'attaquent à tout étranger
                sur leurs terres, mais sont gravement menacées par le recul des forêts primaires partout dans le monde.
                Leurs cousines des plaines ont été massacrées partout sauf à Erentia, et ne vivent donc plus que sur
                l'île.
            </p>
        </div>
        <div class="tabcontent" id="P18">
            <h2>Nains</h2>
            <p class="general">
                Vivant à l'intérieur des montagnes du globe, ce sont des êtres de petite taille (80-120 cm environ) qui
                ressemblent trait pour trait aux descriptions que la culture populaire en fait. Leurs cités troglodytes
                sont des forteresses imprenables, que même la technologie des Witch Hunters n'a jamais réussi à percer.
                Ce sont les maîtres absolus et incontestés de l'alchimie, et ils ne partagent leurs secrets qu'avec
                d'autres nains. Ils semblent vivre plus longtemps que les humains, et même que la plupart des autres
                races d'Alters, mais sont très peu nombreux.
            </p>
        </div>
        <div class="tabcontent" id="P19">
            <h2>Jötunns / Géants</h2>
            <p class="general">
                Les Géants sont des êtres de grande taille, 2,2 à 3m environ, qui vivent uniquement dans les toundra de
                l'hémisphère nord du globe, à l'exception d'une petite population en Islande. <br>
                Ce sont des chasseurs-cueilleurs dont l'avancement technologique est moins élevé que les autres races
                d'Alters, mais qui, contrairement aux légendes, sont loin d'être des brutes épaisses. Au contraire, ils
                sont pacifistes de nature. Leur culture est très riche et ancienne, transmise sous forme de chants
                décrits comme étant "profonds, puissants et magnifiques" par ceux qui ont eu la chance de les écouter.
                <br>
                Ils ne "maîtrisent" pas la Magie au sens propre, mais contrôlent de façon instinctive le saàp pour
                augmenter leurs capacités physiques de façon spectaculaire. C'est en les observant que les Derwenn ont
                créé les bases de la créomancie.
            </p>
        </div>
        <div class="tabcontent" id="P20">
            <h2>Valkyries</h2>
            <p class="general">
                Les Valkyries sont des êtres venus de Celestùn, tout comme les Anges, et ont, elles aussi, des ailes
                dans le dos. La ressemblance s'arrête cependant ici, car, du reste, tout les sépare.
                En effet, les Valkyries sont une race ne comptant qu'une poignée d'individus (le nombre exact est
                inconnu), toutes des femmes, incapables de se reproduire mais immortelles, et plus proches de déesses
                que des autres Alters. Elles ont été créées directement par les Dragons Célestes, et se considèrent
                toutes sœurs entre elles. <br>
                Leur pouvoir est incommensurable, et elles maîtrisent à la perfection la magie spatiale. En fait, ce
                sont les seules créatures capables de traverser à leur guise entre les mondes d'un claquement de doigts.
                De plus, contrairement à toutes les races d'Alters, elles produisent du saàp par elles-mêmes, en grandes
                quantités, elles peuvent donc utiliser la magie à volonté même sur Mezalando. <br>
                Les Valkyries recherchent inlassablement de nouveaux humains ou alters mourant de manière
                particulièrement héroïque sur toute la surface du globe pour les transformer en Einherjärs.
                Mis à part la relation très particulière, quasi symbiotique avec leurs Einherjärs et leurs consœurs,
                elles n'interagissent pour ainsi dire pas avec les autres races, ou seulement par l'intermédiaire de
                leurs Einherjärs.
            </p>
        </div>
        <div class="tabcontent" id="P21">
            <h2>Harpies / Tengus</h2>
            <p class="general">
                Deux noms différents pour désigner la même espèce, des humanoïdes possédant des caractéristiques
                d'oiseaux et vivant dans les falaises ou les montagnes. C'est une espèce définitivement éteinte depuis
                le début du XXième siècle.
            </p>
        </div>

        <br>
        <div class="title">
            <span class="byline">Rareté des races</span></div>
        <p>
            Les Derwenn sont, de très loin, les plus nombreux des Alters et représentent environ 40% du total.
            Les Loenn représentent environ 20% du total, les Démons et les Mirien 15%.
        </p>
        <p>
            Les Mutants représentent un peu moins de 10% des Alters, et les quelques pourcents restants sont partagés
            entre les Esprits, Einherjärs, Gwarden, Anges et Maestri, ces deux derniers comptant pour quantité
            négligeable.
        </p>
        <p>
            La population totale des Alters varie, selon les estimations, entre 1 et 2 Millions. Erentia compte 500 000
            habitants référencés.
        </p>
        <p>
            Les autres races d'Alters ne sont pas dans le calcul tout simplement car leur population est une grande
            inconnue. On sait juste que les Valkyries ne doivent pas être plus de 20, et que les Faës des plaines sont
            plusieurs centaines (comme toute leur population est concentrée sur Erentia).
        </p>
        <div class="title">
            <span class="byline">Reproduction</span></div>
        Toutes les races ne peuvent se reproduire qu'entre elles, avec des exceptions :
        <ul>
            <li>
                Les Esprits, Gwarden, Einherjärs, Maestri, Naïades et Valkyries ne se reproduisent pas au sens
                biologique du terme, voire pas du tout
            </li>
            <li>
                Les Mutants, Derwenn et les humains Nerics sont tous des humains et peuvent se reproduire entre eux.
                Néanmoins l'immense majorité des mutants est stérile
            </li>
            <li>
                Du temps où ils étaient vivants, les Alfren pouvaient avoir des enfants entre différentes races mais ces
                enfants étaient stériles
            </li>
            <li>
                Les Anges sont trop peu nombreux sur Mezalando pour essayer de se reproduire entre eux, ils arrivent sur
                Mezalando depuis Celestùn
            </li>
            <li>
                Les Loenn ont le plus souvent l'animal-totem d'un de leur parent, mais ce n'est pas systématique
            </li>
        </ul>
        <div class="title">
            <span class="byline">Quelques notes de vocabulaire</span></div>
        <p>
            Les "vieilles âmes" désignent les Esprits, Gwarden, Einherjärs et Maestri qui dépassent les deux siècles
            d'existence (environ, il n'y a pas de limite stricte). Les Valkyries, qui dépassent allégrement le
            millénaire, sont également désignées sous ce nom. Il s'agit d'un terme connoté positivement, un signe de
            respect pour la sagesse des plus âgés. </p>
        <p>
            L'ensemble des Sirènes, Naïades, Faës, Korrigans, Faüns, Centaures, Nains, Jötunns et Harpies (même si ces
            dernières sont disparues) sont appelés les "races tierces", ou "Alters extérieurs". Les Valkyries sont ou
            non rajoutées à la liste, mais leur statut est toujours un cas particulier.
        </p>
        <p>
            Le terme "Humains" ou "races humaines" désigne l'ensemble des Derwenn, des Mutants, des Einherjärs et des
            Nerics, les humains sans pouvoirs.
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
