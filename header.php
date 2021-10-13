<?php 
    $text = get_field('text'); ?>


?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Gościna na Wierchu"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Jest to strona poświęcona obiektowi Gościna na Wierchu czyli obiektowi położonemu w Murzasichlu u stóp Tatr." />
    <meta name="description" content="Zapraszamy do Gościny na Wierchu położonej w Murzasichlu u stóp Tatr. Widok na tatry oraz czyste i schludne noclegi. Zapraszamy!">
    <meta property="og:image" content="Zdjęcie strony" />
    <link rel="icon" type="image/png" href="img/favicon.ico"/>
    <link rel="apple-touch-icon" href="img/favicon.ico"/>
    <meta property="og:url" content="goscinanawierchu.pl"/>
    <link rel=”canonical” href=”https://goscinanawierchu.vercel.app/”/>
    <title><?php echo $text['tytul_strony']; ?></title>
    <!-- Fonts -->
    <link rel='stylesheet' id='google-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%7CAlata%7CRoboto+Condensed%7COswald%7CRoboto+Slab&#038;display=swap&#038;ver=5.5' type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Italianno&family=Montserrat&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <!-- Styles -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/normalize.css">
    <!-- MyStyles -->
    <link rel="stylesheet" href="styles/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <!-- Menu -->
    <nav id="menu" >
        <a href="" class="logo">
          <img src="<?php echo $photo['menu_glowne']; ?>" alt="LOGO">
        </a>
        <button class="menu-toggler">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-menu">
            <a href="#home">Strona główna</a>
            <a href="#main">Okolice i atrakcje</a>
            <a href="#gallery">Galeria</a>
            <a href="#contact">Kontakt</a>
        </div>
    </nav>
    <!-- Menu -->
    <!-- Header -->
    <header  id="home">
      <h1><?php echo $text['menu_glowne_tekst1']; ?></h1>
      <h2><?php echo $text['menu_glowne_tekst2']; ?></h3>
      <a href="#main"><i style="animation: bounce 1.5s infinite;" class="fas fa-chevron-double-down fa-1.5x"></i></a>
    </header>