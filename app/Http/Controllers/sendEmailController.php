<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendEmailContato;
use App\Mail\SendEmailOuvidoria;

use Exception;
class sendEmailController extends Controller
{
    public function __construct(){ }


    public function sendEmailContato(Request $request){

        try {
            $nome = $request->input('nome');
            $email = $request->input('email');
            $mensagem = $request->input('mensagem');
            Mail::send(new SendEmailContato($nome, $email, $mensagem));

            return response()->json([
                'message' => 'Contato enviado com sucesso',
                'code' => 200
            ],200);

        }catch(Exception $e){
            return response()->json([
                'message' => 'Contato não pode ser enviado',
                'code' => 404
            ],404);
        }
    }

    public function sendEmailOuvidoria(Request $request){
        try {
            // dd($request->all());
            // dd('alou');
            $colaborador = ( isset($request['colaborador']) ) ? 'Interno' : 'Externo';
            $nome = $request->input('nome');
            $email = $request->input('email');
            $mensagem = $request->input('mensagem');
            $acordo = ( isset($request['acordo']) ) ? 'Está de acordo com a Política de Privacidade' : 'Não está de acordo com a Política de Privacidade';
            Mail::send(new SendEmailOuvidoria($colaborador, $nome, $email, $mensagem, $acordo));

            return response()->json([
                'message' => 'Ouvidoria enviada com sucesso',
                'code' => 200
            ],200);

        }catch(Exception $e){
            dd($e);
            return response()->json([
                'message' => 'Ouvidoria não pode ser enviada',
                'code' => 404
            ],404);
        }
    }

}
