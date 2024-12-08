<!DOCTYPE html>
<html lang="es" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free" data-style="light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard de Enfermedades</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Page CSS -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item lh-1 me-4">
                                <a href="https://github.com/themeselection/sneat-html-admin-template-free" class="github-button">Star</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Título -->
                        <div class="mb-4">
                            <h1 class="text-primary">Dashboard de Enfermedades</h1>
                        </div>

                        <!-- Filtros -->
                        <div class="row mb-4">
                            <form method="GET" action="{{ url('/') }}" class="row g-3">
                                <div class="col-md-4">
                                    <select name="nombre" class="form-select">
                                        <option value="">Seleccionar...</option>
                                        @foreach ($uniqueNombres as $nombre)
                                            <option value="{{ $nombre }}" {{ request('nombre') == $nombre ? 'selected' : '' }}>{{ $nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="especie" class="form-select">
                                        <option value="">Seleccionar...</option>
                                        @foreach ($uniqueEspecies as $especie)
                                            <option value="{{ $especie }}" {{ request('especie') == $especie ? 'selected' : '' }}>{{ $especie }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="region" class="form-select">
                                        <option value="">Seleccionar...</option>
                                        @foreach ($uniqueRegiones as $region)
                                            <option value="{{ $region }}" {{ request('region') == $region ? 'selected' : '' }}>{{ $region }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-outline-primary">Aplicar filtros</button>
                                </div>
                            </form>
                        </div>

                        <!-- Resumen -->
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Total de Enfermedades</h5>
                                        <p class="fs-3">{{ $enfermedades->count() }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Casos Totales</h5>
                                        <p class="fs-3">{{ $enfermedades->sum('Casos') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Muertes Totales</h5>
                                        <p class="fs-3">{{ $enfermedades->sum('Muertos') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gráficos -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabla de Resultados -->
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
                                    @forelse ($paginatedEnfermedades as $enfermedad)
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
                                            <td colspan="6" class="text-center">No se encontraron resultados</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $paginatedEnfermedades->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                            <div class="text-body">
                                © <script>document.write(new Date().getFullYear());</script>, hecho con ❤️ por
                                <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Gráficos -->
    <script>
        const enfermedades = @json($enfermedades);

        const labels = enfermedades.map(item => item.Nombre);
        const casos = enfermedades.map(item => item.Casos);
        const muertos = enfermedades.map(item => item.Muertos);

        // Gráfico de barras para Casos y Muertos
        const barChart = new Chart(document.getElementById('barChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Casos',
                    data: casos,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }, {
                    label: 'Muertos',
                    data: muertos,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico circular para proporciones
        const pieChart = new Chart(document.getElementById('pieChart').getContext('2d'), {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Distribución de Enfermedades',
                    data: casos,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                    borderWidth: 1
                }]
            }
        });
    </script>
</body>
</html>
