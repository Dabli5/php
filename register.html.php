<?php
session_start();

if(isset($_POST["submit"])){
    $email= $_POST['email'];
    $prenom= $_POST['Nameuser'];
    $nom= $_POST['user'];
    $password = $_POST['password'];
}else{
    echo "Veuillez valider le formulaire svp ";
}


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="container mt-5">
        <h3 class="text-info">Formulaire De Connexion</h3>

            <form method="POST"  action="">
                <div class="form-group row">
                    <label for="inputUser" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="" name="Nameuser" placeholder="First-name">
                        </div>
                </div>
                <div class="form-group row">
                    <label for="inputUser" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="" name="user" placeholder="Last-name">
                        </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="" name="email" placeholder="Email">
                        </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" id="" name="password" placeholder="Password">
                        </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="" >
                            <option>Admin</option>
                            <option>Visiteur</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-5">
                        <input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>