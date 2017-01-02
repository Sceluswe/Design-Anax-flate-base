<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css"
            ]
        ],

        /*"default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],*/

        "separator01" => "------------------------------------------------",

        "vgrid"      => [
            "title"      => "Vertical grid",
            "class"      => "vgrid",
            "stylesheets" => [
                "css/vgrid.min.css"
            ]
        ],

        "hgrid"      => [
            "title"      => "Horizontal typography grid",
            "class"      => "hgrid",
            "stylesheets" => [
                "css/hgrid.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "",
            "stylesheets" => ["css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "",
            "stylesheets" => ["css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "",
            "stylesheets" => ["css/typography.min.css"]
        ]
    ]
];
