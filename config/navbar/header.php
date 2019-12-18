<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06",
                    ],
                    [
                        "text" => "kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Rapporter",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgschema",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport kmom04",
                    ],
                    [
                        "text" => "Laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport kmom05",
                    ],
                    [
                        "text" => "Designelement",
                        "url" => "rapport/designelement",
                        "title" => "Designelement kmom06",
                    ],
                    [
                        "text" => "Designprinciper",
                        "url" => "rapport/designprinciper",
                        "title" => "Designprinciper kmom06",
                    ],
                    [
                        "text" => "Designprincip",
                        "url" => "rapport/designprincip",
                        "title" => "Analys Designprincip kmom06",
                    ],
                ],
            ],
        ],
        [
            "text" => "Dagens Bild",
            "url" => "blogg",
            "title" => "Dagens Bild",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Bild 1",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Inlägg 1",
                    ],
                    [
                        "text" => "Bild 2",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Inlägg 2",
                    ],
                    [
                        "text" => "Bild 3",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Inlägg 3",
                    ],
                ],
            ],
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Lekplats",
            "url" => "test",
            "title" => "Lekplats för test och annat",
        ],
    ],
];
