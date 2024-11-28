<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/2dd8912535.js" crossorigin="anonymous"></script>
    <title>Feedback</title>
</head>
<body>

    <nav align="center"> 
        <header class="menu">       
            <ul>
                <!-- ícone -->
                <li class="icon"><i class="fa-solid fa-magnifying-glass" style="font-size: 15px;"></i></li>

                <!--  -->
                <li></i><a href="index.html">INÍCIO</a></li>

                <li><a href="sobre.html">SOBRE</a></li>

                <li><a href="profissao.html">PROFISSÃO</a></li>

                <li><a href="atuacao.html">ATUAÇÃO</a></li>

                <li><a href="empresas.html"> EMPRESAS ENV.</a></li>

                <li><a href="contato.html">CONTATO</a></li>

                <li><a href="materiais.html">MATERIAIS</a></li>
    
                <li class="icon"><a href="https://www.instagram.com/im_biah007/?igsh=eW8xbDV3OHhzMnZo" style="font-size: 20px;"><i class="fa-brands fa-instagram" style="font-size: 20px;"></a></i></li>
    
                <li class="icon"><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" style="font-size: 20px;"></i></a></li>
    
                <li class="icon"><a href="https://x.com/?lang=pt-br"><i class="fa-brands fa-twitter" style="font-size: 20px;"></i></a></li>
            </ul>
        </header>
     </nav>

     <main class="flex-container3">
            <div class="flex-container">
            <div class="flex-item3">
            <div class="flex-item-titulo2"></div>
    <?php 

if($_SERVER ["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars ($_POST ["name"]);
    $email = htmlspecialchars ($_POST ["email"]);
    $mensagem = htmlspecialchars ($_POST ["mensagem"]);

    $data = array(
        "name" => $name,
        "email" => $email,
        "mensagem" => $mensagem
    );

    $file = 'feedbacks.json'; //verificação se esse arquivo existe;

    if(file_exists($file)) {  //se existir - pegar todo conteúdo;
        $current_data = file_get_contents($file);
        $array_data = json_decode($current_data, true); // decodificação - conversão do conteúdo;
        $array_data[] = $data; //array multidimensional - arrays dentro de um array;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT); //inclusão - junta a informação nova;
    } else {
        $array_data = array();
        $array_data[] = $data;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    }

    echo'<align="center">';
    if(file_put_contents($file, $final_data)) {
        echo "Feedback enviado com sucesso!";
        echo '<a href="exibe_feedbacks.php"> Ver feedbacks';
    } else {
        echo "Erro ao enviar seu feedback!!";
    }
}
?>

</div>
    </main>
    </div>

</body>
</html>

