<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscritos;
use Illuminate\Support\Str;
use App\Mail\SendMail;
use App\Mail\SendMailEspera;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home(Request $request){
        return view('home');
       
        
    }
    public function inscrever(Request $request){
        return view('inscrever');
       
    }
    public function inscricao(Request $request){
       
       
        $this->validate($request,[
            'nome_quarto' => 'required',
            'token'   =>  'required',
        ]);

        $quarto = Inscritos::where('code',$request->token)->first();
        $nome_quarto=$quarto->nome_quarto;
        $todos= Inscritos::where('nome_quarto',$nome_quarto)->get();
        $verificar_atual_aluno= Inscritos::where('nome_quarto',$nome_quarto)->where('situacao_atual',"Alumni")->first();
        $contagem= Inscritos::where('aceite','!=', 0)->where('aceite','LKE',"ESPERA")->count();
        if ($contagem <= 3) {
            if($quarto->aceite == 0){
                if (!isset($verificar_atual_aluno)) {
                    $quarto->aceite =$contagem + 20;
                    $quarto->save();
                    $data = [
                        'nome_quarto' => $quarto->nome_quarto,
                        'code' => $quarto->aceite,
                    ];
                    foreach ($todos as $membro) {
                        Mail::to($membro->email)->send(new SendMail($data));
                    }
                    return  back()->with('success', ' Parabéns!!! Conseguiste lugar no melhor village de sempre! Verifica no teu email, a confirmação. Se não encontrares está no spam! ');
                }else{
                    return  back()->with('erro', ' OOOPPSS! Tens alumnis no teu quarto. Vais poder tentar inscrever-te amanhã... Boa sorte :) ');
                }

            }else{
                return  back()->with('erro', ' OOOPPSS! Este quarto já tinha sido inscrito para ir ao melhor village de sempre! ');
            }
        }else{
            
            if ($contagem <= 4) {
                if (!isset($verificar_atual_aluno)) {
                    $quarto->aceite =$contagem + 1000;
                    $quarto->save();
                    $data = [
                        'nome_quarto' => $quarto->nome_quarto,
                        'code' => $quarto->aceite,
                    ];
                    foreach ($todos as $membro) {
                        Mail::to($membro->email)->send(new SendMailEspera($data));
                    }
                    return  back()->with('success', 'Infelizmente não tens lugar garantido, mas encontras-te na lista de espera!! Verifica no teu email a confirmação. Se não encontrares está no spam! ');
                }else{
                    return  back()->with('erro', ' OOOPPSS! Tens alumnis no teu quarto. Vais poder tentar inscrever-te amanhã... Boa sorte :) ');
                }            
            }else{
                return  back()->with('erro', ' OOOPPSSS! Infelizmente não conseguiste  :( ');
            }
        }
    }
}