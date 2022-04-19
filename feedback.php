
<div class="latar">
        <a class="tag" ><p>FeedBack</p></a>
    <div class="materi">

	<div class="container2">    
  <form>    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">Nama Depan</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Nama Belakang</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placeholder="">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Email</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="pencernaan@gmail.com">    
        </div>    
      </div>       
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">  
      <input type="submit" value="Submit">    
    </div>    
  </form>    
</div>  


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

