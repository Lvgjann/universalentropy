<?php
require_once('helpers.php');

function set_cosmicvoid_sidebar($n)
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
            'title' => 'Dante313',
            'links' => [
                [
                    'text' => 'Déclin',
                    'links' => [
                        [
                            'text' => 'Nukes',
                            'link' => $target . 'dante/nukes'
                        ],
                        [
                            'text' => 'La chute de Kero',
                            'link' => $target . 'dante/thunder'
                        ],
                        [
                            'text' => 'Dernière nuit à Londres',
                            'link' => $target . 'dante/icedearth'
                        ],
                        [
                            'text' => 'Nukes : Blood Cells',
                            'link' => $target . 'dante/bloodcells'
                        ]
                    ]
                ],
                [
                    'text' => 'Pandémie',
                    'links' => [
                        [
                            'text' => 'Virus 201',
                            'link' => $target . 'dante/virus'
                        ],
                        [
                            'text' => 'Quarantaine',
                            'link' => $target . 'dante/quarantine'
                        ],
                        [
                            'text' => 'La rébellion de Galboa',
                            'link' => $target . 'dante/blackflag'
                        ],
                        [
                            'text' => 'Nukes : Berezina',
                            'link' => $target . 'dante/berezina'
                        ]
                    ]
                ],
                [
                    'text' => 'La fin ?',
                    'links' => [
                        [
                            'text' => 'À venir : Et après',
                            'link' => 'javascript:void(0)'
                        ],
                        [
                            'text' => 'À venir',
                            'link' => 'javascript:void(0)'
                        ]
                    ]
                ]
            ]
        ],
        [
            'title' => 'Dante313 : Phase XIII',
            'links' => [
                [
                    'text' => 'Asylum 31',
                    'link' => $target . 'dante/asylum'
                ],
                [
                    'text' => 'Brotherhood',
                    'link' => $target . 'dante/brotherhood'
                ]
            ]
        ],
        [
            'title' => 'No Way Out',
            'links' => [
                [
                    'text' => 'The Island',
                    'link' => $target . 'nowayout/island'
                ],
                [
                    'text' => 'Le Commissaire',
                    'link' => $target . 'nowayout/commissar'
                ]
            ]
        ],
        [
            'title' => 'The Continental',
            'links' => [
                [
                    'text' => 'À venir : New York',
                    'link' => 'javascript:void(0)'
                ],
                [
                    'text' => 'À venir : Rome',
                    'link' => 'javascript:void(0)'
                ],
                [
                    'text' => 'À venir : Paris',
                    'link' => 'javascript:void(0)'
                ]
            ]
        ],
        [
            'title' => 'Système de jeu',
            'links' => [
                [
                    'text' => 'Système',
                    'link' => $target . 'misc/system'
                ],
                [
                    'text' => 'Modèles de fiches',
                    'link' => $target . 'misc/templates'
                ],
                [
                    'text' => 'Trivia',
                    'link' => $target . 'misc/trivia'
                ]
            ]
        ]
    ];

    require(str_repeat('../', $n) . 'sidebar.html.php');
}
