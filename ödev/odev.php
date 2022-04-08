<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÖDEV</title>
</head>
<body>
    <?php
$ogrencidetaylari = array(
    "ogr1" => array(
        "id"      => 1,
        "adi"     => "Havvanur",
        "soyadi"  => "Yıldız",
        "bolum"   => "Bilgisayar",
        "yas"     => 20,
        "dersler" => array(
            "Web Programlama",
            "Veri Tabanı",
            "Mobil Programlama"
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
            "Web Programlama",
            "Veri Tabanı",
            "Mobil Programlama"
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
            "Web Programlama",
            "Veri Tabanı",
            "Mobil Programlama"
        ),
        "sınıf"    => 2,
        "memleket" => "İzmir"
    ),
    "ogr4" => array(
        "id"      =>4,
        "adi"     => "Hilal",
        "soyadi"  => "arı",
        "bolum"   => "Bilgisayar",
        "yas"     => 20,
        "dersler" => array(
            "Web Programlama",
            "Veri Tabanı",
            "Mobil Programlama"
        ),
        "sınıf"    => 2,
        "memleket" => "İzmir"
    )
/*yukarıdaki dizinin her elemanı bir öğrenci detayına karşılık gelmektedir
Bu öğrencilere ait detayları aşağıdaki şekilde bir tablo oluşturup içerisine yazdırınız.

#id   #adi     #soyadi     #bölüm       #dersler             #sınıf 
1     havva    yıldız      Bilgisayar   Web Programlama      2
                                        Veri Tabanı 
                                        Mobil Programlama 


  */
);
?>
<table border = "1">
 <tr>
     <td>#id</td>
     <td>#adı</td>
     <td>#soyadı</td>
     <td>#bolum</td>
     <td>#yas</td>
     <td>#dersler</td>
     <td>#sınıf</td>
     <td>#memleket</td>
 </tr>
 <tr>
     <td><?php echo $ogrencidetaylari["ogr1"]["id"]?></td>
     <td><?php echo $ogrencidetaylari["ogr1"]["adi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr1"]["soyadi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr1"]["bolum"]?></td>
     <td><?php echo $ogrencidetaylari["ogr1"]["yas"]?></td>
     <td><?php for ($i=0; $i <3 ; $i++) { 
       echo $ogrencidetaylari["ogr1"]["dersler"][$i];
       echo "<br>";
     } ?></td>
    <td><?php echo $ogrencidetaylari["ogr1"]["sınıf"]?></td>
    <td><?php echo $ogrencidetaylari["ogr1"]["memleket"]?></td>
 </tr>

 <tr>
     <td><?php echo $ogrencidetaylari["ogr2"]["id"]?></td>
     <td><?php echo $ogrencidetaylari["ogr2"]["adi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr2"]["soyadi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr2"]["bolum"]?></td>
     <td><?php echo $ogrencidetaylari["ogr2"]["yas"]?></td>
     <td><?php for ($i=0; $i <3 ; $i++) { 
       echo $ogrencidetaylari["ogr2"]["dersler"][$i];
       echo "<br>";
     } ?></td>
    <td><?php echo $ogrencidetaylari["ogr2"]["sınıf"]?></td>
    <td><?php echo $ogrencidetaylari["ogr2"]["memleket"]?></td>
 </tr>

 <tr>
     <td><?php echo $ogrencidetaylari["ogr3"]["id"]?></td>
     <td><?php echo $ogrencidetaylari["ogr3"]["adi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr3"]["soyadi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr3"]["bolum"]?></td>
     <td><?php echo $ogrencidetaylari["ogr3"]["yas"]?></td>
     <td><?php for ($i=0; $i <3 ; $i++) { 
       echo $ogrencidetaylari["ogr3"]["dersler"][$i];
       echo "<br>";
     } ?></td>
    <td><?php echo $ogrencidetaylari["ogr3"]["sınıf"]?></td>
    <td><?php echo $ogrencidetaylari["ogr3"]["memleket"]?></td>
 </tr>
 <tr>
     <td><?php echo $ogrencidetaylari["ogr4"]["id"]?></td>
     <td><?php echo $ogrencidetaylari["ogr4"]["adi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr4"]["soyadi"]?></td>
     <td><?php echo $ogrencidetaylari["ogr4"]["bolum"]?></td>
     <td><?php echo $ogrencidetaylari["ogr4"]["yas"]?></td>
     <td><?php for ($i=0; $i <3 ; $i++) { 
       echo $ogrencidetaylari["ogr4"]["dersler"][$i];
       echo "<br>";
     } ?></td>
    <td><?php echo $ogrencidetaylari["ogr4"]["sınıf"]?></td>
    <td><?php echo $ogrencidetaylari["ogr4"]["memleket"]?></td>
 </tr>

</table>
</body>
</html>