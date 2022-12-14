<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal - ICONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/home.css">
</head>
<body class="container-fluid">

    <!--Menu OffCanvas-->
    <div class="offcanvas offcanvas-start" id="menu" style="width:300px">
        <div class="offcanvas-header">
          <img src="../assets/imagenes/logo.jpeg" alt="" style="width:250px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body menu-link">
          <a href="home.php" class="text-decoration-none text-secondary fw-bold d-block p-3"><i class="bi bi-house-door-fill me-3"></i>Home</a>
          <a href="usuarios.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-people-fill me-3"></i>Usuarios</a>
          <a href="ventas.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-receipt me-3"></i>Ventas</a>
          <a href="compras.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-cart-fill me-3"></i>Compras</a>
          <a href="productos.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-tag-fill me-3"></i>Productos</a>
          <a href="clientes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-person-check-fill me-3"></i>Clientes y Proveedores</a>
          <a href="ordenes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-receipt-cutoff me-3"></i></i>Orden Compra</a>
          <a href="#" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-gear-fill me-3"></i>Ajustes</a>
          <a href="../../CONTROLLER/php/logout.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-box-arrow-right me-3"></i>Salir</a>
        </div>
    </div>
      
      <!-- Menu -->
    <div class="row pt-3 fixed-top bg-light">
        <div class="col-1 m-auto">
            <button class="btn btn-outline-none fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
                <i class="bi bi-list me-2"></i> Menu
            </button>
        </div>

        <!--Header -->
        <div class="col-8 m-auto">
            <h1><a href="ventas.php" class="text-decoration-none text-success">Ventas</a> | Pedidos</h1>
            <p>Registro de pedidos</p>
        </div>
        <div class="col-1">
            <img src="../assets/imagenes/image-5.svg" alt="" style="width:100px">
        </div>
        <div class="col-1 m-auto">
            <div class="dropdown">
                <h1 class="m-auto text-end" data-bs-toggle="dropdown"><i class="bi bi-bell-fill"></i></h1>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-exclamation-circle-fill text-danger"></i> Bolsa de 3 kilos <span class="text-danger">Por agotarse</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-receipt-cutoff text-success"></i> Nueva orden de compra disponible<span class="text-success"> 001</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item"></li>
                    
                </ul>
            </div>
        </div>
        <div class="col-1 m-auto">
            <div class="dropdown">
                <button class="btn btn-outline-none" data-bs-toggle="dropdown"><img src="../assets/imagenes/user-icon.png" alt="" style="width:70px ;" class="rounded rounded-circle img-thumbnail"></button>
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
    <section class="row mt-5 pt-5 ms-4 mb-4 overflow-hidden no-wrap">
        <div class="col d-flex justify-content-between mb-3">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#a??adirPModal">
                <img src="../assets/imagenes/add-icon.png" alt="" style="width:20px"> Nueva pedido
            </button>
            <!--Modal Registrar Pedido-->
            <div class="modal fade" id="a??adirPModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
              
                    <!-- Modal Header -->
                    <div class="modal-header">
                     <div>
                        <h4 class="modal-title">Nuevo registro, Pedido</h4>
                        <p>Rellene lo campos solicitados</p>
                        <p class="fw-bold">ID pedido <span class="text-info">001</span> </p>
                     </div>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
              
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form action="" class="d-flex justify-content-between">
                        <div style="width:48%">
                            <label for="" class="form-label fw-bold">Cliente</label>
                            <input type="text" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Fecha</label>
                            <input type="date" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Pedido</label>
                            <input type="number" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Estado de pago</label>
                            <select name="" id="" class="form-control mb-2">
                                <option value="PAGADO">PAGADO</option>
                                <option value="PAGADO">DEBE</option>
                            </select>
                            <label for="" class="form-label fw-bold">Comentario</label>
                            <textarea name="" id="" cols="3" rows="3" class="form-control"></textarea>
                        </div>
                        <div style="width:48%">
                            <label for="" class="form-label fw-bold">Producto</label>
                            <input type="text" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Cantidad</label>
                            <div class="d-flex">
                                <input type="number" class="form-control mb-2">
                                <button class="btn btn-sm btn-primary ms-4 align-self-center" style="width:120px;height:30px"><i class="bi bi-plus"></i> A??adir</button>
                            </div>
                            <div class="overflow-auto mb-3" style="height:120px">
                                <table class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th>PRODUCTO</th>
                                        <th>CANTIDAD</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        
                                      </tr>
                                      <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        
                                      </tr>
                                      <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        
                                      </tr>
                                      <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        
                                      </tr>
                                      <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <label for="" class="form-label fw-bold">Total</label>
                            <input type="number" class="form-control">
                        </div>
                      </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Crear pedido</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-1 drop-up">
                <button class="btn btn-primary" data-bs-toggle="dropdown"><img src="../assets/imagenes/order-by.png" alt=""
                    style="width:20px"></button>
            <ul class="dropdown-menu">
                <div class="p-3">
                    <h6>Ordenar por <i class="bi bi-sort-alpha-down ms-4"></i></h6>
                    <hr>
                    <form action="" class="form-check">
                        <h6>Fecha <i class="bi bi-calendar-check ms-5"></i> </h6>
                        <hr>
                        <label for="" class="form-check-label">Mas reciente primero</label>
                        <input type="checkbox" class="form-check-input">
                        <br>
                        <label for="" class="form-check-label">Mas antiguos primero</label>
                        <input type="checkbox" class="form-check-input">
                        <h6 class="mt-4">Orden alfabetico <i class="bi bi-sort-alpha-down ms-5"></i></h6>
                        <hr>
                        <label for="" class="form-check-label">a-z</label>
                        <input type="checkbox" class="form-check-input">
                        <br>
                        <label for="" class="form-check-label">z-a</label>
                        <input type="checkbox" class="form-check-input">
                        <h6 class="mt-4">Cantidad <i class="bi bi-sort-numeric-down ms-5"></i> </h6>
                        <hr>
                        <label for="" class="form-check-label">Mayor a menor</label>
                        <input type="checkbox" class="form-check-input">
                        <br>
                        <label for="" class="form-check-label">Menor a mayor</label>
                        <input type="checkbox" class="form-check-input">
                    </form>
                    <div class="mt-3">
                        <button type="button" class="btn btn-sm btn-primary" style="width:90px ;">Cancelar</button>
                        <button class="btn btn-sm btn-primary ms-3" style="width:90px ;">Aplicar</button>
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
                        <label for="" class="form-label fw-bold">Fecha de venta</label>
                        <input type="date" class="form-control mb-2">
                        <label for="" class="form-label fw-bold">Cliente</label>
                        <input type="text" class="form-control mb-2">
                        <label for="" class="form-label fw-bold">No Pedido</label>
                        <input type="number" class="form-control mb-2">
                        <label for="" class="form-label fw-bold">Producto</label>
                        <input type="text" class="form-control">
                    </form>
                    <div class="mt-3">
                        <button type="button" class="btn btn-sm btn-primary" style="width:90px ;">Cancelar</button>
                        <button class="btn btn-sm btn-primary ms-3" style="width:90px ;">Aplicar</button>
                    </div>
                </div>
            </ul>
            </div>
        </div>
        <hr>
        
        <h3>Todos</h3>
        <!--User cards-->
        <div class="row mt-3">
            <div class="col-10 overflow-auto" style="height:550px ;">
                <div class="row">
                    <div class="col-lg-2 col-sm-5 card shadow text-center p-2 me-4 mb-3">
                        <div class="card-header">
                            <h6>Pedido 1</h6>
                            <img src="../assets/imagenes/box.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Fecha: <span>00/00/0000</span> </h6>
                            <h6>Cliente: <span class="text-info">Nombre</span> </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 card shadow text-center p-2 me-4 mb-3">
                        <div class="card-header">
                            <h6>Pedido 1</h6>
                            <img src="../assets/imagenes/box.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Fecha: <span>00/00/0000</span> </h6>
                            <h6>Cliente: <span class="text-info">Nombre</span> </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 card shadow text-center p-2 me-4 mb-3">
                        <div class="card-header">
                            <h6>Pedido 1</h6>
                            <img src="../assets/imagenes/box.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Fecha: <span>00/00/0000</span> </h6>
                            <h6>Cliente: <span class="text-info">Nombre</span> </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 card shadow text-center p-2 me-4 mb-3">
                        <div class="card-header">
                            <h6>Pedido 1</h6>
                            <img src="../assets/imagenes/box.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Fecha: <span>00/00/0000</span> </h6>
                            <h6>Cliente: <span class="text-info">Nombre</span> </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 card shadow text-center p-2 me-4 mb-3">
                        <div class="card-header">
                            <h6>Pedido 1</h6>
                            <img src="../assets/imagenes/box.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Fecha: <span>00/00/0000</span> </h6>
                            <h6>Cliente: <span class="text-info">Nombre</span> </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 card shadow text-center p-2 me-4 mb-3">
                        <div class="card-header">
                            <h6>Pedido 1</h6>
                            <img src="../assets/imagenes/box.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Fecha: <span>00/00/0000</span> </h6>
                            <h6>Cliente: <span class="text-info">Nombre</span> </h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5 card shadow text-center p-2 me-4 mb-3">
                        <div class="card-header">
                            <h6>Pedido 1</h6>
                            <img src="../assets/imagenes/box.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Fecha: <span>00/00/0000</span> </h6>
                            <h6>Cliente: <span class="text-info">Nombre</span> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
       
    </section>
    
</body>
</html>