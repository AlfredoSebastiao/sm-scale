<?php

namespace App\Http\Controllers;

use App\DadosLingua;
use App\Funcao;
use App\FuncaoDoMembro;
use App\Grupo;
use App\GrupoHasMembro;
use App\Membro;
use App\Nucleo;
use Illuminate\Http\Request;

class MembroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
        * Indo Buscar nucleos
        */
        $nucleos = Nucleo::all();

        /**
         * indo buscar todos grupos
         */
        $grupos = Grupo::all();

        /**
         * indo buscar membros
         */
        $membros = Membro::all();

        return view('admin.leitores.index', compact('membros','nucleos','grupos'));
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

        $membro = new Membro();

        $membro->nome = $request->nome;
        $membro->apelido = $request->apelido;
        $membro->email = $request->email;
        $membro->data_nascimento = $request->data_nascimento;
        $membro->nr_telefone = $request->nr_telefone;
        $membro->is_masculino = $request->is_masculino;
        $membro->is_crismado = $request->is_crismado;
        $membro->is_baptizado = $request->is_baptizado;
        $membro->is_casado = $request->is_casado;
        $membro->nucleos_id = $request->nucleos_id;

        $membro->save();

        /**
         * Indo buscar o ultimo registo inserido
         */
        $lastMembroId = Membro::select('id')->orderBy('id','desc')->first();

        /**
         * Verifica se membro foi seleccionado como salmista
         */
        if(isset($request->is_salmista)){
            $funcao =  Funcao::select('id')->where('designacao','=','Salmista')->first();

            $funcaoDoMembro = new FuncaoDoMembro();
            $funcaoDoMembro->membros_id = $lastMembroId->id;
            $funcaoDoMembro->funcao_id = $funcao->id;

            $funcaoDoMembro->save();
        }


        /**
         * Indo buscar a funcao que eh de leitor
         */
        $funcao = Funcao::select('id')->where('designacao','=',$request->funcao)->first();

        $funcaoDoMembro = new FuncaoDoMembro();
        $funcaoDoMembro->membros_id = $lastMembroId->id;
        $funcaoDoMembro->funcao_id = $funcao->id;

        $funcaoDoMembro->save();

        /**
         * Vai buscar a ultima funcao inserida
         */
        $funcaoDoMembro = FuncaoDoMembro::select('id')->orderBy('created_at','asc')->first();

        /**
         * gravando os dados da lingua do membro
         */
        $dadosLingua = new DadosLingua();
        $dadosLingua->funcao_has_membros_id = $funcaoDoMembro->id;
        $dadosLingua->portugues = $request->portugues;
        $dadosLingua->ronga = $request->ronga;

        $dadosLingua->save();

        /**
         * Indo buscar todos os grupos salvos
         */
        $grupos = Grupo::all();

        $grupo = null;
        foreach ($grupos as $grupo){
            /**
             * Verificando se um determinado grupo foi ou nao seleccionado
             */
            if(isset($request->{$grupo->designacao})){

                $membroGrupo = new GrupoHasMembro();
                $membroGrupo->membros_id = $lastMembroId->id;
                $membroGrupo->grupos_id = $grupo->id;

                $membroGrupo->save();
            }
        }
        return redirect()->back()->with('message', 'REGISTADO COM SUCESSO!');
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
