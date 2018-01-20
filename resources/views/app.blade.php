<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>JP Solutions</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- MetisMenu CSS -->
        <link href="{{ URL::asset('css/metisMenu.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="{{ URL::asset('css/startmin.css') }}" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <a class="navbar-brand" href="#">
                    <img src="http://jpsolutions.com.br/images/logo_100px.png" width="30" height="25" alt="">
                  </a>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">JP Solutions</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> JP Solutions <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                
                <!-- Menu -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                <!-- Menu -->
                
                <!-- Clientes  Menu -->
                <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Clientes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/Clientes/Adicionar">Novo</a>
                            </li>
                            <li>
                                <a href="/Clientes/Visualizar">Cadastrados</a>
                            </li>
                        </ul>
                    </li>

                
                <!-- Fornecedor Menu -->
                            <li>
                                <a href="#"><i class="fa fa-truck fa-fw"></i> Fornecedores<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/Fornecedores/Adicionar">Novo</a>
                                    </li>
                                    <li>
                                        <a href="/Fornecedores/Visualizar">Cadastrados</a>
                                    </li>
                                </ul>
                            </li>

                <!-- Produtos Menu -->
                            <li>
                                <a href="#"><i class="fa fa-inbox fa-fw"></i> Produtos<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                        <li>
                                            <a href="/Produtos/Adicionar">Novo</a>
                                        </li>
                                        <li>
                                            <a href="/Produtos/Visualizar">Cadastrados</a>
                                        </li>
                                </ul>
                            </li>
                            

                <!-- Pedidos Menu -->
                            <li>
                                <a href="#"><i class="fa fa-envelope-o fa-fw"></i> Pedidos<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/Pedidos/Adicionar">Novo</a>
                                    </li>
                                    <li>
                                        <a href="/Pedidos/Visualizar">Pedidos</a>
                                    </li>
                                </ul>
                            </li>
                            
                <!-- BUG Report -->
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Bug Report</a>
                            </li>


                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            
            @yield('conteudo')

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script type="text/javascript" src="{{ URL::asset('js/metisMenu.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script type="text/javascript" src="{{ URL::asset('js/startmin.js') }}"></script>

    </body>
</html>
