<div class="latar">
<a class="tag" ><p>MATERI</p></a>
<div class="materi">
    <div class="organ">
        <div class="boxnya">
            <div class="isinya" id="back">
                <img src="gambar/left.png" alt=""> 
            </div>
        </div>
        <!-- <div class="boxnya">
            <div class="isinya" id="sistem">
                <p>GAMBAR SISTEM ORGAN PENCERNAAN<p>   
            </div>
        </div> -->
        <div class="boxnya">
            <div class="isinya" id="mulut">
                <p>MULUT<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="hati">
                <p>HATI<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="kerongkongan">
                <p>KERONGKONGAN<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="lambung">
                <p>LAMBUNG<p> 
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="usushalus" >
                <p>USUS HALUS<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="ususbesar">
                <p>USUS BESAR<p>   
            </div>
        </div>
        <div class="boxnya">
            <div class="isinya" id="latihan">
                <p>LATIHAN<p>   
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
       $('.isimateri2').load('MateriOrganPencernaan/mulut.php');

      $('.boxnya').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('div').attr('id');
          console.log(menu)

          if(menu == "mulut"){
              $('.isimateri2').load('MateriOrganPencernaan/mulut.php');
            }else if(menu == "hati"){
              $('.isimateri2').load('MateriOrganPencernaan/hati.php');
            }else if(menu == "kerongkongan"){
              $('.isimateri2').load('MateriOrganPencernaan/kerongkongan.php');
            }else if(menu == "lambung"){
              $('.isimateri2').load('MateriOrganPencernaan/lambung.php');
            }else if(menu == "ususbesar"){
              $('.isimateri2').load('MateriOrganPencernaan/ususbesar.php');
            }else if(menu == "usushalus"){
              $('.isimateri2').load('MateriOrganPencernaan/usushalus.php');
            }
            // }else if(menu == "sistem"){
            //   $('.isimateri2').load('MateriOrganPencernaan/sistemorgan.php');
            else if(menu == "latihan"){
              $('.isimateri2').load('MateriOrganPencernaan/latihanMOP.php');
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