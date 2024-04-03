<?php

require "./Models/Category.php";
require "./Models/Product.php";
require "./Models/Beds.php";
require "./Models/Food.php";
require "./Models/Games.php";



$product1Category = new Category("cani");

$product1 = new Foods(
    "Dagel alfa cane pollo da 20 kg",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento). Queste crocchette per gatti sono prodotte in modo particolare per fornire un'adeguata digestione, soprattutto dei grassi (energia pronta ad essere utilizzata). Caratteristiche principali di Top Cat: adatto per gatti sterilizzati, aiuta ad eliminare i peli ingeriti, aiuta lo sviluppo muscolare, sano, gustoso e appetibile, completo e digeribile, ricco di antiossidanti, senza coloranti aggiunti, Made in Italy. La ricetta è preparata con carne disidratata e con solo grassi animali di altissima qualità, che oltre all'immediato apporto energetico, aumentano l'appetibilità ed esaltano la lucentezza del pelo. Top Cat è un prodotto dal valore nutrizionale elevato, in grado di offrire una alimentazione completa e bilanciata grazie all’apporto ottimale di proteine, grassi, carboidrati, vitamine e minerali utili al sostentamento ed il benessere del tuo gatto.",
    "https://www.zooexpert.it/15850-thickbox_default/dagel-alfa-gatto-pollo-da-20-kg.jpg",
    "53,80 €",
    $product1Category,
    "2 kg",
    "Pollo, riso, melograno",
);

$product2Category = new Category("gatti");

$product2 = new Foods(
    "Dagel alfa gatto pollo da 10 kg",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento). Queste crocchette per gatti sono prodotte in modo particolare per fornire un'adeguata digestione, soprattutto dei grassi (energia pronta ad essere utilizzata). Caratteristiche principali di Top Cat: adatto per gatti sterilizzati, aiuta ad eliminare i peli ingeriti, aiuta lo sviluppo muscolare, sano, gustoso e appetibile, completo e digeribile, ricco di antiossidanti, senza coloranti aggiunti, Made in Italy. La ricetta è preparata con carne disidratata e con solo grassi animali di altissima qualità, che oltre all'immediato apporto energetico, aumentano l'appetibilità ed esaltano la lucentezza del pelo. Top Cat è un prodotto dal valore nutrizionale elevato, in grado di offrire una alimentazione completa e bilanciata grazie all’apporto ottimale di proteine, grassi, carboidrati, vitamine e minerali utili al sostentamento ed il benessere del tuo gatto.",
    "https://www.zooexpert.it/15850-thickbox_default/dagel-alfa-gatto-pollo-da-20-kg.jpg",
    "34,80 €",
    $product2Category,
    "1.5 kg",
    "Agnello, riso",
);

$product3Category = new Category("gatti");

$product3 = new Games(
    "VITAKRAFT GATTO TIRAGRAFFI MULTIPIANO CON AMACA E CUCCETTE GRIGIO",
    "Il tiragraffi multipiano di Vitakraft è la soluzione ideale per far giocare il tuo gatto grazie ai vari ripiani e ai giochi. Le cuccette e l’amaca sono il posto ideale dove il gatto può riposare, mentre sulle colonne può soddisfare il naturale bisogno di farsi le unghie, allontanandolo così da divani, tende e tappeti. Il tiragraffi è rivestito in morbido peluche e le colonnine sono ricoperte di corda di Sisal, che non danneggia le unghie. In colore grigio.",
    "https://www.zooexpert.it/15547-large_default/vitakraft-gatto-tiragraffi-multipiano-con-amaca-e-cuccette-grigio.jpg",
    "106,27 €",
    $product3Category,
    "plastica e stoffa",
);

$product4Category = new Category("cani");

$product4 = new Games(
    "PALLA GOMMA DURA LARGE",
    "Questa pallina per cani in gomma dura è un utile gioco antistress per far divertire il vostro animale durante la giornata. Realizzata con un materiale particolarmente resistente,  è perfetta se il vostro amico ha l'abitudine di mordere e prendere in bocca il gioco. Prodotta con materiali assolutamente sicuri e di prima scelta, questa palla-gioco è disponibile in quattro diverse grandezze di diametro per adattarsi a tutte le taglie di cani ed è decorata con una piacevole fantasia astratta multicolore. Un simpatico regalo per il vostro adorato peloso!",
    "https://www.zooexpert.it/1181-large_default/palla-gomma-dura-large.jpg",
    "7,52 €",
    $product4Category,
    "plastica",
);

$product5Category = new Category("cani");

$product5 = new Beds(
    "Leopet cane cuccia rodi verde reversibile",
    " La Cuccia Rodi Reversibile Leopet è realizzata in tessuto tecnico idrorepellente Oxford ed è particolarmente indicata per i Pet Lover che si stancano facilmente della stessa cuccia. Grazie alla sua reversibilità, presenta due lati con colorazioni diverse. La cuccia ha una forma rettangolare, è metà in tessuto tecnico in tinta unita verde con trama a nido d’ape waterproof e metà in tinta unita verde. La cuccia è dotata di cuscino estraibile e base antiscivolo ed è imbottita con morbida fibra di poliestere.",
    "https://www.zooexpert.it/15575-large_default/leopet-cane-cuccia-rodi-verde-60x70-cm-reversibile.jpg",
    "34,77 €",
    $product5Category,
    "60x70 cm",
);

$product6Category = new Category("gatti");

$product6 = new Beds(
    "Ferribiella gatto igloo gatto nuvoletta rosa",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento). Queste crocchette per gatti sono prodotte in modo particolare per fornire un'adeguata digestione, soprattutto dei grassi (energia pronta ad essere utilizzata). Caratteristiche principali di Top Cat: adatto per gatti sterilizzati, aiuta ad eliminare i peli ingeriti, aiuta lo sviluppo muscolare, sano, gustoso e appetibile, completo e digeribile, ricco di antiossidanti, senza coloranti aggiunti, Made in Italy. La ricetta è preparata con carne disidratata e con solo grassi animali di altissima qualità, che oltre all'immediato apporto energetico, aumentano l'appetibilità ed esaltano la lucentezza del pelo. Top Cat è un prodotto dal valore nutrizionale elevato, in grado di offrire una alimentazione completa e bilanciata grazie all’apporto ottimale di proteine, grassi, carboidrati, vitamine e minerali utili al sostentamento ed il benessere del tuo gatto.",
    "https://www.zooexpert.it/14396-large_default/ferribiella-gatto-igloo-gatto-nuvoletta-50-x-50-cm-rosa.jpg",
    "49,80 €",
    $product6Category,
    "50x50 cm",

);


$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
];
