<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $class = $_POST['class'];

    // Мәліметтерді өңдеу және сақтау
    // Мысалы, дерекқорға қосу
    // Бұл жерде парольді қауіпсіз сақтау үшін шифрлау қажет

    echo "Тіркелу сәтті аяқталды!";
}
?>
<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тіркелу</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="container">
            <h1>Тіркелу</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Басты бет</a></li>
                    <li><a href="login.html">Кіру</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="register">
        <div class="container">
            <h2>Тіркелу формасы</h2>
            <form action="register.php" method="POST">
                <label for="username">Логин:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Құпиясөз:</label>
                <input type="password" id="password" name="password" required>

                <label for="class">Сынып:</label>
                <input type="number" id="class" name="class" required>

                <button type="submit">Тіркелу</button>
            </form>
        </div>
    </section>

</body>
</html>
