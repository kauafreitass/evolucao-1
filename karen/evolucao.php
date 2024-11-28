<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho de Direito - Karen</title>
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
        <h2>Projeto evolução</h2>
        <h2>☸ HUMANAS ☸</h2>
        <p>"Até os momentos de silêncio carregam a força de uma obra inacabada."</p>
    </section>
<br><br><br>

    <div class="container">
        <div class="image">
            <img src="img/Captura de tela 2024-11-25 085242.png" alt="Exemplo 1">
        </div>
        <div class="caption">
            <h2>Primeiro Projeto</h2>
            
            <p>Neste primeiro projeto apresentado, escolhi o tema de Direito. No processo, não havia muita facilidade de harmonizar as cores que 
                havia escolhido, diferentemente do último projeto; Sobre a
                estilização por inteira, o layout, hoje vejo que consigo utilizar partes para
                personalizar outros projetos. Havia muitas duvidas sobre como estilizar as imagens dentro do código, como por exemplo: centralizar, ou até mesmo deixar somente de um lado etc...
                Outro ponto que é vísível a diferença é a estrutura e organização das informações coletadas.</p>
        </div>
    </div>

    <br><br><br>

    <div class="container reverse">
        <div class="caption">
            <h2>Projeto Atual</h2>
            <p>Neste projeto, foi sobre uma personalidade de nossa escolha. Neste atual, aproveitei melhor a
                personalização, utilizei um pouco de JavaScript para a animação do site, soube utilizar melhor as paletas de cores e
                imagem, .</p>
        </div>
        <div class="image">
            <img src="img/Captura de tela 2024-11-28 074936.png" alt="Exemplo 2">
        </div>
    </div>
    <br>
    <br>

    <br>
    <div class="evolution-container">

        <h2>Minha Evolução - Do primeiro para o segundo semestre</h2>
        <p>
            Durante o curso, percebi que minha evolução foi uma jornada cheia de descobertas. No início,
            minha abordagem era muito básica, e insegura, com isso, eu me limitava e muitas vezes com dificuldades na escolha de cores e como iria montar a estrutura.
            Hoje, sinto que desenvolvi um olhar mais claro para os detalhes, sabendo equilibrar criatividade e
            funcionalidade. Entendi a importância de trabalhar com boas práticas de desenvolvimento juntamente à funcionalidade, e aprendi
            a organizar melhor as informações, usar imagens de forma estratégica e criar uma experiência mais rica
            e visualmente parcialmente atrativa.
        </p>
        <p>
            A cada projeto, conquistei novos conhecimentos, incluindo o uso de linguagens como HTML e CSS, além de
            explorar a integração com bancos de dados. Esse aprendizado me deu confiança para enfrentar
            desafios maiores, construir sites maiores, trzendo uma transformaçâo das ideias em realidade.
        </p>
    </div>

    <footer class="vangogh-footer-3">
        <div class="footer-content">
            <h2>Karen Beatriz Rodrigues Santana</h2>
            <p>"A evolução de um projeto no campo do direito é a caminhada incessante entre a busca pelo saber e a prática da justiça, onde cada passo reafirma a essência do equilíbrio humano entre o ideal e o real"</p>
            <br>
            <p>@dev-2024</p>
        </div>
    </footer>


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
</body>

</html>