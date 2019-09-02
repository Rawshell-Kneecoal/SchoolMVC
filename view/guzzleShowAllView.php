<html lang="en">

<head>
    <meta charset="utf-8">
    <title>School activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../public/css/vendor/bootstrap.min.css" rel="stylesheet">

    <link href="../public/css/main.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="../public/css/flat-ui-pro.css" rel="stylesheet">

</head>

<body>
    <div>
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
                    <td>Accciones</td>
                </tr>
            </thead>

            <?php foreach($response['data'] as $data) { ?>
            <tr>
                <!--  <td><a
                        href="http://schoolactivity.dev.com/index.php?controller=Alumnos&action=show&id=<?php echo (string)$alumno->id; ?>"><?php echo $alumno->id; ?></a>
                </td> -->
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['first_name']; ?></td>
                <td><?php echo $data['last_name']; ?></td>
                <td><img src="<?php echo $data['avatar']; ?>"></img></td>

                <td>

                    <!-- <form action="http://schoolactivity.dev.com/index.php?controller=Alumnos&action=delete"
                        method="post">
                        <input type="text" name="id" value="<?php echo $alumno->id; ?>" class="form-control flat"
                            hidden />
                        <button class="btn btn-embossed btn-primary" type="submit">
                            Eliminar
                        </button>
                    </form> -->

                </td>

            </tr>

            <?php } ?>


        </table>


    </div>



    <!-- <div class="dialog dialog-inverse">
    
    </div> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>

    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>

    <script src="../public/scripts/flat-ui-pro.js"></script>

</body>

</html>