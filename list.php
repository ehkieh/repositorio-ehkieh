<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>Comparte Tu Coche - Bienvenido a la plataforma de compartir coche</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
    
</head>

                            <?php
                                        // 1. Declarar variable con el contenido completo de la frase "Un viaje..."
                                        // 2. Recortar la variable , substr, para que solo tenga 80 primeros caracteres
                                        // 3. Mostrar la variable y despues mostrar 3 puntos suspensivos
                                        // 4. Mostrar el resultado
                                        
                                        $frase = "Un viaje entretenido y seguro, no me gusta correr. Además, pararemos a mitad de camino para tomar una rica tostada de sobraasada, y luego, directos a Huelva.";
                                        $frasecortada = substr($frase,0,80);
                                        $frasecortada = $frasecortada . "...";
                                       
                            
                            $user1 = array(
                                
                                'nombre' => "Antonio Luque",
                                'origen' => "Córdoba",
                                'destino' => "Huelva",
                                'direccion' => "Poeta Paredes 25",
                                'hora' => "9:00",
                                'precio' => "15",
                                'plazas' => "2",
                                'avatar' => "images/users/1.jpg"

                                );
                            
                            $user2 = array (
                                
                                'nombre' => "Francisco Molina",
                                'origen' => "Sevilla",
                                'destino' => "Cadiz",
                                'direccion' => "Medina Azahara 32",
                                'hora' => "14:00",
                                'precio' => "5",
                                'plazas' => "1",
                                'avatar' => "images/users/2.jpg"
                                
                                );
                                
                            $user3 = array (
                                
                                'nombre' => "Javier Garcia",
                                'origen' => "Córdoba",
                                'destino' => "Sevilla",
                                'direccion' => "Cañada Real Mestas 15",
                                'hora' => "18:00",
                                'precio' => "7",
                                'plazas' => "3",
                                'avatar' => "images/users/3.jpg"
                                
                                );
                                
                            $user4 = array(
                                
                                'nombre' => "Fernando Navarro",
                                'origen' => "Málaga",
                                'destino' => "Cadiz",
                                'direccion' => "Gran Via Parque 64",
                                'hora' => "21:00",
                                'precio' => "8",
                                'plazas' => "4",
                                'avatar' => "images/users/4.jpg"
                                                                
                                );
                                
                            $user5 = array(
                                
                                'nombre' => "Jesus Gomez",
                                'origen' => "Sevilla",
                                'destino' => "Málaga",
                                'direccion' => "Arroyo del Moro 72",
                                'hora' => "19:00",
                                'precio' => "20",
                                'plazas' => "2",
                                'avatar' => "images/users/5.jpg"
                                
                                );    
                            
                            $trayectos = array(
                                
                                0 => $user1,
                                1 => $user2,
                                2 => $user3,
                                3 => $user4,
                                4 => $user5
                                
                                );

                            for($i=0; $i<count($trayectos); $i= $i +1) {
                                
                                $a = $trayectos[$i]["origen"];
                                $b= $_GET["country"];
                                $c = $trayectos[$i]["destino"];
 
                                
                                
                                if($a==$b or $c==$b) {
                                    $trayectosFinal[] = $trayectos[$i];
                                    }
                                    
                                    }

                            ?>

<body>
<div id="wrapper">
    <div class="header">
        <nav class="navbar   navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.html" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
                        COMPARTE<span> TU COCHE </span> </a></div>

                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="search-row-wrapper"
         style="background-image: url(images/jobs/ibg.jpg); background-size: cover; background-position: center center;">
        <div class="container text-center">
            <form name="sear" action="list.php" method="GET">
            <div class="col-sm-3 col-sm-offset-3">
                
                                <i class="icon-location-2 icon-append"></i>
                                <input type="text" name="country" id="autocomplete-ajax"
                                       class="form-control locinput input-rel searchtag-input has-icon"
                                       placeholder="Origen o Destino..." value="">
            </div>
            <div class="col-sm-3">
                <button type= "submit" class="btn btn-block btn-primary"> Buscar trayectos <i class="fa fa-search"></i></button>
            </div>
            </form>   
        </div>
    </div>    

    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
