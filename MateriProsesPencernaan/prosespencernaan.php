
<div class="latar">
    <a class="tag" ><p>MATERI</p></a>
        <div class="back">
          <div class="kembali"></div>
        </div>
        <div class="materi">
            <center><iframe width="860" height="400" src="https://www.youtube.com/embed/8gvvB9POcVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><center>
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