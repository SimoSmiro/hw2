<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo e(url('images/F1logo.png')); ?>">
    <title> I tuoi preferiti </title>

    <link rel="stylesheet" href="<?php echo e(url('css/Preferiti.css')); ?>">
    <script src= "<?php echo e(url('js/Preferiti.js')); ?>" defer="true"></script>
    <script> const BASE_URL = "<?php echo e(url('/')); ?>"; </script>

  </head>

  <body>
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
    
    <main>
      <div id="StartBox">
        <h1> I TUOI ARTICOLI PREFERITI</h1> <a href="<?php echo e(url('Home')); ?>">Homepage</a>
      </div>
      <div id="preferitiList">
        <!-- Caricamento dinamico -->
      </div>

    </main>

  </body>

</html><?php /**PATH C:\Program Files\XMAPP\htdocs\hw2\resources\views/Preferiti.blade.php ENDPATH**/ ?>