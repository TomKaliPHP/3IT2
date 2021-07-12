<?php

abstract class Pribeh {
  public $message;
  public function __construct($message) {
    $this->message = $message;

  }

  abstract public function CastPribehu() : string; 
}

class JmenoPostavy extends Pribeh {
  public function CastPribehu() : string {
    if (RandomVerzePribehu() == 1){
        return "Bylo nebylo. Jednoho dnes se <b>$this->message </b> rozhodl vydat dosvěta. <br />"; 
    }
    else {
        return "Za sedmero horami a řekami žil byl jednou jeden <b> $this->message</b>, který rozhodl vydat do světa. <br />";   
    }
  }
}

class ProfesePostavy extends Pribeh {
  public function CastPribehu() : string {
    if (RandomVerzePribehu() == 1){
        return "Jakožto zkušený <b>$this->message</b> si sbalil vše potřebné a vyrazil. <br />"; 
    }
    else {
        return "Jakožto amatérský a nezkušený <b>$this->message</b> si umanul opustil svou domovinu. <br />";   
    }
  }
}

class OdkudPostavaPrichazi extends Pribeh {
  public function CastPribehu() : string {
    if (RandomVerzePribehu() == 1){
        return "Náše hlavní postava pochází z místa zvaného <b>$this->message</b>. Že jste o něm nikdy neslyšeli? <br />";
    }
    else {
        return "A odkud, že pochází? Z místa zvaného <b>$this->message</b>. Že jste o něm nikdy neslyšeli? <br />";   
    }
  }
}

class CilCesty extends Pribeh {
    public function CastPribehu() : string {
        if (RandomVerzePribehu() == 1){
            return "A za jakým účelem byla vlastně tato cesta podniknuta?  <b>$this->message</b>!"; 
        }
        else {
            return "<b>$this->message</b>! To byl hlavní důvod k podniknutí této výpravy.";  
        }        
    }
  }

    //generování random čísla mezi 1/2 pro jednotlivou část příběhu
    function RandomVerzePribehu(){
    $random_cislo = rand(1,2);
    return $random_cislo;
}
    //aler pokud nejsou všechna polička vyplněna
    function NevyplnenePolicko($alert) {  
    echo "<script>
          alert('$alert');
          </script>";  
}


    //oveření, zda jsou všechna políčka vyplněna
  if(!empty($_POST["postava"] || $_POST["profese"] || $_POST["puvod"] || $_POST["duvod"] )  ){

    //pokud ano, provést následující akce
    if(isset($_POST["submit"]))
    {



        $jmeno_postavy = new JmenoPostavy($_POST["postava"]);
        echo $jmeno_postavy->CastPribehu();

        $profese_postavy = new ProfesePostavy($_POST["profese"]);
        echo $profese_postavy->CastPribehu();

        $puvod_postavy = new OdkudPostavaPrichazi($_POST["puvod"]);
        echo $puvod_postavy->CastPribehu();

        $duvod_cesty = new CilCesty($_POST["duvod"]);
        echo $duvod_cesty->CastPribehu();
    }
}
//Pokud nikoliv, vyhodit alert a vrtátit zpět
else{
    NevyplnenePolicko("Prosím, veplňte všechna políčka příběhu"); 
}

?>
 
