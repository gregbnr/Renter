<?php

class Model_Location extends CI_Model
{
    
    public function GetAllLocations()
    {
        $sql = $this->db->query("select * from location");
        
        return $sql->result();
        
    }
    
    public function GetAllClientForLocation(){
        
        $sql = $this->db->query("SELECT * FROM client, voiture, location WHERE client.idCl = location.idCl AND voiture.idVoit = location.idVoit;");
        
        return $sql->result();
    }


    public function InsertOneLocation($idCl, $idVoit, $dateDebut, $dateFin)
    {
        
        $sql = $this->db->query("INSERT INTO location value('".$idCl."','".$idVoit."','".$dateDebut."','".$dateFin."')");
        
        
    }
    
    public function DeleteOneLocation($idCl){
        $sql = $this->db->query("DELETE FROM `location` WHERE `idCl`= '".$idCl."'");
    }
    

}

?>