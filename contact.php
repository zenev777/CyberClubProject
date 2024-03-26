<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Контактна форма</title>
</head>

<body class="contact-page">
    <header>
        <nav>
            <ul>
                <div class="logo-img">
                    <a href="">
                        <li><img src="images/TRU-vector.png" alt=""></li>
                    </a>
                </div>

                <div class="nav-btns">
                    <a href="index.php">
                        <li>Начало</li>
                    </a>
                    <a href="event.php">
                        <li>Събития</li>
                    </a>
                    <a href="team.php">
                        <li>Отборът ни</li>
                    </a>
                    <a href="contact.php">
                        <li>Контакти</li>
                    </a>
                </div>
                <div class="user">
                    <ul class="user-icon">

                        <li><a href="#" class="icn"><i class="fa-solid fa-user icon-img"></i></a>
                            <ul>
                                <li><a href="#">Създай</a></li>
                                <li><a href="#">Моите събития</a></li>
                                <li><a href="#">Излез</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </ul>
        </nav>
    </header>

    <section class="contact-section">
        <article class="contact-article">
            <h2 class="h1-contacts">Свържете се с нас</h2>
            <h2>Контакти</h2>
            <div class=two-articles>
                <article class="contact-form-article">
                    <form class="contact-form">
                        <div>
                            <label for="fullName">Име и фамилия:</label><br>
                            <input type="text" id="fullName" name="fullName" placeholder="Вашите две имена" class="contact-inputs"><br>
                        </div>
                        <div>
                            <label for="email">Email</label><br>
                            <input type="text" id="email" name="email" class="contact-inputs" pattern="" placeholder="Вашия Email адрес"><br>
                        </div>
                        <div>
                            <label for="phoneNumber">Тел. номер</label><br>
                            <input type="text" id="phoneNumber" name="phoneNumber" class="contact-inputs" pattern="" placeholder="Вашия телефонен номер"><br>
                        </div>
                        <div>
                            <label for="subject">Относно:</label><br>
                            <textarea id="message" name="message" rows="4" placeholder="Напиши съобщение..."></textarea>
                        </div>
                        <div>
                            <button type="button" id="SubmitBtn" onclick="alert('Hello World!')">Изпрати</button>
                        </div>
                    </form>
                </article>
                <article class="contact-text-article">
                    <div class="contacts-div">
                        <div class="contact-1">
                            <h4>E-mail:</h4>
                            <p>example@mail.bg</p>
                            <h4>Телефон:</h4>
                            <p>0888832823</p>
                        </div>
                        <div class="contact-2">
                            <h4>Адрес:</h4>
                            <p>Студентски град, 6000 Стара Загора</p>
                        </div>

                    </div>
                    <div class="map-card">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.2362964432277!2d25.569884411254638!3d42.401413032368374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a86a6ed8f009bd%3A0x9b28a6a11c26f997!2z0KLRgNCw0LrQuNC50YHQutC4INGD0L3QuNCy0LXRgNGB0LjRgtC10YI!5e0!3m2!1sbg!2sbg!4v1711394342720!5m2!1sbg!2sbg" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </article>
            </div>
        </article>
    </section>




    <!-- Footer -->
    <footer>
        <div class="site-footer">
            <div class="logo-img">
                <img src="images/TRU-vector.png" alt="">
            </div>

            <div class="footer-btns">
                <h2>Бърз достъп</h2>
                <a href="index.php">
                    <p>Начало</p>
                </a>
                <a href="event.php">
                    <p>Събития</p>
                </a>
                <a href="team.php">
                    <p>Отборът ни</p>
                </a>
                <a href="contact.php">
                    <p>Контакти</p>
                </a>
            </div>

            <div class="footer-contacts">
                <h2>Контакти</h2>
                <h4>E-mail:</h4>
                <p>example@mail.bg</p>
                <h4>Телефон:</h4>
                <p>0888832823</p>
                <h4>Адрес:</h4>
                <p>Студентски град, 6000 Стара Загора</p>
            </div>
        </div>

        <div class="copy-right-sec">
            <p>&copy; 2024 All rights reserved.</p>
        </div>
    </footer>
</body>

</html>