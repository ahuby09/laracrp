<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;
use DB;
use App\Http\Requests;
class UserController extends Controller
{
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }
    public function getRecords() {
        if(Auth::check())
        {
            $id = Auth::id();
            $clients = DB::select('select * from clients WHERE UserID ='. $id);
            return view('/home',['clients'=>$clients]);
        }else{
            return view('/home');
        }
     }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }


    public function getClients(){
        $user = Auth::user()->id;

        /* send userID to relations database and grab all clients */

        /*get client infomation and print into table provide an edit button*/


        return $user;
    }
}
?>
