<?php
session_start();
require 'data.php';


if($data_username == $_POST['username'] && $data_password == $_POST['password']){
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["isLogin"] = true;

    foreach ($posts as $key){
        $_SESSION["isRead"][$key['id']]= 0;
    }

    header('Location:index.php');
} else {
    $_SESSION['login'] = $_POST['username'];
    header('Location: login.php');
}

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * Uygulamanın diğer sayfalarda sık sık uyguladığı işlemleri betimleyecek
  * **sadece** fonksiyonların yer alması gereken php dosyasıdır.
  *
  * **Giriş yapmamış olan kullanıcı için** formdan gelen bilgilerin kontrol
  * edildiği ve kullanıcı adı `bootcamp`, parola `bootcamp` olduğu durumda
  * sisteme giriş yaptırmasını bekliyoruz. Bilgilerde eksiklik veya hata olduğu
  * durumda `login.php` dosyasına yönlenmesini ve ekrana hata ile ilgili mesajı
  * yazmasını bekliyoruz. Ek olarak, kullanıcının hassas verisi dışındaki
  * verilerin (parola hariç diğer alanlar gibi) form üzerinde **girilmiş**
  * olmasını bekliyoruz.
  * 
  * (Örn: `login.php` dosyasında kullanıcı adı kısmına `eray`, parola kısmına
  * `deneme` yazdığımda `do-login.php` dosyasına gitmesini ve oradan dönüp forma
  * geri geldiğimde hata mesajı ile birlikte formda sadece kullanıcı adı kısmının
  * `eray` ile dolmasını bekliyoruz.)
  */
