<?php 
    require_once __DIR__.'/Models/Food.php';
    require_once __DIR__.'/Models/Toy.php';
    require_once __DIR__.'/Models/Accessories.php';
    
    $dog = new Category('Cane');
    $cat = new Category('Gatto');
    $bird = new Category('Uccelli');
    $fish = new Category('Pesci');

    $croccantini_1 = new Food('Royal Canin','Mini Adult','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',14.95,'Croccanti per cani adulti di taglia piccola, da 1 a 10 kg di peso.',$dog,200);
    $croccantini_2 = new Food('Almo Nature','Holistic Medium Adult con Pollo','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',39.89,'Croccanti per cani adulti.',$dog,1500);
    $umido = new Food('Almo Nature','Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',1.27,'Alimento umido in lattina, per gatti adulti.',$cat,400);
    $mangime = new Food('Tetra','Mangime per Pesci Guppy in Fiocchi','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',3.41,'Fiocchi appositamente formulati per soddisfare le esigenze nutrizionali dei pesci guppy e altri pesci vivipari.',$fish,30);
    $giocattolo_1 = new Toy('Kong','Classic','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',5.69,'Salta e rimbalza di qua e di là, soddisfa il bisogno di masticare e di giocare del cane',$dog,'plastica');
    $giocattolo_2 = new Toy('Trixie','Topini di peluche','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',4.49,'Topini in peluche grigio e bianco, con interno in catnip pressato, esterno morbido, codina in corda.',$cat,'peluche');
    $gabbie = new Accessories('Ferplast','Voliera Wilma in Legno','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',335.85,'Una raffinata e spaziosa voliera per canarini.', $bird);
    $filtri = new Accessories('Tetra','Cartucce Filtranti per Filtro EasyCrystal','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',10.68,"Per un'acqua cristallina e sana innovative cartucce filtranti.",$fish);

    $products_food= [$croccantini_1,$croccantini_2,$umido,$mangime];
    $products_toy= [$giocattolo_1,$giocattolo_2];
    $products_accessories= [$gabbie,$filtri];
?>