<!doctype html>
<html lang="en">
  <head>
    <title>NatuPoints</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Imagenes/LogoNa.png" type="image/x-icon">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body style="background-color: #AAD2A9">
    <header style="display:flex; justify-content: space-between;align-items:center; text-align:right;background-color: #33a24f;margin-bottom:12%;">
    <div class="container-xxl fw-bolder contenedor__navegador" data-aos="fade-up">
      <nav class="topnav navbar navbar-expand-xl navbar-light fixed-top bg-light0 navbar-light shadow-sm scrollednav py-2 navegador" style="background-color: #33a24f;text-align:right;width:100%;border-bottom:dashed 2px;">
      <a href="?controlador=pagina&accion=inicio" class="container-fluid" style="display:flex;float:left;">
        <img class="container-fluid" src="Imagenes/LogoN2.png" style="width: 22%;cursor:pointer;margin-left:-2%;margin-top:-1%;background-color: #33a24f;">
      </a>
      <div class="collapse navbar-collapse opciones__nav" style="display:flex;float:right;align-content:right;background-color: #33a24f">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style="margin-left:-55%;">
                <a class="nav-link active" href=".?controlador=pagina&accion=inicio" style="text-align:right;font-size:130%;margin-left:-25%;background-color: #33a24f">Inicio</a> 
        </li>
        <li class="nav-item">
                <a class="nav-link active" href=".?controlador=mapas&accion=mapa" style="text-align:right;font-size:130%;background-color: #33a24f">Mapa</a>       
        </li>
        <li class="nav-item">
                <a class="nav-link active" href=".?controlador=zonas&accion=zona" style="text-align:right;font-size:130%;background-color: #33a24f">Nueva Zona</a> 
        </li>
          </div>
      </nav>
    </div>
    </header>
      <div class="container-sm" style="margin-top:30px;margin-bottom:30px">
          <div class="row">
              <div class="col-1-12">
                <?php include_once("router.php"); ?>
              </div>
          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
    <footer class="containter-xl" style=" border: solid #9de0ad;border: 8px;border-radius: 12px;background-color: #9de0ad;text-align: center;margin-left: 85px;margin-right: 75px;margin-top: -70px;margin-bottom: 50px;color: #41444b;font-family: 'Ubuntu', sans-serif;">
        <br>
        <legend class="containter-xl"> Contactenos </legend><br>
        <p class="containter-xl"> Linea Gratuita: <b>01 8000 8888</b> </p>
        <p class="containter-xl"> Correo: <b>NatuPoints@gmail.com </b></p>
        <br>
    </footer>
</body>
</html>