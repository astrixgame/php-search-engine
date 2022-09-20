<?php

    $array = [
        "PHP"=>["keywords"=>"language;programming;web;static","description"=>"In this programming language you can code a web with static content, but on load has written by PHP code."],
        "JS"=>["keywords"=>"language;programming;web;dynmaic;javascript","description"=>"This is one of parts in webs."],
        "HTML"=>["keywords"=>"language;programming;web;static;hyper;text;markup","description"=>"This is main programming language for static or dynamic webs."],
        "CSS"=>["keywords"=>"language;programming;web;static;dynamic;style;cascading;sheet;sheets","description"=>"This language if required for html in webs, css is style for web pages."],
        "C++"=>["keywords"=>"language;programming;app;software;operation;system;3D;low;level","description"=>"C++ language is typicaly used for games, apps, operating systems and next softwares."],
        "C#"=>["keywords"=>"language;programming;app;software;system;3D;medium;middle;level","description"=>"C# language is typicaly used for apps and next softwares."],
        "Java"=>["keywords"=>"language;programming;app;software;3D;medium;middle;level","description"=>"Java language is can be used in games or apps or utilits."],
        "Python"=>["keywords"=>"language;programming;high;level;small","description"=>"Python is can be used for utilits or small apps."]
    ];

    file_put_contents("search.json", json_encode($array));

?>