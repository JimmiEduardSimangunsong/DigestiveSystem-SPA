<div class="latar">
<a class="tag" ><p>Quizz</p></a>


<div class="materi">

 <!-- start Quiz button -->
 <div class="start_btn"><button>Mulai Kuis</button></div>
    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Beberapa Peraturan Dalam Kuis Ini</span></div>
        <div class="info-list">
            <div class="info">1. Kamu hanya akan mendapat waktu<span>15 detik</span> per setiap soal.</div>
            <div class="info">2.Setelah anda memilih jawaban,jawaban tidak dapat diurungkan.</div>
            <div class="info">3. Anda tidak dapat memilih opsi apa pun setelah waktu Habis.</div>
            <div class="info">4. Anda tidak dapat keluar dari Kuis saat Anda Mengerjakan.</div>
            <div class="info">5.Anda akan mendapatkan poin berdasarkan jawaban yang benar.</div>
        </div>
        <div class="buttons">
            <button class="quit">Keluar Quiz</button>
            <button class="restart">Lanjutkan</button>
        </div>
    </div>
    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Quiz Pencernaan</div>
            <div class="timer">
                <div class="time_left_txt">Sisa Waktu</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>
        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Selanjutnya</button>
        </footer>
    </div>
    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Kamu Telah Menyelesaikan Seluruh Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Ulangi Quiz</button>
            <button class="quit">Keluar Quiz</button>
        </div>
    </div>
    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions.js"></script>
    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js"></script>

    <!-- akhir quizz -->

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