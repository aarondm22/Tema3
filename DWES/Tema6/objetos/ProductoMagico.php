<?php
class ProductoMagico{
    
    //atributos
    private $id;
    private $descripcion;
    private $PVP;

    //atributo estatico
    public static $numeroProductos = 0;

    //metodos
    public function muestra(){
        echo "<p>".$this->id.":".$this->descripcion.":".$this->PVP."</p>";
    }

    //Constructor en php
    public function __construct($id,$descripcion,$PVP){
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->PVP = $PVP;
        //el self es como el this pero llamar a la clase
        self::$numeroProductos++;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function __destruct(){
        echo "Estoy destruyendo al producto";
    }

    public function __toString(){
        return "<p>".$this->id.":".$this->descripcion.":".$this->PVP."</p>";
    }
}

?>