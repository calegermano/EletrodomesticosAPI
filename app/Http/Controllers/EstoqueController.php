<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Estoque::all();
        $contador = $registro->count();

        if ($contador > 0) {
            return response()->json([
                'success' => true,
                'message' => 'Produtos encontrados com sucesso',
                'data' => $registros,
                'total' => $contador
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Nenhum produto encontrado',    
            ], 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nomeprod' => 'required',
            'marcaprod' => 'required',
            'descprod' => 'required',
            'qntprod' => 'required',
            'dtentradaprod' => 'required',
            'dtsaidaprod' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Registro inválido',
            ], 400);
        }

            $registros = Estoque::create($request->all());
            if ($registros) {
                return response()->json([
                    'success' => true,
                    'message' => 'Produto cadastrado com sucesso',
                    'data' => $registros
                ], 201);
            }else {
                return response()->json([
                    'success' => false,
                    'message' => 'Falha ao cadastrar o produto'
                ], 500);
            }
    }
    //terminar a partir desta parte
    /**
     * Display the specified resource.
     */
    public function show(Estoque $estoque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estoque $estoque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estoque $estoque)
    {
        //
    }
}
