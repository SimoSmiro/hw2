<html>
  <head>
    
    <link rel="stylesheet" href="{{url('css/Intro.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

  </head>


  <body>
    <main class="login">
      <section id="Image">
        <img src="{{url('Images/F1Logo.png')}}">
      </section>

      <section id="TextBox">
        <h1>Benvenuto!</h1>
        <form method="POST">
          @csrf
          <div class="username">
            <div><label for='username'>Nome utente</label> </div>
            <input type="text" name="username">
          </div>
          <div class='password'>
            <div><label for='password'>Password</label></div>
            <input type="password" name="password">
          </div>
          @if($error=='erroreVuoto')
            <span class='error'>Parametri vuoti</span>
          @elseif($error=='erroreErrato')
            <span class='error'>Username/Password errati</span>
          @endif
          <div class="accedi">
            <input type='submit' value="Accedi">
          </div>
        </form>
        <div class="signup">Non hai un account? <a href="{{url('Register')}}">Iscriviti</a></div>
      </section>
    </main>
  </body>
</html>