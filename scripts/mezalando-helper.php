<?php
require_once('helpers.php');

function set_mezalando_sidebar($n)
{
    $target = target($n);
    /**
     * section => link
     *         => dropdown => links
     */

    // used in require
    $currentUrl = getCurrentUrl();
    $sidebarLinks = [
        [
            'title' => 'Contexte général',
            'links' => [
                [
                    'text' => 'L\'univers en 5 minutes',
                    'link' => $target . 'index.php'
                ],
                [
                    'text' => 'Les projets autour de Mezalando',
                    'link' => $target . 'projects.php'
                ],
            ]
        ],
        [
            'title' => 'L\'encyclopédie de Mezalando',
            'links' => [
                [
                    'text' => 'Factions et conflits',
                    'link' => $target . 'histoire/factions.php'
                ],
                [
                    'text' => 'Races',
                    'links' => [
                        [
                            'text' => 'Les races Alters',
                            'link' => $target . 'races/alters.php'
                        ],
                        [
                            'text' => 'Derwenn',
                            'link' => $target . 'races/derwenn.php'
                        ],
                        [
                            'text' => 'Mutants',
                            'link' => $target . 'races/mutants.php'
                        ],
                        [
                            'text' => 'Loenn',
                            'link' => $target . 'races/loenn.php'
                        ],
                        [
                            'text' => 'Mirien',
                            'link' => $target . 'races/mirien.php'
                        ],
                        [
                            'text' => 'Anges',
                            'link' => $target . 'races/anges.php'
                        ],
                        [
                            'text' => 'Démons',
                            'link' => $target . 'races/demons.php'
                        ],
                        [
                            'text' => 'Esprits',
                            'link' => $target . 'races/esprits.php'
                        ],
                        [
                            'text' => 'Gwarden',
                            'link' => $target . 'races/gwarden.php'
                        ],
                        [
                            'text' => 'Alfren',
                            'link' => $target . 'races/alfren.php'
                        ],
                        [
                            'text' => 'Einherjärs',
                            'link' => $target . 'races/einherjars.php'
                        ],
                        [
                            'text' => 'Maestri',
                            'link' => $target . 'races/maestri.php'
                        ],
                    ]
                ],
                [
                    'text' => 'Magie',
                    'links' => [
                        [
                            'text' => 'Magie',
                            'link' => $target . 'magie/magie.php'
                        ],
                        [
                            'text' => 'Voies et branches',
                            'link' => $target . 'magie/voies.php'
                        ],
                        [
                            'text' => 'Objets enchantés',
                            'link' => $target . 'magie/objets.php'
                        ],
                        [
                            'text' => 'Invocations et animations',
                            'link' => $target . 'magie/invocations.php'
                        ],
                    ]
                ],
                [
                    'text' => 'Religions et croyances',
                    'link' => $target . 'religions.php'
                ],
                [
                    'text' => 'Alternet',
                    'link' => $target . 'alternet.php'
                ],
                [
                    'text' => 'Noms',
                    'link' => $target . 'noms.php'
                ]
            ]
        ],
        [
            'title' => 'Erentia',
            'links' => [
                [
                    'text' => 'Histoire',
                    'link' => $target . 'erentia/histoire.php'
                ],
                [
                    'text' => 'Géographie',
                    'link' => $target . 'erentia/geographie.php'
                ],
                [
                    'text' => 'Société',
                    'links' => [
                        [
                            'text' => 'Certificats de magie',
                            'link' => $target . 'erentia/certificats.php'
                        ],
                        [
                            'text' => 'Guildes',
                            'link' => $target . 'erentia/guildes.php'
                        ],
                        [
                            'text' => 'Gouvernance et économie',
                            'link' => $target . 'erentia/gouvernance.php'
                        ],
                        [
                            'text' => 'Lois de l\'île',
                            'link' => $target . 'erentia/lois.php'
                        ],
                        [
                            'text' => 'Garde et police',
                            'link' => $target . 'erentia/garde.php'
                        ],
                        [
                            'text' => 'Célébrations et traditions',
                            'link' => $target . 'erentia/traditions.php'
                        ],
                        [
                            'text' => 'Éducation',
                            'link' => $target . 'erentia/education.php'
                        ],
                    ]
                ],
                [
                    'text' => 'Vie pratique',
                    'links' => [
                        [
                            'text' => 'Langue, monnaie et calendrier',
                            'link' => $target . 'erentia/langue.php'
                        ],
                        [
                            'text' => 'Accès à l\'île',
                            'link' => $target . 'erentia/acces.php'
                        ],
                        [
                            'text' => 'Technologie',
                            'link' => $target . 'erentia/technologie.php'
                        ],
                        [
                            'text' => 'Communication',
                            'link' => $target . 'erentia/communication.php'
                        ],
                        [
                            'text' => 'Déplacement',
                            'link' => $target . 'erentia/deplacements.php'
                        ],
                        [
                            'text' => 'Drogues et alcool',
                            'link' => $target . 'erentia/drogues.php'
                        ],
                        [
                            'text' => 'Médecine et accès aux soins',
                            'link' => $target . 'erentia/medecine.php'
                        ],
                        [
                            'text' => 'Sports',
                            'link' => $target . 'erentia/sports.php'
                        ],
                    ]
                ],
            ]
        ],
        [
            'title' => 'Nenien',
            'links' => [
                [
                    'text' => 'Généralités',
                    'link' => $target . 'nenien/generalites.php'
                ],
                [
                    'text' => 'Vie pratique',
                    'link' => $target . 'nenien/vie.php'
                ],
                [
                    'text' => 'Lieux',
                    'link' => $target . 'nenien/lieux.php'
                ],
                [
                    'text' => 'Personnages importants',
                    'link' => $target . 'nenien/personnages.php'
                ],
            ]
        ],
        [
            'title' => 'Système',
            'links' => [
                [
                    'text' => 'Mécaniques',
                    'link' => $target . 'systeme/mecaniques.php'
                ],
                [
                    'text' => 'Fiches de personnage',
                    'link' => $target . 'systeme/fiches.php'
                ],
            ]
        ],
    ];

    require(str_repeat('../', $n) . 'sidebar.html.php');
}
