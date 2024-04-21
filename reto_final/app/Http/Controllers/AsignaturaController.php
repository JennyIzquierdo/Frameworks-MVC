<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateAsignaturaRequest;
use Illuminate\Http\Request;
use App\Models\Asignatura;


class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Obtener todas las asignaturas y ordenarlas por semestre
        $asignaturas = Asignatura::orderBy('semestre')->get();
        return view('asignaturas.index', compact('asignaturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $asignaturas = Asignatura::all();
        return view('asignaturas.create', compact('asignaturas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAsignaturaRequest $request)
    {
        //
        Asignatura::create($request->all());
        return redirect()->route('asignaturas.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignatura $asignatura)
    {
        //
        return view('asignaturas.show', compact('asignatura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignatura $asignatura)
    {
        //
        $asignaturas = Asignatura::all();
        return view('asignaturas.edit', compact('asignatura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateAsignaturaRequest $request, Asignatura $asignatura)
    {
        //
        $asignatura->update($request->all());
        return redirect()->route('asignaturas.index')->with('success', 'Asignature updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignatura $asignatura)
    {
        //
        $asignatura->delete();
        return redirect()->route('asignaturas.index')->with('success', 'Asignature deleted successfully');
    }
}
