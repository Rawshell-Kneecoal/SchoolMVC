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

    <div class="container containerpad">

        <form action="http://schoolactivity.dev.com/index.php?controller=Alumnos&action=edit" method="post">

            <div class="container-fluid padding">
                <div class="row padding">
                    <div class="col-md-8 col-lg-6 col-xl-5 col-sm-12 ml-auto mr-auto">
                        <div class="card">

                            <div class="card-body">
                                <h4 class="card-title">Datos del alumno</h4>
                                <br>

                                <div class="row">

                                    <div class="col-5">
                                        <label class="label" for="id">ID</label>
                                        <div class="form-group">
                                            <input type="text" id="id" name="id" value="<?php echo $dataAlumno->id; ?>"
                                                placeholder="" class="form-control input-md">
                                        </div>
                                    </div>

                                    <div class="col-7">
                                        <label class="label" for="enrollment">Matrícula</label>
                                        <div class="form-group">
                                            <input type="text" id="enrollment" name="enrollment"
                                                value="<?php echo $dataAlumno->enrollment; ?>" placeholder=""
                                                class="form-control input-md">
                                        </div>
                                    </div>

                                </div>

                                <label class="label" for="first_name">Primer nombre</label>
                                <div class="form-group">
                                    <input type="text" id="first_name" name="first_name" value="<?php echo $dataAlumno->first_name; ?>"
                                        placeholder="" class="form-control input-md">
                                </div>

                                <label class="label" for="second_name">Segundo nombre</label>
                                <div class="form-group">
                                    <input type="text" id="second_name" name="second_name"
                                        value="<?php echo $dataAlumno->second_name; ?>" placeholder=""
                                        class="form-control input-md">
                                </div>

                                <label class="label" for="first_lastname">Apellido paterno</label>
                                <div class="form-group">
                                    <input type="text" id="first_lastname" name="first_lastname"
                                        value="<?php echo $dataAlumno->first_lastname; ?>" placeholder=""
                                        class="form-control input-md">
                                </div>

                                <label class="label" for="second_lastname">Apellido materno</label>
                                <div class="form-group">
                                    <input type="text" id="second_lastname" name="second_lastname"
                                        value="<?php echo $dataAlumno->second_lastname; ?>" placeholder=""
                                        class="form-control input-md">
                                </div>

                                <label class="label" for="age">Edad</label>
                                <div class="form-group">
                                    <input type="text" id="age" name="age" value="<?php echo $dataAlumno->age; ?>" placeholder=""
                                        class="form-control input-md">
                                </div>

                                <label class="label" for="gender">Género</label>
                                <div class="form-group">
                                    <input type="text" id="gender" name="gender" value="<?php echo $dataAlumno->gender; ?>"
                                        placeholder="" class="form-control input-md">
                                </div>

                                <br>

                                <div class="buttoncontainer">
                                    <button class="btn btn-embossed btn-primary" type="submit">
                                        Guardar cambios
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </form>
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