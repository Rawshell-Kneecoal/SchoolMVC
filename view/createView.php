<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>School activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../public/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="../public/css/flat-ui-pro.css" rel="stylesheet">

  </head>
  <body>

    <div class="container">
    <h1>Add alumno</h1>

        <?php ?>

        <form action="http://schoolactivity.dev.com/index.php?controller=Alumnos&action=edit" method="post">
       
        <table class="table table-striped table-bordered">

        <thead>
            <tr>
                <td>ID</td>
                <td>Matrícula</td>  
                <td>Primer nombre</td>
                <td>Segundo nombre</td>
                <td>Apellido paterno</td>
                <td>Apellido materno</td>
                <td>Edad</td>
                <td>Género</td>

            </tr>
        </thead>
            <tr>

                <td><input type="text" name="id" value = "<?php echo $dataAlumno->id; ?>" class="form-control flat" /></td>
                <td><input type="text" name="enrollment" value = "<?php echo $dataAlumno->enrollment; ?>" class="form-control flat" /></td>
                <td><input type="text" name="first_name" value = "<?php echo $dataAlumno->first_name; ?>" class="form-control flat" /></td>
                <td><input type="text" name="second_name" value ="<?php echo $dataAlumno->second_name; ?>" class="form-control flat" /></td>
                <td><input type="text" name="first_lastname" value ="<?php echo $dataAlumno->first_lastname; ?>" class="form-control flat" /></td>
                <td><input type="text" name="second_lastname" value ="<?php echo $dataAlumno->second_lastname; ?>" class="form-control flat" /></td>
                <td><input type="text" name="age" value ="<?php echo $dataAlumno->age; ?>" class="form-control flat" /></td>
                <td><?php echo $dataAlumno->gender; ?></td>
                </form>
            </tr>
  
        </table>

        <button class="btn btn-embossed btn-primary" type="submit">
            Guardar cambios
        </button>
        </form>

    </div>

    <!-- <div class="dialog dialog-inverse">
    <div class="container"></div>
    </div> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>

    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>

    <script src="../public/scripts/flat-ui-pro.js"></script>

  </body>
</html>







