<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-5</title>
</head>
<body>
    
<h3>Php de Diziler Devam</h3>
<?php

$isimler=array();
$isimler[]= "Gizem";
$isimler[]= "Sena";
$isimler[0]= "Samet";
$isimler[]= "Emre";

echo "<pre>";
print_r($isimler);
echo"</pre><hr>";


$isimler=array();
$isimler["isim1"]= "Gizem";
$isimler["isim2"]= "Sena";
$isimler["isim3"]= "Samet";
$isimler[]= "Emre";
$isimler[]="Gülcan";

echo "<pre>";
print_r($isimler);
echo"</pre><hr>";


$ogrencidetay= array(
    "id"    =>1,
    "adi"   =>"Havva",
    "soyadi"=>"Yıldız",
    "bolum" =>"Bilgisayar",
    "yas"   =>20,
    "dersler"=>array(
        "ders-1"=>"Web Programlama",
        "ders-2"=>"Veri Tabanı",
        "ders-3"=>"Mobil Programlama",
    ),
    "sınıf" => 2,
    "memleket"=>"izmir"
);
echo"<pre>";
print_r($ogrencidetay);
echo"</pre>";

/*Çıktı:havvanur isimli öğrencinin web programlama,veri tabanı,mobil programlama dersleri vardır.*/

echo $ogrencidetay["adi"] ." isimli öğrencinin " . $ogrencidetay["dersler"]["ders-1"] . ", " . $ogrencidetay["dersler"]["ders-2"] . ", " . $ogrencidetay["dersler"]["ders-3"] . " dersleri vardır";




$ogrencidetaylari = array(
    "ogr1" => array(
        "id"      => 1,
        "adi"     => "Havvanur",
        "soyadi"  => "Yıldız",
        "bolum"   => "Bilgisayar",
        "yas"     => 20,
        "dersler" => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf"    => 2,
        "memleket" => "İzmir"
    ),
    "ogr2" => array(
        "id"      => 2,
        "adi"     => "Kemal",
        "soyadi"  => "Yıldız",
        "bolum"   => "Bilgisayar",
        "yas"     => 20,
        "dersler" => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf"    => 2,
        "memleket" => "İzmir"
    ),
    "ogr3" => array(
        "id"      => 3,
        "adi"     => "İsmet",
        "soyadi"  => "Yanık",
        "bolum"   => "Bilgisayar",
        "yas"     => 20,
        "dersler" => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf"    => 2,
        "memleket" => "İzmir"
    ),
    "ogr4" => array(
        "id"      => 4,
        "adi"     => "Hilal",
        "soyadi"  => "arı",
        "bolum"   => "Bilgisayar",
        "yas"     => 20,
        "dersler" => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf"    => 2,
        "memleket" => "İzmir"
    )

);
echo "<pre>";
print_r($ogrencidetaylari);
echo "</pre>";



/*yukarıdaki dizinin her elemanı bir öğrenci detayına karşılık gelmektedir
Bu öğrencilere ait detayları aşağıdaki şekilde bir tablo oluşturup içerisine yazdırınız.

#id   #adi     #soyadi     #bölüm       #dersler             #sınıf 
1     havva    yıldız      Bilgisayar   Web Programlama      2
                                        Veri Tabanı 
                                        Mobil Programlama 


*/
?>

    <h3>Koşul İfadeleri (If-Else)</h3>
    <p>İf-Else Bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>


    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> != ($a != $b) Eşit değil ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> !== ($a !== $b) Denk değil ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> > ($a > $b) Büyük ise.</li>
        <li> >= ($a >= $b) Büyük veya eşit ise.</li>
        <li>
            < ($a < $b) Küçük ise.</li>
        <li>
            <= ($a <=$b) Küçük veya eşit ise.</li>

    </ol>

    <h5>Mantıksal Operatörler</h5>
    <ol>
        <li> ! (olumsuzsa) (!$a) --> $a'nın değeri False ise True döner. Aksini yapar olumsuz mu diye sorar. </li>
        <li> && - AND (ve) ($a && $b ) --> $a ve $b'nin değeri olumlu ise True döner, iki koşul da sağlanmak zorundadır. Koşullardan bir tanesi false dönerse genel değer False olur. </li>
        <li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner. Herhangi birisinin koşulu sağlaması genel dönüşü True yapar. </li>
    </ol>

    <h4>Not:</h4>

    <ol>
        <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
        <li>Else son kapanış koşuludur. (Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>
    </ol>

    <?php

    /*     if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    } */


    $sayi1 = 123;
    $sayi2 = 345;
    $metin = "Adü";

    /* Değer Varsa */
    if ($sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı : $sayi1";
    }

    /* Değer Yoksa */
    if (!$sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı";
    }

    /* eşitlik Varsa */
    if ($sayi1 == $sayi2) {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    } else {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    /* eşitlik Yoksa Varsa */
    if ($sayi1 != $sayi2) {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    } else {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    }

    /* Denklik Varsa */
    if ("ogrenci" === "ogrenci") {
        echo "<br>Girilen değerler aynı";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* Denklik Varsa */
    if ($metin === "Adü") {
        echo "<br>Girilen değerler aynı : $metin";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* And Örneği */
    if (($sayi1 < $sayi2) and ("ogrenci" === "ogrenci")) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }

    /* OR Örneği */
    if (($sayi1 < $sayi2) or (15 > 25)) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }


    if ($sayi1 > $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }

    if ($sayi1 >= $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }



    /* uygulama: 
    1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. 
    2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.
    3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız. */

    ?>





    <br><br> <br><br>























</body>
</html>