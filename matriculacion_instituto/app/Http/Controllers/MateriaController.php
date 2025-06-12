<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Materia;


class MateriaController extends Controller
{
    public function index()
    {
        // $materias = Materia::all();
        // return view('materias.index', compact('materias'));
        $materias = Materia::orderBy('nombre')->paginate(10);
        return view('materias.index', compact('materias'));
    }



    public function create()
    {
        return view('materias.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:materias',
            'nombre' => 'required',
            'horas' => 'required|integer|min:1',
            'profesor' => 'required',
        ]);


        Materia::create($request->all());
        return redirect()->route('materias.index')->with('success', 'Materia registrada con éxito.');
    }


    public function show($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.show', compact('materia'));
    }


    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.edit', compact('materia'));
    }


    public function update(Request $request, $id)
    {
        $materia = Materia::findOrFail($id);


        $request->validate([
            'codigo' => 'required|unique:materias,codigo,' . $id . ',id_materia',
            'nombre' => 'required',
            'horas' => 'required|integer|min:1',
            'profesor' => 'required',
        ]);


        $materia->update($request->all());
        return redirect()->route('materias.index')->with('success', 'Materia actualizada.');
    }


    public function destroy($id)
    {
        Materia::destroy($id);
        return redirect()->route('materias.index')->with('success', 'Materia eliminada.');
    }

public function reporte(Request $request)
    {
        $nombre = $request->input('nombre');


        $materias = Materia::when($nombre, function ($query, $nombre) {
            return $query->where('nombre', 'like', '%' . $nombre . '%');
        })->get();


        return view('materias.reporte', compact('materias', 'nombre'));
    }

}
