var jq = jQuery.noConflict();
    jq( function() {
        var availableTags = [
        "Astro",
        "Ateez",
        "Bangtan",
        "Blackpink",
        "BTS",
        "Busan",
        "Comida coreana",
        "Corea del Sur",
        "Daegu",
        "Economía de Corea del Sur",
        "Gangnam",
        "Gastronomía de Corea del Sur",
        "Golden Seoul Hotel",
        "Got7",
        "Gyeongbokgung",
        "Hahoe",
        "Hotel Regent Marine The Blue",
        "Inchon",
        "Isla de Jeju",
        "Jeju",
        "K-POP Hotel Seoul Tower",
        "Lotte World Tower",
        "Maquillaje coreano",
        "Marcas coreanas",
        "Mayplace Seoul Dongdaemun",
        "N Seoul Tower",
        "Namsan",
        "Noel Business Hotel",
        "Palacio Gyeongbokgung",
        "Rutina coreana",
        "Tomorrow x Together",
        "TXT",
        "Sitios turísticos de Corea"
        ];
        jq( "#tags" ).autocomplete({
        source: availableTags
        });
    } );