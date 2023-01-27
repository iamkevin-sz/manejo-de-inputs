<?php

    require_once("cotizacion.php");

    $cantidad= $_POST["cantidad"];
    $costo= $_POST["costo"];
    $total= $_POST["total"];
    $flete= $_POST["flete"];
    $flete_recoleccion= $_POST["flete_recoleccion"];
    $seguro= $_POST["seguro"];
    $finanza= $_POST["finanza"];
    $etiquetado= $_POST["etiquetado"];
    $viaticos= $_POST["viaticos"];
    $dhl= $_POST["dhl"];
    $otros_gastos_penalizacion= $_POST["otros_gastos_penalizacion"];
    $horas_extras= $_POST["horas_extras"];
    $suma_total= $_POST["suma_total"];

    // echo "total:".$total;

    $objCotizacion = new Cotizacion();
    // $objCotizacion->insertcotizacion($cantidad,$costo,$total,$flete,$flete_recoleccion,$seguro,$finanza,$etiquetado,$viaticos,$dhl,$otros_gastos_penalizacion,$horas_extras);

    $objCotizacion->insertcotizacion($cantidad,$costo,$total,$flete,$flete_recoleccion,$seguro,$finanza,$etiquetado,$viaticos,$dhl,$otros_gastos_penalizacion,$horas_extras, $suma_total);


    // echo ($insert);
