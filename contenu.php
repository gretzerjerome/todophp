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
            <p>
              <label for="new-task">Ajouter une tache</label><input type="text" name="addtask" id="new-task" type="text"><button>Ajouter</button>
            </p>
        </fieldset>
      </form>
    </div>
  </body>
</html>
