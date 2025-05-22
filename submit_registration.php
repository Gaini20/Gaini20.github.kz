<?php
// Тіркелу деректерін өңдеу
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $class = $_POST['class'];

    // Мәліметтерді өңдеу және сақтау
    // Әдетте дерекқорға қосу керек
    echo "Тіркелу сәтті аяқталды!";
}
?>
