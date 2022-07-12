<html>
  <head>
    
    <link rel="stylesheet" href="<?php echo e(url('css/Intro.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title> Signup now!</title>
    <script> const BASE_URL = "<?php echo e(url('/')); ?>"; </script>
    <script src="<?php echo e(url('js/Signup.js')); ?>" defer="true"></script>

  </head>


  <body>

    <main class="login">
      <section id="Image">
        <img src="./Images/F1Logo.png">
      </section>

      <section id="TextBox">
        <h1>Registrati!</h1>
        <form method='post' autocomplete="off">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
        <div class="names">

            <div class="name">
              <div><label for='name'>Nome</label></div>
              <div><input type='text' name='name' value='<?php echo e(old("name")); ?>'></div>
              <span></span>
            </div>

            <div class="surname">
              <div><label for='surname'>Cognome</label></div>
              <div><input type='text' name='surname' value='<?php echo e(old("surname")); ?>'></div>
              <span></span>
            </div>

            <div class="username">
              <div><label for='username'>Nome utente</label> </div>
              <div><input type="text" name="username" value='<?php echo e(old("username")); ?>'></div>
              <span></span>
            </div>

            <div class="email">
              <div><label for='email'>Email</label></div>
              <div><input type='text' name='email' value='<?php echo e(old("email")); ?>'></div>
              <span></span>
            </div>

            <div class='password'>
              <div><label for='password'>Password</label></div>
              <div><input type="password" name="password"></div>
              <span></span>
            </div>

            <div class="confirm_password">
              <div><label for='confirm_password'>Conferma Password</label></div>
              <div><input type='password' name='confirm_password'></div>
              <span></span>
            </div>

            <div class="register">
              <input type='submit' value="Registrati">
            </div>
        </div>
        </form>
        <div class="signup">Hai già un account? <a href="<?php echo e(url('Login')); ?>">Accedi</a></div>
      </section>
    </main>
  </body>
</html><?php /**PATH C:\Program Files\XMAPP\htdocs\hw2\resources\views/Register.blade.php ENDPATH**/ ?>