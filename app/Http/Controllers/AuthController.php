<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginView()
    {
        return view('login.main', [
            'layout' => 'login'
        ]);
    }

    /**
     * Authenticate login user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        if (!\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            throw new \Exception('Wrong email or password.');
        }
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerView()
    {
        return view('register.main', [
            'layout' => 'register'
        ]);
    }

    /**
     * Authenticate Register user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regis(Request $request)
    {
        $this->_validation($request);
        $password = $request->password;
        DB::table('tbl_users')->insert([
            'nama' => $request->nama,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => bcrypt($password)
        ]);
        return redirect('login')->with('message', 'Pendaftaran Berhasil');
    }

    /**
     * Logout user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        \Auth::logout();
        return redirect('login');
    }
}
