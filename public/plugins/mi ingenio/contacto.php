<!DOCTYPE html> <!-- Diseñado por Octavio Garcia -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Contactanos</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/style.css">
  <link rel="stylesheet" href="css/cslider.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.adipoli.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/modernizr.custom.28468.js"></script>
  <script src="js/jquery.cslider.js"></script>
  <script src="js/app.js"></script>
  <script src="js/menu.js"></script>
  
</head>
<body>
 
 
   <section>
         <div id="banner12">
        <?php include("header.php") ?> 

        <div class="centroIndex">
          <div class="caja1">
            <div class="caja2">
              <h3>Diseño Web Y Programación</h3>
              <h1>CONTACTANOS</h1>
              <h3>Marketing OnLine </h3>
            </div>
          </div>
        </div>



      </div>
  
   </section>
    
    <section>
      <div id="banner13">
      
          
      <div class="contacto">
        <div class="datosContacto">
          <h2>CONTACTANOS</h2>
          <p>LLamanos o siguenos en las redes sociales</p>
        <ul>
          <li><span class="icon-phone phone"></span><a href="#">3506519526 - 3196915186</a></li>
          <li><span class="icon-mail2 mail"></span><a href="#">info@ingenioonline.com</a></li>
          <li><span class="icon-mail2 mail"></span><a href="#">ingenioonline@gmail.com</a></li>
          <li><span class="icon-facebook facebook"></span><a href="https://www.facebook.com/ingenioonline">Facebook</a></li>
          <li><span class="icon-twitter twitter"></span><a href="https://twitter.com/OnlineIngenio">Twitter</a></li>
          <li><span class="icon-youtube youtube"></span><a href="#">Youtube</a></li>
        </ul>  
        </div>
      </div>
     
     
       <div class="formulario">
        
      
       <form action="enviar.php" method="post" class="form-register">
        <h2 class="form__titulo">Formulario de Contacto</h2>
        <div class="contenedor-inputs">
          <input type="text" name="Nombre" placeholder="Nombre" class="input-48" required>
          <input type="text" name="Telefono" placeholder="Telefono" class="input-48" required>
          <input type="email" name="Correo" placeholder="Direccion de Correo" class="input-100" required>
          <textarea name="Mensaje" id="mensaje" cols="30" rows="10" placeholder="Escriba aqui" required class="input-100"></textarea>
          <input type="submit" value="Enviar" id="boton" class="btn-enviar">
        </div>
        
      </form>
       
     </div>
      
    </div>
  
    
    </section>
    
  
  
  <section>
    <?php include ("footer.php")?>
  </section>
</body>
</html>




