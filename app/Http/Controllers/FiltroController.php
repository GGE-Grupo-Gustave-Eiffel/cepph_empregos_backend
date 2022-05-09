<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class FiltroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $valor_consulta = $request->valor;
        if ($request->campo == "nacionalidade" || $request->campo == "genero") {
            $valor_consulta = "\"".$request->valor."\"";
        }

        if ($request->valor_alternativo != "Todos os candidatos") {
            $consulta_filtro = "SELECT * FROM candidatos WHERE ".$request->campo." = ".$valor_consulta."";
        } else {
            $consulta_filtro = 'select * FROM candidatos';
        }
        
        $inscritos = DB::select($consulta_filtro);

        return response()->json([
            'incritos' => $inscritos
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
    
    }
}
