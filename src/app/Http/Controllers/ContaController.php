<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;

class ContaController extends Controller
{
    // https://laravel.com/docs/8.x/controllers#resource-controllers
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contas = Conta::orderBy('descricao')->get();
        return view('conta.listagem', ['contas' => $contas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conta.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$conta = new Conta($request->all());
        //$conta->save();
        Conta::create($request->all());

        return redirect()->route('contas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conta = Conta::find($id);
        return $conta->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conta = Conta::find($id);
        return view('conta.formulario', ['conta' => $conta]);
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
        $conta = Conta::find($id);
        //$conta->descricao = $request->descricao;
        $conta->fill($request->all());
        $conta->update();

        return redirect()->route('contas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conta = Conta::find($id);
        $conta->delete();

        return redirect()->route('contas.index');
    }
}
