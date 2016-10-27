<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filrouge extends CI_Controller 
{
    public function test()
    {
       
        $this->load->view('Filrouge/test');
       
       
    }

	public function index()
    {
       
        $this->load->view('Filrouge/index');
       
       
    }

     public function liste()
    {
        $model["liste"] = $this->FilrougeDAO->liste();
        $this->load->view('filrouge/admin', $model);
    }

    public function home()
    {
        
        $this->load->view('filrouge/home');
    }

    public function inscription()
    {
         
    	$this->load->view('filrouge/inscription');
        
        
    }

    public function admin()
    {
       if (isset ($_SESSION["connecte"])&& $_SESSION["connecte"]->Role=="administrateur") {
            if ( $data=$this->input->post()==false)
            {
            $model["liste"]=$this->FilrougeDAO->liste();
            $this->load->view('filrouge/admin', $model);
            }
            else
            {
                $data = $this->input->post();
                $this->FilrougeDAO->insert($data);
            }
        }
        else{
                echo "error";
        }
    }
    
    public function ajout()
    {
       
        	if( $data= $this->input->post() == false)
            {
                  $this->load->view('Filrouge/inscription');
            }
            else 
            {
        	$data = $this->input->post();
        	$this->FilrougeDAO->insert($data);
            }
   
    }

     public function checkmail($email) {

       $requete = $this->db->query("select AdresseMailDuClient from Client")->result();
       foreach ($requete as $value) {
            $email = urldecode($email);//urldecode : codigniter n'accepte pas les champs avc @, permet de décoder
            if ($email == $value->AdresseMailDuClient) {
                echo "ok";
                return;
            }

       		}
        		echo "ko";
       		    return; 
    			}

      public function suppr($id)
    {
         if (isset ($_SESSION["connecte"])&& $_SESSION["connecte"]->role=="administrateur") {
            if($this->input->post()) 
            { 
                //$id = $this->input->post("id");
                $this->FilrougeDAO->delete($id);
               // redirect(site_url("liens/index"));
            }
            
            else 
            {
                $test = $this->FilrougeDAO->find($id); 
                $model["lien"]  = $test;
                $this->load->view('Filrouge/suppr', $model);

            }
         }
        else{
                echo "error";
        }
    
    }

    public function modif($id)
    {
         if (isset ($_SESSION["connecte"])&& $_SESSION["connecte"]->role=="administrateur") {    
            if ($this->input->post()) 
            {
                $data = $this->input->post();
                $this->FilrougeDAO->update($data);
                //redirect(site_url("liens/index"));
            }
            else 
            {
                $model["lien"] = $this->FilrougeDAO->find($id); // première ligne du résultat
                $this->load->view('Filrouge/modif', $model);
            }
           }
        else{
                echo "error";
        }
            
    }

    public function detail($id)
    {
        if (isset ($_SESSION["connecte"])&& $_SESSION["connecte"]->role=="administrateur") {    
            $model["lien"] = $this->FilrougeDAO->find($id); 
            $this->load->view('Filrouge/detail', $model);
          }

        else{
                echo "error";
        }
    }



}
?>