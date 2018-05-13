<html>
<head>
	<title> Renter | Accueil </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        include 'bootstrap.php';
        ?>

</head>
<body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
        <div style="border-color: black; height:auto; overflow:auto">
            <h1 class="text-center" style="font-family: New Century Schoolbook, TeX Gyre Schola, serif; font-weight: bold;">RENTER</h1>
        <p>
            <h2 class="text-center">Bienvenue, sur le site Renter</h2>
            <h4 class="text-center" ><i> Sélectionnez la fonctionnalité souhaitée</i></h4></br>
        </p>
        </div>
  
    <div align="center">
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/GetClient"> Gestion des clients </a></button></br></br>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/GetVoiture"> Gestion des voitures </a></button></br></br>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/NewLocation"> Gestion des locations </a></button></br></br>
        <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_Renter/GetLocation"> Suppression de location </a></button>
    </div>
    
     
    
    
</body>
</html>
