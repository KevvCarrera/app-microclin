<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>App Microclin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <style>
        .card {
            margin: 4%;
            /* Agrega un margen de 20px entre las cards */
        }

        /* Mejoras del filtro */
        .filter-form {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            margin-bottom: 30px;
        }

        .filter-form select,
        .filter-form button {
            margin-bottom: 15px;
        }

        .filter-form select {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .filter-form button {
            background-color: #143FA3;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .filter-form button:hover {
            background-color: #0e2e7d;
        }

        /* Estilo de los gráficos */
        .chart-container {
            margin-top: 30px;
        }


    </style>

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <!-- Resumen -->
                    <div class="row">
                        <div class="col-xxl-8 mb-6 order-0">
                            <br>
                            <div class="card">
                                <div class="d-flex align-items-start row">
                                    <div class="col-sm-7">
                                        <center>
                                            <br><br><br>
                                            <img src="../assets/img/logo_microclin.png"
                                                height="50" alt="View Badge User" />
                                            <br><br>
                                        </center>
                                        <div class="card-body">
                                            <h5 class="card-title mb-3" style="color:#143FA3">Bienvenido! 🎉</h5>
                                            <p class="mb-6">
                                                Aquí podrás hacer consultas sobre las enfermedades.
                                            </p>
                                            <br>
                                            <center>
                                                <a href="https://drive.google.com/drive/folders/1XNMQE8YOHeLVwqpUpAD321OgiFhwb2sz?usp=sharing" class="btn btn-sm"
                                                    style="background-color:#143FA3; color:white;">Ver manual de
                                                    ayuda</a>
                                            </center>

                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-6">
                                            <img src="../assets/img/Visual_data-pana.png"
                                                height="250" alt="View Badge User" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2">
                            <br>
                            <div class="row">
                                <!-- Total Enfermedades -->
                                <div class="col-6 mb-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-start justify-content-between mb-4">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                            </div>
                                            <p class="mb-1">Total de Enfermedades</p>
                                            <h4 class="card-title mb-3">{{ $enfermedades->count() }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Casos Totales -->
                                <div class="col-6 mb-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-start justify-content-between mb-4">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>
                                            </div>
                                            <p class="mb-1">Casos Totales</p>
                                            <h4 class="card-title mb-3">{{ $enfermedades->sum('Casos') }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Muertes Totales -->
                                <div class="col-6 mb-6">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div
                                                class="card-title d-flex align-items-start justify-content-between mb-4">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png"
                                                        alt="chart success" class="rounded" />
                                                </div>

                                            </div>
                                            <p class="mb-1">Muertes Totales</p>
                                            <h4 class="card-title mb-3">{{ $enfermedades->sum('Muertos') }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Leyenda de las siglas de las especies -->
                    <div class="card legend">
                        <div class="card-header">
                            <h6 class="mb-0">Significado de las Siglas</h6>
                        </div>
                        <div class="card-body">
                            <p><span class="fw-bold">avi:</span> Aves</p>
                            <p><span class="fw-bold">sui:</span> Suinos</p>
                            <p><span class="fw-bold">api:</span> Apicultura</p>
                            <p><span class="fw-bold">bov:</span> Bovinos</p>
                            <p><span class="fw-bold">cuy:</span> Cuyes</p>                        </div>
                    </div>


                    <div class="row">
                        <!-- Gráfico de Barras -->
                        <div class="chart-container">
                            <div id="chart"></div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Filtro -->
                        <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2">
                            <form method="GET" action="{{ url()->current() }}" class="filter-form">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <select name="nombre" class="form-select">
                                            <option value="">Seleccionar Nombre</option>
                                            @foreach ($uniqueNombres as $nombre)
                                                <option value="{{ $nombre }}"
                                                    {{ request('nombre') == $nombre ? 'selected' : '' }}>
                                                    {{ $nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary">Filtrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="row">
                        <!-- Tabla de Resultados -->
                        <div class="col-md-6 col-lg-4 order-2 mb-6">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Enfermedades Registradas</h5>
                                </div>
                                <div class="card-body pt-4">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha</th>
                                                    <th>Casos</th>
                                                    <th>Muertos</th>
                                                    <th>Especie</th>
                                                    <th>Región</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($enfermedades as $enfermedad)
                                                    <tr>
                                                        <td>{{ $enfermedad->Nombre }}</td>
                                                        <td>{{ $enfermedad->Fecha }}</td>
                                                        <td>{{ $enfermedad->Casos }}</td>
                                                        <td>{{ $enfermedad->Muertos }}</td>
                                                        <td>{{ $enfermedad->Especie }}</td>
                                                        <td>{{ $enfermedad->Region }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">No se encontraron
                                                            resultados</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                                <div class="text-body">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    , made with ❤️ by
                                    <a href="https://themeselection.com" target="_blank"
                                        class="footer-link">ThemeSelection</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- ApexCharts -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Page JS -->
    <script>
        var casosPorEspecie = @json($casosPorEspecie); // Obtener datos de PHP
        var especies = casosPorEspecie.map(e => e.Especie); // Obtener las especies
        var casos = casosPorEspecie.map(e => e.total_casos); // Obtener los casos por especie

        var options = {
            series: [{
                name: 'Casos',
                data: casos
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%',
                    distributed: true,
                }
            },
            xaxis: {
                categories: especies,
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>
</body>

</html>
