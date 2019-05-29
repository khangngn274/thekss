<?php   
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Account;
use Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Http\Request;
// use Auth;


class AccountController extends Controller{

    public function index()
    {
        // if(Session::has('adminSS')){
        //     return view('admin::admin.dashboard');
        // }else {
        //     return redirect('/admin/login')->with('flash_message_success', 'Please Login to Access');

        // }
        return view('admin::admin.dashboard');
    }


    public function getLogin()
    {        
        // Session::flush();
        return view('admin::admin.login');
    }


    public function postLogin(Request $request)
    {
        // if(Session::has('adminSS')){
        //     return redirect('/admin/index');
        // }
        if($request->isMethod('post'))
        {
            $data = $request->input();
            // echo '<pre>';
            // print_r($data); die;
            if(Auth::guard('admin')->attempt(['account_email' => $data['email'], 'account_password' => $data['password']],$request->get('remember')))
            {
                Session::put('adminSS', $data['email']);
                return redirect()->intended('/admin/index');
            }
            else{
                return redirect('/admin/login')->with('flash_message_error', 'Invalid UserName or Password');
            }
        }
        return view('admin::admin.login');

    }

   

    public function logout()
    {
        Session::flush();
        return redirect('/admin/login')->with('flash_message_success', 'Logged out Successfull');
    }


    public function settings()
    {
        return view('admin::admin.settings');
    }


    public function checkPassword(Request $request)
    {
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $admin = Account::where(['account_status'=>'active'])->first();

        $password = $admin ->password;
        if(Hash::check($current_password,$password))
        {
            echo 'true'; die;
        }
        else {
            echo 'false'; die;
        }
    }

    public function updatePassword(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $email = Session::get('adminSS', 'default');
        
            $user_check = Account::where(['account_email' => $email])->first();

            $current_pwd = $data['current_pwd'];
            $check_pwd = $user_check->password;
            if(Hash::check($current_pwd,$check_pwd))
            {
                $password = bcrypt($data['new_pwd']);
                Account::where(['account_email' => $email])->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success', 'Password Updated Successfull');
            }
            else {
                return redirect('/admin/settings')->with('flash_message_error', 'Error');
            }
        }
    }

    public function register(Request $request)
    {
        echo 'Coming soon';
    }

}


