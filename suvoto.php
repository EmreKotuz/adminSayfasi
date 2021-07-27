<?php include "menus.php"; $baglanti = new PDO("mysql:host=localhost;dbname=otomobil","root","emre"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Binek Oto Ekle</title>
  </head>
  <body>

<?php

if (isset($_POST['12_Ekle']))
{

  /*
                  BİLGİLENDİRME!!!!!
      Sayı ile başlayan tablo isimleri ve filed isimlerini kabul etmediği için veritabanından değiştirilip kodlarda düzenleme yapıldı!

  */

  $komut=$baglanti->prepare("select * from aKategori where arac_id = 3 and aKategori_ad = '1.2'");
  $komut->execute();

  if($sonuc = $komut->fetch(PDO::FETCH_ASSOC))

    $aKategori_id = $sonuc['aKategori_id'];
    $a12_ad = $_POST['a12_ad'];
    $a12_markasi = $_POST['a12_markasi'];
    $a12_modeli = $_POST['a12_modeli'];
    $a12_rengi = $_POST['a12_rengi'];
    $alis_fiyati = $_POST['alis_fiyati'];
    $satis_fiyati = $_POST['satis_fiyati'];

    $baglanti->query("insert into aracBirIki(a12_ad,a12_markasi,a12_modeli,aKategori_id,a12_rengi,alis_fiyati,satis_fiyati) values('$a12_ad','$a12_markasi','$a12_modeli','$aKategori_id','$a12_rengi','$alis_fiyati','$satis_fiyati')");



    $a12resim_ids  = $baglanti->lastInsertId();

    if ($sonuc==0) {
      echo "gönderilmedi";
    }else {
      echo "gönderildi";
    }

    foreach($_FILES['a12resim']['name'] as $key => $val)
    {
      $uploads_dir = 'img';
      @$tmp_name = $_FILES['a12resim']["$tmp_name"][$key];
      @$name = $_FILES['a12resim']["name"][$key];


      $benzersizsayi1=rand(20000,32000);
      $benzersizsayi2=rand(20000,32000);
      $benzersizsayi3=rand(20000,32000);
      $benzersizsayi4=rand(20000,32000);
      $benzersizad = $benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
      $a1200mresim = substr('../../img', 6)."/".$benzersizad.$name;
      @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

      $baglanti -> query("insert into a1200mresim(resim,12_id) values ('$a1200mresim','$a12resim_ids')");

    }
}


if (isset($_POST['16_Ekle']))
{


  $komut=$baglanti->prepare("select * from aKategori where arac_id = 3 and aKategori_ad = '1.6'");
  $komut->execute();

  if($sonuc = $komut->fetch(PDO::FETCH_ASSOC))

    $aKategori_id = $sonuc['aKategori_id'];
    $adi = $_POST['adi'];
    $markasi = $_POST['markasi'];
    $modeli = $_POST['modeli'];
    $rengi = $_POST['rengi'];
    $alis_fiyati = $_POST['alis_fiyati'];
    $satis_fiyati = $_POST['satis_fiyati'];

    $baglanti->query("insert into aracBirAlti(adi,markasi,modeli,akategori_id,rengi,alis_fiyati,satis_fiyati) values('$adi','$markasi','$modeli','$aKategori_id','$rengi','$alis_fiyati','$satis_fiyati')");
    $a1600midd  = $baglanti->lastInsertId();

    foreach($_FILES['a16resim']['name'] as $key => $val)
    {
      $uploads_dir = 'img';
      @$tmp_name = $_FILES['a16resim']["$tmp_name"][$key];
      @$name = $_FILES['a16resim']["name"][$key];

      $benzersizsayi1=rand(20000,32000);
      $benzersizsayi2=rand(20000,32000);
      $benzersizsayi3=rand(20000,32000);
      $benzersizsayi4=rand(20000,32000);
      $benzersizad = $benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
      $a1600mresim = substr('../../img', 6)."/".$benzersizad.$name;
      @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

      $baglanti -> query("insert into a1600mresim(resim,16_id) values ('$a1600mresim','$a1600midd')");

    }
}
if (isset($_POST['20_Ekle']))
{


  $komut=$baglanti->prepare("select * from aKategori where arac_id = 3 and aKategori_ad = '2.0'");
  $komut->execute();

  if($sonuc = $komut->fetch(PDO::FETCH_ASSOC))

    $aKategori_id = $sonuc['aKategori_id'];
    $a20_ad = $_POST['a20_ad'];
    $a20_markasi = $_POST['a20_markasi'];
    $a20_modeli = $_POST['a20_modeli'];
    $a20_rengi = $_POST['a20_rengi'];
    $alis_fiyati = $_POST['alis_fiyati'];
    $satis_fiyati = $_POST['satis_fiyati'];

    $baglanti->query("insert into aracIkiBin(a20_ad,a20_markasi,a20_modeli,akategori_id,a20_rengi,alis_fiyati,satis_fiyati) values('$a20_ad','$a20_markasi','$$a20_modeli','$aKategori_id','$a20_rengi','$alis_fiyati','$satis_fiyati')");
    $a2000midd  = $baglanti->lastInsertId();

    foreach($_FILES['20resim']['name'] as $key => $val)
    {
      $uploads_dir = 'img';
      @$tmp_name = $_FILES['20resim']["$tmp_name"][$key];
      @$name = $_FILES['20resim']["name"][$key];

      $benzersizsayi1=rand(20000,32000);
      $benzersizsayi2=rand(20000,32000);
      $benzersizsayi3=rand(20000,32000);
      $benzersizsayi4=rand(20000,32000);
      $benzersizad = $benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
      $a2000mresim = substr('../../img', 6)."/".$benzersizad.$name;
      @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

      $baglanti -> query("insert into a2000mresim(resim,20_id) values ('$a2000mresim','$a2000midd')");

    }

}

 ?>
    <script>

    $(function(){
      $("#15").hide();
      $("#16").hide();
      $("#17").hide();

          $("#kategoriSec").change(function(){
            $("#15").hide();
            $("#16").hide();
            $("#17").hide();


              $("#"+$(this).val()).show();

      });
    });
    </script>
    <div class="container">
        <h1>SUV Otomobil Ekle</h1>
        <form class="" action="" method="post" enctype="multipart/form-data">
          <label>Motor Hacmi</label>
          <div class="">
              <select class="form-control col-md-2" id="kategoriSec">
              <option selected value="">Hacmi Seçiniz</option>
              <?php
              $komut=$baglanti->prepare("select * from aKategori where arac_id = 3");
              $komut->execute();
              while ($sonuc=$komut->fetch(PDO::FETCH_ASSOC)){
               ?>
               <option value="<?php echo  $sonuc['aKategori_id']?>"><?php echo $sonuc['aKategori_ad']?></option>
             <?php } ?>
            </select>
        </div>
        </form>
    </div>

              <div class="container" id="15">
                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Arabanın Adı (1.2)</label>
                          <input type="text" class="form-control" name="a12_ad">
                      </div>
                      <div class="form-group">
                        <label>Arabanın Markası (1.2)</label>
                        <input type="text" class="form-control" name="a12_markasi">
                      </div>
                      <div class="form-group">
                        <label>Arabanın Modeli (1.2)</label>
                        <input type="text" class="form-control" name="a12_modeli">
                      </div>
                      <div class="form-group">
                        <label>Arabanın Rengi (1.2)</label>
                        <input type="text" class="form-control" name="a12_rengi">
                      </div>
                      <div class="form-group">
                        <label>Alış Fiyatı (1.2)</label>
                        <input type="text" class="form-control" name="alis_fiyati">
                      </div>
                      <div class="form-group">
                        <label>Satış Fiyatı (1.2)</label>
                        <input type="text" class="form-control" name="satis_fiyati">
                      </div>
                      <div class="form-group">
                        <label>Resim Seçiniz</label>
                        <input type="file" class="form-control" name="a12resim[]" multiple>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="form-control bg-danger text-white col-sm-2" name="12_Ekle">1.2 Araç Ekle</button>
                      </div>
                  </form>
              </div><br>


              <div class="container" id="16">
                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Arabanın Adı (1.6)</label>
                          <input type="text" class="form-control" name="adi">
                      </div>
                      <div class="form-group">
                        <label>Arabanın Markası (1.6)</label>
                        <input type="text" class="form-control" name="markasi">
                      </div>
                      <div class="form-group">
                        <label>Arabanın Modeli (1.6)</label>
                        <input type="text" class="form-control" name="modeli">
                      </div>
                      <div class="form-group">
                        <label>Arabanın Rengi (1.6)</label>
                        <input type="text" class="form-control" name="rengi">
                      </div>
                      <div class="form-group">
                        <label>Alış Fiyatı (1.6)</label>
                        <input type="text" class="form-control" name="alis_fiyati">
                      </div>
                      <div class="form-group">
                        <label>Satış Fiyatı (1.6)</label>
                        <input type="text" class="form-control" name="satis_fiyati">
                      </div>
                      <div class="form-group">
                        <label>Resim Seçiniz</label>
                        <input type="file" class="form-control" name="a16resim[]" multiple>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="form-control bg-danger text-white col-sm-2" name="16_Ekle">1.2 Araç Ekle</button>
                      </div>
                  </form>
              </div><br>

              <div class="container" id="17">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Arabanın Adı (2.0)</label>
                        <input type="text" class="form-control" name="a20_ad">
                    </div>

                    <div class="form-group">
                      <label>Arabanın Markası (2.0)</label>
                      <input type="text" class="form-control" name="a20_markasi">
                    </div>
                    <div class="form-group">
                      <label>Arabanın Modeli (2.0)</label>
                      <input type="text" class="form-control" name="a20_modeli">
                    </div>
                    <div class="form-group">
                      <label>Arabanın Rengi (2.0)</label>
                      <input type="text" class="form-control" name="a20_rengi">
                    </div>
                    <div class="form-group">
                      <label>Alış Fiyatı (2.0)</label>
                      <input type="text" class="form-control" name="alis_fiyati">
                    </div>
                    <div class="form-group">
                      <label>Satış Fiyatı (2.0)</label>
                      <input type="text" class="form-control" name="satis_fiyati">
                    </div>
                    <div class="form-group">
                      <label>Resim Seçiniz</label>
                      <input type="file" class="form-control" name="20resim[]" multiple>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="form-control bg-danger text-white col-sm-2" name="20_Ekle">2.0 Araç Ekle</button>
                    </div>
                  </form>
              </div><br>

  </body>
</html>
