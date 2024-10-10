<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $val;

    public function __construct(){
       $this->val= [
            'nombre'=>['required','min:3'],
            'apellidop'=>['required'],
            'email'=>'required'];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(5);
       // return view("alumnos/index",['alumnos'=>$alumnos]);
        return view ("alumnos2/index",compact("alumnos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::paginate(5);
        $alumno = new Alumno;
        $accion ="C";
        $txtbtn="Guardar";
        $des="";
        return view ("alumnos2.frm",compact("alumnos","alumno","accion","txtbtn","des"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aun no grabamos
        //return $request;
        $val = $request->validate($this->val);
        Alumno::create($val);
        return redirect()->route("alumnos.index")->with("mensaje","Se inserto correctamente.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        $accion="D";
        $txtbtn="Confirmar la Eliminacion";
        $des="disabled";
        return view ("alumnos2.frm",compact('alumnos','alumno','accion','txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        $accion ="E";
        $txtbtn= "Actualizar";
        $des="";
        return view ("alumnos2.frm",compact("alumnos","alumno","accion","txtbtn","des"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $val = $request->validate($this->val);
        //aqui se actulizaran los datos 
        $alumno->update($val);
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
          return redirect()->route('alumnos.index');
    }
}
