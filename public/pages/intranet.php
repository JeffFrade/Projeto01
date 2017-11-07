<?php
    //Arquivo com Instância de Classes e o Topo do HTML:
    require_once 'head.php';
?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="intranet.php">Minha Loja</a>
            </div>

            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $_SESSION['usuario']?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-users"></i> Funcionários</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mensagens <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Ler Todas as Mensagens</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="intranet.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Gráficos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Tabelas</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-file-excel-o"></i> Relatório</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-tags"></i> Produtos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-users"></i> Clientes</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-shopping-cart"></i> Vendas</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-desktop"></i> Gerenciar o Site</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Estatísticas</small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-warning">
                            <strong>Aviso: </strong> Dados Correspondentes a Este Ano (<?= date('Y')?>).
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>Mensagens</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Visualizar Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Clientes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Visualizar Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>Vendas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Visualizar Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cogs fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Pedidos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Visualizar Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-line-chart fa-fw"></i> Gráfico de Vendas</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="vendas" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-pie-chart fa-fw"></i> Gráfico de Produtos Vendidos</h3>
                            </div>
                            <div class="panel-body">
                                <canvas id="produtos" height="200"></canvas>
                                <div class="text-right">
                                    <a href="#">Visualizar Detalhes <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Painel de Vendas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Data</th>
                                            <th class="text-center">Hora</th>
                                            <th class="text-center">Produto</th>
                                            <th class="text-center">Valor</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">21/10/2013</td>
                                            <td class="text-center">15:29 PM</td>
                                            <td class="text-center">Produto X</td>
                                            <td class="text-center">R$ 321.33</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">Visualizar Vendas <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once 'scripts.php';
    ?>
    <script type="text/javascript">
        var ctx = document.getElementById("vendas").getContext('2d');
        var vendas = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                datasets: [{
                    label: 'Vendas',
                    data: [12, 19, 3, 5, 2, 3, 15, 2, 3, 8, 9, 10],
                    backgroundColor: [
                        'rgba(0, 255, 0, 0.2)'
                    ],
                    borderColor: [
                        'rgba(0, 255, 0, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

        var cty = document.getElementById("produtos").getContext('2d');
        var produtos = new Chart(cty, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [12, 19, 3],
                    backgroundColor: [
                        'rgba(238, 180, 180, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(0, 100, 0, 1)',
                        'rgba(47, 79 ,79, 1)',
                        'rgba(165, 42, 42, 1)',
                        'rgba(25, 25, 112, 1)',
                        'rgba(144, 238, 144, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(255, 0, 0, 1)'
                    ],
                    borderColor: [
                        'rgba(238, 180, 180, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(0, 100, 0, 1)',
                        'rgba(47, 79 ,79, 1)',
                        'rgba(165, 42, 42, 1)',
                        'rgba(25, 25, 112, 1)',
                        'rgba(144, 238, 144, 1)',
                        'rgba(0, 0, 0, 1)',
                        'rgba(255, 0, 0, 1)'
                    ],
                    borderWidth: 1
                }],

                labels: ["Produto X", "Produto Y", "Produto Z"]
            }
        });
    </script>
</body>
</html>

