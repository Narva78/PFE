<center>
      <div class="container card-panel hoverable connexion-bloc" style ="background-color: rgba(219, 236, 229, 0.3); height: 500px; padding-top:50px; ">     
            <h2><u>Espace Connexion</u></h2>
            <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
            
            
                  <p>
                        <label for="nom" style="color:black">Login</label>
                        <input id="login" type="text" name="login"  size="30" maxlength="45">
                  </p>
                  <p>
                        <label for="mdp" style="color:black">Mot de passe</label>
                        <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
                  </p>
                  <input type="submit" value="Se connecter" name="valider"> 
            </form>
            <br><br>
            <a href="vues/v_inscription.php" class="btn waves-effect waves-teal">
                  <i class="material-icons left">send</i>
                  S'inscrire
            </a>
      
      </div class="container">
</center>