<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */	
	 public function login(){  
    if(isset($_POST["Loginbtn"])){
        $mail=$_POST['user'];
        $pass=$_POST['pass'];
        $this->db->select('*');
        $this->db->from("logindb");
        $this->db->where(array('Username'=>$mail,'pass'=>$pass));
      $query=  $this->db->get();
      $usr =$query->row();
      echo $usr->Username;
      if($usr->Username){
        $_SESSION['user_loggedin']= true;
        $_SESSION["user_mail"] = $mail;
        echo "<script>alert('Logged in Successful redirecting you!!!');</script>";
        redirect('/user/Profile','refresh');
      }
      else{
          echo "<script>alert('Email not found');</script>";
      }
    }
    $this->load->view("Loginn.php"); 
}




public function index(){
    if(isset($_POST["regsub"])){
       // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('user', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        $this->form_validation->set_rules('repass', 'Re-Enter password', 'required|matches[pass]');

        
               
                if($this->form_validation->run() == TRUE)
                {
                        //$this->load->view('formsuccess');
                      $user=$_POST['user'];
                        $data = array(
                            'Username' => $user,
                            'pass' => $_POST["pass"]
                        );

                           $this->db->insert('logindb',$data);
                            echo "<script>alert('Registered Successfully,Now You can login');</script>"; 
                            $this->load->helper('url');
                            redirect("lol/Login",'refresh');
                }



    }  
    $this->load->view("Regstration");
}

public function profile(){
 
    $this->load->view("Profile");
}
	
	
}
