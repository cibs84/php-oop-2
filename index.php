<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
BONUS:
Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto. -->

PRODUCTS
    Cibo
        marca
        nome prodotto
        type
            secco
            umido
            ecc..
        
        forAnimal
            dog
            cat
            ecc..

    Cucce
        

    Giochi
        

class Product {

    public $nome;

    public $marca;

    public $categoriaAnimale;

    public $prezzo;

    public $immagine;

    public function __construct($_categoriaAnimale, $_nome, $_prezzo) {
        $this->nome = $_nome; 
        $this->categoriaAnimale = $_categoriaAnimale;
        $this->prezzo = $_prezzo;
    }
}
    