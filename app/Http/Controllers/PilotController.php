<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Pilot;

class PilotController extends Controller
{
    public function create(){//retorna view com formulario
        return view('pilot.create');
    }
    public function store(Request $request){//armazena o piloto insere no banco de dados
        pilot::create($request->all());
        return redirect ("/pilot");
    }
    public function index(){// manda pra view a lista de pilotos
        $pilots = pilot::all();
        return view('pilot.index', compact('pilots'));
    } 
    public function edit(pilot $pilot){
        return view('pilot.edit', compact('pilot'));
    } 
    public function update(pilot $pilot, Request $request){
        $pilot->update($request->all());
        return redirect("/pilot");
    }

    public function destroy (pilot $pilot){//para apagar piloto
        $pilot-> delete();
        return redirect ('/pilot');
    }
}
