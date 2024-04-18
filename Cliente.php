<?php
/*
En la clase Cliente:

Se registra la siguiente información: nombre, apellido, si está o no dado de baja, el tipo y el número de
documento. Si un cliente está dado de baja, no puede registrar compras desde el momento de su baja.
1. Método constructor que recibe como parámetros los valores iniciales para los atributos.
2. Los métodos de acceso de cada uno de los atributos de la clase.
3. Redefinir el método _toString para que retorne la información de los atributos de la clase.
*/

class Cliente {
    private $nombre;
    private $apellido;
    private $baja;
    private $tipoDoc;
    private $numDoc;

    /**
     * @param string $nombre
     * @param string $apellido
     * @param bool $baja
     * @param string $tipoDoc
     * @param int $numDoc
     */
    public function __construct($nombre, $apellido, $baja, $tipoDoc, $numDoc){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->baja = $baja;
        $this->tipoDoc = $tipoDoc;
        $this->numDoc = $numDoc;
    }

    public function __toString(){
        return
        "Cliente 🧑🏻 \n" .
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Baja: " . intval($this->getBaja()) . "\n" .
        "Tipo y número de documento: " . $this->getTipoDoc() . " " . $this->getNumDoc() . "\n";
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($value){
        $this->apellido = $value;
    }

    public function getBaja(){
        return $this->baja;
    }

    public function setBaja($value){
        $this->baja = $value;
    }

    public function getTipoDoc(){
        return $this->tipoDoc;
    }

    public function setTipoDoc($value){
        $this->tipoDoc = $value;
    }

    public function getNumDoc(){
        return $this->numDoc;
    }

    public function setNumDoc($value){
        $this->numDoc = $value;
    }
}