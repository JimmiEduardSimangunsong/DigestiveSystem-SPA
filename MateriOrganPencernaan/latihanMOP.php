


    <div class="start_btn"><button id="tombol">Mulai Latihan</button></div>
    
      
    <!-- Tempat ini isi dari lembar latihan -->







     

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
          $('.isimateri2').load('latihan/lembarlatihanMOP.php');
        }

  });
}); 

</script>