<?php

/*
    receive :
        {
            'name': ...,    // the person's name who post this data
            'email': ...,   // the person's email
            'message': ...  // content
        ''}
*/

define('TO', 'example@email.com');

$to = TO;
$subject = 'Reseive email from ' . $_POST['name'];
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
