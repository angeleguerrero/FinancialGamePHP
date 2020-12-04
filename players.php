<?php
//Billetes definidos como constantes
  define('B500', 500);
  define('B100', 100);
  define('B50', 50);
  define('B20', 20);
  define('B10', 10);
  define('B05', 05);
  define('B01', 01);
  //Properties prices
  define('PropiedadA', 1000);
  define('PropiedadB', 3050);

  /* For web update
   $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $proceso = $_POST['proceso'];
    //$stockMon = $_POST['stockMon'];
*/



  class playerGame{

      var $ID;
      var $name;
      var $nick;
      var $stockMon;   
     public  function __construct($ID, $name, $nick, $stockMon) {
         $this->ID = $ID;
         $this->name = $name;
         $this->nick = $nick;
         $this->stockMon=$stockMon;  
     }

     public function setID($ID){
      $this ->ID = $ID;
    }
      public function getID(){
      return $this->ID;
    }

    public function setname($name){
      $this ->name = $name;
    }
      public function getname(){
      return $this->name;
    }

    
    public function setnick($nick){
      $this ->nick = $nick;
    }
      public function getnick(){
      return $this->nick;
    }

    public function setstockMon($stockMon){
      $this ->stockMon = $stockMon;
    }
      public function getstockMon(){
      return $this->stockMon;
    }
   }

    function comprarPropiedad(){
   $gamer1 = new playerGame("005","EMILIO","MADMAX", B500*4+B100*2+B10*3);
  //$gamer2 = new playerGame("006","PEDRO","JUAN");
  print "El ID del Jugador es: " . $gamer1-> getID(). "</br> El nombre del Jugador es: ". $gamer1-> getname().
  "</br> El Nick Name del Jugador es: " . $gamer1-> getnick()."</br> Capital Incial $". $gamer1-> getstockMon();;

  $result= $gamer1->getstockMon()-PropiedadA;
  return $result;
}

function venderPropiedad(){
  $gamer1 = new playerGame("005","EMILIO","MADMAX", B500*4+B100*2+B10*3);
 //$gamer2 = new playerGame("006","PEDRO","JUAN");
 print "El ID del Jugador es: " . $gamer1-> getID(). "</br> El nombre del Jugador es: ". $gamer1-> getname().
 "</br> El Nick Name del Jugador es: " . $gamer1-> getnick(). "</br> Capital Incial $". $gamer1-> getstockMon();

 $result= $gamer1->getstockMon()+PropiedadA;
 return $result;
}

//$gamer1->setID("006");


print "El valor de la propiedad evaluada es: $". PropiedadA."</br> " ;
echo "</br> ";
print "</br>  Capital despues de la compra $" . comprarPropiedad()."</br> ";
echo "</br> ";
print "</br>  Capital despues de la venta $" . venderPropiedad();



//print B01;


?>