<div class="latar">
<a class="tag" ><p>MATERI</p></a>

<div class="back">
<div class="kembali"></div>
</div>

<div class="materi">
<div class="rawat">
    <div class="boxrawat">
        <div class="isirawat">
            <img src="gambar/makansehat.jpg" alt="">
            <p>Makan-makanan yang bergizi dan seimbang seperrti 4 sehat 5 sempurna</p>
        </div>
    </div>
    <div class="boxrawat">
        <div class="isirawat">
            <img src="gambar/minum.jpg" alt="">
            <p>Minum air putih yang cukup minimal 8 gelas per hari</p>
        </div>
    </div>
    <div class="boxrawat">
        <div class="isirawat">
            <img src="gambar/kebersihangigi.png" alt="">
            <p>Menjaga kebersihan gigi dan mulut dengan cara menggosok gigi secara teratur</p>
        </div>
    </div>
    <div class="boxrawat">
        <div class="isirawat">
            <img src="gambar/alatmakanan.jpg" alt="">
            <p>Menjaga kebersihan alat makanan</p>
        </div>
    </div>
    <div class="boxrawat">
        <div class="isirawat">
            <img src="gambar/makanteratur.jpeg" alt="">
            <p>Makan secara teratur dan tepat waktu</p>
        </div>
    </div>
    <div class="boxrawat">
        <div class="isirawat">
            <img src="gambar/olahraga.jpg" alt="">
            <p>Olahraga secara teratur</p>
        </div>
    </div>
</div>
</div>

<div class="home">
        <a class="wrap"></a>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
   $(document).ready(function () {

  $('.home').click(function (e) { 
      e.preventDefault();

      var menu =  $(this).find('a').attr('class');
      console.log(menu)

      if(menu == "wrap"){
          $('#konten').load('home.php');
        }

  });
}); 

</script>


<script type="text/javascript">
       $(document).ready(function () {
        $('.back').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('div').attr('class');
          console.log(menu)

          if(menu == "kembali"){
              $('#konten').load('materi.php');
            }

      });
    }); 

    </script>