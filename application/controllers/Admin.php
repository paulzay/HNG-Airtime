<?php
ini_set('memory_limit','-1');
defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

	function __construct()
        {parent::__construct();  
 	      //  ini_set('memory_limit','-1');

          $this->load->model('model_insertvalues');

 		}



	public function index()

    {

        if (isset($_POST['submit'])) {

         $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');

         $this->form_validation->set_rules('password', 'Password', 'required');

         if ($this->form_validation->run() == TRUE) {

             

                $data = array(



                    $username   = $_POST['username'],

                    $password   = md5($_POST['password'])



                    );



                    $this->db->select('*');

                    $this->db->from('admin');

                    $this->db->where(array('username'=>$username,'password'=>$password));

                    $query = $this->db->get();

                    $user = $query->row();



                    if ($user) {    

                        $_SESSION['user_logged'] = TRUE;

                        $_SESSION['username']    = $user->username;
                        $_SESSION['usertype']    = $user->usertype;

                       $arr =  array(

                        'username' =>$username ,

                        'password' =>$password ,

                        'login_date' => date("Y-m-d") 



                        );



                       $this->model_insertvalues->addItem($arr,"admin_login");

                        redirect("admin_hotel");



                    }



                    else{

             $this->session->set_flashdata("error",'<div class="alert alert-success alert-dismissible" role="alert" style="color:red">

              Account Not Found <strong>Contact the administrator</strong>

              <button type="button" class="close btn" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

            </div>');

                

            }

         }

          else{

             $this->session->set_flashdata("error",'<div class="alert alert-success alert-dismissible fade show col-md-12" role="alert" style="color:red">'.validation_errors.' <strong></strong>

              <button type="button" class="close btn" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

              </button>

            </div>');

        }

      }

        $this->load->view('auth/login');

    }



    public function logout(){

            unset($_SESSION);

            session_destroy();

         redirect("admin/index");

    }





   }