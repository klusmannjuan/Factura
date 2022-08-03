<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Agregar Ingreso | Plasfacol</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Fin Bootstrap CSS -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="tabla.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cargando.css">
    <!-- Fin CSS -->

    <!-- Iconos CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fin Iconos CSS -->
</head>

<body>
<!-- Menù Desplegable -->
     <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src=https://static.wixstatic.com/media/f2cfef_d3bb47173ae84f2b9b23a609150532be~mv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/f2cfef_d3bb47173ae84f2b9b23a609150532be~mv2.png alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Usuario</span>
                    <span class="profession">Administrador</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-home icon' ></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                   <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">Usuarios</span>
                            </a>
                        </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-user icon'></i>
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-truck icon'></i>
                            <span class="text nav-text">Proveedores</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-data icon'></i>
                            <span class="text nav-text">Productos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-box icon'></i>
                            <span class="text nav-text">Plan producción</span>
                        </a>
                    </li>

                   

                   <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-up-arrow-circle icon'></i>
                            <span class="text nav-text">Explosión</span>  
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bxs-up-arrow-circle icon'></i>
                            <span class="text nav-text">MRP</span>  
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Cerrar</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">

        <div class="titulo">    
            <h1>Ingreso</h1>
        </div>

        <div class="fecha"></div>

<!-- Fin Menù Desplegable -->

<!-- Barra de Navegación -->
<div class="barra-nav">
    <div class="titulo2">
        <h2>Agregar Ingreso</h2>

        <div class="iconos">
            <li class="nav-link n-b nav-us2" class="col-md-4 col-form-label" type="button" data-bs-toggle="modal" data-bs-target="#modalregis"> 
                <a href="#">
                    <i class='bx  bxs-file-archive icon2 icon-b'>Reporte</i>
                </a>   
            </li> 
        </div>

        <form method="post" action="seleccionar.php">
            
                <div class="form-group row">
                    <label for="CodigoFactura" class="col-md-4 col-form-label"> Número de factura:</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" name="codigo" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Fecha" class="col-md-4 col-form-label">Fecha de emisión:</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" name="fecha">
                    </div>
                </div>

            <div class="form-group row">
                <label for="CodigoCliente" class="col-md-4 col-form-label">Proveedor:</label>
                <div class="col-lg-5">
                    <select type="text" class="form-control" name="cod_usuario">
                        <option selected disabled> Seleccionar Proveedor</option>
                            <?php
                            include_once ("Conexion.php");
                            $objeto = new CConexion();
                            $conn = $objeto->ConexionBD();

                            $consulta = "SELECT f.cod_usuarios, u.nombre FROM facturas f INNER JOIN usuarios u ON f.cod_usuarios = u.codigo WHERE f.cod_usuarios=4";
                            $resultado = $conn->prepare($consulta);
                            $resultado->execute();
                            $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
                            foreach($datos as $dato){
                            ?>

                        <option> <?php echo $dato['nombre']."<br>"?></option>
                            <?php   } ?> 
                    </select> 
                </div>
            </div>
        </form>
    </div>


    
    <div class="iconos">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Materiales</button>
        
        <div class="form-group row">
              
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Datos de la orden de ingreso </h5> 
                        </div>
                        <div class="modal-body">

                            <form method="post" action="insertar.php" id="detalle">
                                <fieldset>

                                <div class="form-group row">
                                    <label for="CodigoFactura" class="col-lg-3 col-form-label">Codigo:</label>
                                    <div class="form-group col-md-12">
                                        <input type="text" id="codigo" class="form-control" name="codigo" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="CodigoCliente" class="col-lg-3 col-form-label">Materiales:</label>
                                    <div class="form-group col-md-12">
                                        <select type="text" id="material" class="form-control" name="cod_materiales" required>
                                            <option selected disabled> Seleccionar Material</option>
                                                <?php
                                                include_once ("Conexion.php");
                                                $objeto = new CConexion();
                                                $conn = $objeto->ConexionBD();

                                                $consulta = "SELECT codigo, nombre FROM materiales";
                                                $resultado = $conn->prepare($consulta);
                                                $resultado->execute();
                                                $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
                                                foreach($datos as $cod_materiales){
                                                ?>
                                            <option> <?php echo $cod_materiales['codigo']. "<br>"; ?>
                                            </option>
                                                
                                                <?php   } ?> 
                                                
                                        </select> 
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Cantidad:</label>
                                        <input type="number"  id="cantidad_material" name="cantidad" class="form-control" placeholder="" min="1" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Precio:</label>
                                        <input type="text" id="precio_material" name="precio" class="form-control" placeholder="" requerid>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Impuesto:</label>
                                        <input type="text" id="impuesto_material" name="impuesto" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <div class="container3">
                                    <button type="submit" id="add_material_ingreso" name="facturar" class="btn btn-success">Agregar</button></td>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
                                            
