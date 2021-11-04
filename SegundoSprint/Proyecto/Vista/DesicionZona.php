<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagenes/Icon.png">
    <link rel="stylesheet" href="../CSS/Estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title> NatuPoints </title>
</head>     
<body id="fondo">
    <header>
        <a href="../Index.php">
        <img src="../Imagenes/LogoD.png" alt="Logo" id="logo" >
        <img src="../Imagenes/LogoC.png" alt="" id="logo2">
        </a>
        <nav class="container-xl">
            <ul class="nav_links">
                <li> <a href="../Index.php">Inicio</a> </li>
                <li> <a href="Mapa.php">Mapa</a> </li>
            </ul>
        </nav>
    </header>
    <section>
        <table class="container-sm">
            <tr>
                <aside class="Formato container-md">
                <h2 id="Sub_F"> ¿Qué tipo de zona quieres registrar? </h2>
                <form method="POST" action="RegistrarZonaN.php"> 
                    <input type="submit" value="Natural">
                </form>
                <form method="POST" action="RegistrarZonaA.php"> 
                    <input type="submit" value="Artificial">
                </form>
            </tr>
            </table>
    </section>
    <br>
    <footer id="contactos">
        <br>
        <legend id="TituContact"> Contactenos </legend><br>
        <p class="Contact"> Linea Gratuita: <b>01 8000 8888</b> </p>
        <p class="Contact"> Correo: <b>NatuPoints@gmail.com </b></p>
        <br>
    </footer>
</body>
</html>