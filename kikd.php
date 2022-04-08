

<div class="latar">
        <a class="tag" ><p>KI&KD</p></a>
    <div class="petunjuk">
        <h3>KOMPETENSI DASAR (KD)</h3>
        <p>1.Menganalisis sistem pencernaan manusia dan memahami ganguan yang berhubungan dengan sistem pencernaan serta upaya untuk menjaga kesehatan sistem pencernaan <br> </p>
        <br>
        <h3>INDIKATOR</h3>
        <p>
            3.5.1 Menghubungkan keterkaitan antar struktur organ beserta fungsinya.<br>
            3.5.2 Menyusun urutan proses pencernaan dalam tubuh manusia.<br>
            3.5.3 Mengelompokan jenis jenis gangguan sistem pencernaan<br>
            3.5.4 Menentukan upaya untuk mencegah atau menangulangi macam-macam ganguan sistem pencernaan
        </p>
       
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