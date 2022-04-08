

<div class="latar">
        <a class="tag" ><p>MATERI</p></a>
<div class="materi">
    <div class="container">
        <div class="box">
            <div class="isi">
                <img src="gambar/zatmakanan.jpg" alt="">
                <p>Zat-Zat Makanan dan Fungsinya</p>
            </div>
        </div>
        <div class="box">
            <div class="isi">
                <img src="gambar/organ.jpg" alt="">
                <p>Organ Pencernaan Manusia</p>
            </div>
        </div>
        <div class="box">
            <div class="isi">
                <img src="gambar/proses.jpg" alt="">
                <p>Proses Pencernaan Manusia</p>
            </div>
        </div>
        <div class="box">
            <div class="isi">
                <img src="gambar/penyakit.png" alt="">
                <p>Penyakit Pada Alat Pencernaan</p>
            </div>
        </div>
        <div class="box">
            <div class="isi">
                <img src="gambar/rawat.png" alt="">
                <p>Cara Merawat Alat Pencernaan</p>
            </div>
        </div>
    </div>
</petunjuk>
        
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