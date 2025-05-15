<?php
// Simulim: Marrim të dhënat nga forma
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  // Opsionale: regjistro/log ose dërgo me mail lokal
  // file_put_contents("form-log.txt", "$name, $email, $message\n", FILE_APPEND);

  // Ridirigjo për feedback
  header("Location: thank-you.php");
  exit();
}
?>
