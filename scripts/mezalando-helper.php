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
                    'link' => $target . 'index'
                ],
                [
                    'text' => 'Les projets autour de Mezalando',
                    'link' => $target . 'projects'
                ],
            ]
        ],
        [
            'title' => 'L\'encyclopédie de Mezalando',
            'links' => [
                [
                    'text' => 'Factions et conflits',
                    'link' => $target . 'histoire/factions'
                ],
                [
                    'text' => 'Races',
                    'links' => [
                        [
                            'text' => 'Les races Alters',
                            'link' => $target . 'races/alters'
                        ],
                        [
                            'text' => 'Derwenn',
                            'link' => $target . 'races/derwenn'
                        ],
                        [
                            'text' => 'Mutants',
                            'link' => $target . 'races/mutants'
                        ],
                        [
                            'text' => 'Loenn',
                            'link' => $target . 'races/loenn'
                        ],
                        [
                            'text' => 'Mirien',
                            'link' => $target . 'races/mirien'
                        ],
                        [
                            'text' => 'Anges',
                            'link' => $target . 'races/anges'
                        ],
                        [
                            'text' => 'Démons',
                            'link' => $target . 'races/demons'
                        ],
                        [
                            'text' => 'Esprits',
                            'link' => $target . 'races/esprits'
                        ],
                        [
                            'text' => 'Gwarden',
                            'link' => $target . 'races/gwarden'
                        ],
                        [
                            'text' => 'Alfren',
                            'link' => $target . 'races/alfren'
                        ],
                        [
                            'text' => 'Einherjärs',
                            'link' => $target . 'races/einherjars'
                        ],
                        [
                            'text' => 'Maestri',
                            'link' => $target . 'races/maestri'
                        ],
                    ]
                ],
                [
                    'text' => 'Magie',
                    'links' => [
                        [
                            'text' => 'Magie',
                            'link' => $target . 'magie/magie'
                        ],
                        [
                            'text' => 'Voies et branches',
                            'link' => $target . 'magie/voies'
                        ],
                        [
                            'text' => 'Objets enchantés',
                            'link' => $target . 'magie/objets'
                        ],
                        [
                            'text' => 'Invocations et animations',
                            'link' => $target . 'magie/invocations'
                        ],
                    ]
                ],
                [
                    'text' => 'Religions et croyances',
                    'link' => $target . 'religions'
                ],
                [
                    'text' => 'Alternet',
                    'link' => $target . 'alternet'
                ],
                [
                    'text' => 'Noms',
                    'link' => $target . 'noms'
                ]
            ]
        ],
        [
            'title' => 'Erentia',
            'links' => [
                [
                    'text' => 'Histoire',
                    'link' => $target . 'erentia/histoire'
                ],
                [
                    'text' => 'Géographie',
                    'link' => $target . 'erentia/geographie'
                ],
                [
                    'text' => 'Société',
                    'links' => [
                        [
                            'text' => 'Certificats de magie',
                            'link' => $target . 'societe/certificats'
                        ],
                        [
                            'text' => 'Guildes',
                            'link' => $target . 'societe/guildes'
                        ],
                        [
                            'text' => 'Gouvernance et économie',
                            'link' => $target . 'societe/gouvernance'
                        ],
                        [
                            'text' => 'Lois de l\'île',
                            'link' => $target . 'societe/lois'
                        ],
                        [
                            'text' => 'Garde et police',
                            'link' => $target . 'societe/garde'
                        ],
                        [
                            'text' => 'Célébrations et traditions',
                            'link' => $target . 'societe/traditions'
                        ],
                        [
                            'text' => 'Éducation',
                            'link' => $target . 'erentia/education'
                        ],
                    ]
                ],
                [
                    'text' => 'Vie pratique',
                    'links' => [
                        [
                            'text' => 'Langue, monnaie et calendrier',
                            'link' => $target . 'vie/langue'
                        ],
                        [
                            'text' => 'Accès à l\'île',
                            'link' => $target . 'erentia/acces'
                        ],
                        [
                            'text' => 'Technologie',
                            'link' => $target . 'erentia/technologie'
                        ],
                        [
                            'text' => 'Communication',
                            'link' => $target . 'erentia/communication'
                        ],
                        [
                            'text' => 'Déplacement',
                            'link' => $target . 'erentia/deplacements'
                        ],
                        [
                            'text' => 'Drogues et alcool',
                            'link' => $target . 'erentia/drogues'
                        ],
                        [
                            'text' => 'Médecine et accès aux soins',
                            'link' => $target . 'erentia/medecine'
                        ],
                        [
                            'text' => 'Sports',
                            'link' => $target . 'erentia/sports'
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
                    'link' => $target . 'nenien/generalites'
                ],
                [
                    'text' => 'Vie pratique',
                    'link' => $target . 'nenien/vie'
                ],
                [
                    'text' => 'Lieux',
                    'link' => $target . 'nenien/lieux'
                ],
                [
                    'text' => 'Personnages importants',
                    'link' => $target . 'nenien/personnages'
                ],
            ]
        ],
        [
            'title' => 'Système',
            'links' => [
                [
                    'text' => 'Mécaniques',
                    'link' => $target . 'systeme/mecaniques'
                ],
                [
                    'text' => 'Fiches de personnage',
                    'link' => $target . 'systeme/fiches'
                ],
            ]
        ],
    ];

    require(str_repeat('../', $n) . 'sidebar.html.php');
}
