<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function create(){
        return view('pilot.create');
    }
    public function store(Request $request){//cria um livro
        pilot::create($request->all());
        return redirect ("/pilot");
    }
    public function index(){
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
}
