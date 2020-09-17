<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigEmpresa;
use Yajra\DataTables\DataTables;

class ConfigEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configEmpresa = ConfigEmpresa::all();
        return view('configEmpresa.index')->with('configEmpresa', $configEmpresa);
    }

    public function dataTable()
    {
        return DataTables::of(ConfigEmpresa::select('id', 'nombre', 'nit', 'direccion', 'telefono')->get())
            ->addColumn('btn', 'configEmpresa.dataTable.btn')
            ->rawColumns(['btn'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configEmpresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\ConfigEmpresa  $configEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show(ConfigEmpresa $configEmpresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\ConfigEmpresa  $configEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfigEmpresa $configEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\ConfigEmpresa  $configEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigEmpresa $configEmpresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\ConfigEmpresa  $configEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfigEmpresa $configEmpresa)
    {
        //
    }
}
