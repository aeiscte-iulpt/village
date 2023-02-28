<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscritos;
use Illuminate\Support\Str;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function inscricao(Request $request){
        $this->validate($request,[
            'nome_quarto' => 'required',
            'nome1'   =>  'required',
            'email1'   =>  'required',
            'date1'   =>  'required',
            'ndi1'    =>  'required',
            'phone1'        =>  'required',
            'phone_emerg1'   =>  'required',
            'situacao1'   =>  'required',
            'n_aluno1'    =>  'required',
            'transporte1'        =>  'required',
            'curso1'    =>  'required',
            'ano_cu1'        =>  'required',     

            'nome2'   =>  'required',
            'email2'   =>  'required',
            'date2'   =>  'required',
            'ndi2'    =>  'required',
            'phone2'        =>  'required',
            'phone_emerg2'   =>  'required',
            'situacao2'   =>  'required',
            'n_aluno2'    =>  'required',
            'transporte2'        =>  'required',
            'curso2'    =>  'required',
            'ano_cu2'        =>  'required',

            'nome3'   =>  'required',
            'email3'   =>  'required',
            'date3'   =>  'required',
            'ndi3'    =>  'required',
            'phone3'        =>  'required',
            'phone_emerg3'   =>  'required',
            'situacao3'   =>  'required',
            'n_aluno3'    =>  'required',
            'transporte3'        =>  'required',
            'curso3'    =>  'required',
            'ano_cu3'        =>  'required',

            'nome4'   =>  'required',
            'email4'   =>  'required',
            'date4'   =>  'required',
            'ndi4'    =>  'required',
            'phone4'        =>  'required',
            'phone_emerg4'   =>  'required',
            'situacao4'   =>  'required',
            'n_aluno4'    =>  'required',
            'transporte4'        =>  'required',
            'curso4'    =>  'required',
            'ano_cu4'        =>  'required'
        ]);

        /*$count6 = Inscritos::all()->count();*/
        $inscrito1 = Inscritos::where('n_aluno',$request->n_aluno1)->first();
        $inscrito2 = Inscritos::where('n_aluno',$request->n_aluno2)->first();
        $inscrito3 = Inscritos::where('n_aluno',$request->n_aluno3)->first();
        $inscrito4 = Inscritos::where('n_aluno',$request->n_aluno4)->first();
      
           /** colocar 200 */
        
   
            if(!isset($inscrito1) && !isset($inscrito2) && !isset($inscrito3) && !isset($inscrito4) && !isset($inscrito5) && !isset($inscrito6) && !isset($inscrito7) && !isset($inscrito8) && !isset($inscrito9) && !isset($inscrito10)){
                $code=Str::random(8);
                $users1 = new Inscritos;
                $users1->nome_quarto   = $request->nome_quarto;
                $users1->code= $code;
                $users1->nome   = $request->nome1;
                $users1->email  = $request->email1;
                $users1->data_nascimento = $request->date1;
                $users1->ndi = $request->ndi1;
                $users1->phone  = $request->phone1;
                $users1->phone_emerg  = $request->phone_emerg1;
                $users1->situacao_atual =$request->situacao1;
                $users1->n_aluno =$request->n_aluno1;
                $users1->transporte =$request->transporte1;
                $users1->curso =$request->curso1;
                $users1->ano_curricular =$request->ano_cu1;
                $users1->saude =$request->saude1;
                $users1->nices =$request->nices1;
                $users1->save();
    
                $users2 = new Inscritos;
                $users2->nome_quarto   = $request->nome_quarto;
                $users2->nome   = $request->nome2;
                $users2->email  = $request->email2;
                $users2->data_nascimento = $request->date2;
                $users2->ndi = $request->ndi2;
                $users2->phone  = $request->phone2;
                $users2->phone_emerg  = $request->phone_emerg2;
                $users2->situacao_atual =$request->situacao2;
                $users2->n_aluno =$request->n_aluno2;
                $users2->transporte =$request->transporte2;
                $users2->curso =$request->curso2;
                $users2->ano_curricular =$request->ano_cu2;
                $users2->saude =$request->saude2;
                $users2->nices =$request->nices2;
                $users2->save();
        
                $users3 = new Inscritos;
                $users3->nome_quarto   = $request->nome_quarto;
                $users3->nome   = $request->nome3;
                $users3->email  = $request->email3;
                $users3->data_nascimento = $request->date3;
                $users3->ndi = $request->ndi3;
                $users3->phone  = $request->phone3;
                $users3->phone_emerg  = $request->phone_emerg3;
                $users3->situacao_atual =$request->situacao3;
                $users3->n_aluno =$request->n_aluno3;
                $users3->transporte =$request->transporte3;
                $users3->curso =$request->curso3;
                $users3->ano_curricular =$request->ano_cu3;
                $users3->saude =$request->saude3;
                $users3->nices =$request->nices3;
                $users3->save();
         
                $users4 = new Inscritos;
                $users4->nome_quarto   = $request->nome_quarto;
                $users4->nome   = $request->nome4;
                $users4->email  = $request->email4;
                $users4->data_nascimento = $request->date4;
                $users4->ndi = $request->ndi4;
                $users4->phone  = $request->phone4;
                $users4->phone_emerg  = $request->phone_emerg4;
                $users4->situacao_atual =$request->situacao4;
                $users4->n_aluno =$request->n_aluno4;
                $users4->transporte =$request->transporte4;
                $users4->curso =$request->curso4;
                $users4->ano_curricular =$request->ano_cu4;
                $users4->saude =$request->saude4;
                $users4->nices =$request->nices4;
                $users4->save();

                $data = [
                    'nome_quarto' => $request->nome_quarto,
                    'nome1' => $request->nome1,
                    'nome2' => $request->nome2,
                    'nome3' => $request->nome3,
                    'nome4' => $request->nome4,
                    'code'  => $code
                ];
                Mail::to($request->email1)->send(new SendMail($data));
                Mail::to($request->email2)->send(new SendMail($data));
                Mail::to($request->email3)->send(new SendMail($data));
                Mail::to($request->email4)->send(new SendMail($data));
                return  back()->with('success', 'Obrigado! A tua inscrição foi registada! Verifica no teu email, a confirmação. Se não encontrares está no spam!');
            }else{
                return  back()->with('erro', 'OOOPPSS! Algum número de aluno que registou neste formulário já está inscrito! Por favor tente outra vez!');
            }
    }
}