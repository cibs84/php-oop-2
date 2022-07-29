<?php
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/AnonymousCustomer.php';
require_once __DIR__ . '/RegisteredCustomer.php';
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/DogsBed.php';
require_once __DIR__ . '/Litter.php';
require_once __DIR__ . '/PrepaidCard.php';


// Food Object
$drn_solo_vegetal_dry_food = new Food('DRN Solo Vegetal Dry Food', 'Dogs', 17);
$drn_solo_vegetal_dry_food->productCategory = 'Crocchette bio';
$drn_solo_vegetal_dry_food->manufacturer = 'DRN';
$drn_solo_vegetal_dry_food->description = "DRN Solo Vegetal Dry Food è un alimento completo e bilanciato per cani adulti, esclusivamente vegetale. DRN è riuscita a coniugare la ricerca e l'innovazione in materia di alimentazione con il desiderio di ogni proprietario di prendersi cura in modo speciale del proprio cane. I cereali e le proteine";

// Game Object
$kong_squiggles = new Game('Kong Squiggles', 'Dogs', 5);
$kong_squiggles->productCategory = 'Peluche';
$kong_squiggles->sizes = ['Medium', 'Small'];
$kong_squiggles->manufacturer = 'Kong';
$kong_squiggles->image = 'https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2021-11-19t103539.067_2.png?width=700&height=700&store=default&image-type=image';
$kong_squiggles->description = 'I KONG Squiggles sono elastici, molli e squittiscono facendo divertire i cani.Questi colorati giocattoli sono disponibili in un assortimento di diversi divertenti personaggi e hanno un corpo lungo ed elastico, oltre al sonoro su entrambi le estremità.Progettati con un’imbottitura minima per meno disordine, il vostro cane può scuotere e sbattere i nostri Squiggles e divertirsi al massimo.';

// DogsBed Object
$divanetto_harris = new DogsBed('Divanetto Harris', 'Dogs', 33);
$divanetto_harris->image = 'https://www.bauzaar.it/media/catalog/product/9/0/9034467_1.jpg?width=700&height=700&store=default&image-type=image';
$divanetto_harris->fabrics = ['velvet', 'synthetic'];
$divanetto_harris->description = 'Forma leggermente arrotondata con sponde laterali imbottite. Comodo cuscino incluso stile scozzese removibile per la pulizia. Double-face con un lato in tessuto e uno in elegante velluto.';

// Litter Object
$bentonite = new Litter('Bentonite', 'Cats', 4);
$bentonite->fragrances = ['Lavanda', 'Talco'];
$bentonite->manufacturer = 'Natural Code';
$bentonite->description = 'Natural Code Lettiera Bentonite è una lettiera agglomerante per gatti, al 100% naturale. Questa lettiera per gatti è composta da granuli particolarmente assorbenti e agglomeranti in grado di assorbire l\'urina del tuo amico felino in pochissimi secondi, impedendo così ai batteri di crescere, lasciando così la lettiera perfettamente asciutta e priva di polvere. La lettiera è disponibile in due diverse profumazioni: al talco e alla lavanda.';


// RegisteredCustomer Object
$andrea_verde = new RegisteredCustomer('Andrea', 'Verde', 'a.verde@gmail.com');
$andrea_verde->addProduct($kong_squiggles, 1);
$andrea_verde->addProduct($bentonite, 4);

// PrepaidCard Object
$andrea_verde_card = new PrepaidCard('Andrea Verde', 04/24, 233, 564897845);
$andrea_verde_card->balance = 1500;

// Effettua il pagamento
try {
    if ($andrea_verde->makePayment($andrea_verde_card) === 'ok') {
        echo '<h2>Grazie per aver acquistato nel nostro e-commerce</h2>';
}
} catch (Exception $e) {
    echo "<h2>Pagamento non andato a buon fine. Prova a controllare il saldo e riprova</h2>";
}


// AnonymousCustomer Object
$mario_rossi = new AnonymousCustomer('Mario', 'Rossi', 'm.rossi@gmail.com');
$mario_rossi->addProduct($kong_squiggles, 20);
$mario_rossi->addProduct($bentonite, 3);

$mario_rossi->balance = 0;

// Effettua il pagamento
try {
    if ($mario_rossi->makePayment(null) === 'ok') {
        echo '<h2>Grazie per aver acquistato nel nostro e-commerce</h2>';
    }
} catch (Exception $e) {
    echo "<h2>Pagamento non andato a buon fine. Prova a controllare il saldo e riprova</h2>";
}


// DEBUG
var_dump($mario_rossi);
var_dump($mario_rossi->calcFinalPrice());
?>