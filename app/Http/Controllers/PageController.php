<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscritos;
use Illuminate\Support\Str;
use App\Mail\SendMail;
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

        /*$count6 = Inscritos::all()->count();*/
        $quarto = Inscritos::where('code',$request->token)->first();
        $nome_quarto=$quarto->nome_quarto;
        $todos= Inscritos::where('nome_quarto',$nome_quarto)->get();
        $verificar_atual_aluno= Inscritos::where('nome_quarto',$nome_quarto)->where('situacao_atual',"Alumni")->first();
        dd($verificar_atual_aluno);
        if($quarto->aceite == 0){
        foreach ($todos as $membro) {
            
            $membro->aceite =1;
            $membro->save();
        }
           /** colocar 200 */
        
   
          
                return  back()->with('success', 'Obrigado! A tua inscrição foi registada! Verifica no teu email, a confirmação. Se não encontrares está no spam!');
            }else{
                return  back()->with('erro', 'OOOPPSS! Algum número de aluno que registou neste formulário já está inscrito! Por favor tente outra vez!');
            }
    }
}