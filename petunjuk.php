

<div class="latar">
        <a class="tag" ><p>PETUNJUK</p></a>
    <div class="petunjuk">
        <h3>PETUNJUK PENGGUNAAN</h3>
        <p>1.Media pembelajaran ini terdiri dari beberapa bagian yaitu :<br>
        -Petunjuk,berisi petunjuk penggunaan web media pembelajaran<br>
        -KI & KD,berisi kompetensi inti dan kompetensi dasar<br>
        -Materi,berisi pembahasan materi tentang sistem pencernaan manusia<br>
        -Quiz,berisi soal soal dengan waktu untuk menguji pemahaman user <br>
        -Latihan,berisi latihan soal untuk menguji pemahaman user<br>
        -Feedback,berisi tanggapan serta kritikan & saran bagi user setelah menggunakan media pembelajaran<br>
        2.Untuk beralih antar bagian silahkan pilih menu dibagian bawah<br>
        3.Untuk kembali kehalaman utama silahkan klik tombol Home<br></p>
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