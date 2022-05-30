<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencernaan</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- untuk judul materi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">

    
    <!-- UNTUK JUDUL BESAR -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amatic+SC:wght@700&family=Fredericka+the+Great&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="judul"><h1>SISTEM PENCERNAAN MANUSIA</h1></div>


<!-- isi konten -->
    <div id="konten">

    </div>


    <div class="menu">
        <div class="lingkar">
            <a href="petunjukk.php"class="icon1"></a>
            <div class="overlay">
                <div class="content">
                    <h3>Petunjuk</h3>
                </div>
            </div>
        </div>
        <div class="lingkar">
            <a class="icon2"></a>
            <div class="overlay">
                <div class="content">
                    <h3>KI & KD</h3>
                </div>
            </div>
        </div>
        <div class="lingkar">
            <a class="icon3"></a>
            <div class="overlay">
                <div class="content">
                    <h3>Materi</h3>
                </div>
            </div>
        </div>
        <div class="lingkar">
            <a class="icon4"></a>
            <div class="overlay">
                <div class="content">
                    <h3>Vidio</h3>
                </div>
            </div>
        </div>
        <div class="lingkar">
            <a class="icon5"></a>
            <div class="overlay">
                <div class="content">
                    <h3>Quiz</h3>
                </div>
            </div>
        </div>
        <div class="lingkar">
            <a  class="icon6"></a>
            <div class="overlay">
                <div class="content">
                    <h3>Latihan</h3>
                </div>
            </div>
        </div>
        <div class="lingkar">
            <a class="icon7"></a>
            <div class="overlay">
                <div class="content">
                    <h3>Feedback</h3>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script type="text/javascript">
       $(document).ready(function () {

      $('.lingkar').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('a').attr('class');
          console.log(menu)

          if(menu == "icon1"){
              $('#konten').load('petunjuk.php');
            }else if(menu == "icon2"){
              $('#konten').load('kikd.php');
            }else if(menu == "icon3"){
              $('#konten').load('materi.php');
            }else if(menu == "icon4"){
              $('#konten').load('vidio.php');
            }else if(menu == "icon5"){
              $('#konten').load('quiz.php');
            }else if(menu == "icon6"){
            $('#konten').load('latihan.php');
            }else if(menu == "icon7"){
            $('#konten').load('feedback.php');
            }

      });
    }); 


    </script>
</body>
</html>
