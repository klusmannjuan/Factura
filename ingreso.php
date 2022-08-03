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
    <title>Ingresos | Plasfacol</title>
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
        <h2>Ingreso</h2>
    </div>

        <div class="iconos">

            <a href="index.php" button type="button" class="btn btn-primary">Agregar ingreso</a>

            <li class="nav-link n-b nav-us2" type="button" data-bs-toggle="modal" data-bs-target="#modalregis"> 
                <a href="#">
                    <i class='bx  bxs-file-archive icon2 icon-b'>Reporte</i>
                </a>   
            </li> 

            
        </div>
</div>

<!-- Tabla Bootstrap -->
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered"  style="width:100%">

                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Fecha</th>
                                    <th>Proveedor</th>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                
                            <?php
                                include_once ("Conexion.php");
                                $objeto = new CConexion();
                                $conn = $objeto->ConexionBD();
                        
                     
                        
                        $consulta = "SELECT codigo, fecha, cod_usuarios FROM facturas";
                        $resultado = $conn->prepare($consulta);
                        $resultado->execute();
                        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
                        foreach($datos as $sumarsubtotales){
                        ?>
                               

                                <tr>
                                    <td><?php echo $sumarsubtotales['codigo']?></td>
                                    <td><?php echo $sumarsubtotales['fecha']?></td>
                                    <td><?php echo $sumarsubtotales['cod_usuarios']?></td>
                                    <td><?php echo $sumarsubtotales;?></td>
                                    <td><button type='button' class='btn btn-success editbtn' id='removeRows' data-bs-toggle="modal" data-bs-target="#modaleditar">Editar</button></td>
                                    <td><a href="eliminarfactura.php?codigo=<?=$sumarsubtotales['codigo']?>"><button type='button' class='btn btn-danger delete' data-bs-toggle="modal" id='removeRows'>Borrar</button></td>
                                   

                                </tr>
                        <?php } ?>
 
                       




                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Fecha</th>
                                    <th>Proveedor</th>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                    </table>
                </div>
            </div>
        </div>
</div>
                            

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
<!-- Fin JavaScript -->
<!-- <script src="js/jquery.min.js"></script> -->
    <script type="text/javascript"></script>

</body>
</html>
            