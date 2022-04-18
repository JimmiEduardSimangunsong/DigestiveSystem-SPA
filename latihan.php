
<div class="latar">
        <a class="tag" ><p>PETUNJUK</p></a>
    <div class="materi">

    <div class="start_btn"><button id="tombol">Mulai Kuis</button></div>
    
      

        
         <!-- akhir latihan -->
  
    </div>
</div>
    <div class="home">
        <a class="wrap"></a>
    </div>

   
    
    

         
    
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

      $('.start_btn').click(function (e) { 
          e.preventDefault();

          var menu =  $(this).find('button').attr('id');
          console.log(menu)

          if(menu == "tombol"){
              $('.materi').load('latihan/lembarlatihan.php');
            }

      });
    }); 

    </script>