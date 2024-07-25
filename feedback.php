<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body> 
<header>
 <div class="top">
 <h1 style="font-size: 60px">Bloom&Go</h1>
</div>
</header>

<div class="menu1">
    <ul>
        <h2><li><a href="index.html" target="_blank">Вернуться на главную</a></li></h2>
    </ul>
</div>

<main>
	<div class="inf">
    <h2><i>ВАШ ПРОФИЛЬ:</i></h2>
    <form name="form1" method="post" action="test.php">
        <h3><p>Имя: <input type="text" name="sirname"></p></h3>
        <h3><p>Ваш Email: <input type="text" name="email"></p></h3>
        <h3><p>Ваш адрес: <input type="text" name="address"></p></h3>
        <h3><p>Сообщение: <textarea name="message"></textarea></p></h3>
        <p><input type="submit" name="send" value="Отправить"></p>
    </form>
	<?php
        /* Подключаемся к базе данных */
        $link = mysqli_connect("localhost", "root", "");
        mysqli_select_db($link, "POLI");
        
        /* Выбираем данные */
        $sql="SELECT name, email,address, message FROM Pol";
        $result=mysqli_query($link, $sql);
        
        while ($line=mysqli_fetch_row($result)) {
        echo "<b>Имя:</b>".$line[0]."<br>";
        echo "<b>Email:</b>".$line[1]."<br>";
		/*echo "<b>Email:</b>".$line[1]."<br>";*/
        echo "<b>Сообщение:</b>".$line[2]."<br><br>";
        }
        ?>
	</div>
    
    <div class="info-block">
        <h2>История заказов:</h2>
        <p>Здесь будут отображаться ваши последние заказы</p>
        <button type="button" onclick="window.location.href='order_history.html'">Подробнее</button>
    </div>

    <div class="testimonials">
        <h2>Отзывы клиентов</h2>
        <div class="testimonials-slider">
            <div class="testimonial">
                <p>"Заказывала букет для мамы на день рождения. Доставили вовремя, цветы свежие и красивые. Мама была очень рада!" - Анна</p>
            </div>
            <div class="testimonial">
                <p>"Отличный сервис! Заказывал цветы для девушки, доставка была очень быстрая, цветы свежие и ароматные. Спасибо!" - Сергей</p>
            </div>
            <div class="testimonial">
                <p>"Рекомендую Bloom&Go всем, кто хочет порадовать близких красивыми цветами. Отличный выбор, доступные цены, качественная доставка!" - Елена</p>
            </div>
        </div>
    </div>
</main>


<div class="profile">
    <button type="button">Изменить профиль</button>
    <button type="button">Помощь</button>
</div>


</body>
</html>