<?php
$infoSection = [
    [
        "number" => "01",
        "title" => "Trabalho em Grupo",
        "description" => "Tenho facilidade em colaborar com equipes, promovendo uma comunicação eficiente e contribuindo para o sucesso coletivo. Valorizo a troca de ideias e acredito que a união de diferentes perspectivas gera resultados mais inovadores."
    ],
    [
        "number" => "02",
        "title" => "Liderança",
        "description" => "Sou um líder motivador e estratégico, capaz de identificar os pontos fortes de cada membro da equipe e utilizá-los de forma eficaz. Priorizo um ambiente de respeito e incentivo, sempre buscando extrair o melhor de cada pessoa."
    ],
    [
        "number" => "03",
        "title" => "Estudo Contínuo",
        "description" => "Dedico-me constantemente a aprender e expandir meu conhecimento. Minha rotina de estudos é estruturada, e estou sempre acompanhando tendências e boas práticas do setor de tecnologia."
    ],
    [
        "number" => "04",
        "title" => "Habilidades Técnicas",
        "description" => "Atualmente, estou aprimorando minhas habilidades em HTML, CSS, PHP e JavaScript. Tenho como objetivo dominar essas tecnologias para criar soluções inovadoras e funcionais que atendam às necessidades do mercado."
    ],
    [
        "number" => "05",
        "title" => "Resiliência",
        "description" => "Tenho a capacidade de lidar com desafios e mudanças, mantendo o foco e a motivação para alcançar objetivos. Aprendo com os erros e uso as experiências como oportunidades de crescimento."
    ],
    [
        "number" => "06",
        "title" => "Organização",
        "description" => "Sou uma pessoa organizada, que sabe planejar e priorizar tarefas de forma eficiente. Isso me permite gerenciar prazos e entregas com qualidade, mesmo em situações de alta demanda."
    ]
];

$redesocial = [
    [
        "icon" => "img/insta.png",
        "link" => "https://www.instagram.com/palmieri_012/",
    ],
    [
        "icon" => "img/whats.png",
        "link" => "https://web.whatsapp.com",
    ],
    [
        "icon" => "img/linkedin.png",
        "link" => "https://www.linkedin.com/in/gabriel-palmieri-53a367338/"
    ],
    [
        "icon" => "img/git.png",
        "link" => "https://github.com/palmitex"
    ]
];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navvv">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="meusProjetos.php">Meus Projetos</a>
                        </li>
                        <li class="nav-item dropdown" id="navbarDropdownMenuLink">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Português(BR) <img src="img/brasil.png" alt="">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="indexen.php">Inglês(US) <img src="img/usa.png" alt=""></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="main">
            <section class="port">
                <div class="video-container">
                    <video class="background-video" autoplay muted loop>
                        <source src="mp4/matrix.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="foto">
                    <img src="img/foto.jpeg" alt="" class="img-fluid">
                    <h1>Gabriel Palmieri</h1>
                </div>
                <h2>Desenvolver sistemas é criar soluções tecnológicas eficazes que impulsionam inovação e resultados.</h2>
                <h3>Desenvolvendo sites com foco e evolução contínua</h3>
            </section>
            <div class="competencias">
                <h1>Competências</h1>
            </div>
            <section class="info-section">
                <?php
                foreach ($infoSection as $info) {
                    echo '<div class="info-block">';
                    echo '<h2>' . $info['number'] . '</h2>';
                    echo '<h3>' . $info['title'] . '</h3>';
                    echo '<p>' . $info['description'] . '</p>';
                    echo '</div>';
                }
                ?>
            </section>
        </div>

        <div class="corfundo">
            <div class="container">
                <div class="content">
                    <div class="image-container">

                    </div>
                    <div class="texto">
                        <h1>
                            Formação Acadêmica
                        </h1>
                        <p>
                            Desenvolvimento de Sistemas, SENAI Armando de Arruda Pereira - Cursando, conclusão em Dezembro/2025
                        </p>
                        <h1>
                            Quem sou eu?
                        </h1>
                        <p>
                            Olá me chamo Gabriel Palmieri, atualmente sou estudande de desenvolvimento de sistemas e busco atuar na área de programação como desenvolverdor full stack, aplicando minhas habilidades em desenvolvimento de soluções criativas e eficientes, enquanto continuo aprimorando meus conhecimentos para contribuir com projetos inovadores e de impacto.
                        </p>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-rocket">
                    </i>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>Telefone: (11) 96413-9579</p>
        <p>Email: gabriel1208.palmieri@gmail.com</p>
        <div class="redes">
        <?php
        foreach ($redesocial as $redes) {
            echo '

    
                    <a href="' . $redes['link'] . '" target="_blank">
                        <img src="' . $redes['icon'] . '" alt="' . $redes['link'] . '">
                     </a>

                ';
        }
        ?>
       </div>  
       <p>2025 ©  | Desenvolvido por Gabriel Palmieri</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>