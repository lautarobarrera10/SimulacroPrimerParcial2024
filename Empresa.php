<?php

/*
En la clase Empresa:

1. Se registra la siguiente información: denominación, dirección, la colección de clientes, colección de
motos y la colección de ventas realizadas.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.
3. Los métodos de acceso para cada una de las variables instancias de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro.
6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
para registrar una venta en un momento determinado.
El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
venta.
7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.
*/

class Empresa {
    private $denominacion;
    private $direccion;
    private $colObjClientes;
    private $colObjMotos;
    private $colObjVentas;

    /**
     * @param string $denominacion
     * @param string $direccion
     * @param array $colObjClientes
     * @param array $colObjMotos
     * @param array $colObjVentas
     */
    public function __construct($denominacion, $direccion, $colObjClientes, $colObjMotos, $colObjVentas){
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->colObjClientes = $colObjClientes;
        $this->colObjMotos = $colObjMotos;
        $this->colObjVentas = $colObjVentas;
    }

    public function __toString(){
        return
        "Empresa 🏦\n" .
        "Denominación: " . $this->getDenominacion() . "\n" .
        "Dirección: " . $this->getDireccion() . "\n" .
        "Clientes: " . implode("\n", $this->getColObjClientes()) . "\n" .
        "Motos: " . implode("\n", $this->getColObjMotos()) . "\n" .
        "Ventas: " . implode("\n", $this->getColObjVentas()) . "\n";
    }

    public function getDenominacion(){
        return $this->denominacion;
    }

    public function setDenominacion($value){
        $this->denominacion = $value;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($value){
        $this->direccion = $value;
    }

    public function getColObjClientes(){
        return $this->colObjClientes;
    }

    public function setColObjClientes($value){
        $this->colObjClientes = $value;
    }

    public function getColObjMotos(){
        return $this->colObjMotos;
    }

    public function setColObjMotos($value){
        $this->colObjMotos = $value;
    }

    public function getColObjVentas(){
        return $this->colObjVentas;
    }

    public function setColObjVentas($value){
        $this->colObjVentas = $value;
    }
}