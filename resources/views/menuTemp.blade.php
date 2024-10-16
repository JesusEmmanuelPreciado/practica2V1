<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Menú 2</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #main-content {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }

        .nav-tabs {
            margin-bottom: 20px;
        }

        .sub-menu-vertical {
            display: none;
            flex-direction: column;
            padding-left: 15px;
        }

        .sub-menu-horizontal {
            display: none;
            margin-top: 10px;
        }

        .nav-link {
            margin-right: 15px;
        }

        .sub-menu-horizontal a, .sub-menu-vertical a {
            display: inline-block;
            margin: 5px;
            text-decoration: none;
            color: #007bff;
        }

        .select-periodo {
            display: none;
            margin-top: 10px;
        }

        .active-menu .sub-menu-vertical,
        .active-menu .sub-menu-horizontal {
            display: flex;
        }

        .logout-button {
            background: transparent;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div id="main-content">
        <ul class="nav nav-tabs" id="navId" role="tablist">
            <li class="nav-item">
                <a href="#" class="nav-link active" data-bs-toggle="tab" onclick="showMenu('catalogos')">Catálogos</a>
                <div class="sub-menu-vertical" id="catalogos-submenu">
                    <a href="#">Periodos</a>
                    <a href="#">Plazas</a>
                    <a href="#">Puestos</a>
                    <a href="#">Personal</a>
                    <a href="#">Deptos.</a>
                    <a href="#">Carreras</a>
                    <a href="#">Retículas</a>
                    <a href="#">Materias</a>
                    <a href="#">Alumnos</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="showMenu('horarios')">Horarios</a>
                <div class="sub-menu-horizontal" id="horarios-submenu">
                    <a href="#">Docentes</a>
                    <a href="#">Alumnos</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="showMenu('proyectos')">Proyectos Individuales</a>
                <div class="sub-menu-horizontal" id="proyectos-submenu">
                    <a href="#">Capacitación</a>
                    <a href="#">Asesorías Doc.</a>
                    <a href="#">Proyectos</a>
                    <a href="#">Material Didáctico</a>
                    <a href="#">Docencia e Inv.</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Instrumentación</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Tutorías</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="toggleSelectPeriodo()">Periodo</a>
                <select class="select-periodo" id="selectPeriodo">
                    <option value="ene-jun-24">Ene-Jun 24</option>
                    <option value="ago-dic-24">Ago-Dic 24</option>
                    <option value="ene-jun-25">Ene-Jun 25</option>
                </select>
            </li>
            @auth
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="logout-button">Logout</button>
                </form>
            </li>
            @endauth
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
            </div>
        </div>
    </div>

    <script>
        function showMenu(menuId) {
            document.querySelectorAll('.sub-menu-vertical, .sub-menu-horizontal').forEach(menu => {
                menu.style.display = 'none';
            });

            document.getElementById(menuId + '-submenu').style.display = 'flex';
        }

        function toggleSelectPeriodo() {
            var selectPeriodo = document.getElementById("selectPeriodo");
            if (selectPeriodo.style.display === "none" || selectPeriodo.style.display === "") {
                selectPeriodo.style.display = "block";
            } else {
                selectPeriodo.style.display = "none";
            }
        }
    </script>
</body>
</html>