<!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-sm-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class=" list-filter">
                                <h5 class="list-title"><strong><a href="#"> Fecha de publicación </a></strong></h5>

                                <div class="filter-date filter-content">
                                    <ul>
                                        <li>
                                            <input type="radio" value="1" id="posted_1" name="posted">
                                            <label for="posted_1">24 horas</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="3" id="posted_3" name="posted">
                                            <label for="posted_3">3 días</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="7" id="posted_7" name="posted">
                                            <label for="posted_7">7 días</label>
                                        </li>
                                        <li>
                                            <input type="radio" checked="checked" value="30" id="posted_30"
                                                   name="posted">
                                            <label for="posted_30">30 días</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/.categories-list-->
                        </div>
                    </aside>
                </div>
                
                <!--/.page-side-bar-->
                <div class="col-sm-9 page-content col-thin-left">
                    <div class="category-list">
                        <div class="tab-box clearfix ">
                        
                            <!-- Nav tabs -->
                            <div class="col-lg-12  box-title no-border">
                                <div class="inner">
                                    <h2><span> Trayectos </span> publicados
                                        <small> <?php echo count($trayectosFinal); ?> resultados encontrados</small>
                                    </h2>
                                </div>
                            </div>
                            
                        <div class="adds-wrapper jobs-list">
                            
                                <?php
                                    for ($i = 0; $i < count($trayectosFinal); $i= $i + 1) 
        
                                        {
                                ?>
                
                            <div class="item-list job-item">

                                <div class="col-sm-1  col-xs-2 no-padding photobox">
                                    <div class="add-image"><a href=""><img class="thumbnail no-margin"
                                                                           src= "<?php echo $trayectosFinal[$i]['avatar'];?>"
                                                                           alt="Avatar de Usuario"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-10  col-xs-10  add-desc-box">
                                        <div class="add-details jobs-item">
                                        <h5 class="company-title"><a href=""><?php echo $trayectosFinal [$i]['nombre'];?></a></h5>
                                        <h4 class="job-title"><a href="job-details.html"><?php echo $trayectosFinal [$i]['origen'] . "  a  " . $trayectosFinal[$i]['destino'];?></a></h4>
                                        <span class="info-row">  <span class="item-location"><i
                                                class="fa fa-map-marker"></i><?php echo $trayectosFinal [$i]['direccion'];?></span> <span class="date"><i
                                                class=" icon-clock"> </i><?php echo $trayectosFinal [$i]['hora'];?></span><span class=" salary">	<i
                                                class=" icon-money"> </i> <?php echo $trayectosFinal [$i]['precio'];?></span></span>
                                        
                                        <div class="jobs-desc">
                                            <?php
                                            echo $frasecortada;
                                            ?>
                                        </div>


                                        <div class="job-actions">
                                            <ul class="list-unstyled list-inline">
                                                <li>
                                                    <span class="save-job">
                                                        <span class="fa fa-users"></span>
                                                        <?php echo $trayectosFinal [$i]['plazas'];?>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>


                                    </div>
                                </div>
                                <!--/.add-desc-box-->

                                <!--/.add-desc-box-->
                            
                           
                            </div>
                            <!--/.job-item-->
                            
                             <?php
                                    }
                            ?>
                            
                            
                        </div>
                    </div>    
                </div>    
                
                
            </div>
        </div>
    </div>    
        
    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-right navbar-link footer-nav">
                <li> &copy; <?php echo date("Y");?> - development by Sopinet Software</li>
            </ul>
        </div>
    </div>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- include form-validation plugin || add this script where you need validation   -->
<script src="assets/js/form-validation.js"></script>


<!-- include equal height plugin  -->
<script src="assets/js/jquery.matchHeight-min.js"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="assets/js/hideMaxListItem.js"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
</body>
</html>