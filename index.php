<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <form action="insertCotizacion.php" method="POST">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="cantidad">CANTIDAD:</label>
                                        <input type="number" class="form-control valor" name="cantidad" id="cantidad" aria-describedby="helpId" onchange="multiplicar()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="costo">COSTO:</label>
                                        <input type="number" class="form-control valor" name="costo" id="costo" aria-describedby="helpId" onchange="multiplicar()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <label for="total">TOTAL</label>
                                    <input type="number" class="form-control valor2" name="total" id="total" aria-describedby="helpId" value="0" readonly onchange="sumatotal()" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="flete">FLETE:</label>
                                        <input type="number" class="form-control valor2" name="flete" id="flete" aria-describedby="helpId" onchange="sumatotal()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="flete_recoleccion">FLETE DE RECOLECCIÓN:</label>
                                        <input type="number" class="form-control valor2" name="flete_recoleccion" id="flete_recoleccion" aria-describedby="helpId" onchange="sumatotal()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <label for="seguro">SEGURO:</label>
                                    <input type="number" class="form-control valor2" name="seguro" id="seguro" aria-describedby="helpId" onchange="sumatotal()">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="finanza">FINANZA:</label>
                                        <input type="number" class="form-control valor2" name="finanza" id="finanza" aria-describedby="helpId" onchange="sumatotal()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="etiquetado">ETIQUETADO:</label>
                                        <input type="number" class="form-control valor2" name="etiquetado" id="etiquetado" aria-describedby="helpId" onchange="sumatotal()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <label for="viaticos">VIATICOS:</label>
                                    <input type="number" class="form-control valor2" name="viaticos" id="viaticos" aria-describedby="helpId" onchange="sumatotal()">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="dhl">DHL:</label>
                                        <input type="number" class="form-control valor2" name="dhl" id="dhl" aria-describedby="helpId" onchange="sumatotal()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="otros_gastos_penalizacion">OTROS GASTOS PENALIZACIÓN:</label>
                                        <input type="number" class="form-control valor2" name="otros_gastos_penalizacion" id="otros_gastos_penalizacion" aria-describedby="helpId" onchange="sumatotal()">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group">
                                    <label for="horas_extras">HORAS EXTRAS</label>
                                    <input type="number" class="form-control valor2" name="horas_extras" id="horas_extras" aria-describedby="helpId" onchange="sumatotal()">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">

                                <div class="form-group" >
                                    <label for="suma_total">Suma Total</label>
                                    <input type="number" class="form-control" name="suma_total" id="suma_total" aria-describedby="helpId" readonly value="0">
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="d-grid gap-3 d-md-block" style='text-align:center'>
                        <button id="guardar" type="submit" class="btn btn-primary" >ENVIAR</button>
                    </div><br>
                </form>

            </div>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="funciones.js"></script>
</body>

</html>