<!-- Fin Barra de Navegación -->


<!-- Tabla Bootstrap -->
  <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered"  style="width:100%">

                            <thead>
                                <tr>
                                    
                                    <th>Material</th>
                                    <th>Cantidad</th>
                                    <th>Precio Compra</th>
                                    <th>Impuesto</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            
                            

                            <tbody>
                                
                            <?php
                        include_once ("Conexion.php");
                     
                        $sumarsubtotales = 0;
                        
                        $consulta = "SELECT codigo, cod_materiales, cantidad, precio, impuesto, (cantidad * precio + impuesto/100) as subtotal FROM detalle_facturas";
                        $resultado = $conn->prepare($consulta);
                        $resultado->execute();
                        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
                        foreach($datos as $dato){
                            $subtotal = $dato['subtotal'];
                            $sumarsubtotales = $sumarsubtotales + $subtotal;
                        ?>
                               

                                <tr>
                                    
                                    <td><?php echo $dato['cod_materiales']?></td>
                                    <td><?php echo $dato['cantidad']?></td>
                                    <td><?php echo $dato['precio']?></td>
                                    <td><?php echo $dato['impuesto']?></td>
                                    <td><?php echo $dato['subtotal']?></td>
                                    <td><button type='button' class='btn btn-success editbtn' id='removeRows' data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</button></td>
                                    <td><a href="eliminar.php?codigo=<?=$dato['codigo']?>"><button type='button' class='btn btn-danger delete' id='removeRows'>Borrar</button></td>
                                   

                                </tr>
                        <?php } ?>
 
                       


                            </tbody>

                            <tfoot>
                                <tr>

                                    <th>Material</th>
                                    <th>Cantidad</th>
                                    <th>Precio Compra</th>
                                    <th>Impuesto</th>
                                    <th>Subtotal</th> 
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                    </table>
                            
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <span class="form-inline">     
                        <div class="form-group">
                            <label>Total: </label>
                            <input value="<?php echo $sumarsubtotales;?>" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total" disabled>
                        </div>
                    </div> 
                          
            
                    

                                <div class="container3">
                                    <a href="ingreso.php" button type="submit" name="facturar" class="btn btn-success">Guardar</button></td>
                                    <a href="ingreso.php" button type="button" class="btn btn-danger">Cancelar</a>
                                </div>
                         </div>
                        </div>
                </div>
            </div>
        </div>
</div> 
<!-- Fin Tabla Bootstrap -->

<!-- Modal de Editar -->

            <div class="modal fade" id="modaleditar" tabindex="-1" role="dialog"  aria-hidden="true" aria-labelledby="modalTitle">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar los datos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="editar.php">
                                <input type="hidden" name="codigo" id="codigo" values="<?php echo $dato['codigo']?>">
                                <fieldset>
                                 
                                    <div class="form-group row">
                                        <label for="CodigoCliente" class="col-lg-3 col-form-label">Materiales:</label>
                                        <div class="form-group col-md-12">
                                            <select type="text" class="form-control" name="cod_materiales" id="cod_materiales" required value="<?php echo $dato['cod_materiales']?>">
                                                <option selected disabled> Seleccionar Material</option>
                                                <?php
                                                include_once ("Conexion.php");
                                                $objeto = new CConexion();
                                                $conn = $objeto->ConexionBD();

                                                $consulta = "SELECT * FROM materiales";
                                                $resultado = $conn->prepare($consulta);
                                                $resultado->execute();
                                                $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
                                                foreach($datos as $cod_materiales){
                                                ?>
                                            <option> <?php echo $cod_materiales['codigo']. "<br>"; ?>
                                            </option>
                                            <?php   } ?> 
                                        </select> 
                                    </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label>Cantidad:</label>
                                            <input type="number" name="cantidad" class="form-control" placeholder="" min="1" id="cantidad" required value="<?php echo $dato['cantidad']?>">
                                        </div>
                                    </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Precio:</label>
                                        <input type="text" name="precio" class="form-control" placeholder="" id="precio" requerid value="<?php echo $dato['precio']?>">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Impuesto:</label>
                                        <input type="text" name="impuesto" id="impuesto" class="form-control" placeholder="" value="<?php echo $dato['impuesto']?>">
                                    </div>
                                </div>

                                <div class="container3">
                                    <button type="submit" name="" class="btn btn-success">Guardar Cambios</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button>
                                </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
                                                                                              
<!-- Fin Modal de Editar -->

<!-- Footer -->

    <div class="footer">
        <p class="copyr">Copyright: © Plasfacol politica de proteccion</p>
    </div>

<!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Fin Jquery -->
<!-- JavaScript -->
    <script src="menu.js"></script>
    <script src="function_data.js"></script>
    <script src="js/jquery.min.js"></script> 
    <script type="text/javascript"></script>
    <!--script src="ingreso.js"></script>
<!-- Fin JavaScript -->

</body>
</html>