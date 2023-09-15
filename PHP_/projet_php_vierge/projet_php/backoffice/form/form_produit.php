<?php



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <form>
      <div class="mb-3">

        <label for="title" class="form-label">title</label>
        <input type="title" class="form-control" id="title" aria-describedby="title">
        <!-- <div id="firstname" class="form-text">FIRSTNAME</div> -->
      </div>



      <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="price" class="form-control" id="price">
      </div>



    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input type="description" class="form-control" id="description">
      </div>

 
      
      <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="image" class="form-control" id="image">
      </div>


    <div class="mb-3">
        <label for="stock" class="form-label">stock</label>
        <input type="stock" class="form-control" id="stock">
      </div>


<div class="mb-3">
        <label for="id_user" class="form-label">id_user</label>
        <input type="id_user" class="form-control" id="id_user">
</div>


    
      


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</body>
</html>

