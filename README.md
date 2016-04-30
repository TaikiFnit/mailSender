# mailSender
SimpleなPHPによるmail送信CGI.

## Discription
このシステムは、POSTされたデータを指定されたメールに転送するPHPプログラムです。

## 動作条件
* Apache 2.x
* PHP 5以上

## How to use
1. 転送したいmail address をdefineする.
2. Apache等のweb serverにput.


## 通信仕様

### POST /mailSender.php
以下のフォーマットでPHPファイルにPOSTすると、設定したメールアドレスにPOSTした内容がメールが送信される。


#### Json Data format
     {
         "name":"送信者の名前",
         "email":"送信者のemail",
         "message":"メール本文"
     }
 
#### Response
true or false


## Author
Taiki Fnit Watanabe (http://github.com/TaikiFnit)

## LICENCE
MIT
