
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    

    <title>ESPACE NATURE</title>
</head>
<body class="container text-center" style="background-color:#f1f6f9" >
    

   
<form action="base.php" method="POST">

<h1>Formulaire contact</h1>
<div class="container shadow mb-4 rounded bg-light p-3">
    <div class="form-group">
        <label for="name">nom :</label>
        <input type="texte"  name="user_last_name">
    </div>

    <div class="form-group">
        <label for="last_name">prénom :</label>
        <input type="texte" class="prenom" name="user_first_name">
    </div>
    <div class="form-group d-flex offset-4" >
    
           <label class="mr-4" for="">Quel est votre genre ?</label>
        <select  class="form-control col-md-3" name="gender" >
           <option name="gender" >autre</option>
           <option name="gender">homme</option>
           <option name="gender">femme</option>
         </select> 
    </div> 
     
        <div class="form-group">
            <div class="d-flex offset-3">
                <div class="col-md-8">
                    <label for="exampleFormControlTextarea1">Commentaire</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> 
            </div> 
        </div>

        <div class="form-group d-flex offset-3 ">
            <div class="col-md-8 ">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
    

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Envoyer</button>
         </div>

</div>
</form>


</body>
</html>