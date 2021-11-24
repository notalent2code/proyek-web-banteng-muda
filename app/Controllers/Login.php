<?php 
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{
        $data=[];
        helper(['form']);
        if($this->request->getMethod()== 'post'){
            $rules = [
                'email' => 'required|min_length[5]|max_length[50]|valid_email',
                'password' => 'required|min_length[5]|max_length[50]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password Wrong'
                ]
            ];
            if (!$this->validate($rules, $errors)){
                $data['validation']= $this->validator;
            }
            else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                 ->first();

                $this->setUserSession($user);
                return redirect()->to('dashboard');
            }
        }
        $data['title'] = 'Log In';
        return view('pages/login', $data);
	}
    private function setUserSession($user){
        $data = [
            'email'=>$user['email'],
            'isLoggedIn'=>true,
        ];
        session()->set($data);
        return true;
    }
    public function signup()
    {
        $data=[];
        helper(['form']);
        if($this->request->getMethod()== 'post'){
            $rules = [
                'nama' => 'required|min_length[5]|max_length[50]',
                'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[5]|max_length[255]',
                'no_hp' => 'required|min_length[5]|max_length[50]'
                
            ];

            if (!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }
            else {
                $model = new UserModel();

                $newData = [
                    'name' => $this->request->getVar('name'),
                    'email'=> $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'no_hp' => $this->request->getVar('no_hp')
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('pages/login');
            }
        }
        $data['title'] = 'Sign Up';
        return view('pages/signup', $data);
    }
    
    public function logout(){
        session()->destroy();
        return redirect()->to('pages/login');
    }

}