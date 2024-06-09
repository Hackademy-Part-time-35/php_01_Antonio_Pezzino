/* 
Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura: 

 Category 
  -- Attualita' 
  -- Sport 
  -- Gossip 
  -- Storia 
Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.
*/


<?php
abstract class Category {
    abstract public function getMyCategory();
}

class Attualita extends Category {
    public function getMyCategory() {
        return "Categoria: Attualita'";
    }
}

class Sport extends Category {
    public function getMyCategory() {
        return "Categoria: Sport";
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        return "Categoria: Gossip";
    }
}

class Storia extends Category {
    public function getMyCategory() {
        return "Categoria: Storia";
    }
}
?>
