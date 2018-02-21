<?php

if(isset($_POST['submit'])){
  $options = array( 'todo' => FILTER_SANITIZE_STRING, 'archive' => FILTER_SANITIZE_STRING, 'addtask' => FILTER_SANITIZE_STRING );
  $result = filter_input_array(INPUT_POST, $options);
  $checkResult =[];$todo = trim($result['todo']);
  $archive = trim($result['archive']);
  $addtask = trim($result['addtask']);
  
  if(isset($todo) AND !empty($todo) ){
    $verif_todo = "ok"; }
    else { $verif_todo = "pok"; }
    
  if(isset($archive) AND !empty($archive) ){
    $verif_archive = "ok"; }
    else { $verif_archive = "pok"; }
    
  if(isset($addtask) AND !empty($addtask) ){
    $verif_addtask = "ok"; }
    else { $verif_addtask = "pok"; } 
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
		<title>To do</title>
	</head>
	<body>
    <div class="container">
      <form action="" method="POST" name="formulaire" id="formulaire">
        <fieldset>
          <h3>A faire</h3>
          <ul id="incomplete-tasks">
            <li><input type="checkbox" name="todo" value="todo1"><label>Faire les courses</label><input type="text"><button class="edit">Modifier</button><button name="delete" type="submit" form="formulaire" class="delete">Supprimer</button></li>
            <li class="editMode"><input type="checkbox" name="todo" value="todo2"><label>Terminer le projet "QCM"</label><input type="text" value="Terminer le projet 'QCM'"><button name="edit" type="submit" form="formulaire" class="edit">Modifier</button><button name="delete" type="submit" form="formulaire" class="delete">Supprimer</button></li>
          </ul>
          <button name="submit" type="submit" form="formulaire">Enregistrer</button>
          <h3>Archive</h3>
          <ul id="completed-tasks">
            <li><input type="checkbox" type="checkbox" name="archive" value="archive1" checked><label>Payer la facture sibelga</label><input type="text"><button name="edit" type="submit" form="formulaire" class="edit">Modifier</button><button name="delete" type="submit" form="formulaire" class="delete">Supprimer</button></li>
          </ul>
        </fieldset>
      </form>
    </div>
  </body>
</html>