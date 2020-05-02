
<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="../css/bootstrap.css">
 <link rel="stylesheet" href="../css/style_1.css">

  <body>	
     	<div class="container-fluid">

        <div>  
            <!-- =========================================-->
            <div class="row">
              <div class="col-sm-12 col-md-4 col-lg-4"></div>
              <div class="col-sm-12 col-md-4 col-lg-4 Div_glob">
                <h2 style="color:blue;">Connectez-vous</h2>
                <h3>Mon titre 3 cool</h3>
              <div>
                
                <?php
                  if(isset($_GET['q']) AND $_GET['q']==0){  
                    echo ('
                      <div class="alert alert-danger" role="alert" id="text_pwd_incorrect">
                        Votre mot de pass ou Nom incerrect !
                      </div>');
                  }
                  else{
                    echo('');
                  }
                ?>
              </div>
            <!-- =========================================-->
                 <!-- <div class="col-sm-12 col-md-8 col-lg-8"> -->  
              <form method = "POST" action ="#">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12"> 
                    <div class="form-group">
                        <input type="text" name="NOM" class="form-control" placeholder="Identifiant" id="input_connexion_nom">

                        <label for="input_connexion_pwd"></label>
                        <input type="password" name="PWD" class="form-control" placeholder="mot de pass" id="input_connexion_pwd" >
                    </div>
                      <div class="col-sm-12 col-md-12 col-lg-12 Div_glob_lien_et_Bout">
                        <button class="btn btn-outline-secondary" id="bout_connexion" type="submit"> Se connecter </button>
                        <div><a href="#" title="cliquer ici">mot de passe oublie ?</a></div>
                        <div>Pas de compte ? <a href="#" title="cliquer ici" style="text-decoration: underline;">S'inscrire</a></div>

                      </div>                   
                  </div>
                </div>
              </form>
              <div class="col-sm-12 col-md-4 col-lg-4"></div>
            </div>
          </div>
        </div>
      </div>
  </body>