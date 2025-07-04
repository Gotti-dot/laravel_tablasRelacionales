<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Matriculación Instituto</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                Sistema Matriculación Instituto
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Menú izquierdo -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Inicio</a></li>


                    <li class="nav-item"><a class="nav-link" href="{{ route('estudiantes.index') }}">Estudiantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('materias.index') }}">Materias</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('matriculas.index') }}">Matrículas</a></li>


                    <!-- Dropdown de reportes -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="reportesDropdown" role="button" data-bs-toggle="dropdown">
                            Reportes
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('estudiantes.reporte') }}">Estudiantes</a></li>
                            <li><a class="dropdown-item" href="{{ route('materias.reporte') }}">Materias</a></li>
                            <li><a class="dropdown-item" href="{{ route('matriculas.reporte') }}">Matrículas</a></li>
                        </ul>
                    </li>
                </ul>


                <!-- Menú derecho (login/logout) -->
                <ul class="navbar-nav ms-auto">
                    <!-- Aquí puedes añadir autenticación si lo deseas -->
                </ul>
            </div>
        </div>
    </nav>


    <main class="py-4 mt-5">
        @yield('content')
    </main>
   
    <!-- Bootstrap Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
