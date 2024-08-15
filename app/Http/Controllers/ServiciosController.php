<?php

namespace App\Http\Controllers;
// use DB;


use Illuminate\Http\Request;
use App\Models\Persona;

use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function index(){
        
        // $servicios = Servicio::paginate(10);

        $servicios = Persona::get();
        // $servicios = Persona::latest()->paginate();

        return view('servicios', compact('servicios'));
        
    }
    public function show($id)
    {
        return view('show',
            ['persona'=>Persona::find($id)]
        );
        // return  Persona::find($id);
    }

    public function edit(Persona $id){
        return view('edit', ['persona'=>$id]);
    }

    public function update(Persona $id){
        $id->update([
            'cperApellido'=>request('cperApellido'),
            'cPerNombre'=>request('cPerNombre'),
            'cPerSexo'=>request('cPerSexo'),
            'cPerDireccion'=>request('cPerDireccion'),
            'nPerEdad'=>request('nPerEdad')
        ]);
        return redirect()->route('servicios.show', $id);
    }

    public function create(){
        return view('create');
    }
    public function store(CreateServicioRequest $request){
        
        Persona::create($request->validated());
        return redirect()->route('servicios');    
    }
    public function destroy(Persona $persona){
        $persona->delete();
        return redirect()->route('servicios');
    }
}
