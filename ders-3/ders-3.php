<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  -->


<?php

$not=rand(0,100);
if($not>=50){
    echo "Geçtiniz-Notunuz:$not";
}
else{
    echo "Kaldınız-Notunuz:$not";
}



echo"<h3>sık kullanılan string fonksiyonlar</h3>";

$yazi="Aydın Adnan Menderes Üniversitesi";
echo gettype($yazi);
echo"<br> Değişken : $yazi(" . gettype($yazi) . ")";

// İçeriğin Büyük Harfe Dönüştürülmesi

echo "<br> \$yazi İçeriğin Büyük Harfle Yazılması:". $buyuk_yazi=strtoupper($yazi);
echo "<br> \$yazi İçeriğin Büyük Harfle Yazılması:". $buyuk_yazi=mb_strtoupper($yazi);


// İçeriğin Küçük Harfe Dönüştürülmesi

echo "<br> \$yazi İçeriğin Küçük Harfle Yazılması:". $kucuk_yazi=strtolower($buyuk_yazi);
echo "<br> \$yazi İçeriğin Küçük Harfle Yazılması:". $kucuk_yazi=mb_strtolower($buyuk_yazi);


// İçeriğin İlk Harfinin Büyük Harfe Dönüştürülmesi
echo "<br> \$yazi İlk harfin, büyük Harfle Yazılması:". $ilk_yazi=ucfirst($kucuk_yazi);

// İçeriğin Tüm kelimelerinin ilk harfinin,Büyük Harfe Dönüştürülmesi
echo "<br> \$yazi Tüm Kelimelerin İlk Harfinin Büyük Harfle Yazılması:".$kelime=ucwords($kucuk_yazi);

// İçeriğin Harf Sayısı :
echo "<br> \$yaziİçerisindeki Harf Sayısı:".strlen($yazi);

//Ascii Char Karşılığı:
echo"<br>Karakter karşılığı:". chr (109);
echo"<br>karakter karşılığı:".chr(64);

//uygulama 32-127 char karakterleri:
echo"ascii Karakterleri:";
for($i=32;$i <=127; $i++){
    echo "$i" . chr($i)."-";
}


//Metnin Parçalanarak diziye dönüştürülmesi
$dizi=explode(" ",$yazi);
echo"<br>";
print_r($dizi);

//uygulama paragraftaki kelime ve cümle sayılarını alt alta yazdırınız.


$metin="Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium possimus autem pariatur voluptatibus ipsam. Culpa, quibusdam. Impedit, ullam non necessitatibus iste aliquam odio. Maiores molestias nihil repellendus eligendi harum enim.
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Corporis eum aliquid corrupti fugiat placeat culpa sequi sint praesentium voluptate porro? 
Animi blanditiis reprehenderit error labore nulla voluptatibus eligendi ad deleniti.";

$kelimelerdizisi=explode(" ",$metin);
$cümlelerdizisi=explode(".",$metin);

echo"<br>kelime sayısı:".count ($kelimelerdizisi);
echo"<br>cümle sayısı:".count ($cümlelerdizisi);

/*uygulama
   veri tabanından 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
   */


   echo "<br>";
   $tarih="2021-12-25";
   $yenitarih=explode("-",$tarih);
   echo "$yenitarih[2]-$yenitarih[1]-$yenitarih[0]";

    //dizinin metne dönüştürülmesi(implode)
    echo"<br>";
    $aylar=["ocak","şubat","mart","nisan","mayıs"];
    print_r($aylar);
    $aylarString=implode(" ",$aylar);
    echo "<br>String: $aylarString";

/*verilen bir metin belirtilen sayı kadar ayrılarak bir dizi içeriğine aktarılması.
eğer sayı belirtilmezse metni harf harf böler.*/

echo"<br>";
$iban="TR0010002000300040005000";
$ibanYeni=str_split($iban,4);
print_r($ibanYeni);
echo"<br>";


foreach($ibanYeni as $parca){
    echo "$parca";
}



/*trim substr str_replace md5 sha1*/















?>





</body>
</html>