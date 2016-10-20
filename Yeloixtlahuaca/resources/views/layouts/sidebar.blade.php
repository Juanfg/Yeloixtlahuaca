<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina de Administradores</title>

    <!-- Custom CSS -->
    <link href="{{URL::asset('assetsSidebar/css/simple-sidebar.css')}}" rel="stylesheet">

    <link href="{{URL::asset('assetsSidebar/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Página de Administradores
                    </a>
                </li>
                <li>
                    <a href="#">Avisos</a>
                </li>
                <li>
                    <a href="#">Integrantes</a>
                </li>
                <li>
                    <a href="#">Donantes</a>
                </li>
                <li>
                    <a href="#">Secciones</a>
                </li>
                <li>
                    <a href="#">Actividades</a>
                </li>
                <li>
                    <a href="#">Fotos Actividades</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{URL::asset('assetsSidebar/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('assetsSidebar/js/bootstrap.min.js')}}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
