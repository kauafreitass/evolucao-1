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
    <header class="header">
        <nav>
            <ul class="nav-menu">
                <li><a href="indexhtml.php">1</a></li>
                <li><a href="index.php">2</a></li>
                <li><a href="contato.php">3</a></li>
            </ul>
            <span class="nav-toggle">&#9776;</span>
        </nav>
    </header>

   
    
        <h2>Projeto evolução</h2>
        <h2>HUMANAS</h2>
        <p>"A inspiração é como o vento: invisível, mas sempre em movimento."</p>
    </section>


    <div class="container">
        <div class="image">
            <img src="psicologia.png" alt="Exemplo 1">
        </div>
        <div class="caption">
            <h2>Legenda à Direita</h2>
            <p>Esta é uma legenda descritiva para a imagem à esquerda. Pode conter informações detalhadas sobre o conteúdo.</p>
        </div>
    </div>

    <div class="container reverse">
        <div class="caption">
            <h2>Legenda à Esquerda</h2>
            <p>Esta é uma legenda descritiva para a imagem à direita. Ideal para layouts alternados.</p>
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
