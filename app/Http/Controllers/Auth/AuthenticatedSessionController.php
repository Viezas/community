<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function update(Request $request){
        $update = [];

        if($request->email === Auth::user()->email){
        }else if(User::where('email', '=', $request->email)->first()){

            return view('dashboard', ['user' => Auth::user(), 'updated' => false, 'customError' => 'Cette adresse email est déjà utilisée !']);

        }else{
            $update += [
                'email' => $request->email
            ];
        }

        if (!is_null($request->name) || !is_null($request->password)){
            $update += [
                'name'=> $request->name,
                'password' => Hash::make($request->password),
                'biography' => $request->biography
            ];
        }
        else{
            return view('dashboard', ['user' => Auth::user(), 'updated' => false, 'customError' => 'Username and password cannot be empty']);

        }

        $updatedDate = date('Y-m-d H:i:s');
        $update += ['updated_at' => $updatedDate];

        $user = User::findOrFail(Auth::user()->id);

        DB::table('users')
            ->where(['id' => $user->id])
            ->update($update);


        return back();
    }

}
