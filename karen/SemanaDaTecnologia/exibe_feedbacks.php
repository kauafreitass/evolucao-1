<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Exibe Feedbacks</title>
    <style>
        .card{
            color: aliceblue;
            border: 1px solid #ccc;
            border-radius: 15px;
            padding: 10px;
            margin: 10px;
            box-shadow: 2px 2px 5px black;
        }

        .card h2{
            text-align: center;
        }

        .card{
            text-align: center;
        }

        .card p{
            text-align: center;
        }
    </style>

</head>
<body>
    
        <div class="card">
    <h2>Feedbacks Recebidos</h2>

    <?php

        $file = 'feedbacks.json';
        if(file_exists($file)) {
            $current_data = file_get_contents($file);
            $feedbacks = json_decode($current_data, true);

            echo '<br>';
        if(!empty($feedbacks)){
            foreach($feedbacks as $feedback) {
                echo '<br>';
                echo '<div class="card_feedback">';
                echo '<h3>' .htmlspecialchars($feedback["name"]) . '</h3>';

                echo '<h3><strong>Email: </strong>' . htmlspecialchars($feedback["email"]) . '</h3>';
                echo '<h3>' .htmlspecialchars($feedback["mensagem"]) . '</h3>';
                echo '<br>';
                echo '<hr>';
                echo '</div>';
                } 
            } else {
                echo '<p>Nenhum feedback recebido.</p>';
            }
        } else {
            echo '<p>Nenhum feedback recebido.</p>';
        }
?>
</div>
</body>
</html>