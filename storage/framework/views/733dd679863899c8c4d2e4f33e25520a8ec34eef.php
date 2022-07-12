<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(url('css/Profile.css')); ?>">
    <script src= "./Scripts/Profile.js" defer="true"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo e(url('Images/F1logo.png')); ?>">
    <title> Profile Editor</title>
  </head>

  <body>
    <section class="credentials">
    <h1>Il tuo profilo </h1>

          <main>
          <section class='left'>
            <p>Nome:        $result["name"]      </p>
            <p>Cognome:     $result["surname"]   </p>
            <p>Username:    $result["username"]  </p>
            <p>Email:       $result["email"]    </p>
            <p>Password: </p>
          </section>

          <section class='right'>
            <button id='B_name'> Modifica </button> <form method='post' id='name'>  </form>
            <button id='B_surname'> Modifica </button> <form method='post' id='surname'>  </form>
            <button id='B_username'> Modifica </button> <form method='post' id='username'>  </form>
            <button id='B_email'> Modifica </button> <form method='post' id='email'>  </form>
            <button id='B_password'> Modifica </button> <form method='post' id='password'>  </form>
          </section>
          </main>
        

      <section id="bottomContainer">
        <a id="logout" href="<?php echo e(url('Logout')); ?>">LOGOUT</a>
        <a id="preferiti" href="<?php echo e(url('Preferiti')); ?>">PREFERITI</a>
        <a id="return" href="<?php echo e(url('Home')); ?>">BACK</a>        
      </section>

    </section>


  </body>

</html><?php /**PATH C:\xampp\htdocs\hw2\resources\views/Profilo.blade.php ENDPATH**/ ?>