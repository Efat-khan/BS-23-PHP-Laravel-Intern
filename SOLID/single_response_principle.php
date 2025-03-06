<!-- Single Responsibility Principle (SRP)
Rule: A class should only have one reason to change. -->
<?php
class User {
  public function register($email, $password) {
      echo "User registered with email: $email";
  }
}

class EmailService {
  public function sendEmail($email, $subject, $message) {
      mail($email, $subject, $message);
  }
}

// Usage
$user = new User();
$emailService = new EmailService();

$user->register("admin@gmail.com", "123");
$emailService->sendEmail("admin@gmail.com", "Welcome", "Thank you!");


?>