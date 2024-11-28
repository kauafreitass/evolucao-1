<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legenda ao Lado</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    /* Estilização do botão de voltar ao topo */
    .scroll-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #05632ccb;
        /* Cor principal do seu site */
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
    }

    .scroll-top.visible {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
    }

    .scroll-top:hover {
        background-color: #05632c;
        /* Cor ligeiramente mais escura para o hover */
    }

    /* Estilização do menu responsivo */
    .nav-toggle {
        display: none;
        /* Esconde o botão no desktop */
        background-color: #05632ccb;
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-menu li {
        margin-right: 15px;
    }

    .nav-menu a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        transition: color 0.3s;
    }

    .nav-menu a:hover {
        color: #05632ccb;
    }

    /* Estilos para dispositivos móveis */
    @media (max-width: 768px) {
        .nav-toggle {
            display: block;
            /* Mostra o botão de alternância no mobile */
        }

        .nav-menu {
            display: none;
            /* Esconde o menu inicialmente */
            flex-direction: column;
            background-color: white;
            position: absolute;
            top: 60px;
            /* Alinha abaixo do cabeçalho */
            right: 0;
            left: 0;
            padding: 20px;
            border-top: 2px solid #05632ccb;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-menu.active {
            display: flex;
            /* Exibe o menu ao clicar no botão */
        }

        .nav-menu li {
            margin-bottom: 15px;
        }

        .nav-menu a {
            color: #333;
            text-align: center;
        }
    }
</style>

<body>
    <section class="section home" id="home">
        <ul class="nav-menu">
            <li><a href="index.php">•Voltar para pagina incial</a></li>
            <li><a href="evolucao.html">•Evolução Pessoal</a></li>
            <li><a href="dificuldades.html">•dificuldades encontradas</a></li>
        </ul>
        <h2>Projeto evolução</h2>
        <h2>HUMANAS</h2>
        <p>"Não há nada mais verdadeiramente artístico do que amar as pessoas." – Vincent van Gogh</p>
    </section>


    <div class="container">
        <div class="image">
            <img src="img/projeto anterior.png" alt="Exemplo 1">
        </div>
        <div class="caption">
            <h2>Primeiro Projeto</h2>
            <p>Este código é um exemplo de página web desenvolvida em HTML, com o objetivo de apresentar um site
                temático sobre Direito. Ele está dividido em diferentes seções, cada uma com uma função específica para
                organizar e exibir o conteúdo,
                proporcionando uma experiência visual e funcional para os visitantes. </p>
        </div>
    </div>

    <div class="container reverse">
        <div class="caption">
            <h2>Projeto Atual</h2>
            <p>
                Este código HTML representa uma página web dedicada à atriz e cantora Zendaya. Ele está bem estruturado,
                dividido em seções que destacam diferentes aspectos de sua vida e carreira, com uma combinação de texto,
                imagens, links e vídeos.</p>
        </div>
        <div class="image">
            <img src="img/projeto atual.PNG" alt="Exemplo 2">
        </div>
    </div>


    <!-- Botão de Voltar ao Topo -->
    <button class="scroll-top">&#8593;</button>

    <script>
        // JavaScript para o botão de voltar ao topo
        const scrollTopBtn = document.querySelector('.scroll-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // JavaScript para o menu responsivo
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>

<footer class="rodape2">
        <div>
            <p>© 2024 Raissa Cruz. Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>