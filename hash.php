<?php

$pw = password_hash('test1', PASSWORD_DEFAULT); //ハッシュ化する
echo $pw;

$pw = password_hash('test2', PASSWORD_DEFAULT); //ハッシュ化する
echo $pw;

$pw = password_hash('test3', PASSWORD_DEFAULT); //ハッシュ化する→phpadminのlpwを書き換える
echo $pw;