<?php require('../../decide-lang.php');
require_once('../../../inc/common.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Characters</title>
    <link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet"/>
    <link target="_parent" href="../../../css/cosmic.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../../css/gen.css" rel="stylesheet" type="text/css" media="all"/>
    <link target="_parent" href="../../../css/fonts.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <h2>Last Chance Characters</h2>
            <span class="byline">Overview</span></div>
        <p>Here are the 13 character sheets of the survivors.</p>
        <div class="tab">
            <button class="tablinks" onclick="openTabs(event, 'Ravil')">Ravil Yefimov</button>
            <button class="tablinks" onclick="openTabs(event, 'Lily')">Lily Vinogradova</button>
            <button class="tablinks" onclick="openTabs(event, 'Marina')">Marina Kornilova</button>
            <button class="tablinks" onclick="openTabs(event, 'Andrei')">Andrei Aleksei</button>
            <button class="tablinks" onclick="openTabs(event, 'Dmitri')">Dmitri Petrenko</button>
            <button class="tablinks" onclick="openTabs(event, 'Victoria')">Vicoria Kormarova</button>
            <button class="tablinks" onclick="openTabs(event, 'Pavlov')">Pavlov Aristof</button>
            <button class="tablinks" onclick="openTabs(event, 'Laina')">Laina Porfirievitch</button>
            <button class="tablinks" onclick="openTabs(event, 'Erast')">Erast Belousov</button>
            <button class="tablinks" onclick="openTabs(event, 'Antoine')">Antoine Beauvoir</button>
            <button class="tablinks" onclick="openTabs(event, 'Alice')">Alice Beauvoir</button>
            <button class="tablinks" onclick="openTabs(event, 'Prokhor')">Prokhor Laventriev</button>
            <button class="tablinks" onclick="openTabs(event, 'Vladimir')">Vladimir</button>
        </div>

        <div id="Ravil" class="tabcontent">
            <h3>Ravil Yefimov</h3>
            <p>Age : 35 <br> Job : Policeman</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>65</th>
                    <th>40</th>
                    <th>75</th>
                    <th>65</th>
                    <th>55</th>
                    <th>60</th>
                    <th>45</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Ravil Yefimov was destined to be a painter, but his parents preferred him to a career in the local
                police. Easily sensitive to stress, he compensates for this with advanced physical training.

                Ravil was not part of convoy 1138. He got hit by the bus trying to stop him without his car because he
                had lost the keys. It is also a miracle that he has survived since the beginning of the epidemic,
                because beyond being a bit clumsy, he is also very sensitive to stress.
            </p>
            <h4>Skills</h4>
            <table class="skill">
                <tr>
                    <th>Spotter</th>
                    <th>10% bonus in observation in a stress situation</th>
                </tr>
                <tr>
                    <th>Self control</th>
                    <th>Can retry a failed Stress roll</th>
                </tr>
                <tr>
                    <th>First aid</th>
                    <th>20% bonus in healing</th>
                </tr>
                <tr>
                    <th>Russian athlete</th>
                    <th>10% bonus on physical action</th>
                </tr>
            </table>
        </div>
        <div id="Lily" class="tabcontent">
            <h3>Lily Vinogradova</h3>
            <p>Age : 26 <br> Job : Nurse</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>50</th>
                    <th>35</th>
                    <th>30</th>
                    <th>65</th>
                    <th>65</th>
                    <th>60</th>
                    <th>70</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Lily Vinogradova is one of the few nurses who stayed at Berezino Hospital after the epidemic and the
                beginning of the evacuations, "by duty to the homeland," she admits. Among her service group of eighteen
                nurses, she is the only one to have survived or at least not to have fled Berezino following the riots.
                The long weeks managing a hospital almost only forged her mentally and made her a fighter.
            </p>
            <h4>Skills</h4>
            <table class="skill">
                <tr>
                    <th>Surgeon</th>
                    <th>10% bonus in surgery</th>
                </tr>
                <tr>
                    <th>First aid</th>
                    <th>20% bonus in healing</th>
                </tr>
                <tr>
                    <th>Leader</th>
                    <th>Give a retry to an other player in case of a failed Stress roll</th>
                </tr>
            </table>
        </div>
        <div id="Marina" class="tabcontent">
            <h3>Marina Kornilova</h3>
            <p>Age : 20<br> Job : Art student</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>55</th>
                    <th>30</th>
                    <th>40</th>
                    <th>65</th>
                    <th>70</th>
                    <th>45</th>
                    <th>40</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Marina was finishing her thesis in art when the epidemic occurred. Despite the events and dangers, she
                continues her studies as best she can on her own to reassure herself about the situation, but also to
                keep her dexterity usable in case of survival. Marina is a lonely and discreet person, so we can not
                even perceive her presence around us. <br>
            </p>
            <p class="general">
                When the city was evacuated, Marina was separated from her comrades, who left the first days of the
                evacuation. She still hopes to find them once reached Siberia.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Invisible</th>
                    <th>Skip a turn and succed a discreete or agile action without dice roll</th>
                </tr>
                <tr>
                    <th>Fairy fingers</th>
                    <th>10% bonus for a manual action</th>
                </tr>
                <tr>
                    <th>Silent killer</th>
                    <th>15% bonus in blunt or cutting weapon</th>
                </tr>
            </table>
        </div>
        <div id="Andrei" class="tabcontent">
            <h3>Andrei Aleksei</h3>
            <p>Age : 55 <br> Job : Ex-soldier</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>75</th>
                    <th>80</th>
                    <th>70</th>
                    <th>60</th>
                    <th>55</th>
                    <th>65</th>
                    <th>85</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Andrei is the leader of the small group of looters that the survivors meet at the hospital. A seasoned
                survivor, he had no trouble resisting hordes of zombies, but ended up surrounded by three other
                survivors, regardless of their social level. He is faithful to his nation and keeps his uniform on which
                he proudly displays his rank of lieutenant-colonel. <br>
            </p>
            <p class="general">
                However, Andrei has difficulty in trusting him and the meeting with the survivors of convoy 1138 is a
                bit rough.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Russian Arsenal</th>
                    <th>10% bonus in actions implying fire weapons or explosives</th>
                </tr>
                <tr>
                    <th>Survivor</th>
                    <th>20% bonus for a survival roll</th>
                </tr>
                <tr>
                    <th>Ambush</th>
                    <th>Initiative in ambush</th>
                </tr>
                <tr>
                    <th>Commander</th>
                    <th>Give a retry to the group in case of failed Stress roll</th>
                </tr>
                <tr>
                    <th>First aid</th>
                    <th>20% bonus in healing</th>
                </tr>
            </table>
        </div>
        <div id="Dmitri" class="tabcontent">
            <h3>Dmitri Petrnenko</h3>
            <p>Age : 42 <br> Job : None</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>60</th>
                    <th>30</th>
                    <th>60</th>
                    <th>30</th>
                    <th>20</th>
                    <th>40</th>
                    <th>60</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Dmitri lost his family, his job and his home the same year, after an accident in a nuclear power plant
                that razed half of his village. Since then, he wanders in the streets of Berezino without real purpose.
                Ravil found his head in a gutter and took him with him to convoy 1138 where he promised him a better
                life. Ironic...
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Crazy</th>
                    <th>20% bonus for a stupid or uncautious action</th>
                </tr>
                <tr>
                    <th>Ease</th>
                    <th>casn use Force instead of Agility if the occasion allows to</th>
                </tr>
                <tr>
                    <th>Cosntantly drunk</th>
                    <th>Does not have a malus in critical status</th>
                </tr>
            </table>
        </div>
        <div id="Victoria" class="tabcontent">
            <h3>Victoria Kormarova</h3>
            <p>Age : 47 <br> Job : Huntress</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>55</th>
                    <th>65</th>
                    <th>50</th>
                    <th>50</th>
                    <th>40</th>
                    <th>55</th>
                    <th>50</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Victoria has always made a living from hunting, especially since the day she killed her first zombie.
                Hunting being more dangerous, she was able to quadruple her selling prices. She was voluntarily in the
                last convoy of the city to help the last civilians to leave, but she was never able to leave the city.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Sharpshooter</th>
                    <th>20% bonus in shooting</th>
                </tr>
                <tr>
                    <th>First aid</th>
                    <th>20% bonus in healing</th>
                </tr>
                <tr>
                    <th>Self control</th>
                    <th>Can retry a failed Stress roll</th>
                </tr>
            </table>
        </div>
        <div id="Pavlov" class="tabcontent">
            <h3>Pavlov Aristof</h3>
            <p>Age : 34 <br> Job : None</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>40</th>
                    <th>35</th>
                    <th>50</th>
                    <th>40</th>
                    <th>65</th>
                    <th>50</th>
                    <th>65</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Child of French mother and Russian father, abandoned by his mother at the age of 7, he decided at 18 to
                leave Russia to pursue major engineering or health studies in France. But his Russian studies do not
                allow him to enter a school and find themselves quickly to live a small job. Forced to join Russia, he
                roams the streets of Bérézino in search of a charitable soul, or a job, whatever the demand. <br>*
            </p>
            <p class="general">
                Pavlov found himself caught up in the epidemic as he finally managed to find a job in Berezino. In the
                front row of the bus, he was thrown through the windshield and fractured his left arm. Despite the
                events, her wish is to return to a normal life for the pride of her parents.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>First aid</th>
                    <th>20% bonus in healing</th>
                </tr>
                <tr>
                    <th>Major</th>
                    <th>can re-roll a failed Intelligence or Perception roll</th>
                </tr>
                <tr>
                    <th>Wander</th>
                    <th>10% bonus on a discreet action</th>
                </tr>
            </table>
        </div>
        <div id="Laina" class="tabcontent">
            <h3>Laina Porfirievitch</h3>
            <p>Age : 29 <br> Job : CEO of a textile compagny</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>30</th>
                    <th>30</th>
                    <th>40</th>
                    <th>45</th>
                    <th>70</th>
                    <th>65</th>
                    <th>55</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Heir to his mother's business, Dmitra hates alcohol, authority and everything that is not Russian. She
                hates the fact of having to ally herself with individuals who are socially lower, but in view of the
                situation she finds herself forced to do so. This does not prevent him from letting go of some insults
                towards his comrades. his only concern is his survival, and not having a zombie in front of her. <br>
            </p>
            <p class="general">
                Despite this, she still came to the aid of the worst wounded convoy 1138 after the accident, but does
                not plan to do more if it does not advance to flee the city.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Negociator</th>
                    <th>10% on a Social roll</th>
                </tr>
                <tr>
                    <th>Associal</th>
                    <th>10% bonus on a independant action (not impacted or which does not impact the group)</th>
                </tr>
                <tr>
                    <th>CEO</th>
                    <th>Can reroll a failed Intelligence roll</th>
                </tr>
            </table>
        </div>
        <div id="Erast" class="tabcontent">
            <h3>Erast Belousov</h3>
            <p>Age : 32 <br> Job : Airline pilot</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>30</th>
                    <th>40</th>
                    <th>45</th>
                    <th>65</th>
                    <th>55</th>
                    <th>60</th>
                    <th>60</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Erast was not in convoy 1138, but was part of the small squad that was looting the hospital when the
                survivors awoke. The father of a family shattered by conflict, he raised his two daughters alone while
                his son was away with his mother in the Siberian regions.<br>
            </p>
            <p class="general">
                During the outbreak, he tried in vain to leave illegally to the US and was intercepted by military
                forces and arrested. We do not really know how he got into Andrei's group, but he's the scout for the
                group. His pilot's coolness also allows him to be discreet.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Spotter</th>
                    <th>10% bonus in Observation under stress</th>
                </tr>
                <tr>
                    <th>Self-control</th>
                    <th>Can reroll a failed Stress roll</th>
                </tr>
                <tr>
                    <th>Ace of the sky</th>
                    <th>Initivative in Perception</th>
                </tr>
            </table>
        </div>
        <div id="Antoine" class="tabcontent">
            <h3>Antoine Beauvoir</h3>
            <p>Age : 27 <br> Job : Archeologue</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>35</th>
                    <th>30</th>
                    <th>40</th>
                    <th>55</th>
                    <th>65</th>
                    <th>70</th>
                    <th>35</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Antoine Beauvoir is a young French archaeologist, passionate about travel and exploration. After
                obtaining his master's degree, his research focuses on the origins of humanity. It is not very social
                but knows without worry decrypt the least traces or imprints on any ground.<br>
            </p>
            <p class="general">
                Traveling on a tourist trip with her twin sister Alice, Antoine found himself stuck in Berezino at the
                beginning of the epidemic.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Grave robber</th>
                    <th>10% bonus in Agility with mineral material</th>
                </tr>
                <tr>
                    <th>Geograph</th>
                    <th>10% bonus in spotting</th>
                </tr>
                <tr>
                    <th>Patience</th>
                    <th>Give a retry to an other player in case of a failed Perception roll</th>
                </tr>
                <tr>
                    <th>Blood brothers</th>
                    <th>20% bonus while performing an action with his sister</th>
                </tr>
            </table>
        </div>
        <div id="Alice" class="tabcontent">
            <h3>Alice Beauvoir</h3>
            <p>Age : 27 <br> Job : Litterature teacher</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>35</th>
                    <th>30</th>
                    <th>40</th>
                    <th>55</th>
                    <th>65</th>
                    <th>70</th>
                    <th>35</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Alice Beauvoir is a professor of French literature, after brilliant studies in Paris. She followed her
                brother on her travels to study language learning in foreign countries, where she discovered that France
                was way behind the rest of Europe.<br>
            </p>
            <p class="general">
                On a tourist trip with her twin brother Antoine, Alice found herself stuck in Berezino at the beginning
                of the epidemic.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Major</th>
                    <th>Can reroll a failed Intelligence or Perception roll</th>
                </tr>
                <tr>
                    <th>Negociator</th>
                    <th>10% bonus on Social roll</th>
                </tr>
                <tr>
                    <th>Blood brothers</th>
                    <th>20% bonus while performing an action with her brother</th>
                </tr>
            </table>
        </div>
        <div id="Prokhor" class="tabcontent">
            <h3>Prokhor Laventriev</h3>
            <p>Age : 63 <br> Job : Bus driver</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>50</th>
                    <th>25</th>
                    <th>60</th>
                    <th>45</th>
                    <th>45</th>
                    <th>30</th>
                    <th>65</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                During the outbreak, Prokhor was separated from his family. Since then, he has been viscerally hated by
                the Russian authorities.<br>
            </p>
            <p class="general">
                If convoy 1138 got there, it's because of Prokhor. It was he who took the wrong initiative to leave
                before the other buses to join his family in Siberia.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Mechanic</th>
                    <th>30% bonus on repair action</th>
                </tr>
                <tr>
                    <th>Driver</th>
                    <th>20% bonus on driving action (30% if it's a bus or a truck)</th>
                </tr>
                <tr>
                    <th>Quarter turn</th>
                    <th>After a failed Stress roll, 5% bonus on every attribute</th>
                </tr>
            </table>
        </div>
        <div id="Vladimir" class="tabcontent">
            <h3>Vladimir</h3>
            <p>Age : between 70 and 74 <br> Job : Unknown</p>
            <h4>Attributes</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Fight</th>
                    <th>Shoot</th>
                    <th>Strength</th>
                    <th>Agility</th>
                    <th>Intelligence</th>
                    <th>Perception</th>
                    <th>Stress</th>
                </tr>
                <tr>
                    <th>75</th>
                    <th>75</th>
                    <th>75</th>
                    <th>75</th>
                    <th>75</th>
                    <th>75</th>
                    <th>75</th>
                </tr>
            </table>
            <h4>Description</h4>
            <p class="general">
                Nobody really knows where Vladimir comes from. He seems to be between 70 and 75 years old and has always
                refused to give any information about him. Vladimir still has an impassive face, though marked by the
                weather, but retains amazing physical strength for his age.<br>
            </p>
            <p class="general">
                Unlike the other survivors, Vladimir was not part of convoy 1138 and was already in hospital following a
                settlement with a certain Alexey. He currently has two broken ribs, but this does not affect his
                physical abilities.
            </p>
            <h4>Skills</h4>
            <table style="width: 100%;">
                <tr>
                    <th>Oppressor</th>
                    <th>10% bonus on a Force roll if a Stress roll has been failed in this turn</th>
                </tr>
                <tr>
                    <th>Survivor</th>
                    <th>15% bonus on a survival roll (up to 80)</th>
                </tr>
                <tr>
                    <th>Vlad's rules</th>
                    <th>Give two retries in case of a failed roll. The second roll will have a 20% malus</th>
                </tr>
            </table>
        </div>
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

<script type="application/javascript" src="../../../js/general_script.js"></script>
</body>
</html>
