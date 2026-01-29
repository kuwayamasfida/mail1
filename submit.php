<?php
$admin = "info@example.com";
$email = $_POST['email'];

mb_language("Japanese");
mb_internal_encoding("UTF-8");

// 管理者通知
mb_send_mail(
  $admin,
  "【社内アンケート回答】",
  "新しい回答がありました。"
);

// 回答者自動返信
mb_send_mail(
  $email,
  "ご協力ありがとうございました",
  "アンケートへのご回答、ありがとうございます。"
);

header("Location: thanks.html");
