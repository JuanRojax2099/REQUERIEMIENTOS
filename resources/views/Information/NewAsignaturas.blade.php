<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/Matricula.css')}}">
</head>
<body>
@extends('Information.SubjectResume') 

@section('content')

<style>
    .subject-card {
        border-radius: 15px;
        border: 1px solid #e5e5e5;
        padding: 20px;
        background: #fff;
        transition: 0.2s;
    }

    .subject-card:hover {z
        transform: translateY(-4px);
        box-shadow: 0px 8px 18px rgba(0,0,0,0.08);
    }

    .btn-matricular {
        background: #000;
        color: #fff;
        border-radius: 10px;
        padding: 10px;
        border: none;
        width: 100%;
        transition: 0.2s;
    }

    .btn-matricular:hover {
        background: #333;
        transform: scale(1.03);
    }

    .credit-badge {
        background: #f2f2f2;
        padding: 6px 12px;
        border-radius: 10px;
        font-size: 14px;
    }

    .resume-box {
        border-radius: 15px;
        background: #fff;
        padding: 20px;
        border: 1px solid #eee;
    }
</style>

<div class="container mt-4">

    <div class="d-flex align-items-center gap-3 mb-4">
        <a href="{{ url('/dashboard') }}" class="text-dark fs-4">
            <i class="bi bi-arrow-left"></i>
        </a>

        <div>
            <h4 class="m-0">Asignaturas Disponibles</h4>
            <small class="text-muted">Materias del semestre actual</small>
        </div>
    </div>

    <div class="row">
        <!-- LISTA DE ASIGNATURAS -->
        <div class="col-md-8">

            @foreach ($asignaturas as $a)
            <div class="subject-card mb-3">

                <div class="d-flex justify-content-between">
                    <div>
                        <h5>{{ $a->codigo }} - {{ $a->NombreAsignatura }}</h5>

                        <small class="text-muted">
                            <i class="bi bi-calendar-week"></i> {{ $a->diaSemana }} |
                            <i class="bi bi-clock"></i> {{ $a->horario }}
                        </small>
                    </div>

                    <span class="credit-badge">{{ $a->creditos ?? 4 }} créditos</span>
                </div>

                <button class="btn-matricular mt-3"
                        onclick="matricular({{ $a->id }}, {{ $a->creditos ?? 4 }})">
                    Matricular
                </button>

            </div>
            @endforeach
        </div>

        <!-- RESUMEN -->
        <div class="col-md-4">
            <div class="resume-box shadow-sm">

                <h5>Resumen de Matrícula</h5>

                <p><strong id="numMaterias">0</strong> materias seleccionadas</p>

                <p class="mt-2">
                    <strong>Total de Créditos: </strong>
                    <span id="totalCreditos">0</span>
                </p>

                <button class="btn btn-secondary w-100 mt-3" disabled>
                    Confirmar Matrícula
                </button>

            </div>
        </div>

    </div>
</div>

<script>
    let totalCreditos = 0;
    let cantidadMaterias = 0;

    function matricular(idAsignatura, creditos) {

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
                alert(data.error);
                return;
            }

            cantidadMaterias++;
            totalCreditos += creditos;

            document.getElementById("numMaterias").innerText = cantidadMaterias;
            document.getElementById("totalCreditos").innerText = totalCreditos;
        });
    }
</script>

@endsection

</body>
</html>