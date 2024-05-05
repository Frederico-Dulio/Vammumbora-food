<body>

    <!-- Loading starts -->
    <div id="loading-wrapper">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <header class="header">
        <div class="logo-wrapper">
            <a href="index.html" class="logo">
                <img src="{{ asset('Admin/img/logo.png') }}" alt="Logo Dashboard" />
            </a>
            <a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title=""
                data-original-title="Quick Links">
                <i class="icon-menu1"></i>
            </a>
        </div>
        <div class="header-items">
            <!-- Custom search start -->
            <div class="custom-search">
                <input type="text" class="search-query" placeholder="Search here ...">
                <i class="icon-search1"></i>
            </div>
            <!-- Custom search end -->

            <!-- Header actions start -->
            <ul class="header-actions">
                <li class="dropdown">
                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                        <i class="icon-bell"></i>
                        <span class="count-label">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                        <div class="dropdown-menu-header">
                            Notifications (40)
                        </div>
                        <ul class="header-notifications">
                            <li>
                                <a href="#">
                                    <div class="user-img away">
                                        <img src="img/user21.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Abbott</div>
                                        <div class="noti-details">Membership has been ended.</div>
                                        <div class="noti-date">Oct 20, 07:30 pm</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-img busy">
                                        <img src="img/user10.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Braxten</div>
                                        <div class="noti-details">Approved new design.</div>
                                        <div class="noti-date">Oct 10, 12:00 am</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-img online">
                                        <img src="img/user6.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Larkyn</div>
                                        <div class="noti-details">Check out every table in detail.</div>
                                        <div class="noti-date">Oct 15, 04:00 pm</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                        aria-haspopup="true">
                        <span class="user-name">{{ Auth::guard('admin')->user()->name }}</span>

                        @php
                            $userNames = explode(' ', Auth::guard('admin')->user()->name);
                            $primeira_letra_nome = $userNames[0][0];
                            $primeira_letra_ultimo_nome = $userNames[count($userNames) - 1][0];
                        @endphp

                        <span class="avatar">{{ $primeira_letra_nome . $primeira_letra_ultimo_nome }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <div class="header-user-profile">
                                <div class="header-user">
                                    <img src="{{ asset('Admin/img/logo.png') }}" alt="Admin Template" />
                                </div>
                                <h5>{{Auth::guard('admin')->user()->name}}</h5>
                                <p>Admin</p>
                            </div>
                            <a href="#"><i class="icon-user1"></i> Meu Perfil</a>
                            <a href="#"><i class="icon-settings1"></i>Configurações</a>
                            <a href="{{ route('admin.logout') }}"><i class="icon-log-out1"></i> Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Header actions end -->
        </div>
    </header>
    <!-- Header end -->

    <!-- Screen overlay start -->
    <div class="screen-overlay"></div>
    <!-- Screen overlay end -->


    </div>

    <!-- *************
   ************ Header section end *************
  ************* -->

    <!-- Container fluid start -->
    <div class="container-fluid">

        <!-- Navigation start -->
        <nav class="navbar navbar-expand-lg custom-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar"
                aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="WafiAdminNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active-page" id="dashboardsDropdown">
                            <i class="icon-devices_other nav-icon"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#addNewContact">
                            <i class="icon-add-user nav-icon"></i>
                            Chefes
                        </a>

                        <!--Start Modal Chefe -->
                        <div class="modal fade" id="addNewContact" tabindex="-1" role="dialog"
                            aria-labelledby="addNewContactLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role=" document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNewContactLabel">Lista dos Chefes</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table table-responsive-lg table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">foto</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Especialidade</th>
                                                    <th scope="col">Contacto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="modal-footer custom">
                                        <div class="right-side">
                                            <button type="button" class="btn btn-link success btn-block"
                                                data-toggle="modal" data-target="#addNewchef"
                                                data-dismiss="modal">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Chefe -->

                        <div class="modal fade" id="addNewchef" tabindex="-1" role="dialog"
                            aria-labelledby="addNewchefLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNewchefLabel">Cadastrar Chefe</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @yield('formulario')
                                    <form class="gutters" method="POST">
                                        @csrf
                                        <div class="modal-body row">

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">

                                                    <label for="nome">Nome</label>
                                                    <input type="text" class="form-control" name="nome"
                                                        placeholder="Nome Completo" id="nome" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="idade">Data de nascimento</label>
                                                    <input type="date" class="form-control" name="idade"
                                                        placeholder="Idade" id="idade" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sexo">Sexo</label>
                                                    <input type="text" class="form-control" name="sexo"
                                                        placeholder="Sexo" required id="sexo">
                                                </div>

                                                <div class="form-group">
                                                    <label for="mun">Municipio</label>
                                                    <input type="text" class="form-control" name="municipio"
                                                        placeholder="Municipio" required id="mun">
                                                </div>

                                                <div class="form-group">
                                                    <label for="rua">Rua</label>
                                                    <input type="text" class="form-control" name="rua"
                                                        placeholder="Rua" required id="rua">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="bi">Número do BI</label>
                                                    <input type="text" class="form-control" name="bi"
                                                        placeholder="Número do BI" required id="bi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tel">Telefone <i
                                                            class="icon-phone-call nav-icon"></i>
                                                    </label>

                                                    <input type="text" class="form-control"
                                                        placeholder="+244 000-000-000" required id="tel">
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-date-input">
                                                        <label for="formFileLg" class="form-label">Foto <i
                                                                class="icon-add_a_photo nav-icon"></i></label>

                                                        <input class="form-control form-control-lg" id="formFileLg"
                                                            type="file" class="form-control datepicker"
                                                            name="foto" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="bairro">Bairro</label>
                                                    <input type="text" class="form-control" name="bairro"
                                                        placeholder="Bairro" required id="bairro">
                                                </div>

                                                <div class="form-group">
                                                    <label for="casa">Número da Casa</label>
                                                    <input type="text" class="form-control" name="numcasa"
                                                        placeholder="Número da Casa" required id="casa">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer custom">
                                            <div class="left-side">
                                                <button type="button" class="btn btn-link danger btn-block"
                                                    data-dismiss="modal">Cancelar</button>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-side">
                                                <button type="submit"
                                                    class="btn btn-link success btn-block">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" id="dashboardsDropdown" data-toggle="modal"
                            data-target="#cliente">
                            <i class="icon-user nav-icon"></i>
                            Clientes
                        </a>

                        <!--Start Modal Clientes -->
                        <div class="modal fade" id="cliente" tabindex="-1" role="dialog"
                            aria-labelledby="addNewContactLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg"" role=" document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addNewContactLabel">Lista dos Clientes</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table table-responsive-lg table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">foto</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Contacto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>@fat</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>@fat</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" id="dashboardsDropdown" data-toggle="modal"
                            data-target="#pratos">
                            <i class="icon-add-to-list nav-icon"></i>
                            Pratos
                        </a>

                        <!--Start Modal Chefe -->
                        <div class="modal fade" id="pratos" tabindex="-1" role="dialog"
                            aria-labelledby="pratosLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role=" document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="pratosLabel">Lista dos Pratos do Dia</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table table-responsive-lg table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">foto</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Especialidade</th>
                                                    <th scope="col">Contacto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="modal-footer custom">
                                        <div class="right-side">
                                            <button type="button" class="btn btn-link success btn-block"
                                                data-toggle="modal" data-target="#addpratos"
                                                data-dismiss="modal">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Chefe -->

                        <div class="modal fade" id="addpratos" tabindex="-1" role="dialog"
                            aria-labelledby="pratosLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="pratosLabel">Cadastrar Pratos do Dia</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="gutters">
                                        <div class="modal-body row">

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">

                                                    <label for="nomeprato">Nome do Prato</label>
                                                    <input type="text" class="form-control" name="nome"
                                                        placeholder="Nome do prato" id="nomeprato" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="preco">Preço</label>
                                                    <input type="text" class="form-control" name="preco"
                                                        placeholder="Preço do prato" required id="preco">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="modal-footer custom">
                                            <div class="left-side">
                                                <button type="button" class="btn btn-link danger btn-block"
                                                    data-dismiss="modal">Cancelar</button>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-side">
                                                <button type="submit"
                                                    class="btn btn-link success btn-block">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link" id="dashboardsDropdown" data-toggle="modal"
                            data-target="#mesas">
                            <i class="icon-add-to-list nav-icon"></i>
                            Mesas
                        </a>

                        <!--Start Modal Mesa -->
                        <div class="modal fade" id="mesas" tabindex="-1" role="dialog"
                            aria-labelledby="mesasLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role=" document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mesasLabel">Lista das Mesas</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table table-responsive-lg table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">foto</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Especialidade</th>
                                                    <th scope="col">Contacto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="modal-footer custom">
                                        <div class="right-side">
                                            <button type="button" class="btn btn-link success btn-block"
                                                data-toggle="modal" data-target="#mesa"
                                                data-dismiss="modal">Cadastrar
                                                Mesa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Mesa -->

                        <div class="modal fade" id="mesa" tabindex="-1" role="dialog"
                            aria-labelledby="addmesaLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Cadastrar Mesa</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="gutters">
                                        <div class="modal-body row">

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">

                                                    <label for="mesa">Número da Mesa</label>
                                                    <input type="text" class="form-control" name="mesa"
                                                        placeholder="Número da mesa" id="mesa" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer custom">
                                            <div class="left-side">
                                                <button type="button" class="btn btn-link danger btn-block"
                                                    data-dismiss="modal">Cancelar</button>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="right-side">
                                                <button type="submit"
                                                    class="btn btn-link success btn-block">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
        <!-- Navigation end -->

        <!-- *************
    ************ Main container start *************
   ************* -->
        <div class="main-container">

            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Admin Dashboard</li>
                </ol>
            </div>
            <!-- Page header end -->

            <!-- Content wrapper start -->
            <div class="content-wrapper">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="info-stats4">
                            <div class="info-icon">
                                <i class="icon-eye1"></i>
                            </div>
                            <div class="sale-num">
                                <h4>98,000</h4>
                                <p>Visitors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="info-stats4">
                            <div class="info-icon">
                                <i class="icon-shopping-cart1"></i>
                            </div>
                            <div class="sale-num">
                                <h4>22,000</h4>
                                <p>Orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="info-stats4">
                            <div class="info-icon">
                                <i class="icon-shopping-bag1"></i>
                            </div>
                            <div class="sale-num">
                                <h4>$70,000</h4>
                                <p>Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="info-stats4">
                            <div class="info-icon">
                                <i class="icon-activity"></i>
                            </div>
                            <div class="sale-num">
                                <h4>$25,000</h4>
                                <p>Expenses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="card m-0">
                                <div class="card-header">
                                    <div class="card-title">Radial Graph</div>
                                </div>
                                <div class="card-body">
                                    <div id="basic-radial-graph"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Row end -->

                </div>

            </div>
            <!-- Content wrapper end -->


        </div>
