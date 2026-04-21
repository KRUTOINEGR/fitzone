<?php session_start(); ?>
<!DOCTYPE html>	
<html>
<head>
<title>Food Book</title>
<meta name="keywords" content="рецепты, рецепты блюд, простые рецепты, вкусные рецепты, домашняя кухня, рецепты на каждый день, кулинарные рецепты, быстрые рецепты">
<meta name="description" content="Лучшие рецепты на каждый день: быстрые, вкусные и простые блюда с пошаговыми инструкциями. Готовьте дома легко и с удовольствием.">
<meta name="author" content="Хайзенбургер">
<link rel="icon" type="image/x-icon" href="Food_Book__1___2_-removebg-preview.png">
<link href="index.css" rel="stylesheet">

</head>
<body>
<header class="header">
<div class="header-container">
<div class="logo">
    <img src="Food_Book__1___2_-removebg-preview.png">
</div>
<nav class="menu">
<a href="index.php">Головна</a>	
<div class="dropdown">
<a href="category.html">Категорії страв</a>
<div class="dropdown-content">
<a href="uplvl.html">Високорівневі страви</a>
<a href="desert.html">Десерти</a>
<a href="homekit.html">Домашня кухня</a>
<a href="drink.html">Напої</a>
</div>
</div>
<a href="about.html">Про нас</a>
<a href="contacts.php">Контакти</a>
<a href="reviews.html">Відгуки</a>
</nav>
</div>
</header>
<div class="anim">
<div class="container">
<div class="hero">
 <div class="overlay"></div>
 <div class="slider">
   <div class="slides">
    <img class="hero-img active" src="asda.png" alt="img">
    <img class="hero-img" src="https://images.unsplash.com/photo-1551218808-94e220e084d2" alt="img">
    <img class="hero-img" src="https://img.povar.ru/mobile/5f/56/49/02/ovoshnaya_picca-795952.jpg" alt="img">
</div>
</div>
<div class="hero-text">

<h1>Смачні страви без зайвих зусиль</h1>
<p>Прості рецепти з доступних інгредієнтів<br>Готуй легко — навіть без досвіду</p>
 </div>
 <div class="hero-dots">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
 </div>
 
<h2>Рецепти</h2>

<div class="card">
<div class="text">
    <h3>Домашні страви</h3>
    <p>Великий вибiр страв: перші та другі страви, салати, гарніри, закуски, та інші</p>
</div>
<img src="card1.png" alt="img">
</div>

<div class="card">

<img src="card2.png" alt="img">
<div class="text">
    <h3>Десерти</h3>
    <p>Торти та тістечка,пироги та кекси, морозиво та сорбети, пудинги та желе, фрукти та ягоди, та інші</p>
</div>
</div>

     <h2>Переваги</h2>
<div class="banner-container">
    <img src="https://images.euronews.com/articles/stories/09/55/25/15/1440x810_cmsv2_6acc031a-d813-55fd-a9d8-9f989c1a10c7-9552515.jpg" alt="img"> 

    <div class="banner-content">
        <h1>Різноманітність<br>рецептів</h1>
        <p>Великий вибір страв: закуски,<br> основні страви, напої та багато<br> іншого.</p>
        
        <h1 style="margin-top: 40px;">Зручний пошук</h1>
        <p>Легко знайти потрібний<br> рецепт за категоріями</p>
        
        <button>Почати готувати</button>
    </div>
</div>
   <h2>Зв'язатися з нами</h2>
<div class="contact-section">
    
    <form class="contact-form" id="bbbb" action="send2.php" method="POST">
        <div class="form-left">
            <input type="text"  name="first_name" placeholder="Ім'я">
            <input type="text" name="last_name" placeholder="Прізвище">
            <input type="tel" name="phone" placeholder="Телефон">
        </div>
        <div class="form-right">
            <textarea name="message" placeholder="Повідомлення"></textarea>
        </div>
    </div>
    <button type="submit" class="submit-btn">Надіслати</button>
</form>
<?php if (isset($_SESSION['success'])): ?>

    <div class="message success">
        <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="message error">
        <?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        ?>
    </div>
<?php endif; ?>
</div>
</div>
<footer>
    <p>© 2026 Food Book. Всі права захищені. Cайт создан в учебных целях</p>

    <div class="contact-img">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/960px-Telegram_2019_Logo.svg.png" alt="img">
        <img src="https://cdn.pixabay.com/photo/2021/06/15/12/28/tiktok-6338432_640.png" alt="img">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="img">
    </div>
</footer>

</body>
</html>