<?php

/*
En la clase Venta:

1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
motos y el precio final.
2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
atributo de la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario.
*/

class Venta {
    private $numero;
    private $fecha;
    private $objCliente;
    private $colObjMotos;
    private $precioFinal;

    /**
     * @param int $numero
     * @param date $fecha
     * @param Cliente $objCliente
     * @param array $colObjMotos
     */
    public function __construct($numero, $fecha, $objCliente, $colObjMotos){
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->colObjMotos = $colObjMotos;
        $this->precioFinal = $this->calcularPrecioFinal();
    }

    public function __toString(){
        return
        "Venta 📝\n" .
        "Número: " . $this->getNumero() . "\n" .
        "Fecha: " . $this->getFecha() . "\n" .
        "Cliente: " . $this->getObjCliente()->getNombre() . " " . $this->getObjCliente()->getApellido() . "\n" .
        "Motos:\n" . implode("\n", $this->getColObjMotos()) . "\n" .
        "Precio final: " . $this->getPrecioFinal() . "\n";
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($value){
        $this->numero = $value;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($value){
        $this->fecha = $value;
    }

    public function getObjCliente(){
        return $this->objCliente;
    }

    public function setObjCliente($value){
        $this->objCliente = $value;
    }

    public function getColObjMotos(){
        return $this->colObjMotos;
    }

    public function setColObjMotos($value){
        $this->colObjMotos = $value;
    }

    public function getPrecioFinal(){
        return $this->precioFinal;
    }

    public function setPrecioFinal($value){
        $this->precioFinal = $value;
    }

    public function calcularPrecioFinal(){
        $precioFinal = 0;
        foreach($this->getColObjMotos() as $objMoto){
            $precioFinal = $precioFinal + $objMoto->darPrecioVenta();
        }
        return $precioFinal;
    }

    /*
    5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
    incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
    vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
    Utilizar el método que calcula el precio de venta de la moto donde crea necesario.
     */
    public function incorporarMoto($objMoto){
        $motos = $this->getColObjMotos();
        if ($objMoto->getActiva()){
            array_push($motos, $objMoto);
            $precioFinal = $this->getPrecioFinal() + $objMoto->darPrecioVenta();
            $this->setColObjMotos($motos);
            $this->setPrecioFinal($precioFinal);
        }
    }
}