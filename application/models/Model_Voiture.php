<?php

class Model_Voiture extends CI_Model
{
    
    public function GetAllVoitures()
    {
        $sql = $this->db->query("select * from voiture order by idVoit");
        
        return $sql->result();
        
    }
    
    
    public function InsertOneVoiture($id, $nom, $marque, $matricule)
    {
        
        $sql = $this->db->query("INSERT INTO voiture value('".$id."','".$nom."','".$marque."','".$matricule."')");
     
        
    }
  
    

    public function EditOneVoiture($nom, $marque, $matricule, $id){

        $sql = $this->db->query("UPDATE `voiture` SET `nomVoit`='".$nom."',`marqueVoit`='".$marque."',`matriculeVoit`='".$matricule."' WHERE `idVoit`= '".$id."'");
    }   
    
}

?>