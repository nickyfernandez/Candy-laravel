<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Style -->
<link rel="stylesheet" href="/css/styles.css">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
<!-- Ionic icons-->
<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" href="images/_icon.png" />
<link rel="stylesheet" href="css/fontawesome/css/all.min.css">




<header>
  <!--------------------------------------- INICIO DE HEADER ---------------------------------->

  <body>
      <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container">
              <a class="candy" href="index.php">CANDY RASH!</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="icon ion-md-menu"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">


                  <ul class="navbar-nav ml-auto nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrarse</a>
                    </li>

                      <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Productos</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#productos">Dulces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#tortas">Tortas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#pricing">Promos</a>
                    </li>

                  </ul>
  							</li>
                  <li class="nav-item">
                   <a class="nav-link" href="index.php#testimonial">Testimonios</a>
                         </li>
                             <li class="nav-item">
                               <a class="nav-link" href="index.php#contact">Contacto</a>
                                   </li>
                               </ul>


              <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                 <a class="nav-link" href="logout.php">Salir</a>
              </li>
             <li class="nav-item">
                 <a class="nav-link" href="perfil.php">Perfil</a>
               </li>
                   <li class="nav-item submenu dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                 aria-expanded="false">Productos</a>
                 <ul class="dropdown-menu">
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#productos">Dulces</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#tortas">Tortas</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="index.php#pricing">Promos</a>
                 </li>

                 </ul>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="index.php#testimonial">Testimonios</a>
                      </li>
                          <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contacto</a>
                                </li>
                            </ul>




        </div>
    </div>
  </nav>

  <!---------------------------------------- FIN DE HEADER --------------------------------------------->
</header>


@yield("seccion")
@yield("producto")




<footer class="bgDark">
    <div class="container">
        <a class="candy "href="#">CANDY RASH!</a>
        <ul class="list-inline ">
            <li class="list-inline-item footer-menu badge badge-info footmenu"><a href="#"><b>Subir</b></a></li>
            <li class="list-inline-item footer-menu badge badge-info footmenu"><a href="faq.php"><b>FAQ</b></a></li>
            <li class="list-inline-item footer-menu badge badge-info footmenu"><a href="index.php#contact"><b>Contacto</b></a></li>
        </ul>
        <ul class="list-inline">
            <li class="list-inline-item badge badge-danger"><a href="https://www.instagram.com"><i class="icon ion-logo-instagram "></i></a></li>
            <li class="list-inline-item badge badge-info"><a href="https://www.twitter.com"><i class="icon ion-logo-twitter"></i></a></li>
            <li class="list-inline-item badge badge-danger"><a href="https://www.youtube.com"><i class="icon ion-logo-youtube"></i></a></li>
            <li class="list-inline-item badge badge-primary"><a href="https://www.facebook.com"><i class="icon ion-logo-facebook"></i></a></li>
        </ul>
    </div>

    <div class="footer-bottom">
 <div class="container">
   <div class="row d-flex">
     <p class="col-lg-12 footer-text text-center btn btn-info">

©2019 All Rights Reserved by Bomba inc.</p>
   </div>
 </div>
</div>
</footer>
