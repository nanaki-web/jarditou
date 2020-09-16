

<?php
include("header.php");
?>

            <div class="col-12 col-md-12" >
            <p>Ces zones sont obligatoires*</p>
            <h1>Coordonnée</h1>
<!-- formulaire -->
            

              <form action="script.php" method="POST"  >
                <div class="form-group">
                  <label for="nom">Nom*</label>                  
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Veuillez saisir votre nom" >           
                </div>
                <div class="form-group">
                  <label for="prénom">Prénom*</label>
                  <input type="text" name="prenom" class="form-control" id="nom"placeholder="Veuillez saisir votre prénom">
                </div>
                <p>Sexe*</p>
              <fieldset class="form-group">
           

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="option1" >
                  <label class="form-check-label" for="inlineRadio1">Féminin </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Masculin</label>
                </div> 
                <div class="form-group">
                  <label for="naissance">Date de naissance*</label>
                  <input type="date" name="date"class="form-control" id="naissance" value="jj/mm/aaaa" >
                </div>
                <div class="form-group">
                  <label for="code postale">Code postale</label>
                  <input type="text" name="postale" class="form-control" id="code postale">
                </div>
                <div class="form-group">
                  <label for="adresse">adresse</label>
                  <input type="text" name="adresse" class="form-control" id=adresse">
                </div>
                <div class="form-group">
                  <label for="ville">Ville*</label>                  
                  <input type="text" name="ville" class="form-control" id="ville" >           
                </div>
                <div class="form-group">
                  <label type for="email">Email*</label>
                  <input type="email" class="form-control" id="email" placeholder="dave.loper@afpa.fr" >
                </div>
                <h1>Votre demande</h1>
                <div class="form-group">
                  <label for="sujet">Sujet</label>
                  <select class="form-control" id="sujet">
                    <option>Veuillez séléctionner un sujet</option>
                    <option>Mes commandes</option>
                    <option>Question sur un produit</option>
                    <option>Réclamation</option>
                    <option>Autres</option>
                  </select>
                </div>
                <div class="form-group"></div>
                  <label for="sujet">Votre question*:</label>
                  <textarea class="form-control" id="sujet" rows="3" ></textarea>
                </div>
              
              </div> 
            </div>  
            </div>
            <br>
            <!-- checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox"name="traitement_informatique"  id="cgu">
              <label class="form-check-label" for="cgu">J'accepte le traitement informatique de ce formulaire
              </div>    
              </label>
          <br>
          <!-- bouton envoyer/annuler -->
          <button type="submit" name="envoyer" value="ok" class="btn btn-dark">Envoyer</button>
          <button type="button" class="btn btn-dark">Annuler</button> 
        </form>  
        </div>
        <br>
        <!-- navigation fin de page -->
<?php 
    include("footer.php");
?> 