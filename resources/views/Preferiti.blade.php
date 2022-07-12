<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{url('images/F1logo.png')}}">
    <title> I tuoi preferiti </title>

    <link rel="stylesheet" href="{{url('css/Preferiti.css')}}">
    <script src= "{{url('js/Preferiti.js')}}" defer="true"></script>
    <script> const BASE_URL = "{{url('/')}}"; </script>

  </head>

  <body>
  <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
    
    <main>
      <div id="StartBox">
        <h1> I TUOI ARTICOLI PREFERITI</h1> <a href="{{url('Home')}}">Homepage</a>
      </div>
      <div id="preferitiList">
        <!-- Caricamento dinamico -->
      </div>

    </main>

  </body>

</html>