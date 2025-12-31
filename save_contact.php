<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Form not submitted using POST");
}

/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$company = $_POST['company'] ?? '';
$message = $_POST['message'] ?? '';

if ($name === '' || $email === '' || $message === '') {
    die("Required fields missing");
}

try {
    $stmt = $pdo->prepare(
        "INSERT INTO contacts (name, email, company, message)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->execute([$name, $email, $company, $message]);

    echo "<h3>✅ DATA INSERTED SUCCESSFULLY</h3>";

} catch (PDOException $e) {
    die("Insert error: " . $e->getMessage());
}
?>
