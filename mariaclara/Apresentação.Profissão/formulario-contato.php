<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nota = htmlspecialchars($_POST['nota']);
    $nome_usuario = htmlspecialchars($_POST['nome_usuario']);
    $email_usuario = htmlspecialchars($_POST['email_usuario']);
    $texto_usuario = htmlspecialchars($_POST['texto_usuario']);

    $data = array(
        "nota" => $nota,
        "nome_usuario" => $nome_usuario,
        "email_usuario" => $email_usuario,
        "texto_usuario" => $texto_usuario
    );

    $file = 'feedbacks.json';

    if(file_exists($file)) {
        $current_data = file_get_contents($file);
        $array_data = json_decode($current_data,true);
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    } else{
        $array_data = array();
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }

    if(file_put_contents($file,$final_data)){
        echo "Feedback enviado com sucesso!";
        echo '<a href="exibe_feedbacks.php">Ver Feedbacks</a>';
    } else {
        echo "Erro ao salvar seu feedback.";
    }
    
}

?>