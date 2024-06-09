<?php
require_once './class.php';

class Post {
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Category $categoria, $tag = []) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function displayPost() {
        echo "Titolo: " . $this->titolo . "\n";
        echo "Categoria: " . $this->categoria->getMyCategory() . "\n";
        echo "Tag: " . implode(', ', $this->tag) . "\n";
    }
}

$attualita = new Attualita();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

$post1 = new Post("24NoSTOP", $attualita, ["news", "attualita"]);
$post2 = new Post("Manca poco agli europei", $sport, ["calcio", "sport"]);
$post3 = new Post("Possibili inciuci a corte", $gossip, ["celebrity", "rumors"]);
$post4 = new Post("Scoperta che cambia la storia", $storia, ["storia", "archeologia"]);

$post1->displayPost();
echo "\n";
$post2->displayPost();
echo "\n";
$post3->displayPost();
echo "\n";
$post4->displayPost();

?>
