<html>
    <head>
        <title>Location</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include 'bootstrap.php';
        ?>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>JS/js_Ajax.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    

    <script type="text/javascript">

            $(function(){
                    $('tr').click
                    (
                            function()
                           {
                                // alert("de");
                                $('#txtIDCl').val($(this).children(0).eq(0).text());
                                $('#txtCiviliteCl').val($(this).children(0).eq(1).text());
                                $('#txtNomCl').val($(this).children(0).eq(2).text());
                                alert('Vous avez sélectionné '+ $(this).children(0).eq(1).text() + ' '+ $(this).children(0).eq(2).text());
                           }
                    )
                    
                    $('#lstVoit').change
                    (
                            function()
                            {
                                $('#txtIDVoit').val($('#lstVoit option:selected').val());
                                alert('Vous avez sélectionné la voiture '+ $('#lstVoit option:selected').text());
                            }
                    );
                    
                    $('#btnAttribuer').click
                    (
                            function()
                           {
                                alert('Vous avez attribué la voiture '+ $('#lstVoit option:selected').text() + ' à '+ $('#txtCiviliteCl').val() + ' '+ $('#txtNomCl').val() + ' du '+ 
                                        $('#txtDateDebut').val() + ' au ' + $('#txtDateFin').val());
                                InsererLocation();
                           }
                    )
                    
                    
    
             });
    
    
    </script>
    </head>
    
    
    <body style="margin-left: 10px; margin-top: 10px; margin-right: 10px; margin-bottom: 10px;">
        
        <div>
            <h1 class="text-center" style="font-style: italic; font-weight: bold;">Location</h1> <br>
        </div>
        
        <h4 class="text-center" style="font-weight: bold; color: green;">Sélectionnez pour un client : une voiture, la date de début et de fin de la location :</h4> <br>
        
        <div>
            <div class="form-inline" style="float: left; margin-right: 100px;">
                
                <label>Choix de la voiture : </label>
                <select class="form-control" id="lstVoit">
            <?php
            
            foreach ($lesVoitures as $v){
                ?>
            
            <option id="optVoit" value="<?php echo $v->idVoit ?>"><?php echo $v->marqueVoit.'  '.$v->nomVoit ?></option>
            
            <?php
            }
                ?>
            
            
            
        </select>
        </div>
        
        <div class="form-inline" style="float: left; margin-right: 50px">
            
            <label>Date de début de location : </label>
            <input class="form-control" type="date" id="txtDateDebut">

        </div>
        
        <div class="form-inline">
            
            <label>Date de fin de location : </label>
            <input class="form-control" type="date" id="txtDateFin">

        </div>
            
        </div>
        
        <br>
        
        <input type="text" id="txtIDCl" hidden="">
        
        <input type="text" id="txtCiviliteCl" hidden="">
        
        <input type="text" id="txtNomCl" hidden="">
        
        <input type="text" id="txtIDVoit" hidden="">
        <br>
        
        <label>Cliquez sur un client : </label>
        <table class="table table-striped" border="1.5">
            
            <thead><tr> <th>ID</th><th>Civilité</th><th>Nom</th><th>Prenom</th><th>Date de Naissance</th><th>Adresse Complète</th><th>Nationalité</th><th>Mail</th><th>Téléphone</th></tr></thead>
            
            <?php 
                 
                    foreach($lesClients as $c)
                        {
                        ?>
            <tbody id="tableCl">
                <tr><td id="tdID"><?php echo $c->idCl; ?></td>
                    <td id="tdCivilite"><?php echo $c->civiliteCl;?></td>
                    <td id="tdNom"><?php echo $c->nomCl;?></td>
                    <td><?php echo $c->prenomCl;?></td>
                    <td><?php echo $c->dateNaissCl;?></td>
                    <td><?php echo $c->adresseCl.', '. $c->CPCl.' '.$c->villeCl ;?></td>
                    <td><?php echo $c->nationaliteCl;?></td>
                    <td><?php echo $c->mailCl;?></td>
                    <td><?php echo $c->telCl;?></td>
                </tr>
            </tbody>
                 <?php 
                        }                       
                ?>
                
            
            
            
        </table>
        
        
        
        <br><br>
        
        <input id="btnAttribuer" type="button" value="Attribuer" class="btn btn-success" style="margin-right: 10px;">
        
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/GetLocation"> Suppression de location </a></button>
        
        <br><br>
        
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/index">Accueil</a></button> 
        
        
        <div id="divLoc"></div>
        
    </body>
</html>
