<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibe feedbacks</title>
    <style>
        .card{
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

   <h1>Feedbacks Recebidos</h1>

<?php
    $file = 'feedbacks.json';
    if(file_exists($file)) {
    $current_data = file_get_contents($file);
    $feedbacks = json_decode($current_data,true);

    if(!empty($feedbacks)) {
       foreach($feedbacks as $feedback) {
        echo '<div class="card">';
        echo '<h3>'.htmlspecialchars($feedback["nota"]).'</h3>';
        echo '<p><strong>Nome: </strong>'.htmlspecialchars($feedback["nome_usuario"]).'</p>';
        echo '<p><strong>Email: </strong>'.htmlspecialchars($feedback["email_usuario"]). '</p>';
        echo '<p>'.htmlspecialchars($feedback["texto_usuario"]). '</p>';
        echo '</div>';
       }
    } else {
        echo '<p>Nenhum feedback recebido</p>';
    }

} else {
    echo '<p>Nenhum feedback recebido</p>';
}


?>
    
</body>
</html>