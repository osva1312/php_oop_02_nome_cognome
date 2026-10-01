<?php


  Class  Vertebrates {
   
   public function __construct(){
    $this->printVertebrate();
   }
   protected function printVertebrate(){
    echo "Sono un animale vertebrato \n";
   }
   

}
class warm_bloodded extends Vertebrates{
    public function __construct(){
        parent:: __construct();
        $this->printWarmBlood();
    }
    protected function printWarmBlood(){
        echo "Sono un animale a Sangue Caldo\n";
    }
}
class cold_bloodded extends Vertebrates{
    public function __construct(){
        parent:: __construct();
        $this->printColdBlood();
    }
    protected function printColdBlood(){
        echo "Sono un animale a Sangue Freddo\n";
    }
}
class Birds extends warm_bloodded{
    public function __construct(){
        parent:: __construct();
        $this->printBird();
    }
    protected function printBird(){
        echo "Sono un Uccelo\n";
    }
}
class Mammals extends warm_bloodded{
    public function __construct(){
        parent:: __construct();
        $this->printMammal();
    }
    protected function printMammal(){
        echo "Sono un Mammifero\n";
    }
}
class Fish extends cold_bloodded{
    public function __construct(){
        parent:: __construct();
        $this->printFish();
    }
    protected function printFish(){
        echo "Sono un Pesce\n";
    }
}
class Reptiles extends cold_bloodded{
    public function __construct(){
        parent:: __construct();
        $this->printReptile();
    }
    protected function printReptile(){
        echo "Sono un Reptile\n";
    }
}
class Amphibians extends cold_bloodded{
    public function __construct(){
        parent:: __construct();
        $this->printAmphibian();
    }
    protected function printAmphibian(){
        echo "Sono un Amphibian\n";
    }
}
$magikarp = new Fish();
