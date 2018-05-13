<?php

class Model_Client extends CI_Model
{
    
    public function GetAllClients()
    {
        $sql = $this->db->query("select * from client");
        
        return $sql->result();
        
    }
    
    
    public function InsertOneClient($id, $civilite, $nom, $prenom, $dateNaiss, $adresse, $cp, $ville, $nationalite, $mail, $tel)
    {
        
        $sql = $this->db->query("INSERT INTO client value('".$id."','".$civilite."','".$nom."','".$prenom."','".$dateNaiss."','".$adresse."','".$cp."','".$ville."','".$nationalite."','".$mail."','".$tel."')");
        
        
        
        
    }
    
  /*  public function ModifierRegion($data1,$idRegion){
        
      
        $sql = $this->db->query("UPDATE region SET REG_NOM='".$data1."' where REG_CODE = '".$idRegion."'");
        // Pas de résultat à récupérer ICI : c'est un update !!!!
        //return $sql->result();
        
    }
    
    */
    
    
}