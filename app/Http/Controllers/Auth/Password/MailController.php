<?php

namespace App\Http\Controllers\Auth\Password;

use App\Http\Requests\Auth\Password\MailRequest;
use App\Mail\Auth\Password\PasswordMail;
use App\Model\Auth\Password\update_password;
use App\Traits\Password\TargetTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;

class MailController extends Controller
{
    use TargetTrait;

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('recover.password');
    }

    /**
     * trouver l'adresse mail
     * envoyer un mail de récupération avec le code de sécurité et le token
     * return la vu
     * @param update_password $update_password
     * @param Mailer $mailer
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(update_password $update_password,Mailer $mailer,$token)
    {
        $recover = $this->Recover($update_password,$token);
        if($recover){
            //$this->mail($update_password,$token,$mailer);
            return view('auth.passwords.email',compact('token'));
        }
        return view('auth.passwords.expiredToken');
    }

    /**
     * send security code with mail
     * @param $update_password
     * @param $token
     * @param $mailer
     */
    public function mail($update_password,$token,$mailer)
    {
        $update = $update_password->where('token',$token)->first();
        $code = $update->code;
        $user = $update->recover()->first()->users()->first();
        $email = $user->email;
        $name = $user->name;
        $mailer->to($email)->send(new PasswordMail($name,$code));

    }

    /**
     * verifier le code de sécurité
     * update code security
     * redirect in new password
     * @param update_password $update_password
     * @param MailRequest $request
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(update_password $update_password,$token,MailRequest $request)
    {
        $recover = $this->Recover($update_password,$token);
        if($recover){
            $code = $this->code($update_password,$token,$request->code);
            if($code){
                return redirect()->route('reset.npsw.show',compact('token'));
            }
            return view('auth.passwords.expiredToken');
        }
        return view('auth.passwords.expiredToken');
    }

    private function code($update_password, $token, $code)
    {
        return $update_password->where([['token',$token],['code',$code]])
            ->update(['code'=>false]);
    }


}
