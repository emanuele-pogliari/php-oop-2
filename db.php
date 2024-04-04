<?php

require "./Models/Category.php";
require "./Models/Product.php";
require "./Models/Beds.php";
require "./Models/Food.php";
require "./Models/Games.php";

$product1Category = new Category('<i class="fa-solid fa-dog"></i>');

$product1 = new Foods(
    "Purina veterinary diet cane",
    "Purina pro plan è un alimento dietetico completo per cuccioli e cani adulti, altamente digeribile, formulato con basso contenuto di fibre per la compensazione della cattiva digestione e in caso di insufficienza pancreatica esocrina.",
    "https://www.zooexpert.it/15338-large_default/purina-veterinary-diet-cane-en-gastrointestinal-da-12-kg.jpg",
    "53,80 €",
    $product1Category,
    "Pollo, riso, melograno",
    "Small",
    "Medium",
    "Big",
);

$product2Category = new Category('<i class="fa-solid fa-cat"></i>');

$product2 = new Foods(
    "Agras schesir gatto dry carnivore aringa e salmone",
    "Agras schesir gatto dry born carnivore aringa e arancia, sono le uniche crocchette cotte al forno a bassa temperatura, per conservare vitamine e minerali.",
    "https://www.zooexpert.it/15840-large_default/agras-schesir-gatto-dry-carnivore-aringa-e-salmone-da-125-kg.jpg",
    "19,19 €",
    $product2Category,
    "Aringa, Salmone",
    "Small",
    "Medium",
    "Big",

);

$product3Category = new Category('<i class="fa-solid fa-cat"></i>');

$product3 = new Games(
    "Vitakraft Tiragraffi Multipiano con amaca e cuccette",
    "Il tiragraffi multipiano di Vitakraft è la soluzione ideale per far giocare il tuo gatto grazie ai vari ripiani e ai giochi. Le cuccette e l’amaca sono il posto ideale dove il gatto può riposare, mentre sulle colonne può soddisfare il naturale bisogno di farsi le unghie, allontanandolo così da divani, tende e tappeti.",
    "https://www.zooexpert.it/15547-large_default/vitakraft-gatto-tiragraffi-multipiano-con-amaca-e-cuccette-grigio.jpg",
    "106,27 €",
    $product3Category,
    "plastica e stoffa",
);

$product4Category = new Category('<i class="fa-solid fa-dog"></i>');

$product4 = new Games(
    "Palla gomma dura large",
    "Questa pallina per cani in gomma dura è un utile gioco antistress per far divertire il vostro animale durante la giornata. Realizzata con un materiale particolarmente resistente,  è perfetta se il vostro amico ha l'abitudine di mordere e prendere in bocca il gioco.",
    "https://www.zooexpert.it/1181-large_default/palla-gomma-dura-large.jpg",
    "7,52 €",
    $product4Category,
    "plastica",
);

$product5Category = new Category('<i class="fa-solid fa-dog"></i>');

$product5 = new Beds(
    "Leopet cane cuccia rodi verde reversibile",
    " La Cuccia Rodi Reversibile Leopet è realizzata in tessuto tecnico idrorepellente Oxford ed è particolarmente indicata per i Pet Lover che si stancano facilmente della stessa cuccia. Grazie alla sua reversibilità, presenta due lati con colorazioni diverse.",
    "https://www.zooexpert.it/15575-large_default/leopet-cane-cuccia-rodi-verde-60x70-cm-reversibile.jpg",
    "34,77 €",
    $product5Category,
    "Small",
    "Medium",
    "Big",
);

$product6Category = new Category('<i class="fa-solid fa-cat"></i>');

$product6 = new Beds(
    "Ferribiella gatto igloo gatto nuvoletta rosa",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento).",
    "https://www.zooexpert.it/14396-large_default/ferribiella-gatto-igloo-gatto-nuvoletta-50-x-50-cm-rosa.jpg",
    "49,80 €",
    $product6Category,
    "Small",
    "Medium",
    "Big",

);


$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
];
