<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil - ICONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="container-fluid">

    <!--Menu OffCanvas-->
    <div class="offcanvas offcanvas-start" id="menu" style="width:300px">
        <div class="offcanvas-header">
            <img src="../assets/imagenes/logo.jpeg" alt="" style="width:250px">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body menu-link">
            <a href="home.php" class="text-decoration-none text-secondary fw-bold d-block p-3"><i
                    class="bi bi-house-door-fill me-3"></i>Home</a>
            <a href="usuarios.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i
                    class="bi bi-people-fill me-3"></i>Usuarios</a>
            <a href="ventas.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i
                    class="bi bi-receipt me-3"></i>Ventas</a>
            <a href="compras.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i
                    class="bi bi-cart-fill me-3"></i>Compras</a>
            <a href="clientes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i
                    class="bi bi-person-check-fill me-3"></i>Clientes y Proveedores</a>
            <a href="ordenes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i
                    class="bi bi-receipt-cutoff me-3"></i></i>Orden Compra</a>
            <a href="" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i
                    class="bi bi-gear-fill me-3"></i>Ajustes</a>
            <a href="../../CONTROLLER/php/logout.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i
                    class="bi bi-box-arrow-right me-3"></i>Salir</a>
        </div>
    </div>

    <!-- Menu -->
    <div class="row pt-3 fixed-top bg-light">
        <div class="col-1 m-auto">
            <button class="btn btn-outline-none fw-bold" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#menu">
                <i class="bi bi-list me-2"></i> Menu
            </button>
        </div>

        <!--Header -->
        <div class="col-8 m-auto">
            <h1>Compras</h1>
            <p class="fw-bold">Registro de compras</p>
        </div>
        <div class="col-1">
            <img src="../assets/imagenes/image-6.svg" alt="" style="width:100px">
        </div>
        <div class="col-1 m-auto">
            <div class="dropdown">
                <h1 class="m-auto text-end" data-bs-toggle="dropdown"><i class="bi bi-bell-fill"></i></h1>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-exclamation-circle-fill text-danger"></i> Bolsa de 3 kilos <span
                                    class="text-danger">Por agotarse</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-receipt-cutoff text-success"></i> Nueva orden de compra disponible<span
                                    class="text-success"> 001</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item"></li>

                </ul>
            </div>
        </div>

        <!--Botones de filtro y organizar por-->
        <div class="col-1 m-auto">
            <div class="dropdown">
                <button class="btn btn-outline-none" data-bs-toggle="dropdown"><img
                        src="../assets/imagenes/user-icon.png" alt="" style="width:70px ;"
                        class="rounded rounded-circle img-thumbnail"></button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <h6><i class="bi bi-person-circle"></i> Mi perfil</h6>
                    </li>
                    <li class="dropdown-item">
                        <h6><i class="bi bi-question-circle-fill"></i> Ayuda</h6>
                    </li>
                    <li class="dropdown-item">
                        <h6><i class="bi bi-box-arrow-right"></i> Salir</h6>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="divider">
    </div>

    <br>
    <br>

    <!--Main-->
    <section class="row mt-5 pt-5 ms-4 mb-4" style="height:740px">
        <div class="col">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-primary" id="nuevaCompra" data-bs-toggle="modal" data-bs-target="#añadirVModal">
                        <img src="../assets/imagenes/add-icon.png" alt="" style="width:20px"> Nueva compra
                    </button>
                    <a href="ordenes.php" class="btn btn-outline-primary">
                        <img src="../assets/imagenes/order-icon.png" alt="" style="width:20px"> Ir a ordenes de compra
                    </a>
                    <!--Modal Registrar venta-->
                    <div class="modal fade" id="añadirVModal">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                      
                            <!-- Modal Header -->
                            <div class="modal-header">
                             <div>
                                <h4 class="modal-title">Nuevo registro, Compras</h4>
                                <p>Rellene lo campos solicitados</p>
                                <p class="fw-bold">ID compra <span class="text-info" id="idCom">001</span> </p>
                             </div>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                      
                            <!-- Modal body -->
                            <div class="modal-body">
                              <form action="" class="d-flex justify-content-between">
                                <div style="width:48%">
                                    <label for="" class="form-label fw-bold">Proveedor</label>
                                    <input type="text" id="proveedor" class="form-control mb-2" autoComplete="off">
                                    <ul id="select-prov" class="list-group position-absolute"></ul>
                                    <label for="" class="form-label fw-bold">Fecha</label>
                                    <input type="date" id="fecha" class="form-control mb-2">
                                    <label for="" class="form-label fw-bold">No compra</label>
                                    <input type="number" id="numCom" class="form-control mb-2">
                                    <label for="" class="form-label fw-bold">Comentarios</label>
                                    <textarea name="" id="coment" cols="3" rows="3" class="form-control"></textarea>
                                </div>
                                <div style="width:48%">
                                    <label for="" class="form-label fw-bold">Producto</label>
                                    <input type="text" id="producto" class="form-control mb-2" autoComplete="off">
                                    <ul id="select-pro" class="list-group position-absolute"></ul>
                                    <label for="" class="form-label fw-bold">Cantidad</label>
                                    <input type="number" id="cantidad" onblur="calcularTotal()" class="form-control mb-2">
                                    <label for="" class="form-label fw-bold">Precio unidad</label>
                                    <input type="text" id="precio" class="form-control mb-2">
                                    <label for="" class="form-label fw-bold">Total</label>
                                    <input type="number" id="total" class="form-control">
                                </div>
                              </form>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success" onclick="registrarCompra()">Registrar</button>
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col text-end">
                    <button class="btn btn-primary" data-bs-toggle="dropdown"><img src="../assets/imagenes/order-by.png" alt=""
                            style="width:20px"></button>
                    <ul class="dropdown-menu">
                        <div class="p-3">
                            <h6>Ordenar por <i class="bi bi-sort-alpha-down ms-4"></i></h6>
                            <hr>
                            <form action="" class="form-check ms-0 ps-0">
                                <h6>Fecha <i class="bi bi-calendar-check ms-5"></i> </h6>
                                <hr>
                                <div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input radios" id="MRP" name="optradio" value="MRP">
                                        <label class="form-check-label" for="">Mas recientes primero</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input radios" id="MAP" name="optradio" value="MAP" checked>
                                        <label class="form-check-label" for="">Mas antiguos primero</label>
                                    </div>
                                </div>
                                <h6 class="mt-4">Orden alfabetico <i class="bi bi-sort-alpha-down ms-5"></i></h6>
                                <hr>
                                <div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input radios" id="AZ" name="optradio" value="a-z" checked>
                                        <label class="form-check-label" for="">a-z</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input radios" id="ZA" name="optradio" value="z-a" checked>
                                        <label class="form-check-label" for="">z-a</label>
                                    </div>
                                </div>
                                <h6 class="mt-4">Cantidad <i class="bi bi-sort-numeric-down ms-5"></i> </h6>
                                <hr>
                                <div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input radios" id="Mm" name="optradio" value="Mm" checked>
                                        <label class="form-check-label" for="">Mayor a menor</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input radios" id="mM" name="optradio" value="mM" checked>
                                        <label class="form-check-label" for="">Menor a mayor</label>
                                    </div>
                                </div>
                            </form>
                            <div class="mt-3">
                                <button type="button" class="btn btn-sm btn-primary" style="width:90px ;">Cancelar</button>
                                <button class="btn btn-sm btn-primary ms-3" id="ordenarCompra" style="width:90px ;">Aplicar</button>
                            </div>
                        </div>
                    </ul>
                    <button class="btn btn-primary" data-bs-toggle="dropdown"><img src="../assets/imagenes/filtrar.png" alt=""
                            style="width:20px"></button>
                    <ul class="dropdown-menu">
                        <div class="p-3">
                            <h6>Filtrar por <i class="bi bi-funnel-fill"></i></h6>
                            <hr>
                            <form action="">
                                <label for="" class="form-label fw-bold">Fecha</label>
                                <input type="date" id="purchaseDate" class="form-control mb-2">
                                <label for="" class="form-label fw-bold">No compra</label>
                                <input type="number" id="purchaseCode" class="form-control mb-2">
                                <label for="" class="form-label fw-bold">Producto</label>
                                <input type="text" id="product" class="form-control mb-2">
                                <label for="" class="form-label fw-bold">Proveedor</label>
                                <input type="text" id="proveedor" class="form-control">
                            </form>
                            <div class="mt-3">
                                <button type="button" class="btn btn-sm btn-primary" style="width:90px ;">Cancelar</button>
                                <button class="btn btn-sm btn-primary ms-3" id="filtrarCompra" style="width:90px ;">Aplicar</button>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col overflow-auto" style="height:600px">
                    <h5>Todos los registros</h5>
                    <table class="table table-striped table-hover" id="purchaseTable">
                        <!--Datos traidos desde ajax-->
                        <!--Modal para eliminar registros-->
                        <div class="modal" id="deleteRecordModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Eliminar registro</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Esta seguro que desea borrar este registro
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" onclick="deleteSale()">Si estoy seguro</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                </div>

                                </div>
                            </div>
                        </div>
                      </table>
                      <ul class="pagination text-center">
                        <li class="page-item"><a class="page-link" href="#">Atras</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                      </ul>
                </div>
            </div>
        </div> 
    </section>

    <script src="../../CONTROLLER/script/compras.js"></script>
    <script>
        $(document).ready(function(){

            //Auto-Buscador Para el input proveedor
            $("#proveedor").keyup(function(){
                var query = $("#proveedor").val();
                if(query.length > 0 ){
                    $.ajax({
                        url: '../../CONTROLLER/php/autSearchProv.php',
                        method: 'POST',
                        data: {
                            search: 1,
                            q: query
                        },
                        success: function(data){
                            $("#select-prov").html(data);
                        },
                        dataType: 'text'
                    });
                }
            });
            $(document).on("click", ".search_prov", function (){
                var cliente = $(this).text();
                $("#proveedor").val(cliente);
                $("#select-prov").html("");
            });

            //Auto-Buscador para el input productos
            $("#producto").keyup(function(){
                var query = $("#producto").val();
                if(query.length > 0 ){
                    $.ajax({
                        url: '../../CONTROLLER/php/autSearchProCompra.php',
                        method: 'POST',
                        data: {
                            search: 1,
                            q: query
                        },
                        success: function(data, data1){
                            $("#select-pro").html(data);
                        },
                        dataType: 'text'
                    });
                }
            });
            $(document).on("click", ".search_pro", function (){
                var producto = $(this).text();
                $("#producto").val(producto);
                $("#select-pro").html("");
                $("#precio").val(producto);
            });
        });
        
        /*function calcularDeuda(){
            var estado = document.getElementById("estado").value;
            if(estado == "DEBE"){
                document.getElementById("formDebe").style.display = "flex";
                let pago = document.getElementById("pago").value;
                $(document).on("blur", "#pago", function (){
                    
                    alert(pago);
                });

            }else{
                document.getElementById("formDebe").style.display = "none";
            }
        }*/
        
    </script>
</body>

</html>