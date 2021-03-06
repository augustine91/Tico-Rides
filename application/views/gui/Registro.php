<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro-TicoRide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/configRegistro.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?=base_url()?>/JS/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <img src="<?=base_url()?>/IMAGES/log.PNG">
                <h5>Tico-Rides</h5> </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('Ride/perf') ?>">Accesar
          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          
                              <form action="<?=base_url()?>Ride/autenticar" class="" method="post">
                                  <li>
                               
                                <a href="#">
                                  
                                    <input id="user-reg" name="user" class="form-control" type="text" placeholder="user" required>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <input id="pass-reg" name="pass" class="form-control" type="password" placeholder="Pass" required>
                                </a>
                            </li>
                            <li>
                                
                                   <br>
                                    <input type="submit" class="btn btn-default" value="Log In">
                                
                                </form>
                            </li>
                             
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('Ride/perf') ?>">Principal</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="<?=base_url()?>/IMAGES/body3.jpg" alt="New York" width="1200" height="700"> </div>
            <div class="item"> <img src="<?=base_url()?>/IMAGES/zarcero.jpg" alt="New York" width="1200" height="700"> </div>
            <div class="item"> <img src="<?=base_url()?>/IMAGES/body.png" alt="Aereopuerto Juan SantaMaria" width="1200" height="700"> </div>
            <div class="item"> <img src="<?=base_url()?>/IMAGES/body4.jpg" alt="City mall" width="1200" height="700"> </div>
            <div class="item"> <img src="<?=base_url()?>/IMAGES/body2.jpg" alt="Los Angeles" width="900" height="600"> </div>
            <div class="carousel-caption">
                <div class="">
                    <form id="datos" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?=base_url()?>Ride/guardarUsuario">
                        <div class="">
                             
                             <div class="form-group">
                               
                                 <label class="label" for="pwd">Foto:</label>
                                <br></br>
                               <img id="img_destino" class="" style="max-width: 10%;
                                max-width: 10%;
    margin-right: 844px;" src="<?=base_url()?>/IMAGES/uber-user.png" alt="Tu imagen">
                                <br><br>
                                <input id="imagen" class="input_img" name="imagen" size="30" type="file" required /> </div>
                                
                            <div class="form-group">
                                <label for="text">Nombre:</label>
                                <br></br>
                                <input type="text" class="" id="nombre" name="nombre" placeholder="Ej. Glenn Marin Arias" required/> </div>
                            <div class="form-group">
                                <label for="pwd">Telefono:</label>
                                <br></br>
                                <input type="tel" name="numero" id="numero" placeholder="Ej. 864528" required> </div>
                            <div class="form-group">
                                <label for="pwd">Usuario:</label>
                                <br></br>
                                <input type="text" name="user" class="" id="user" placeholder="Ej. gmarin" required /> </div>
                            <div class="form-group">
                                <label for="pwd">Contrasena:</label>
                                <br></br>
                                <input type="password" name="pass" class="" id="pass" placeholder="12345" required> </div>
                        </div>
                        <input type="submit" value="Guardar" class="btn btn-default">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>/JS/Logica.js"></script>
</body>

</html>