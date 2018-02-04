<?php

namespace App\Http\Controllers;


use App\DadosLingua;
use App\EscalaDeLeitura;
use App\Funcao;
use App\FuncaoDoMembro;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EscalaLeitoresController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /**
         * Indo buscar todas escalas que estejam depois da data actual
         */
        $esclas = EscalaDeLeitura::where('data','>=',Carbon::today()->toDateString())->get();
//        return $esclas;
        $controlo_lingua = false;
        while(count($esclas) < 5){
            $ultimaEscala = EscalaDeLeitura::orderBy('id','asc')->first();

            $escala = new EscalaDeLeitura();
            $escala->data = $ultimaEscala->data->addDays(7);

            $funcao = Funcao::where('designacao','=','Leitor')->first();


            /**
             * Para a primeira Leitura em portugues
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('proximo_de','=',$ultimaEscala->envagelho_id)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->first();

            $funcoesDoMembroAuxiliar = $funcoesDoMembro;


            while( $funcoesDoMembroAuxiliar->portugues != 1){
                $controlo_lingua = true;
                $funcoesDoMembroAuxiliar = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                    ->where('proximo_de','=',$funcoesDoMembroAuxiliar->funcao_has_membros_id)
                    ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                    ->first();

            }

            /**
             * troca o apontador de proximo
             */
            if($controlo_lingua)
                FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('proximo_de' => $funcoesDoMembroAuxiliar->funcao_has_membros_id));
            $controlo_lingua = false;
//            return $funcoesDoMembroAuxiliar;
            /**
             * Faz o set do seleccionado para primeira leitura em port
             */
            $escala->primeira_portugues_id = $funcoesDoMembroAuxiliar->funcao_has_membros_id;

            /**
             * Para a primeira Leitura em ronga
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->where('proximo_de','=',$escala->primeira_portugues_id)
                ->first();


            $funcoesDoMembroAuxiliar = $funcoesDoMembro;

            while($funcoesDoMembroAuxiliar->ronga != 1){
                $controlo_lingua = true;
                $funcoesDoMembroAuxiliar = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                    ->where('proximo_de','=',$funcoesDoMembroAuxiliar->proximo_de)
                    ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                    ->first();

            }

            /**
             * troca o apontador de proximo
             */
            if($controlo_lingua)
                FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('proximo_de' => $funcoesDoMembroAuxiliar->funcao_has_membros_id));
            $controlo_lingua = false;

            /**
             * Faz o set do seleccionado para primeira leitura em ronga
             */
            $escala->primeira_ronga_id = $funcoesDoMembroAuxiliar->funcao_has_membros_id;

            /**
             * Para a Segunda Leitura em pt
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('proximo_de','=',$escala->primeira_ronga_id)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->first();

            $funcoesDoMembroAuxiliar = $funcoesDoMembro;

            while($funcoesDoMembroAuxiliar->portugues != 1){
                $controlo_lingua = true;
                $funcoesDoMembroAuxiliar = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                    ->where('proximo_de','=',$funcoesDoMembroAuxiliar->proximo_de)
                    ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                    ->first();

            }

            /**
             * troca o apontador de proximo
             */
            if($controlo_lingua)
                FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('proximo_de' => $funcoesDoMembroAuxiliar->funcao_has_membros_id));
            $controlo_lingua = false;

            /**
             * Faz o set do seleccionado para Segunda leitura em port
             */
            $escala->segunda_portugues_id = $funcoesDoMembroAuxiliar->funcao_has_membros_id;

            /**
             * Para a Segunda Leitura em ronga
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('proximo_de','=',$escala->segunda_portugues_id)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->first();


            $funcoesDoMembroAuxiliar = $funcoesDoMembro;

            while($funcoesDoMembroAuxiliar->ronga != 1){
                $controlo_lingua = true;
                $funcoesDoMembroAuxiliar = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                    ->where('proximo_de','=',$funcoesDoMembroAuxiliar->proximo_de)
                    ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                    ->first();

            }
            /**
             * troca o apontador de proximo
             */
            if($controlo_lingua)
                FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('proximo_de' => $funcoesDoMembroAuxiliar->funcao_has_membros_id));
            $controlo_lingua = false;
            /**
             * Faz o set do seleccionado para Segunda leitura em ronga
             */
            $escala->segunda_ronga_id = $funcoesDoMembroAuxiliar->funcao_has_membros_id;

            /**
             * Para a Envagelho
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('proximo_de','=',$escala->segunda_ronga_id)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->first();


            $funcoesDoMembroAuxiliar = $funcoesDoMembro;
            while($funcoesDoMembroAuxiliar->ronga != 1){
                $controlo_lingua = true;
                $funcoesDoMembroAuxiliar = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                    ->where('proximo_de','=',$funcoesDoMembroAuxiliar->proximo_de)
                    ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                    ->first();

            }

            /**
             * troca o apontador de proximo
             */
            if($controlo_lingua)
                FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('proximo_de' => $funcoesDoMembroAuxiliar->funcao_has_membros_id));
            $controlo_lingua = false;

            /**
             * Faz o set do seleccionado para Segunda leitura em ronga
             */
            $escala->envagelho_id = $funcoesDoMembroAuxiliar->funcao_has_membros_id;


            $funcao = Funcao::where('designacao','=','Salmista')->first();

            /**
             * Para a Salmos
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('proximo_de','=',$escala->envagelho_id)
                ->first();

            $funcoesDoMembroAuxiliar = $funcoesDoMembro;

            while($funcoesDoMembroAuxiliar->funcao_id != $funcao->id){
                $controlo_lingua = true;
                $funcoesDoMembroAuxiliar = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                    ->where('proximo_de','=',$funcoesDoMembroAuxiliar->proximo_de)
                    ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                    ->first();

            }

            /**
             * troca o apontador de proximo
             */
            if($controlo_lingua)
                FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('proximo_de' => $funcoesDoMembroAuxiliar->id));
            $controlo_lingua = false;
            /**
             * Faz o set do seleccionado para Segunda leitura em ronga
             */
            $escala->salmos_id = $funcoesDoMembroAuxiliar->id;


            $escala->save();


            return $escala;


        }

        return $esclas;
        return view('admin.escala.leitores.index');
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
