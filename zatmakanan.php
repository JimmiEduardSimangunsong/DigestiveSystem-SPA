<div class="latar">
<a class="tag" ><p>MATERI</p></a>
<div class="materi">
    <div class="zatmakanan">
        <div class="boxisi">
            <div class="isinya">
                <img src="gambar/left.png" alt=""> 
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya">
                <p>KARBOHIDRAT<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya">
                <p>LEMAK<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya">
                <p>PROTEIN<p> 
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya">
                <p>VITAMIN<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya">
                <p>MINERAL<p>   
            </div>
        </div>
        <div class="boxisi">
            <div class="isinya">
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