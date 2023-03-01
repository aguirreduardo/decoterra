<?php
  require("mail.php");
  function validate($name,$lastname,$email,$subjet,$message, $form){
    return !empty($name) &&  !empty($lastname) && !empty($email) && !empty($subjet) && !empty($message);
  }

  $status = "";

  if (isset($_POST["form"])) {
    if (validate(...$_POST)) {
      $name = htmlentities($_POST["name"]);
      $lastname = htmlentities($_POST["lastname"]);
      $email = htmlentities($_POST["email"]);
      $subjet = htmlentities($_POST["subjet"]);
      $message = htmlentities($_POST["message"]);

      $body = "Hola $name <$email>. Recibimos tu mensaje: <br><br> $message <br><br> Te enviaremos la respuesta a tu correo $email a la brevedad <br>Saludos!<br>DECOTERRA";

      //Mandar el correo
      sendMail($subjet, $body, $email, $name, true);

      $status = "success";
    }
    else {
      $status = "danger";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      
      <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Passions+Conflict&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/74cc7b731d.js" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="./CSS/style.css">
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <title>Cotizacion</title>
      <link rel="shortcut icon" href="./imagen/Logoexa.jpeg" type="image/x-icon">

  </head>
  <body>

    <?php if ($status == "success"):?>
      <script>
        Swal.fire({
        icon: 'success',
        title: '¡Mensaje enviado con éxito!',
        text: 'Hola <?= $name;?>! En el transcurso del dia responderemos tu consulta.',
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href="index.html"
        }
        })
      </script>
    <?php endif; ?>

    <?php if ($status == "danger"):?>
      <script>
         Swal.fire({
        icon: 'error',
        title: 'Surgió un problema. Por favor intenta nuevamente.',
        })
      </script>
    <?php endif; ?>

    <header>      
      
        <img src="./imagen/Logoexa.jpeg" alt="Logo nav" class="nav-logo">
            
    </header>
    <nav class="menu-fixed">
      <ul>
        <li><a href="./index.html">Inicio</a></li>
      </ul>
    </nav>
    <main>
      <div class="cotizacion-container">
        <div class="cotizacion">
          <h4>Cotización</h4>
          <form action="./cotizacion.php" method="POST">
            <div class="">
              <label for="name">Nombre:</label>
              <div>
                  <input type="text" name="name" id="name" required>
              </div>
          
              <label for="lastname">Apellido:</label>
              <div>
                  <input type="text" name="lastname" id="lastname" required>
              </div>

              <label for="email">Email:</label>
              <div>
                  <input type="email" name="email" id="email" placeholder = "ejemplo@ejemplo.com" required>
              </div>

              <label for="subjet">Asunto</label>
              <div>
                <input type="text" name="subjet" id="subjet" required>
              </div>

              <label for="message">Escribe las caracterizticas de lo que necesitas cotizar</label>
              <div>
                  <textarea name="message" id="message" required></textarea>
              </div>                   
        
              <button type="submit" name="form" class="btn btn-dark">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <footer>
      <div class="seguinos">
        <p>Seguinos en:</p>
        <ul class="seguinos-list">
          <li><a href="https://instagram.com/deco.terra22?igshid=NDk5N2NlZjQ=" class="fa-brands fa-instagram social"></a></li>
          <!-- <li><a href="#" class="fa-brands fa-facebook social"></a></li> -->
        </ul>
      </div>
      <div class="contactanos">
        <p>contactanos via: </p>
        <ul class="contactanos-list">
          <li class="fa-solid fa-envelope social"><a href="mailto:mundodecoterra@gmail.com" >  mundodientedeleon@gmail.com</a></li>
          <li class="fa-brands fa-whatsapp social"><a href="https:/wa.me/+5493813025955">  +54 9 3813025955</a></li>
        </ul>
      </div>
    </footer>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh21eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      -->
  </body>
</html>