<?php session_start(); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
<title>Контакти - Food Book</title>

<meta name="keywords" content="контакти, підтримка, food book, зв'язок">
<meta name="description" content="Зв'яжіться з Food Book: питання, пропозиції або співпраця.">
<link rel="icon" type="image/x-icon" href="Food_Book__1___2_-removebg-preview.png">
<link href="index.css" rel="stylesheet">
<link href="contacts.css" rel="stylesheet">
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


<div class="container">

<h2>Зв'яжіться з нами</h2>

<p style="text-align:center; font-size:22px; color:#944e1a;">
Маєш питання або пропозицію? Напиши нам 👇
</p>

<div class="contact-page">

<form class="contact-form" action="send.php" method="POST">

<div class="form-left">
<input type="text" name="first_name" placeholder="Ім'я">
<input type="text" name="last_name" placeholder="Прізвище">
<input type="email" name="email" placeholder="Email">
<input type="tel" name="phone" placeholder="Телефон">
</div>

<div class="form-right">
<textarea name="message" placeholder="Ваше повідомлення"></textarea>
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

<div class="contact-info">

<div class="info-card">
<h3>📧 Email</h3>
<p>support@foodbook.com</p>
</div>

<div class="info-card">
<h3>📞 Телефон</h3>
<p>+380 (00) 000-00-00</p>
</div>

<div class="info-card">
<h3>📍 Адреса</h3>
<p>Україна, Одеса</p>
</div>

</div>

</div>


<footer>
<p>© 2026 Food Book. Всі права захищені. Cайт создан в учебных целях</p>

<div class="contact-img">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/960px-Telegram_2019_Logo.svg.png">
<img src="https://cdn.pixabay.com/photo/2021/06/15/12/28/tiktok-6338432_640.png">
<img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png">
</div>
</footer>

</body>
</html>