<?php 

class Auth extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        // $this->load->model('Auth_model'); Sudah Autoload jadi tidak perlu load model lagi

    }

    public function register()
    {
        $data['judul'] = 'Register';
        
        // Form Rules/Validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[password1]');
        $this->form_validation->set_rules('password1', 'Confirm Password', 'required|matches[password]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('register');
            $this->load->view('templates/footer');
        }else{
            $data = [
                "username" => $this->input->post('username'),
                "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
    
            $this->db->insert('users', $data);
            $this->session->set_flashdata('flash', 'Berhasil');
            redirect(base_url('auth/register'));
        }
    }

    public function login()
    {
        $data['judul'] = 'Login';
        
        // Form Rules/Validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('login');
            $this->load->view('templates/footer');
        }else{
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if($user){
            if(password_verify($password,$user['password'])){
                $this->session->set_userdata([
                    "username" => $user['username']
                ]);
                redirect(base_url('siswa'));
            }
        }
        $this->session->set_flashdata('flash', 'Username / Password Salah');
        redirect(base_url('auth/login'));
    }
}