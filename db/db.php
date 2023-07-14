<?php
include_once __DIR__ . '/../classes/Items.php';


$categories = [
    new Category('Cibo'),
    new Category('Giochi'),
    new Category('Cucce'),
    new Category('Pet Care'),
];

$animals = [
    new Animals('Cane'),
    new Animals('Gatto'),
];


$itemsdog = [
    new Items(1, 'https://m.media-amazon.com/images/I/61Gm70FJSxL._AC_UF894,1000_QL80_.jpg', 'Crocchette per cane adulto', 29, $categories[0], $animals[0]),
    new Items(2, 'https://m.media-amazon.com/images/I/61L6e-DNrzL._AC_UF1000,1000_QL80_.jpg', 'Crocchette per cane adulto', 45, $categories[0], $animals[0]),
    new Items(3, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/pollo/in/lattice/6/800/60576_PLA_Hundespielzeug_Spiel_Huhn_mit_Squeaker_HS_6.jpg', 'Pollo in lattice', '2,69', $categories[1], $animals[0]),
    new Items(4, 'https://shop-cdn-m.mediazs.com/bilder/kong/classic/2/800/46452_pla_kong_classic_hs_01_2.jpg', 'KONG Classic', '8,99', $categories[1], $animals[0]),
    new Items(5, 'https://www.naturepetshop.it/wp-content/uploads/9619.jpg', 'Cuccia Loppa hunter', 32, $categories[2], $animals[0]),
    new Items(6, 'https://www.duepuntootto.com/454-large_default/henri-cuccia-cotone.jpg', 'Cuccia Henri in cotone', '19,99', $categories[2], $animals[0]),
    new Items(7, 'https://egress.storeden.net/gallery/602c5fd2be7ea044d08b6a7e', 'Shampoo per cani neutro', 10, $categories[3], $animals[0]),
    new Items(8, 'https://www.carrefour.it/on/demandware.static/-/Sites-carrefour-master-catalog-IT/default/dwa7647760/large/PETSHAMPOOALPROTEINE-8007229003623-5.png', 'Shampoo per cani a pelo corto', 10, $categories[3], $animals[0]),
];

$itemscat = [
    new Items(1, 'https://iperverde.it/cdn/shop/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379', 'Cibo umido con tenero vitello e tacchino', '1,50', $categories[0], $animals[1]),
    new Items(2, 'https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1662822271/products/pim/3065890122222_ShebaCreazioniSalsaTac_PolloVerdure85gr_8367_IT/sheba-cibo-umido-per-gatti-in-salsa-con-tacchino-pollo-e-verdure-creazioni-speciali', 'Cibo umido con tacchino, pollo e verdure', '1,50', $categories[0], $animals[1]),
    new Items(3, 'https://consigli.b-cdn.net/cdn/imgarticoli/82786-giochi-gatti-3.jpg', 'Stick con piume e sonagli', '5,99', $categories[1], $animals[0]),
    new Items(4, 'https://www.animaliapet.it/immagini/ecommerce/Fop-Taglianodi-9-Lame-Ondulate-per-Cani-e-Gatti-87.jpg', 'Pallina con crocchette', '12,99', $categories[1], $animals[1]),
    new Items(5, 'https://www.tradeshopitalia.com/134563-large_default/cuccia-per-gatti-universale-a-meta-chiuso-con-morbido-cuscino-interno-tgm.jpg', 'Cuccia morbida in cotone e lana', '39,99', $categories[2], $animals[1]),
    new Items(6, 'https://www.luxpets.com/media/wysiwyg/tweencucce.jpg', 'Cuccia regale vellutata in legno massello', '89,99', $categories[2], $animals[1]),
    new Items(7, 'https://www.naturaldermapet.it/wp-content/uploads/2019/06/shampoo-per-gatti.jpg', 'Shampoo per gatti con estratto di camomilla e malva', 15, $categories[3], $animals[1]),
    new Items(8, 'https://tropical-store.com/28480-large_default/copy-of-camon-small-deluxe-nail-cutter.jpg', 'Forbici tagliaunghie per gatti e animali piccoli', 10, $categories[3], $animals[1]),
];

?>
