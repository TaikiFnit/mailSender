<?php

/*
    receive :
        {
            'name': ...,    // the person's name who post this data
            'email': ...,   // the person's email
            'message': ...  // content
        ''}
*/

define('TO', 'homeytouhoku@gmail.com');

$to = TO;
//$subject = 'Reseive email from ' . $_POST['name'];
$subject = "HOMEY お問い合わせフォームより";
$message = $_POST['message'];
$message .=
'

---

送信者 : ' . $_POST['name'] . '
送信者のメールアドレス : ' . $_POST['email'];

mb_language("Japanese");
mb_internal_encoding("UTF-8");

if (mb_send_mail($to, $subject, $message)) {
    // success
    echo true;
}
else {
    // faild
    echo false;
}
