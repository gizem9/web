<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders-1</title>
</head>
<body>
    
<!-- Html yorum sAtırı -->

<?php

/* Açıklama Satırı Bloğu(Çoklu satır kullanılabilir)  kısayol:shift+alt+a*/
//tek satır açıklama için kullanılır.//

/*Kullanılan komut:
  echo:Ekrana yazdırma işlemi yapar.
  komut içerisinde html etiketleri kullanılabilir.
  Çift veya tek tırnak kullanılabilir.
  Çift tırnak ile kullanıldığında içerisindeki değişkenlerin içeriğini ekrana yazar.
  Nokta(.) operatörü ile birleştirme işlemi yapılabilir.
  Ters Slash(/)kaçış karakteridir.Özel ifadelerden önce kullanılır.

  */

echo"<h3>Adnan Menderes Üniversitesi</h3>";
echo"<h4>Aydın Meslek Yüksekokulu</h4>";
echo"<h4>Aydın Meslek Yüksekokulu</h4>";
echo"Bilgisayar Mühendisliği " . "Aymes";


echo "<hr> <h4> Değişken Tanımlama </h4>";

echo"<ol>
    <li>Değişken isimleri $ ile başlar.</li>
    <li>Değişken isimleri sayısal ifadeler ile başlayamaz.</li>
    <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime birinci_sinif birinciSinif örnekleri kullanılabilir.</li>
    <li>Değişken isimleri küçük-büyük harfe duyarlıdır.\$sayi !=\$Sayi </li>
    <li>Değişken ismi, değişkenin taşındığı içeriği ifade etmeli.</li>
    <li>Değişken içeriğinde metinsel ifade varsa çift tırnak (\")veya tek tırnak (')kullanılabilir.</li>
    <li>Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir.</li>
    <li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir.</li>
 </ol>";
 
    echo"<hr> <h4> Değişken Tanımlama Örnekleri </h4>";

    $isim    ="Ahmet";
    $soyisim ="Erimez";
    $gsm     ="123123123";


    echo $isim."<br>";
    echo "$isim $soyisim $gsm";

   /*Uygulama :
    üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
    Bu değişkenleri içerdikleri tablo veya form içeriğinde ekrana yazdırınız.*/

    $uni   ="adü";
    $myo   ="Aymes";
    $ad    ="Gizem";
    $soyad ="Yanık";
    $numara="216029015";
    ?>
    <br><br><br>

    <form action="">
        <label for= "universite">Üni: </label>
        <input type ="text" name="" value="<?php echo $uni; ?> "id="universite" disabled><br>


        <label for= "myo">Myo: </label>
        <input type ="text" name="" value="<?php echo $uni; ?> "id="myo" disabled><br>

        <label for= "Ad">ad: </label>
        <input type ="text" name="" value="<?php echo $ad; ?> "id="Ad" disabled><br>

        <label for= "Soyad">soyad: </label>
        <input type ="text" name="" value="<?php echo $soyad; ?> "id="Soyad" disabled><br>

        <label for= "Numara ">numara: </label>
        <input type ="text" name="" value="<?php echo $numara; ?> "id="Numara" disabled><br>




</body>
</html>