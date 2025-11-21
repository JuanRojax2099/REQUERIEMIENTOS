<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Materias():View{
        
    }
    public function index(): View
    {
        return view('auth.login');
    }  
    public function InfoAcademica():View{
        return view('info.academica');
    }

    public function registration(): View
    {
        return view('auth.registration');
    }
      
    
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'cedula' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('cedula', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withError('Oppes! You have entered invalid credentials');
    }
      
   
    public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
           
            'password' => 'required|',
            'cedula'=>'required',
            
        ]);
           
        $data = $request->all();
        $user = $this->create($data);
            
        Auth::login($user); 

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
 
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
 
    public function create(array $data)
    {
        $userData = [
            'first_name' => $data['first_name'] ?? null,
            'second_name' => $data['second_name'] ?? null,
            'first_lastname' => $data['first_lastname'] ?? null,
            'second_lastname' => $data['second_lastname'] ?? null,
            'cedula' => $data['cedula'] ?? null,
            'email' => $data['email'] ?? null,
            'password' => Hash::make($data['password']),
        ];

        if (isset($data['is_professor'])) {
            $userData['is_professor'] = 1;
        } elseif (isset($data['is_admin'])) {
            $userData['is_admin'] = 1;
        }

        return User::create($userData);
    }
    
 
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}