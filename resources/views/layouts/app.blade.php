<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/dist/css/adminlte.min.css?v=3.2.0">
    <script src="{{ asset('js/app.js') }}" defer></script>


</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        @include('layouts.navbar')

        @include('layouts.sidebar')

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-sm-6">

                            @section('content')
                                <div class="content">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6" style="color: white">
                                            <div class="card card-stats" style="background:RoyalBlue">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5 col-md-4">
                                                            {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-globe text-warning"></i>
                                </div> --}}
                                                        </div>
                                                        <div class="col-7 col-md-8">
                                                            <div class="numbers">
                                                                <p class="card-category">Saldo Total</p>
                                                                <p class="card-title">
                                                                    R$0,00{{-- {{ __(auth()->saldos()->SaldoDisponivel)}} --}}
                                                                <p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ">
                                                    <hr>
                                                    <div class="stats">
                                                        <i class="fa fa-refresh"></i> Atualizado
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6" style="color: white">
                                            <div class="card card-stats" style="background:firebrick">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-5 col-md-4">
                                                            {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-money-coins text-success"></i>
                                </div> --}}
                                                        </div>
                                                        <div class="col-7 col-md-8">
                                                            <div class="numbers">
                                                                <p class="card-category">Saldo Disponível</p>
                                                                <p class="card-title">R$0,00{{-- {{$saldos->SaldoTotal}} --}}
                                                                <p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ">
                                                    <hr>
                                                    <div class="stats">
                                                        <i class="fa fa-refresh"></i> Atualizado
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6" style="color: white">
                                            <div class="card card-stats" style="background:orange">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5 col-md-4">
                                                            {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-vector text-danger"></i>
                                </div> --}}
                                                        </div>
                                                        <div class="col-7 col-md-8">
                                                            <div class="numbers">
                                                                <p class="card-category">Saldo Utilizado</p>
                                                                <p class="card-title">
                                                                    R$0,00{{-- {{ __(auth()->saldos()->SaldoUtilizado)}} --}}
                                                                <p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ">
                                                    <hr>
                                                    <div class="stats">
                                                        <i class="fa fa-refresh"></i> Atualizado
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6" style="color: white">
                                            <div class="card card-stats" style="background:green">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5 col-md-4">

                                                        </div>
                                                        <div class="col-7 col-md-8">
                                                            <div class="numbers">
                                                                <p class="card-category">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Saldo em
                                                                            Tramitação
                                                                        </font>
                                                                    </font>
                                                                </p>
                                                                <p class="card-title">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            R$ 0,00
                                                                        </font>
                                                                    </font>
                                                                </p>
                                                                <p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ">
                                                    <hr>
                                                    <div class="stats">
                                                        <i class="fa fa-refresh"></i>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Atualizado
                                                            </font>
                                                        </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6" style="color: white">
                                            <div class="card card-stats" style="background:purple">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5 col-md-4">
                                                            {{-- <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                                </div> --}}
                                                        </div>
                                                        <div class="col-7 col-md-8">
                                                            <div class="numbers">
                                                                <p class="card-category">Saldo Reserva</p>
                                                                <p class="card-title">
                                                                    R$0,00{{-- {{ __(auth()->saldos()->SaldoReserva)}} --}}
                                                                <p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer ">
                                                    <hr>
                                                    <div class="stats">
                                                        <i class="fa fa-refresh"></i> Atualizado
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <html>

                                    <head>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script type="text/javascript">
                                            google.charts.load('current', {
                                                'packages': ['corechart']
                                            });
                                            google.charts.setOnLoadCallback(drawChart);

                                            function drawChart() {

                                                var data = google.visualization.arrayToDataTable([
                                                    ['Task', 'Hours per Day'],
                                                    ['Saldo Total', 2],
                                                    ['Saldo Disponível', 2],
                                                    ['Saldo Utilizado', 2],
                                                    ['Saldo Tramitação', 7],
                                                    ['Saldo Reserva', 5],
                                                ]);

                                                var options = {
                                                    title: 'Estatísticas'
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById(
                                                    'piechart'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                    </head>

                                    <body>
                                        <div id="piechart" style="width: 900px; height: 500px;"></div>
                                    </body>

                                    </html>
                                    <hr>

                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
        </div>
    @endsection

    </div>
    </div>
    </div>
    </section>

    @yield('content')

    </div>

    @include('layouts.footer')

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>


    <script src="/plugins/jquery/jquery.min.js"></script>

    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"></script>
</body>

</html>
