<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tarea 1</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript"></script>
    <script src="vendor/jquery/jquery.js"></script>
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
    <script type="text/javascript">
        function al(op) {
            var opc = op;
            switch(op) {
                case 1:
                    var dict_data = {
                        _token: {
                            'X-CSRF-TOKEN': "<?php echo csrf_token(); ?>"
                        },
                        alumno_id: -1
                    };
                    var url = "<?php echo url('api/alumnos/obtener'); ?>";
                    break;
                case 2:
                    var dict_data = {};
                    var url = {};
                    break;
                case 3:
                    var dict_data = {};
                    var url = {};
                    break;
                case 4:
                    var dict_data = {};
                    var url = {};
                    break;
                case 5:
                    var dict_data = {
                        _token: {
                            'X-CSRF-TOKEN': "<?php echo csrf_token(); ?>"
                        },
                        profesor_id: -1
                    };
                    var url = "<?php echo url('api/profesores/obtener'); ?>";
                    break;
                case 6:
                    var dict_data = {};
                    var url = {};
                    break;
                case 7:
                    var dict_data = {};
                    var url = {};
                    break;
                case 8:
                    var dict_data = {};
                    var url = {};
                    break;
                case 9:
                    var dict_data = {
                        _token: {
                            'X-CSRF-TOKEN': "<?php echo csrf_token(); ?>"
                        },
                        curso_id: -1
                    };
                    var url = "<?php echo url('api/cursos/obtener'); ?>";
                    break;
                case 10:
                    var dict_data = {};
                    var url = {};
                    break;
                case 11:
                    var dict_data = {};
                    var url = {};
                    break;
                case 12:
                    var dict_data = {};
                    var url = {};
            }

            $.ajax({
                type: 'POST',
                url:  url,
                headers: {
                    'X-CSRF-TOKEN': "<?php echo csrf_token(); ?>"
                },
                data: dict_data,
                success: function(data) {
                    if (data.error != true) {
                        switch(op) {
                            case 1:
                                $("#tab-alu").empty();
                                for (var i = data.respuesta.length - 1; i >= 0; i--) {
                                    $("#tab-alu").append(
                                        "<tr><th scope='row'>"+data.respuesta[i].id+"</th><td>"+data.respuesta[i].nombres+"</td><td>"+data.respuesta[i].apellidos+"</td><td>"+data.respuesta[i].edad+"</td><td>"+data.respuesta[i].cursos_id+"</td></tr>"
                                    );
                                }
                            break;

                            case 5:
                                $("#tab-alu").empty();
                                for (var i = data.respuesta.length - 1; i >= 0; i--) {
                                    $("#tab-alu").append(
                                        "<tr><th scope='row'>"+data.respuesta[i].id+"</th><td>"+data.respuesta[i].nombres+"</td><td>"+data.respuesta[i].apellidos+"</td><td>"+data.respuesta[i].edad+"</td><td>"+data.respuesta[i].curso_id+"</td></tr>"
                                    );
                                }
                            break;

                            case 9:
                                $("#tab-alu").empty();
                                for (var i = data.respuesta.length - 1; i >= 0; i--) {
                                    $("#tab-alu").append(
                                        "<tr><th scope='row'>"+data.respuesta[i].id+"</th><td>"+data.respuesta[i].nombre+"</td><td>"+data.respuesta[i].created_at+"</td></tr>"
                                    );
                                }
                            break;
                        }
                    }
                    console.log(data);
                },
                error: function(xhr, textStatus, thrownError) {
                    console.log(thrownError +"error "+ textStatus);
                }
            });
        }

        $(document).ready(
            function(e) {
                $('#sidebar-nav').on(
                    'click',
                    'li',
                    function(e) {
                        e.preventDefault();
                        $('#sidebar-nav li.active').removeClass('active');
                        $(this).addClass('active');
                    }
                );

                $("#1").click(
                    function (e) {
                        e.preventDefault();
                        $('#contenido').load('/alumnos');
                        $('#botones').load('/botones-alumnos');
                    }
                );

                $("#2").click(
                    function (e) {
                        e.preventDefault();
                        $('#contenido').load('/profesores');
                        $('#botones').load('/botones-profesores');
                    }
                );

                $("#3").click(
                    function (e) {
                        e.preventDefault();
                        $('#contenido').load('/cursos');
                        $('#botones').load('/botones-cursos');
                    }
                );
            }
        );
    </script>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="#"><img style="width: 150px;" src="css/logo1.png"></a>
                </li>
                <li>
                    <a id="1" href="#">Alumnos</a>
                </li>
                <li>
                    <a id="2" href="#">Profesores</a>
                </li>
                <li>
                    <a id="3" href="#">Cursos</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <span href="#menu-toggle" class="btn btn-secondary" id="menu-toggle" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <div id="botones"></div>
            <div id="contenido" class="container-fluid"> 
                <h1>Tarea I DESARROLLO DE APLICACIONES EMPRESARIALES</h1>   
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#menu-toggle").click(
            function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            }
        );
    </script>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>