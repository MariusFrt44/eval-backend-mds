<?php
  /*****************************************
  *  Constantes et variables à indiquer ici
  *****************************************/

 
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Formulaire de base</title>
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
      <fieldset>
        <legend>Formulaire de base</legend>
          <p>
             <label for="Prénom">Prénom :</label> 
           <input type="Prénom" name="Prénom" id="Prénom" value="" /> 
          </p>
          <p>
            <label for="Nom">Nom :</label> 
            <input type="Nom" name="Nom" id="Nom" value="" /> 

          </p>
                    <p>
            <label for="Ville">Ville :</label> 
            <input type="Ville" name="Ville" id="Ville" value="" /> 
          </p>
                              <p>
            <label for="Mail">Mail :</label> 
            <input type="Mail" name="Mail" id="Mail" value="" /> 
          </p>
                              <p>
            <label for="phone">téléphone :</label> 
            <input type="phone" name="phone" id="phone" value="" /> 
            <input type="submit" name="submit" value="Envoyer" />
          </p>
      </fieldset>
    </form>
  </body>
</html>