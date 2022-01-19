<?php
require_once "./Producto.php";

class Ordenador extends Producto{
    //atributos de objeto
    private $ram;
    private $discoduro;

    /**
     * Get the value of discoduro
     */ 
    public function getDiscoduro()
    {
        return $this->discoduro;
    }

    /**
     * Set the value of discoduro
     *
     * @return  self
     */ 
    public function setDiscoduro($discoduro)
    {
        $this->discoduro = $discoduro;

        return $this;
    }

    /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set the value of ram
     *
     * @return  self
     */ 
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    //Sobreescribimos la funcion muestra para que muestre la ram y el disco duro
    //parent:: funciona como super()
    public function muestra(){
        echo "<p>".parent::getId().":".parent::getDescripcion().":".parent::getPVP().":".$this->ram.":".$this->discoduro."</p>";
    }

    /*No permite sobreescritura
    public function aumentaPrecio(){

    }
    */
}


?>