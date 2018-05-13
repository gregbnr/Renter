<?php

class Ctrl_Renter extends CI_Controller
{
      public function index()
    {
       
            
            $this->load->view("v_AccueilR");
            
            
    }
    
    public function GetClient()
    {
        
        $this->load->model("Model_Client");
        
        $data['lesClients'] = $this->Model_Client->GetAllClients();
        
        $this->load->view("v_GestionCl", $data);
        
    }
    
    public function InsertClient()
    {
        $id = $_POST['id'];
        $civilite = $_POST['civilite'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaiss = $_POST['dateNaiss'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $nationalite = $_POST['nationalite'];
        $mail = $_POST['mail'];
        $tel = $_POST['tel'];
        
        $this->load->model("Model_Client");
        $this->Model_Client->InsertOneClient($id, $civilite, $nom, $prenom, $dateNaiss, $adresse, $cp, $ville, $nationalite, $mail, $tel);
        
        
    }
    
    
    public function GetVoiture()
    {
        
        $this->load->model("Model_Voiture");
        
        $data['lesVoitures'] = $this->Model_Voiture->GetAllVoitures();
        
        $this->load->view("v_GestionVoit", $data);
        
    }
    
    
    
    public function InsertVoiture()
    {
        $idVoit = $_POST['idVoit'];
        $nomVoit = $_POST['nomVoit'];
        $marqueVoit = $_POST['marqueVoit'];
        $matriculeVoit = $_POST['matriculeVoit'];
        
        $this->load->model("Model_Voiture");
        $this->Model_Voiture->InsertOneVoiture($idVoit, $nomVoit, $marqueVoit, $matriculeVoit);
        
        
    }
    
    
    
    public function EditVoiture()
    {

        $nomVoit = $_POST['nomVoit'];
        $marqueVoit = $_POST['marqueVoit'];
        $matriculeVoit = $_POST['matriculeVoit'];
        $idVoit = $_POST['idVoit'];
        
        $this->load->model("Model_Voiture");
        $this->Model_Voiture->EditOneVoiture($nomVoit, $marqueVoit, $matriculeVoit, $idVoit);
        
        
    }
    
    
    public function NewLocation(){
        
        $this->load->model("Model_Client");
        $this->load->model("Model_Voiture");
        $this->load->model("Model_Location");
        
        $data['lesClients'] = $this->Model_Client->GetAllClients();
        $data['lesVoitures'] = $this->Model_Voiture->GetAllVoitures();
        $data['lesLocations'] = $this->Model_Location->GetAllLocations();
        
        $this->load->view("v_GestionLoc", $data);
        
    }
    
    public function InsertLocation(){
        
        $idCl = $_POST['idCl'];
        $idVoit = $_POST['idVoit'];
        $dateDebut = $_POST['dateDebut'];
        $dateFin = $_POST['dateFin'];
        
        $this->load->model("Model_Location");
        $this->Model_Location->InsertOneLocation($idCl, $idVoit, $dateDebut, $dateFin);
        
        
    }
    
    public function GetLocation(){

       $this->load->model("Model_Location");
        
        $data['lesLocationsClients'] = $this->Model_Location->GetAllClientForLocation();
        
        $this->load->view("v_DeleteLocation", $data);
    }
    
    public function DeleteLocation(){
        
        
        $idCl = $_POST['idCl'];
   
        
        $this->load->model("Model_Location");
        $this->Model_Location->DeleteOneLocation($idCl);
        
        
    }
    
}