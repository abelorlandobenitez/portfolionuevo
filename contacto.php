<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <header class="container">
        <nav>
            <nav class="navbar navbar-expand-md ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item px-3">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="sobremi.php">Sobre mi</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="proyectos.php">Proyectos</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link active" href="contacto.php">Contacto</a>
                            </li>

                        </ul>
                        <a class="btn btn-rojo d-inline" href="">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </nav>

        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 ps-2 mt-4 pb-5">
                
                <h1>Contacto</h1>

            </div>

        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="txtNombre" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="txtCorreo" name="" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow ">
                    </div>
                    <div class="mb-3">
                        <input type="txtTelefono" name="txtTelefono" id="txtTelefono" placeholder="Telefono"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui el mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnEnviar" id="btnEnviar"
                            class="btn btn-blanco px-3">Enviar</button>
                    </div>
                </form>

            </div>
        </div>

    </main>
    <footer class="container">
        <div class="row">
            <div class="col-12 text-center pt-3 py-2 col-sm-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/abel-orlando-benitez-266399139/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BE5SBQ5SPT8CtoJ4GMTKeQg%3D%3D"
                    target="_blank" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 text-center col-sm-3 pb-3  py-2">Sponsor <a href="https://depcsuite.com" target="_blank">DePCSuite</a></div>
            <div class="col-12 text-center col-sm-3 pb-3 py-2"><a href="https://abelorlandobenitez@gmail.com">abelorlandobenitez@gmail.com</a>
            </div>
            <div class="col-12 text-center col-sm-3 pb-3 my-5 py-5"><a href="https://api.whatsapp.com/send?phone=541167208822" class="whatsapp"><i
                        class="fab fa-whatsapp"></i></a>

            </div>
        </div>
    </footer>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>   
</body>
</html>