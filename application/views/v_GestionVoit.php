<html>
    <head>
        <title>Gestion des voitures</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include 'bootstrap.php';
        ?>
        
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>JS/js_Voiture.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/js_Ajax.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        
        
       <script type="text/javascript">

            $(function(){
                    $('#btnVoit').click(function(){
                        //alert('erreur');
                        InsererVoiture();
                        });
            

                $('tbody tr').click(function(){
                    $('#txtIDVoit').val($(this).children(0).eq(0).text());
                    $('#txtNomVoit').val($(this).children(0).eq(1).text());
                    $('#txtMarqueVoit').val($(this).children(0).eq(2).text());
                    $('#txtMatriculeVoit').val($(this).children(0).eq(3).text());
                });
                
                
                $('#btnM').click(function(){
                    ModifierVoiture();
                });
    
             });
    
    
    </script>
        
        
        
        
        
    </head>
    <body style="margin-left: 10px; margin-top: 10px; margin-right: 10px; margin-bottom: 10px;">
        
<!--        <input id="idVoiture" hidden="" value="">-->
        
        
        <div>
            <h1 class="text-center" style="font-style: italic; font-weight: bold;">Gestion des voitures</h1> <br>
        </div>
        
        <div class="form-inline"><label>ID :</label> 
        <input class="form-control" id="txtIDVoit" type="text"></div><br>
            
        <div class="form-inline"><label>Nom :</label> 
            <input class="form-control" id="txtNomVoit" type="text"></div><br>
        
        <div class="form-inline"><label>Marque :</label> 
        <input class="form-control" id="txtMarqueVoit" type="text"></div><br>

        <div class="form-inline"><label>Matricule :</label> 
            <input class="form-control" id="txtMatriculeVoit" type="text"></div><br>
        
  
        <input id="btnVoit" type="button" value="Insérer voiture" class="btn btn-success"> <input id="btnM" type="button" value="Modifier" class="btn btn-danger">
        
        <br><br>
        
        <h4 class="text-center" style="font-weight:bold; color: green;">Cliquez sur l'ID de la voiture à modifier ou insérer directement une voiture :</h4>
        <br>

        
        <table border="1.5" class="table table-striped">
            <thead>
                <tr> <th>ID</th><th>Nom</th><th>Marque</th><th>Matricule</th></tr>
            </thead>
                <?php 
                 
                    foreach($lesVoitures as $v)
                        {
                        ?>
            <tbody>
                <tr><td><?php echo $v->idVoit; ?></td>
                    <td><?php echo $v->nomVoit;?></td>
                    <td><?php echo $v->marqueVoit;?></td>
                    <td><?php echo $v->matriculeVoit;?></td>
                </tr>
            </tbody>
                 <?php 
                        }                       
                ?>
        
        </table>
        
         <br><br>
        
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/index">Accueil</a></button> 
        
        <div id='divVoit'></div>
        <div id='divM'></div>
        
</html>


