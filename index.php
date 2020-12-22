<?php  
  $user_input = $_GET["name"];
  $edited_word = str_replace($user_input, 'name', '*****');
?>

<p>Ciao, inserisci una parolaccia tramite query string</p>

<?php 
    if ($user_input == "") {
        echo('');
    }
    else {
        echo($edited_word);
    }
?>