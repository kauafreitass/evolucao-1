<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legenda ao Lado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="section home" id="home">

        <h2>Projeto evolução</h2>
        <h2>HUMANAS</h2>
        <p>"Até os momentos de silêncio carregam a força de uma obra inacabada."</p>
    </section>


    <div class="container">
        <div class="image">
            <img src="psicologia.png" alt="Exemplo 1">
        </div>
        <div class="caption">
            <h2>Primeiro Projeto</h2>
            <p>Neste primeiro projeto apresentado, escolhi o tema de Psicologia. No processo, me recordo de não ter
                muitas ideas para opções de cores e havia escolhido algo simples que atualmente não escolheria; e a
                estilização por inteira, o layout em branco e pequeno, hoje vejo que não faz parte do meu conceito de
                personalizar meus projetos. Havia muitas duvidas sobre paletas de cores, utilização de imagens,
                estrutura e organização das informações coletadas.</p>
        </div>
    </div>

    <div class="container reverse">
        <div class="caption">
            <h2>Projeto Atual</h2>
            <p>Neste projeto, foi sobre uma personalidade de nossa escolha. Neste atual, aproveitei melhor a personalização,
                utilizei um pouco de JavaScript para a animação do site, soube utilizar melhor as paletas de cores e imagem, .</p>
        </div>
        <div class="image">
            <img src="chico.png" alt="Exemplo 2">
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
</body>

</html>