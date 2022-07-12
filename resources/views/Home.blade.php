<html>
  <head>
    
    <link rel="stylesheet" href="{{url('css/Home.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Ultimissime!</title>

    <script src="{{url('js/Home.js')}}" defer="true"></script>
    <script> const BASE_URL = "{{url('/')}}"; </script>

  </head>


  <body>
    <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
    
    <main>

      <nav>
        <a href="{{url('Home')}}" class="FullOnly">HOME</a>
        <a href="{{url('Logout')}}" class="FullOnly">LOGOUT</a>
        <a href="{{url('Preferiti')}}" class="FullOnly">PREFERITI</a>
        <a href="{{url('Profilo')}}" class="FullOnly" >PROFILE</a>

        <div id="menu" onclick="toggleMenu(this)">

          <div></div>
          <div></div>
          <div></div>

          <ul id="MobileMenu">
            <a href="{{url('Home')}}" class="FullOnly">HOME</a>
            <a href="{{url('Preferiti')}}" class="FullOnly">PREFERITI</a>
            <a href="{{url('Profilo')}}" class="FullOnly" >PROFILE</a>
          </ul>
        </div>
      </nav>

      <section id="WelcomeBox">
        <img src="{{url('Images/F1Logo.png')}}">
        <h1 id="title">Benvenuto a F1 SS Blog!</h1>
      </section>

      <section id="ChampSection">
        <div>
          <form id="ChampForm">
            <label for='ChampSearch'>Cerca campione del mondo per anno:</label>
            <input type="text" name="ChampSearch" id="ChampSearch">
            <input type="submit" id="ChampButton" value="Cerca">
          </form>
          <section id="results">
            <div id="driver"></div>
            <div id="points"></div>
          </section>
        </div>
      </section>


      <section id="contents">
          <!-- Caricamento dinamico  -->
      </section>


    </main>
    <footer>
      Developed by Simone Smiroldo 
      </br>
    </footer>

  </body>
</html>