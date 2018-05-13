<html>
    <head>
        <title>Gestion des clients</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include 'bootstrap.php';
        ?>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>JS/js_Ajax.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
    
    <script type="text/javascript">
    
    $(function(){
            $('#btn1').click(function(){
                //alert('erreur');
                InsererClient();
                alert('Nouveau client inséré !')
                });
    });
    
    
    
    
    
    
    </script>
    
    </head>
    
    
    <body style="margin-left: 10px; margin-top: 10px; margin-right: 10px; margin-bottom: 10px;">
        
        <div>
            <h1 class="text-center" style="font-style: italic; font-weight: bold;">Inscription</h1>
        </div> <br>
        
        <h4 class="text-center" style="font-weight: bold; color: green;">Veuillez insérer les informations relatives au client :</h4> 
        
        <div class="form-inline"><label>ID :</label> 
            <input class="form-control" id="txtID" type="text"></div><br>
            
        <div class="form-inline"><label>Civilité :</label> 
            <select id="txtCivilite" class="form-control"><option>Monsieur</option>
                <option>Madame</option></select></div><br>
            
        <div class="form-inline"><label>Nom :</label> 
            <input class="form-control" id="txtNom" type="text"></div><br>
        
        <div class="form-inline"><label>Prénom :</label> 
        <input class="form-control" id="txtPrenom" type="text"></div><br>
        
        <div class="form-inline"><label>Date de Naissance :</label> 
        <input class="form-control" id="txtDateNaiss" type="date"></div><br>
        
        <div class="form-inline"><label>Adresse :</label> 
        <input class="form-control" id="txtAdresse" type="text"></div><br>
        
        <div class="form-inline"><label>Code Postal :</label> 
        <input class="form-control" id="txtCP" type="text"></div><br>
        
        <div class="form-inline"><label>Ville :</label> 
        <input class="form-control" id="txtVille" type="text"></div><br>
        
        <div class="form-inline"><label>Nationalité :</label> 
            <input class="form-control" id="txtNation" type="text"></div><br>
            
        <div class="form-inline"><label>Mail :</label> 
            <input class="form-control" id="txtMail" type="email" placeholder="example@example.com"></div><br>
            
        <div class="form-inline"><label>Téléphone :</label> 
            <input class="form-control" id="txtTel" type="tel">
        
        
        <input id="btn1" type="button" value="Insérer client" class="btn btn-success" style="margin-right: 10px; margin-left: 10px;">
        
        
        
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/NewLocation"> Location </a></button>
        </div>
        <br>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/index">Accueil</a></button>
        
        
        
        <div id="divInsert"></div>
        
    </body>
</html>
