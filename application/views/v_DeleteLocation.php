<html>
    <head>
        <title>Suppression</title>
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
                   
                    $('tbody tr').click(function(){
                       $('#nomSupp').val($(this).children(0).eq(1).text());
                       $('#idSupp').val($(this).children(0).eq(0).text());
                        });
                        
                    $('#btnSupp').click(function(){
                      SupprimerLocation();

                    });
            
    
             });
           
           
       </script>
        
        
        
        
        
    </head>
    <body style="margin-left: 10px; margin-top: 10px; margin-right: 10px; margin-bottom: 10px;">
        
        <div>
            <h2 class="text-center" style="font-style: italic; font-weight: bold;">Suppression des locations</h2> <br>
        </div>
        
        <h4 class="text-center" style="font-weight:bold; color: green;">Cliquez sur la location du client que vous voulez supprimer :</h4> <br>
        
        <table class="table table-striped" border="1.5">
            
            <thead><tr> <th>ID Client</th><th>Nom Client</th><th>Prénom Client</th><th>ID Voiture</th><th>Nom Voiture</th><th>Date de location</th><th>Date de fin de location</th></tr></thead>
        
        <?php foreach($lesLocationsClients as $LC){
            

                    ?>
            
            <tbody>
                
                <tr class="trLoc">
                    <td><?php echo $LC->idCl;?></td>
                    <td><?php echo $LC->nomCl;?></td>
                    <td><?php echo $LC->prenomCl;?></td>
                    <td><?php echo $LC->idVoit;?></td>
                    <td><?php echo $LC->nomVoit;?></td>
                    <td><?php echo $LC->dateLoc;?></td>
                    <td><?php echo $LC->dateFinLoc;?></td>
                    
                </tr>
                
            </tbody>
        
        
        <?php            
                
        }
        ?>
            
        </table>
        
        
        <br><br>
        
        <div class="form-inline">
            
            <label style="margin-right: 5px;">Êtes-vous sûr de vouloir supprimer</label><input type="text" id="nomSupp" class="form-control"> ?
            <input type="text" id="idSupp" hidden=""> <button type="button" class="btn btn-success" id="btnSupp">Valider</button>
            
        </div>
        
        
        <br><br>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/index">Accueil</a></button>
        
        <div id="divSupp"></div>
        
        
        
        
    </body>

        
</html>
