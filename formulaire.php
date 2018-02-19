<?php 


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Todo App</title>
  
  
  
      <link rel="stylesheet" href="style.css">

  
</head>

<body>

  <html>
  <head>
    <title>Todo App</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">    
  </head>
  <body>
    <div class="container">
      <section>
        <h3>A faire</h3>
        <ul id="incomplete-tasks">
          <li><input type="checkbox"><label>Faire les courses</label><input type="text"><button class="edit">Modifier</button><button class="delete">Supprimer</button></li>
          <li class="editMode"><input type="checkbox"><label>Terminer le projet "QCM"</label><input type="text" value="Terminer le projet 'QCM'"><button class="edit">Modifier</button><button class="delete">Supprimer</button></li>
          
        </ul>
        
        <h3>Archive</h3>
        <ul id="completed-tasks">
          <li><input type="checkbox" checked><label>Payer la facture sibelga</label><input type="text"><button class="edit">Modifier</button><button class="delete">Supprimer</button></li>
        </ul>
      </section>
      <section>
          <p>
            <label for="new-task">Ajouter une tache</label><input id="new-task" type="text"><button>Ajouter</button>
          </p>
      </section>
    </div>

    <script src="todo.json"></script>

  </body>
</html>
  
  




</body>

</html>