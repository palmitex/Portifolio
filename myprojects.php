<?php

$data = [
    [
        "title" => "BMW Site",
        "text" => "This was my first project in HTML and CSS, inspired by the BMW brand, where I developed the layout of a car sales website. The page includes a navigation menu, featured banner, photo gallery, contact form, and footer with information and social media, focusing on an attractive and functional interface. The project was done individually.",
        "image" => "img/Captura de tela_24-1-2025_135248_palmitex.github.io.jpeg",
        "link" => "https://palmitex.github.io/siteBMW/"
    ],
    [
        "title" => "Rimac",
        "text" => "This project, done in a trio, was a website about Rimac, highlighting its history, iconic models, and innovation in the electric supercar industry. Developed with HTML, CSS, and JavaScript, the website includes a contact page and offers intuitive and efficient navigation. The site covers different aspects of Rimac, including the company's history, iconic car models, and detailed information about its innovation journey.",
        "image" => "img/Captura de tela_24-1-2025_13581_guimenn.github.io.jpeg",
        "link" => "https://guimenn.github.io/Rimac/"
    ],
    [
        "title" => "NeoBank",
        "text" => "This project, developed in a trio, aimed to create an ATM simulator, and we decided to create the NeoBank website, a modern bank website. The site was designed to simulate banking operations, providing a functional and intuitive experience for users. We used HTML and CSS to structure and style the site, PHP to manage backend functionalities, and JavaScript to add interactivity and enhance usability.",
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
    <title>Projects</title>
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
                            <a class="nav-link active" aria-current="page" href="indexen.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myprojects.php">My Projects</a>
                        </li>
                        <li class="nav-item dropdown" id="navbarDropdownMenuLinken">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                English(US) <img src="img/usa.png" alt="">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="meusProjetos.php">Portuguese(BR) <img src="img/brasil.png" alt=""></a></li>
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
        // Only the last card has the download button
        echo '<button class="button"> 
                <a href="' . $item['link'] . '" download target="_blank">Download file</a>
              </button>';
    } else {
        // Other cards have the "View more" button
        echo '<button class="button"> 
                <a href="' . $item['link'] . '" target="_blank">View more</a>
              </button>';
    }
    
    echo '</div>';
    echo '<div class="cards">
            <figure class="card ' . $cardClass . '">
                <img src="' . $item['image'] . '" alt=""/>
            </figure>
          </div>';
    echo '</section>';
    }
    ?>

    </main>
    <footer>
        <p>Phone: (11) 96413-9579</p>
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
       <p>2025 ©  | Developed by Gabriel Palmieri</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>