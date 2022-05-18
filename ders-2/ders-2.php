[17:46, 16.03.2022]GİZEM: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders-2</title>
</head>
<body>
    <?php
    /* php versiyon ve yatay bilgisini gosterir */
   // echo phpinfo();
   echo"<h4> tırnak işaretleri arasındaki farklar </h4>";
   $uni = "adnan menderes üniversitesi";
   echo "değişken içeriği:  $uni";
   echo "<br>";
   /* değişken isminin yazdırılması */
   echo "1-kazandığımız üniverste: \$uni";
   echo "<br>";
   echo "2-kazandığımız üniverste:". '$uni';
   echo "<br>";
   echo '3-kazandığımız üniverste: $uni';
   /* değişkenin içeriğinin  yazdırılması */
   echo "<br>";
   echo "1-kazandığımız üniverste: $uni";
   echo "<br>";
   echo "2-kazandığımız üniverste:". $uni;
   echo "<br>";
   echo "3-kazandığımız üniverste:" ."$uni";
   echo "<br>";
   echo '4-kazandığımız üniverste:' ."$uni";
   echo "<br>";


   echo "<hr> <h4>  temel matematiksel işlemler</h4>";
   echo "<h5> toplama işlemi </h5>";
   $sayi1=10;
   $sayi2=20;

   echo "\$sayi1+ \$sayi2=" . ($sayi1+$sayi2);
   echo"<br>";

   echo "\$sayi1+ \$sayi2=" . ($sayi1+$sayi2);
   $sonuc=$sayi1+$sayi2;
   echo"<br>";
   echo"$sayi1+$sayi2=$sonuc";


   echo "<h5>çıkarma işlemi </h5>";
   $sayi1=10;
   $sayi2=20;

   echo "\$sayi1- \$sayi2=" . ($sayi1-$sayi2);
   echo"<br>";

   echo "\$sayi1- \$sayi2=" . ($sayi1-$sayi2);
   $sonuc=$sayi1-$sayi2;
   echo"<br>";
   echo"$sayi1-$sayi2=$sonuc";



   echo "<h5>çarpma işlemi </h5>";
   $sayi1=10;
   $sayi2=20;

   echo "\$sayi1* \$sayi2=" . ($sayi1*$sayi2);
   echo"<br>";

   echo "\$sayi1* \$sayi2=" . ($sayi1*$sayi2);
   $sonuc=$sayi1*$sayi2;
   echo"<br>";
   echo"$sayi1*$sayi2=$sonuc";



   echo "<h5>bölme işlemi </h5>";
   $sayi1=10;
   $sayi2=20;

   echo "\$sayi1/ \$sayi2=" . ($sayi1/$sayi2);
   echo"<br>";

   echo "\$sayi1/\$sayi2=" . ($sayi1/$sayi2);
   $sonuc=$sayi1/$sayi2;
   echo"<br>";
   echo"$sayi1/$sayi2=$sonuc";



    echo "<h5>üst alma işlemi </h5>";
    $x=4;
    $y="2";
    //$y=(int)"2";//DöNÜŞÜM iŞLEMİ 
    echo"Değişken Tipi:" . gettype($x) . "<br>";
    echo"Değişken Tipi:" . gettype($y) . "<br>";
    echo"$x<sup>$y</sup>= ". pow($x,$y);
    

    echo "<h5>Karekök alma işlemi (sqrt(x))</h5>";
    $x=123;
    $karekok=sqrt($x);
    echo"$x sayısının karekökü:$karekok";

    echo "<h5>Mutlak değer  işlemi(abs(x)) </h5>";
    $x=(-12);
    $mutlak=abs($x);
    echo"|$x| sayısının mutlak değeri: $mutlak";


    echo "<h5> taban değişim işlemi (base_convert(x,taban1,taban2)) </h5>";
    echo "27 sayısının 2' lik tabandaki karşılığı:". base_convert(27, 10, 2);
    echo "<br>";
    $sayi = 50;
    $taban = 10;
    $yenitaban = 2;
    $sonuc = base_convert($sayi,$taban, $yenitaban);
    
 
    //(50)10 = (....)2;
    $x =50;
    $taban =10;
    $sonuc =2;
    echo "$sayi<sub>10</sub> = $sonuc<sub>2</sub>";
 
 
    echo "<h5> mod işlemi (fmod(x,y)) </h5>";
    $x = 20;
    $y = 4;
    $mod = fmod($x ,$y);
    echo "$x mod $y: $mod";
    echo "<br> $x sayısı: ".(fmod($x, 2)== 0? "çifttir": "tektir") ; 
 
    /* girilen sayının tek mi çiftt mi oldugunu gösterir */
    $z = 71;
    echo "<br> $z sayısı: ".(fmod($z, 2)== 0? "çifttir": "tektir") ; 
 
 
 
    echo "<h5> yuvarlama işlemi (round(x,y)) </h5>";
    $x = 15.315;
    $y = 15.385;
     echo "$x bir ondalık basamak yuvarlaması sonucu: " .round ($x, 1) . "<br>";
     echo "$y bir ondalık basamak yuvarlaması sonucu: " .round ($y, 1) . "<br>";
 
     echo "$x bir ondalık basamak yuvarlaması sonucu: " .round ($x, 2) . "<br>";
     echo "$y bir ondalık basamak yuvarlaması sonucu: " .round ($y, 2) . "<br>";
 
     echo "<h5> yuvarlama işlemi (foor(x,y)) </h5>";
     /* en yakın en küçük tam sayıya yuvarlar */
     $x = 15.913;
     $y = 15.213;
     echo "$x floor  yuvarlaması sonucu: " .floor ($x) . "<br>";
     echo "$y floor  yuvarlaması sonucu: " .floor ($y) . "<br>";
 
    echo "<h5> yuvarlama işlemi (ceil(x,y)) </h5>";
    $x = 15.913;
    $y = 15.213;
    echo "$x floor  yuvarlaması sonucu: " .ceil ($x) . "<br>";
    echo "$y floor  yuvarlaması sonucu: " .ceil ($y) . "<br>";
 
    echo "<h5> rasgale sayı işlemi (rand(x,y)) </h5>";
    echo "10-100 arasındaki rasgele sayı üretildi:". rand(10, 100);
    
 
    for($i=0; $i <= 10; $i++) {
        echo "$i.sayı:" .rand(0, 100). "<br>";
    }










    ?>





</body>
</html>
