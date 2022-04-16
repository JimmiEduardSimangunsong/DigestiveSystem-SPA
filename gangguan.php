<div class="latar">
<a class="tag" ><p>MATERI</p></a>
<div class="materi">
    <div class="organ">
        <div class="boxnya">
            <div class="isinya" id="back">
                <img src="gambar/left.png" alt=""> 
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="diare">
                <p>DIARE<p> 
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="parotitis">
                <p>PAROTITIS ATAU GONDONGAN<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="sembelit">
                <p>SEMBELIT (KONSTIPASI)<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="ususbuntu">
                <p>APENDIKSITIS (RADANG USUS BUNTU)<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="tukak">
                <p>GASTRITIS (TUKAK LAMBUNG/MAAG)<p> 
            </div>
        </div>
    </div>

    <!-- <div id="isinya"></div> -->
    <div class="isimateri2">
    
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
       $('.isimateri2').load('MateriGangguanSistemPencernaan/diare.php');

      $('.boxnya').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('div').attr('id');
          console.log(menu)

          if(menu == "diare"){
              $('.isimateri2').load('MateriGangguanSistemPencernaan/diare.php');
            }else if(menu == "sembelit"){
              $('.isimateri2').load('MateriGangguanSistemPencernaan/sembelit.php');
            }else if(menu == "ususbuntu"){
              $('.isimateri2').load('MateriGangguanSistemPencernaan/ususbuntu.php');
            }else if(menu == "tukak"){
              $('.isimateri2').load('MateriGangguanSistemPencernaan/tukak.php');
            }else if(menu == "parotitis"){
              $('.isimateri2').load('MateriGangguanSistemPencernaan/gondongan.php');
            }

      });
    }); 

    </script>

<script type="text/javascript">
       $(document).ready(function () {
        $('.boxnya').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('div').attr('id');
          console.log(menu)

          if(menu == "back"){
              $('#konten').load('materi.php');
            }

      });
    }); 

    </script>