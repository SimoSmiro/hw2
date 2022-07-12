<html>
  <head>
    
    <link rel="stylesheet" href="<?php echo e(url('css/Intro.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

  </head>


  <body>
    <main class="login">
      <section id="Image">
        <img src="<?php echo e(url('Images/F1Logo.png')); ?>">
      </section>

      <section id="TextBox">
        <h1>Benvenuto!</h1>
        <form method="POST">
          <?php echo csrf_field(); ?>
          <div class="username">
            <div><label for='username'>Nome utente</label> </div>
            <input type="text" name="username">
          </div>
          <div class='password'>
            <div><label for='password'>Password</label></div>
            <input type="password" name="password">
          </div>
          <?php if($error=='erroreVuoto'): ?>
            <span class='error'>Parametri vuoti</span>
          <?php elseif($error=='erroreErrato'): ?>
            <span class='error'>Username/Password errati</span>
          <?php endif; ?>
          <div class="accedi">
            <input type='submit' value="Accedi">
          </div>
        </form>
        <div class="signup">Non hai un account? <a href="<?php echo e(url('Register')); ?>">Iscriviti</a></div>
      </section>
    </main>
  </body>
</html><?php /**PATH C:\Program Files\XMAPP\htdocs\hw2\resources\views/Login.blade.php ENDPATH**/ ?>