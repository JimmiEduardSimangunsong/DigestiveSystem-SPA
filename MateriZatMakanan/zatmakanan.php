<div class="latar">
<a class="tag" ><p>MATERI</p></a>
<div class="materi">
    <div class="zatmakanan">
        <div class="boxisi">
            <div class="isinya" id="back">
                <img src="gambar/left.png" alt=""> 
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya" id="karbohidrat">
                <p>KARBOHIDRAT<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya" id="lemak">
                <p>LEMAK<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya" id="protein">
                <p>PROTEIN<p> 
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya" id="vitamin" >
                <p>VITAMIN<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya" id="mineral">
                <p>MINERAL<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya" id="air">
                <p>AIR<p>   
            </div>
        </div>
    </div>

    <!-- <div id="isinya"></div> -->
    <div class="isimateri">
    
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
       $('.isimateri').load('MateriZatMakanan/karbohidrat.php');

      $('.boxisi').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('div').attr('id');
          console.log(menu)

          if(menu == "lemak"){
              $('.isimateri').load('MateriZatMakanan/lemak.php');
            }else if(menu == "karbohidrat"){
              $('.isimateri').load('MateriZatMakanan/karbohidrat.php');
            }else if(menu == "protein"){
              $('.isimateri').load('MateriZatMakanan/protein.php');
            }else if(menu == "vitamin"){
              $('.isimateri').load('MateriZatMakanan/vitamin.php');
            }else if(menu == "mineral"){
              $('.isimateri').load('MateriZatMakanan/mineral.php');
            }else if(menu == "air"){
              $('.isimateri').load('MateriZatMakanan/air.php');
            }

      });
    }); 

    </script>

<script type="text/javascript">
       $(document).ready(function () {
        $('.boxisi').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('div').attr('id');
          console.log(menu)

          if(menu == "back"){
              $('#konten').load('materi.php');
            }

      });
    }); 

    </script>