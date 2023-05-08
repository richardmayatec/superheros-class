<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Registros::where('user_id', Auth::id())
            ->get();

        $page_title = "Registros";

        return view('registros.index', compact('registros', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Registros $registros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registros $registros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registros $registros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registros $registros)
    {
        //
    }
}
