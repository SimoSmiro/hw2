<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{url('css/Profile.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{url('images/F1logo.png')}}">
    <title> Profile Editor</title>
    
    <script src= "{{url('js/Profile.js')}}" defer="true"></script>
    <script> const BASE_URL = "{{url('/')}}"; </script>
    
  </head>

  <body>
    <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
    <section class="credentials">
    <h1>Il tuo profilo </h1>

          <main>
          <section class='left'>
            <p>Nome:        {{$Nome}}     </p>
            <p>Cognome:     {{$Cognome}}   </p>
            <p>Username:    {{$Username}}  </p>
            <p>Email:       {{$Email}}    </p>
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
        <a id="logout" href="{{url('Logout')}}">LOGOUT</a>
        <a id="preferiti" href="{{url('Preferiti')}}">PREFERITI</a>
        <a id="return" href="{{url('Home')}}">BACK</a>        
      </section>

    </section>


  </body>

</html>