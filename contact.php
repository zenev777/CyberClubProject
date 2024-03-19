<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Контактна форма</title>
</head>

<body>
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
                    <li>Home</li>
                </a>
                <a href="FAQ.php">
                    <li>FAQ</li>
                </a>
                <a href="contact.php">
                    <li>Contacts</li>
                </a>
                </div>
                
            </ul>
        </nav>
    </header>

    <section class="home-page">
        <article class="welcome-msg">
            <h1>Свържете се с нас</h1>
        </article>
        <article class="contact-form">
            <form>
            <label for="fullName">Име и фамилия:</label><br>
            <input type="text" id="fullName" name="fullName" placeholder="Вашите две имена" class="contact-inputs"><br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" class="contact-inputs" placeholder="Вашия Email адрес"><br>
            <label for="subject">Относно:</label><br>
            <input type="text" id="subject" name="subject" class="contact-inputs" placeholder="Темата на съобщението"><br>
            <label for="message">Напишете съобщението си и ние в най-кратък период ще Ви отговорим:</label><br>
            <textarea name="message" class="contact-inputs" placeholder="Напишете съобщението си тук"></textarea><br>
            <button type="button" onclick="alert('Hello World!')">Изпрати <img src="images/icons8-arrow-24.png"></button> 
            </form>
        </article>
    </section>
</body>

</html>