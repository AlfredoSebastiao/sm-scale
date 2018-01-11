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
//        $mytime = Carbon::today()->parse('this sunday');
//        $dataa = Carbon::parse('this sunday')->addDays(7);
//
//        $es = EscalaDeLeitura::first();
        /**
         * ideia por usar para pegar as datas do domingo
         */
        //return $es->data->addDays(7);

        //return $mytime->toDateString();

       // return $mytime;

        /**
         * Indo buscar todas escalas que estejam depois da data actual
         */
        $esclas = EscalaDeLeitura::where('data','>=',Carbon::today()->toDateString())->get();


       // while (count($esclas) < 5){

//            if(count($esclas) == 0){
//              $escala = new EscalaDeLeitura();
//              $escala->data = Carbon::parse('next sunday');
//            }

            $ultimaEscala = EscalaDeLeitura::orderBy('created_at','asc')->first();

            $escala = new EscalaDeLeitura();
            $escala->data = $ultimaEscala->data->addDays(7);

            $funcao = Funcao::where('designacao','=','Leitor')->first();


            /**
             * Para a primeira Leitura em portugues
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('dados_lingua.portugues','=',1)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->orderBy('qnt_exercida','asc')
                ->first();

            /**
             * Faz o set do seleccionado
             */
            $escala->primeira_portugues_id = $funcoesDoMembro->id;

            /**
             * Actualiza a quantidade exercida do selecionado
             */
            FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('qnt_exercida' => ($funcoesDoMembro->qnt_exercida+1)));

            /**
             * Para a primeira Leitura em ronga
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('dados_lingua.ronga','=',1)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->orderBy('qnt_exercida','asc')
                ->first();
            $escala->primeira_ronga_id = $funcoesDoMembro->id;

            FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('qnt_exercida' => ($funcoesDoMembro->qnt_exercida+1)));

            /**
             * Para a segunda Leitura em portugues
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('dados_lingua.portugues','=',1)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->orderBy('qnt_exercida','asc')
                ->first();

            /**
             * Faz o set do seleccionado
             */
            $escala->segunda_portugues_id = $funcoesDoMembro->id;

            /**
             * Actualiza a quantidade exercida do selecionado
             */
            FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('qnt_exercida' => ($funcoesDoMembro->qnt_exercida+1)));

            /**
             * Para a primeira Leitura em ronga
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('dados_lingua.ronga','=',1)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->orderBy('qnt_exercida','asc')
                ->first();

            $escala->segunda_ronga_id = $funcoesDoMembro->id;

            FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('qnt_exercida' => ($funcoesDoMembro->qnt_exercida+1)));


            /**
             * Para a primeira Leitura em ronga
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('dados_lingua.ronga','=',1)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->orderBy('qnt_exercida','asc')
                ->first();

            $escala->envagelho_id = $funcoesDoMembro->id;



            $funcao = Funcao::where('designacao','=','Salmista')->first();

            /**
             * Para a primeira Leitura em ronga
             */
            $funcoesDoMembro = FuncaoDoMembro::where('funcao_id','=',$funcao->id)
                ->where('dados_lingua.ronga','=',1)
                ->join('dados_lingua','funcao_has_membros.id','=','funcao_has_membros_id')
                ->orderBy('qnt_exercida','asc')
                ->first();

            $escala->salmos_id = $funcoesDoMembro->id;

            FuncaoDoMembro::where('id','=',$funcoesDoMembro->id)->update(array('qnt_exercida' => ($funcoesDoMembro->qnt_exercida+1)));


            $escala->save();


            return $escala;


            return $funcoesDoMembro;


      //  }

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
