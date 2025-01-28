<?php
$infoSection = [
    [
        "number" => "01",
        "title" => "Group Work",
        "description" => "I have ease in collaborating with teams, promoting effective communication and contributing to collective success. I value the exchange of ideas and believe that the union of different perspectives generates more innovative results."
    ],
    [
        "number" => "02",
        "title" => "Leadership",
        "description" => "I am a motivating and strategic leader, capable of identifying the strengths of each team member and utilizing them effectively. I prioritize a respectful and encouraging environment, always seeking to bring out the best in everyone."
    ],
    [
        "number" => "03",
        "title" => "Continuous Learning",
        "description" => "I dedicate myself to constantly learning and expanding my knowledge. My study routine is structured, and I am always keeping up with trends and best practices in the technology field."
    ],
    [
        "number" => "04",
        "title" => "Technical Skills",
        "description" => "Currently, I am enhancing my skills in HTML, CSS, PHP, and JavaScript. My goal is to master these technologies to create innovative and functional solutions that meet market needs."
    ],
    [
        "number" => "05",
        "title" => "Resilience",
        "description" => "I have the ability to handle challenges and changes, maintaining focus and motivation to achieve goals. I learn from mistakes and use experiences as growth opportunities."
    ],
    [
        "number" => "06",
        "title" => "Organization",
        "description" => "I am an organized person who knows how to plan and prioritize tasks efficiently. This allows me to manage deadlines and deliverables with quality, even in high-demand situations."
    ]
];
$ferramentas = [
    [
        "icon" => "img/html.png",
        "title" => "HTML"
    ],
    [
        "icon" => "img/css.png",
        "title" => "CSS"
    ],
    [
        "icon" => "img/js.png",
        "title" => "JavaScript"
    ],
    [
        "icon" => "img/php.png",
        "title" => "PHP"
    ],
    [
        "icon" => "img/cisco.png",
        "title" => "Cisco Packet Tracer"
    ],
    [
        "icon" => "img/github.png",
        "title" => "Github"
    ],
    [
        "icon" => "img/bootstrap.png",
        "title" => "Bootstrap"
    ],
    [
        "icon" => "img/linux.png",
        "title" => "Linux"
    ],
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
    <title>Portfolio - Gabriel Palmieri</title>
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
                            <a class="nav-link active" aria-current="page" href="indexen.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myprojects.php">My Projects</a>
                        </li>
                        <li class="nav-item dropdown" id="navbarDropdownMenuLinken" >
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               English(US) <img src="img/usa.png" alt="">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php">Portuguese(BR) <img src="img/brasil.png" alt=""></a></li>
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
                <h2>Developing systems is creating effective technological solutions that drive innovation and results.</h2>
                <h3>Developing websites with focus and continuous evolution</h3>
            </section>
            <div class="ferramentas">
                <h1>Tools</h1>
                <div class="ferramentas-card">
                    <?php
                    foreach ($ferramentas as $ferramenta) {
                        echo '<div class="tool">';
                        echo '<img src="' . $ferramenta['icon'] . '" alt="' . $ferramenta['title'] . '">';
                        echo '<p>' . $ferramenta['title'] . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="competencias">
                <h1>Skills</h1>
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
                    <img src="img/eu.jpeg" alt="">
                    </div>
                    <div class="texto">
                        <h1>
                            Academic Background
                        </h1>
                        <p>
                            System Development, SENAI Armando de Arruda Pereira - Ongoing, expected completion in December/2025
                        </p>
                        <h1>
                            Who am I?
                        </h1>
                        <p>
                            Hello, my name is Gabriel Palmieri. I am currently a student in system development and I aim to work as a full stack developer, applying my skills in developing creative and efficient solutions while continually improving my knowledge to contribute to innovative and impactful projects.
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
    <script src="js/animation.js"></script>
</body>
</html>
