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


$items = [
    new Items(1, 'https://m.media-amazon.com/images/I/61Gm70FJSxL._AC_UF894,1000_QL80_.jpg', 'Crocchette per cane adulto', 29, $categories[0], $Animals),
    new Items(2, 'https://m.media-amazon.com/images/I/61L6e-DNrzL._AC_UF1000,1000_QL80_.jpg', 'Crocchette per cane adulto', 45, $categories[0], $Animals[0]),
];

?>
