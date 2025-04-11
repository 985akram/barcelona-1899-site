<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    // أرسل الإيميل لك
    $to = "kingdomg226@gmail.com";  // غيره إلى بريدك
    $subject = "تسجيل جديد في موقع برشلونة";
    $message = "تم تسجيل مستخدم جديد:\n\nالاسم: $name\nالبريد الإلكتروني: $email";
    $headers = "From: no-reply@yourdomain.com";

    mail($to, $subject, $message, $headers);

    // توجيه المستخدم إلى صفحة المحتوى الحصري
    header("Location: exclusive.html");
    exit();
}
?>
