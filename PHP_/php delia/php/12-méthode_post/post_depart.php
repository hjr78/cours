<!-- un formulaire codé seulement en HTML et CSS n'a pas d'utilité. On doit lui ajouter un traitement PHP pour pouvoir récupérer les infos renseignés dedans et les utiliser plus tard. C'est php qui va rendre dynamique le formulaire, sinon , ce n'est q'un simple affichage. Pour que le formulaire soit connecté à la méthode POST, il faut absolument ecrire dans la balise form method=POST action qui sert  a autre chose on verra ca plus tard -->

<form method= POST action="">
    <!-- Dans les attributs des champs prenom ci de desous, seul name = a prenom est important , obligatoire en php pour que les informations puissent etre recuperer et envoyé en BDD. FOR dans (label et id dans input n'ont aucune importance pour php et l'envoi en BDD. Ils sont par contre utile en affichage pour l'UX , améliore l'expérience utilisateur ) -->
    <!-- l'attribut name est indispensable pour que les données puissent être envoyées en BDD -->

    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom">
    <br><br>
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="15" rows="3" placeholder="Votre description"></textarea>
    <br><br>
    <label for="annee">Année de naissance</label>
    <select name="annee" id="annee">
        <?php
            for($annee=date('Y'); $annee >= date('Y')-100; $annee--){
                echo "<option>" . $annee . "</option>";
            }
        ?>
    </select>
    <br><br>
    <input type="submit" value="Soumettre">
</form>



<!-- si je n'écris pas cette condition if($_POST), j'aurais droit aux warnings, undifined key prenom,key description... C'est normal, au premier chargement de la page, le formulaire est vide , aucune info n'a encore transité d'ou le undifinedkey -->



<!-- Ci-dessous, syntaxe contractée pour une condition if(). Elle permet de générer plus rapidement du code HTML que si on était dans un grand passage PHP nécessitant beaucoup d'echos -->
<?php if($_POST): ?>
<!-- j'ai besoin de la super globale $_POST pour récuperer des infos qui ont transiter dans le formulaire. Je crochette ensuite à l'indice qui m'intèresse (cet indice existe car on l'a renseigné pour l'attribut name dans le formulaire, d'ou l'utilité de name) -->
<ul>
    <li>Prénom : <?= $_POST['prenom'] ?> </li>
    <li>Description : <?= $_POST['description'] ?> </li>
    <li>Année de naissance : <?= $_POST['annee'] ?> </li>

</ul>
<!-- la syntaxe contractée if() nécessite pour fermer mon endif sinon erreur php. -->
<?php endif; ?>