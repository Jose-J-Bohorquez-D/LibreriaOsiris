<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        body{
            background-color: black;
        }
        html{
            color: white;
        }
        nav{
            border-radius: 40px;
        }
        .footer1{
            border-radius: 30px;
        }
    </style>
  </head>
  <body>
    <section class="section">
        <?php require_once("Vistas/Mod/navSup.php"); ?>
        <br><br>
        <?php require_once("Vistas/Mod/hero.php"); ?>
        <br><br>
        <?php require_once("Vistas/Mod/footer.php"); ?>
        <br><br><br><br>
    </section>   
  </body>
</html>