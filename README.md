# simulaphishing

Simulaphising muestra una simulación de todo el ciclo de una estafa de phishing en redes sociales, tiene como objetivo demostrar y concienciar de lo sencillo que es obtener las credenciales de un usuario, ponerse en la piel del atacante preparando su "cebo" y como la victima cae en el engaño.

Lenguajes y software empleado: 
HTML - CCS - JS - PHP - Servidor Xampp

Este proyecto se ha creado con fines educativos, con lo cual, el desarrolador no se hace responsable del mal uso que puedan realizar los usuarios con este código.

Para que los correos se envien al mail del atacante, es necesario configurar xampp previamente (leer el archivo "howenviacorreosxampp").

Capturas de ejecución:

*Vista del atacante*

Lo primero es abrir el navegador e indicar el proyecto "http://localhost/simula_phishing/index.html"
<img width="953" alt="1" src="https://user-images.githubusercontent.com/56514028/206007368-c4def36c-7cb3-4471-b486-d2c0b14de536.PNG">

Ahora es momento de introducir un link gancho, donde será redirigida la víctima, una vez haya enviado el formulario.
El nombre de usuario del objetivo si se conoce, para que sea más rapido el inicio de sesión.
El mail del atacante donde recibirá los datos capturados.
<img width="750" alt="2" src="https://user-images.githubusercontent.com/56514028/206007373-cf6a9d5b-e63b-4578-83aa-a1b11c37e934.PNG">

*Vista de la víctima*
El usuario al que le llegue el link donde se ha creado el ataque, introduce sus credenciales y es redirigido a un link legítimo (por ejemplo un meme).
<img width="311" alt="3" src="https://user-images.githubusercontent.com/56514028/206007375-f9d4cccd-6b4d-4546-855c-14dd44259649.PNG">


*Vista del atacante*
Por último llegan al correo configurado antes, el user y pass de la víctima.
<img width="273" alt="4" src="https://user-images.githubusercontent.com/56514028/206007376-5d84a3ff-3dfb-4465-b10c-b0cd10a65c9d.PNG">

