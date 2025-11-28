<?php


namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use App\Models\Programa;
use App\Models\Asignatura;
use App\Models\MateriasMatriculadas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
/*Controller de matriculas
el Controller para el perfil es de SubjectsController.php en Controllers/Subjects*/
class PerfilController extends Controller
{

    public function subjectResume()
    {
        $user = Auth::user();

        $matricula = Matricula::where('id_usuarios', $user->id)->first();

        return view('Information.SubjectResume',compact('matricula'));
    }

   
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'semestre_cursado' => 'required|integer|min:1|max:12',
            'id_programa' => 'required|integer|exists:programa,id',
            'metodologia' => 'required|string'
        ]);

        $matricula = Matricula::where('id_usuarios', $user->id)->firstOrFail();

        $matricula->update([
            'semestre_cursado' => $request->semestre_cursado,
            'id_programa' => $request->id_programa,
            'metodologia' => $request->metodologia
        ]);

        return response()->json([
            "message" => "Datos de matrícula actualizados correctamente.",
            "data" => $matricula
        ]);
    }

    // VER TODOS LOS PROGRAMAS (para combos en formularios)
    public function programas()
    {
        return Programa::all();
    }
    public function newAsignaturas()
{
    $user = Auth::user();

    $matricula = Matricula::where('id_usuarios', $user->id)->firstOrFail();

//Matricula según su semestre
    $asignaturas = \App\Models\Asignatura::where('id_programa', $matricula->id_programa)
        ->where('semestre', $matricula->semestre_cursado)
        ->get();

    return view('Information.NewAsignaturas', compact('matricula', 'asignaturas'));
}
public function schedule()
{
    $user = Auth::user();

    // Obtener matrícula del estudiante actual
    $matricula = Matricula::where('id_usuarios', $user->id)->firstOrFail();

    // Obtener materias matriculadas según tabla materias_matriculadas
    $materias = \DB::table('materias_matriculadas')
        ->join('asignaturas', 'materias_matriculadas.id_asignatura', '=', 'asignaturas.id')
        ->where('materias_matriculadas.id_matricula', $matricula->id_matricula)
        ->select(
            'asignaturas.codigo',
            'asignaturas.NombreAsignatura',
            'asignaturas.horario',
            'asignaturas.diaSemana',
            'asignaturas.semestre',
            'materias_matriculadas.fecha_registro'
        )
        ->get();

    return view('Information.Schedule', compact('materias'));
}
public function matricularAsignatura(Request $request)
{
    try {
        $user = Auth::user();

        $request->validate([
            'id_asignatura' => 'required|integer|exists:asignaturas,id'
        ]);

        // Obtener matrícula del estudiante
        $matricula = Matricula::where('id_usuarios', $user->id)->firstOrFail();

        // Verifica que no esté matriculado ya
        $existe = MateriasMatriculadas::where('id_matricula', $matricula->id_matricula)
            ->where('id_asignatura', $request->id_asignatura)
            ->first();

        if ($existe) {
            return response()->json(['error' => 'La asignatura ya está matriculada'], 409);
        }

        // Crear registro en materias_matriculadas
        MateriasMatriculadas::create([
            'id_matricula' => $matricula->id_matricula,
            'id_asignatura' => $request->id_asignatura
        ]);

        return response()->json(['success' => 'Asignatura matriculada correctamente']);
    } catch (\Exception $e) {
        \Log::error('Error en matricularAsignatura: ' . $e->getMessage());
        \Log::error($e->getTraceAsString());
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

}
