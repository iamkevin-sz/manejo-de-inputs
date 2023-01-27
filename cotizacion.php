<?php
require_once("conexion.php");
class Cotizacion extends Conexion
{

    private $cantidad;
    private $costo;
    private $total;
    private $flete;
    private $flete_recoleccion;
    private $seguro;
    private $finanza;
    private $etiquetado;
    private $viaticos;
    private $dhl;
    private $otros_gastos_penalizacion;
    private $horas_extras;
    private $suma_total;
    private object $conectar;

    public function __construct()
    {
        $this->conectar = new Conexion();
        $this->conectar = $this->conectar->connect();
    }

    public function insertcotizacion(int $cantidad, float $costo, float $total, float $flete, float $flete_recoleccion, float $seguro, float $finanza, $etiquetado, float $viaticos, float $dhl, float $otros_gastos_penalizacion, float $horas_extras, float $suma_total)
    {
        // echo("hola");
        // echo "TOTAL:".$total;
        try {
            $this->cantidad = $cantidad;
            $this->costo = $costo;
            $this->total = $total;
            $this->flete = $flete;
            $this->flete_recoleccion = $flete_recoleccion;
            $this->seguro = $seguro;
            $this->finanza = $finanza;
            $this->etiquetado = $etiquetado;
            $this->viaticos = $viaticos;
            $this->dhl = $dhl;
            $this->otros_gastos_penalizacion = $otros_gastos_penalizacion;
            $this->horas_extras = $horas_extras;
            $this->suma_total = $suma_total;
            // echo "TOTAL:".$this->$total;
            // echo $this->$cantidad;

            $sql = "INSERT INTO cotizacion(cantidad,costo,total,flete,flete_recoleccion,seguro,finanza,etiquetado,viaticos,dhl,otros_gastos_penalizacion,horas_extras,suma_total)values(:cant, :cost, :tot, :fle, :fle_re, :se, :fin, :eti, :viat, :dhl, :ga_penal, :hrex, :sumt)";
            $insert = $this->conectar->prepare($sql);
            echo "SQL:".$sql;
            $arrData = array(
                ":cant" =>  $this->cantidad,
                ":cost" => $this->costo,
                ":tot" => $this->total,
                ":fle" => $this->flete,
                ":fle_re" => $this->flete_recoleccion,
                ":se" => $this->seguro,
                ":fin" => $this->finanza,
                ":eti" => $this->etiquetado,
                ":viat" => $this->viaticos,
                ":dhl" => $this->dhl,
                ":ga_penal" => $this->otros_gastos_penalizacion,
                ":hrex" => $this->horas_extras,
                ":sumt" => $this->suma_total
            );
            $insert->execute($arrData);
            $insert->closeCursor();
            echo"creado correctamente";
        } catch (Exception $e) {
            echo "Error:".$e->getMessage();
        }
    }
}

    // $cantidad= $_POST["cantidad"];"
    // $costo= $_POST["costo"];
    // $total= $_POST["total"];

    // echo $cantidad."<br>";
    // echo $costo."<br>";
    // echo $total;
