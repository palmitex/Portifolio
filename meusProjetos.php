<?php
  // Array com os dados

$data = [
    [
        "title" => "Site Bmw",
        "text" => "Este foi meu primeiro projeto em HTML e CSS, inspirado na marca BMW, no qual desenvolvi o layout de um site de vendas de automóveis. A página inclui um menu de navegação, banner de destaque, galeria de fotos, formulário de contato e rodapé com informações e redes sociais, focando em uma interface atraente e funcional. O projeto foi feito individuamente.",
        "image" => "img/Captura de tela_24-1-2025_135248_palmitex.github.io.jpeg",
        "link" => "https://palmitex.github.io/siteBMW/"
    ],
    [
        "title" => "Rimac",
        "text" => "Este projeto, realizado em trio, foi um site sobre a Rimac, destacando sua história, modelos icônicos e inovação no setor de supercarros elétricos. Desenvolvido com HTML, CSS e JavaScript, o site inclui uma página de contato e oferece uma navegação intuitiva e eficiente. O site aborda diferentes aspectos da Rimac, incluindo a história da empresa, os modelos de carros mais icônicos, e informações detalhadas sobre sua trajetória de inovação. ",
        "image" => "img/Captura de tela_24-1-2025_13581_guimenn.github.io.jpeg",
        "link" => "https://guimenn.github.io/Rimac/"
    ],
    [
        "title" => "NeoBank",
        "text" => "Este projeto, desenvolvido em trio, teve como objetivo criar um simulador de caixa eletrônico e foi decidico criar o site Neobank, um site de banco moderno. O site foi projetado para simular operações bancárias, proporcionando uma experiência funcional e intuitiva para os usuários. Utilizamos HTML e CSS para estruturar e estilizar o site, PHP para gerenciar as funcionalidades do back-end e JavaScript para adicionar interatividade e aprimorar a usabilidade. ",
        "image" => "img/Captura de tela_24-1-2025_13557_localhost.jpeg",
        "link" => "neoBank.zip"
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/projeto.css">
    <link rel="stylesheet" href="css/navbarresponse.css">
    <link rel="stylesheet" href="css/projetomobile.css">
    <link rel="shortcut icon" href="img/gp.png" type="image/x-icon">
    <title>Projetos</title>
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
                                <li><a class="dropdown-item" href="myprojects.php">Inglês <img src="img/usa.png" alt=""></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        
    <?php 
    foreach ($data as $index => $item) {
    $flexDirection = $index % 2 === 0 ? 'row' : 'row-reverse'; 
    $cardClass = $index % 2 === 0 ? 'card-left' : 'card-right'; 

    echo '<section class="section" style="flex-direction: ' . $flexDirection . ';">';
    echo '<div class="text">';
    echo '<h3>' . htmlspecialchars($item['title']) . '</h3>';
    echo '<p>' . htmlspecialchars($item['text']) . '</p>';
    
    if ($index === count($data) - 1) {
        echo '<button class="button"> 
                <a href="' . $item['link'] . '" download target="_blank">Baixar arquivo</a>
              </button>';
    } else {
        echo '<button class="button"> 
                <a href="' . $item['link'] . '" target="_blank">Ver mais</a>
              </button>';
    }
    
    echo '</div>';
    echo '<div class="cards">
            <figure class="card ' . $cardClass . '">
                <img src="' . $item['image'] . '" alt="">
            </figure>
          </div>';
    echo '</section>';
    }
    ?>

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
</body>
</html>