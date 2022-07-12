<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo e(url('css/Profile.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo e(url('images/F1logo.png')); ?>">
    <title> Profile Editor</title>
    
    <script src= "<?php echo e(url('js/Profile.js')); ?>" defer="true"></script>
    <script> const BASE_URL = "<?php echo e(url('/')); ?>"; </script>
    
  </head>

  <body>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
    <section class="credentials">
    <h1>Il tuo profilo </h1>

          <main>
          <section class='left'>
            <p>Nome:        <?php echo e($Nome); ?>     </p>
            <p>Cognome:     <?php echo e($Cognome); ?>   </p>
            <p>Username:    <?php echo e($Username); ?>  </p>
            <p>Email:       <?php echo e($Email); ?>    </p>
            <p>Password: </p>
          </section>

          <section class='right'>
            <button id='B_name'> Modifica </button>                                                       <form method='post' id='name'>  </form>
            <button id='B_surname'> Modifica </button>                                                    <form method='post' id='surname'>  </form>
            <button id='B_username'> Modifica </button>     <span class='error' id='eusername'></span>    <form method='post' id='username'>  </form>
            <button id='B_email'> Modifica </button>        <span class='error' id='eemail'></span>       <form method='post' id='email'>  </form>
            <button id='B_password'> Modifica </button>     <span class='error' id='epassword'></span>    <form method='post' id='password'>  </form>
          </section>
          </main>
        

      <section id="bottomContainer">
        <a id="logout" href="<?php echo e(url('Logout')); ?>">LOGOUT</a>
        <a id="preferiti" href="<?php echo e(url('Preferiti')); ?>">PREFERITI</a>
        <a id="return" href="<?php echo e(url('Home')); ?>">BACK</a>        
      </section>

    </section>


  </body>

</html><?php /**PATH C:\Program Files\XMAPP\htdocs\hw2\resources\views/Profilo.blade.php ENDPATH**/ ?>