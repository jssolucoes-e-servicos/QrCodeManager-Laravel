<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
use Auth;
use Session;
use Redirect;


class AuthController extends Controller
{
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    public function Index()
    {
       return view('app.auth.login');
    }

    public function Authenticate(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email'=> $request->get('email'),
            'password'=> $request->get('password')
        ];
        try
        {
            if(env('PASSWORD_HASH'))
            {
                if (Auth::attempt($credentials,$request->get('remember'))) {
                    // Authentication passed...
                    return redirect()->intended('app');
                }
            }
            else
            {
                $user = $this->repository->findWhere(['email' => $request->get('email')])->first();
                if(!$user)
                {
                    $notification = array(
                        'message' => 'Usuário não encontrado',
                        'alert-type' => 'error'
                    );
                    return Redirect::to('/app/login')->with($notification);
                }
                 //  throw new Exception("Usuário Inválido!");
                if($user->password != $request->get('password'))
                    throw new Exception("Senha Incorreta!");
                Auth::login($user);
                return redirect()->intended('app');
            }
        }
        catch (Exception $e)
        {
            return Redirect::to("app/login")->withSuccess('Ops!');
        }
    }

    public function Logout() {
        Session::flush();
        Auth::logout();
        return Redirect('app/login');
    }
}
