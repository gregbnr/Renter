function InsererClient()
{
    $.ajax
    (
        {
                type:"post",
                url:"InsertClient",
                data: "id="+$('#txtID').val()+"&civilite="+$('#txtCivilite').val()+"&nom="+$('#txtNom').val()+"&prenom="+$('#txtPrenom').val()+"&dateNaiss="+$('#txtDateNaiss').val()+"&adresse="+$('#txtAdresse').val()+"&cp="+$('#txtCP').val()+"&ville="+$('#txtVille').val()+"&nationalite="+$('#txtNation').val()+"&mail="+$('#txtMail').val()+"&tel="+$('#txtTel').val(),
                success:function(data)
                {
                    $('#divInsert').empty();
                    $('#divInsert').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour insérer!');
                   
                }
        }
    );
}


function InsererVoiture()
{
    $.ajax
    (
        {
                type:"post",
                url:"InsertVoiture",
                data: "idVoit="+$('#txtIDVoit').val()+"&nomVoit="+$('#txtNomVoit').val()+"&marqueVoit="+$('#txtMarqueVoit').val()+"&matriculeVoit="+$('#txtMatriculeVoit').val(),
                success:function(data)
                {
                    $('#divVoit').empty();
                    $('#divVoit').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour insérer!');
                   
                }
        }
    );
}


function ModifierVoiture()
{
    $.ajax
    (
        {
                type:"post",
                url:"EditVoiture",
                data: "nomVoit="+$('#txtNomVoit').val()+"&marqueVoit="+$('#txtMarqueVoit').val()+"&matriculeVoit="+$('#txtMatriculeVoit').val()+"&idVoit="+$('#txtIDVoit').val(),
                success:function(data)
                {
                    $('#divM').empty();
                    $('#divM').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour insérer!');
                   
                }
        }
    );
}


function InsererLocation()
{
    $.ajax
    (
        {
                type:"post",
                url:"InsertLocation",
                data: "idCl="+$('#txtIDCl').val()+"&idVoit="+$('#txtIDVoit').val()+"&dateDebut="+$('#txtDateDebut').val()+"&dateFin="+$('#txtDateFin').val(),
                success:function(data)
                {
                    $('#divLoc').empty();
                    $('#divLoc').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour insérer!');
                   
                }
        }
    );
}


function SupprimerLocation()
{
    $.ajax
    (
        {
                type:"post",
                url:"DeleteLocation",
                data: "idCl="+$('#idSupp').val(),
                success:function(data)
                {
                    $('#divSupp').empty();
                    $('#divSupp').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour supprimer!');
                   
                }
        }
    );
}

