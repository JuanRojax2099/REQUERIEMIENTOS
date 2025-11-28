<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Matrícula - SIPAES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/Matricula.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            color: white !important;
            font-weight: 700;
            font-size: 18px;
        }

        .header-top {
            background: #dc3545;
            color: white;
            padding: 20px 0;
        }

        .header-title {
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .header-subtitle {
            font-size: 13px;
            opacity: 0.9;
        }

        .admin-badge {
            background: rgba(255,255,255,0.2);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
            margin-top: 8px;
        }

        .filters-section {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .filter-group {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .filter-group input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 13px;
        }

        .filter-group select {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: white;
            cursor: pointer;
            font-size: 13px;
        }

        .content-wrapper {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .subjects-list {
            flex: 1;
        }

        .subject-item {
            background: white;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .subject-item:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-color: #dc3545;
        }

        .subject-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 12px;
        }

        .subject-code {
            font-weight: 700;
            color: #333;
            font-size: 15px;
        }

        .subject-name {
            color: #666;
            font-size: 13px;
            margin-top: 5px;
        }

        .subject-department {
            display: inline-block;
            background: #f0f0f0;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 11px;
            color: #666;
            margin-bottom: 10px;
        }

        .credit-badge {
            background: #f2f2f2;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 12px;
            color: #333;
        }

        .subject-details {
            font-size: 12px;
            color: #777;
            margin: 12px 0;
            line-height: 1.6;
        }

        .subject-details p {
            margin-bottom: 6px;
        }

        .subject-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #f0f0f0;
        }

        .btn-matricular {
            background: #000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            font-size: 13px;
            transition: all 0.2s;
            width: 100%;
        }

        .btn-matricular:hover {
            background: #333;
            transform: translateY(-2px);
        }

        .btn-matricular.disabled {
            background: #ccc;
            cursor: not-allowed;
            opacity: 0.7;
        }

        .sidebar-resume {
            width: 320px;
        }

        .resume-card {
            background: white;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 20px;
            position: sticky;
            top: 100px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .resume-title {
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 20px;
            color: #333;
        }

        .resume-stat {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
            font-size: 13px;
        }

        .resume-stat:last-child {
            border-bottom: none;
        }

        .stat-value {
            font-weight: 700;
            font-size: 18px;
            color: #dc3545;
        }

        .btn-confirm {
            width: 100%;
            background: #6c757d;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-weight: 600;
            cursor: not-allowed;
            margin-top: 15px;
            font-size: 13px;
            transition: all 0.2s;
        }

        .btn-confirm:not(:disabled) {
            background: #28a745;
            cursor: pointer;
        }

        .btn-confirm:not(:disabled):hover {
            background: #218838;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
            }
            .sidebar-resume {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar-custom">
        <div class="container-fluid">
            <a href="{{ url('/dashboard') }}" class="navbar-brand">
                <i class="bi bi-arrow-left me-2" style="font-size: 20px;"></i>
            </a>
        </div>
    </nav>

    <!-- HEADER -->
    <div class="header-top">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="header-title">
                        <i class="bi bi-book me-2"></i>Sistema de Matrícula
                    </div>
                    <div class="header-subtitle">Período Académico 2025-1</div>
                    <div class="admin-badge">
                        <i class="bi bi-shield-check me-1"></i>Modo Administrador
                    </div>
                </div>
                <div class="text-white text-end">
                    <div style="font-size: 20px; font-weight: 700;">SIPAES</div>
                    <div style="font-size: 11px; margin-top: 5px; opacity: 0.9;">
                        Fundación de Educación Superior <br>
                        Corporación Universitaria de Educación Superior
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FILTROS -->
    <div class="container-fluid mt-4">
        <div class="filters-section">
            <div class="filter-group">
                <input type="text" placeholder="Buscar por nombre, código o profesor...">
                <select>
                    <option>Todos los semestres</option>
                    <option selected>Semestre {{ $matricula->semestre_cursado }}</option>
                </select>
                <select>
                    <option>Todos los departamentos</option>
                </select>
            </div>
        </div>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- LISTA DE ASIGNATURAS -->
            <div class="subjects-list">
                @forelse ($asignaturas as $a)
                    <div class="subject-item">
                        <div class="subject-header">
                            <div class="flex-grow-1">
                                <div class="subject-code">{{ $a->codigo }} - {{ $a->NombreAsignatura }}</div>
                                <div class="subject-department">Ciencias de la Computación • {{ $a->semestre }}° Semestre</div>
                            </div>
                        </div>

                        <div class="subject-details">
                            <p><i class="bi bi-calendar3 me-2"></i><strong>Horario:</strong> {{ $a->diaSemana ?? 'N/A' }} · {{ $a->horario ?? 'N/A' }}</p>
                            <p><i class="bi bi-geo-alt me-2"></i><strong>Aula:</strong> Aula 201</p>
                        </div>

                        <div class="subject-footer">
                            <button class="btn-matricular" 
                                    onclick="matricular({{ $a->id }}, '{{ $a->NombreAsignatura }}', {{ $a->creditos ?? 4 }})"
                                    id="btn-{{ $a->id }}">
                                Matricular
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        No hay asignaturas disponibles para tu semestre actual.
                    </div>
                @endforelse
            </div>

            <!-- RESUMEN LATERAL -->
            <div class="sidebar-resume">
                <div class="resume-card">
                    <div class="resume-title">Resumen de Matrícula</div>

                    <div class="resume-stat">
                        <span>Materias seleccionadas:</span>
                        <span class="stat-value" id="numMaterias">0</span>
                    </div>

                    <button class="btn-confirm" id="btnConfirmar" disabled>
                        <i class="bi bi-check-circle me-2"></i>Confirmar Matrícula
                    </button>
                    <div style="text-align: center; font-size: 12px; color: #999; margin-top: 10px;">
                        Selecciona materias para matricular
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let cantidadMaterias = 0;

        function matricular(idAsignatura, nombreAsignatura, creditos) {
            const btn = document.getElementById('btn-' + idAsignatura);

            // Si ya está deshabilitado, no hacer nada
            if (btn.disabled) {
                alert('⚠️ Esta asignatura ya está matriculada');
                return;
            }

            fetch("{{ route('matricular.asignatura') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    id_asignatura: idAsignatura
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.error) {
                    alert('⚠️ ' + data.error);
                    // Deshabilitar el botón para indicar que ya fue matriculada
                    btn.innerText = "Matriculada";
                    btn.classList.add("disabled");
                    btn.disabled = true;
                    return;
                }

                cantidadMaterias++;
                document.getElementById("numMaterias").innerText = cantidadMaterias;

                // Deshabilitar botón
                btn.innerText = "Matriculada";
                btn.classList.add("disabled");
                btn.disabled = true;

                // Habilitar confirmar
                document.getElementById("btnConfirmar").disabled = false;

                alert('✓ ' + nombreAsignatura + ' matriculada correctamente');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('❌ Error en la solicitud. Por favor intenta nuevamente.');
            });
        }
    </script>
</body>
</html>