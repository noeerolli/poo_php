<?php
class Instrumento {


    public $marca;
    public $modelo;
    public $tipo;
    public $material;
    private $origen;
   


    public function __construct($marcaParam, $modeloParam, $tipoParam, $materialParam, $origenParam ){
        $this->marca = $marcaParam;
        $this->modelo = $modeloParam;
        $this->tipo = $tipoParam;
        $this->material = $materialParam;
        $this->origen = $origenParam;
    }


    public function mostrar_modelo(){

        echo "Modelo:".$this->modelo;
    
    
    }

    public function getModelo(){

        return $this->origen;
    }  

    public function setModelo($modelo){

        $this->modelo = $origen;
    }

}

 //objetos   

$violin = new Instrumento("Stradivarius","Old", "Cuerdas","Madera", "Italia");

$trompeta = new Instrumento("Yamaha", "YTR-2330","Viento ", "Yellow brass", "Japón");


// herencia clase 

class instrumento_venta extends Instrumento{

    public $precio;
    
    
    function __construct($marca, $modelo, $tipo, $material, $origen, $precio){
    
    parent::__construct($marca, $modelo, $tipo,$material,$origen);
    
    $this-> precio = $precio;
    
    }

}


//pruebas
var_dump($trompeta);
var_dump($violin);
echo "<br>";
echo "La marca del violín es: ".$violin->marca;

?>



