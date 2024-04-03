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

$product3Category = new Category("cani");

$product3 = new Foods(
    "Dagel alfa cane pollo da 20 kg",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento). Queste crocchette per gatti sono prodotte in modo particolare per fornire un'adeguata digestione, soprattutto dei grassi (energia pronta ad essere utilizzata). Caratteristiche principali di Top Cat: adatto per gatti sterilizzati, aiuta ad eliminare i peli ingeriti, aiuta lo sviluppo muscolare, sano, gustoso e appetibile, completo e digeribile, ricco di antiossidanti, senza coloranti aggiunti, Made in Italy. La ricetta è preparata con carne disidratata e con solo grassi animali di altissima qualità, che oltre all'immediato apporto energetico, aumentano l'appetibilità ed esaltano la lucentezza del pelo. Top Cat è un prodotto dal valore nutrizionale elevato, in grado di offrire una alimentazione completa e bilanciata grazie all’apporto ottimale di proteine, grassi, carboidrati, vitamine e minerali utili al sostentamento ed il benessere del tuo gatto.",
    "https://www.zooexpert.it/15850-thickbox_default/dagel-alfa-gatto-pollo-da-20-kg.jpg",
    "53,80 €",
    $product1Category,
    "2 kg",
    "Pollo, riso, melograno",
);

$product4Category = new Category("cani");

$product4 = new Foods(
    "Dagel alfa cane pollo da 20 kg",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento). Queste crocchette per gatti sono prodotte in modo particolare per fornire un'adeguata digestione, soprattutto dei grassi (energia pronta ad essere utilizzata). Caratteristiche principali di Top Cat: adatto per gatti sterilizzati, aiuta ad eliminare i peli ingeriti, aiuta lo sviluppo muscolare, sano, gustoso e appetibile, completo e digeribile, ricco di antiossidanti, senza coloranti aggiunti, Made in Italy. La ricetta è preparata con carne disidratata e con solo grassi animali di altissima qualità, che oltre all'immediato apporto energetico, aumentano l'appetibilità ed esaltano la lucentezza del pelo. Top Cat è un prodotto dal valore nutrizionale elevato, in grado di offrire una alimentazione completa e bilanciata grazie all’apporto ottimale di proteine, grassi, carboidrati, vitamine e minerali utili al sostentamento ed il benessere del tuo gatto.",
    "https://www.zooexpert.it/15850-thickbox_default/dagel-alfa-gatto-pollo-da-20-kg.jpg",
    "53,80 €",
    $product1Category,
    "2 kg",
    "Pollo, riso, melograno",
);

$product5Category = new Category("cani");

$product5 = new Foods(
    "Dagel alfa cane pollo da 20 kg",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento). Queste crocchette per gatti sono prodotte in modo particolare per fornire un'adeguata digestione, soprattutto dei grassi (energia pronta ad essere utilizzata). Caratteristiche principali di Top Cat: adatto per gatti sterilizzati, aiuta ad eliminare i peli ingeriti, aiuta lo sviluppo muscolare, sano, gustoso e appetibile, completo e digeribile, ricco di antiossidanti, senza coloranti aggiunti, Made in Italy. La ricetta è preparata con carne disidratata e con solo grassi animali di altissima qualità, che oltre all'immediato apporto energetico, aumentano l'appetibilità ed esaltano la lucentezza del pelo. Top Cat è un prodotto dal valore nutrizionale elevato, in grado di offrire una alimentazione completa e bilanciata grazie all’apporto ottimale di proteine, grassi, carboidrati, vitamine e minerali utili al sostentamento ed il benessere del tuo gatto.",
    "https://www.zooexpert.it/15850-thickbox_default/dagel-alfa-gatto-pollo-da-20-kg.jpg",
    "53,80 €",
    $product1Category,
    "2 kg",
    "Pollo, riso, melograno",
);

$product6Category = new Category("cani");

$product6 = new Foods(
    "Dagel alfa cane pollo da 20 kg",
    "Top Cat Premium Carne Arrosto è un cibo secco per gatti in grado di fornire al tuo gatto un'alimentazione completa, realizzata per soddisfare il requisito nutrizionale dei gatti che svolgono un intenso lavoro fisico (agilità, caccia, esposizione, allattamento). Queste crocchette per gatti sono prodotte in modo particolare per fornire un'adeguata digestione, soprattutto dei grassi (energia pronta ad essere utilizzata). Caratteristiche principali di Top Cat: adatto per gatti sterilizzati, aiuta ad eliminare i peli ingeriti, aiuta lo sviluppo muscolare, sano, gustoso e appetibile, completo e digeribile, ricco di antiossidanti, senza coloranti aggiunti, Made in Italy. La ricetta è preparata con carne disidratata e con solo grassi animali di altissima qualità, che oltre all'immediato apporto energetico, aumentano l'appetibilità ed esaltano la lucentezza del pelo. Top Cat è un prodotto dal valore nutrizionale elevato, in grado di offrire una alimentazione completa e bilanciata grazie all’apporto ottimale di proteine, grassi, carboidrati, vitamine e minerali utili al sostentamento ed il benessere del tuo gatto.",
    "https://www.zooexpert.it/15850-thickbox_default/dagel-alfa-gatto-pollo-da-20-kg.jpg",
    "53,80 €",
    $product1Category,
    "2 kg",
    "Pollo, riso, melograno",
);


$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
];
