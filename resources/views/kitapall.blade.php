<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style6.css">
	<title>Booklover</title>
    <style type="text/css">
    body{
    margin: 0 auto;
}
.menu{
    background-color: #7da1d4;
    height: 90px;
    margin-top: -15px;
}
.container{
    width: 1140px;
    margin: 0 auto;
}
ul{
    list-style-type: none;
    padding: 25px;
    font-family: Forte;

}
li{
    font-size: 20px;
    color: white;
    display: inline;
    margin-left: 120px; 

}
#bigimg{
    border: 2px solid white;
    background-color: #7da1d4;
    height:550px;
    background-image:url('https://www.brickunderground.com/sites/default/files/styles/blog_primary_image/public/blog/images/iStock-910031442.jpg');
    background-size: cover;
}
#text{
    margin-left: 300px;
    color: white;
    padding-top: 440px;
    font-family: Forte;
    font-size: 30px;
}
.books{
    background-color: white;
    height: 300px;
    border: 1px solid pink;
}
.bookscontainer{
    display: flex;
    justify-content: space-around;
    height: 250px;
    margin-left: 200px;
}
img{
    border-radius: 50%;
    width: 40%;
    height: 60%;
}
.name{
    color: #b5375b;
}
.contact{
    width: 1350px;
    height: 1000px;
    background-color: #7da1d4;
    margin-top: -20px;
}
.inp{
    color: #b5375b;
    font-size: 30px;
    text-align: center;
}
form { max-width:420px; margin:30px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
</style>
</head>
<body>
	<div class="menu">
		<div class="container">
			<ul>
				<li id="paratheses" style="color:orange">&#62&#60</li>
				<li><a href="#" id = "button" onmouseover="change_color()" onmouseout="color_back()"> {{__('lang.home')}}</a></li>
				<li><a href="#" id = "button1" onmouseover="change_color1()" onmouseout="color_back1()">{{__('lang.sections')}}</a></li>
				<li><a href="#" id = "button2" onmouseover="change_color2()" onmouseout="color_back2()">{{__('lang.buy')}}</a></li>
			</ul>
		</div>
	</div>
	<div class="middle">
		<div id="bigimg" onmouseover="second_img()" onmouseout="first_img()">
			<h3 id="text" onmouseover="change_color()" onmouseout="color_back()">{{__('lang.quote')}}<h3>
		</div>
    </div>
    <div class="books">
    	<div class="bookscontainer">
    		<div class="photo">
    			<img src="https://mpng.subpng.com/20180407/jpq/kisspng-book-flat-design-books-5ac984c5e9ef33.3004996215231561659582.jpg">
    			<div class="name">
    			<p onclick="page1()">{{__('lang.mbooks')}}</p>
    		</div>
    		</div>	
    		<div class="photo">
    			<img src="https://mpng.subpng.com/20180407/jpq/kisspng-book-flat-design-books-5ac984c5e9ef33.3004996215231561659582.jpg">
    			<div class="name">
    			<p onclick="page2()">{{__('lang.lbooks')}}</p>
    		</div>
    			<p id="p2"></p>
    		</div>	
    		<div class="photo">
    			<img src="https://mpng.subpng.com/20180407/jpq/kisspng-book-flat-design-books-5ac984c5e9ef33.3004996215231561659582.jpg">
    			<div class="name">
    			<p onclick="page3()">{{__('lang.tbooks')}}</p>
    		</div>
    		</div>	
    		<div class="photo">
    			<img src="https://mpng.subpng.com/20180407/jpq/kisspng-book-flat-design-books-5ac984c5e9ef33.3004996215231561659582.jpg">
    			<div class="name">
    			<p onclick="page4()">{{__('lang.rbooks')}}</p>
    		</div>
    		</div>	
    	</div>	
    </div>
          <div class="contact">
          <h1 class="inp">{{__('lang.form')}}</h1>
             <form class="myform">
                <label for="fname">{{__('lang.name')}}</label><br>
                <input type="text" id="fname" name="fname" class="feedback-input"><br>
                <label for="e-mail">{{__('lang.e-mail')}}</label><br>
                <input type="text" id="e-mail" name="e-mail" class="feedback-input"><br>
                 <label for="address">{{__('lang.address')}}</label><br>
                <input type="text" id="address" name="address" class="feedback-input">
                  <p>{{__('lang.choose')}}</p>
                <input type="radio" id="1" name="choose">
                <label for="male">{{__('lang.willbuy')}}</label><br>
                <input type="radio" id="2" name="choose">
                <label for="female">{{__('lang.willsell')}}</label><br>
                
                <label for="bname">{{__('lang.autor')}}</label><br>
                <input type="text" id="bname" name="bname" class="feedback-input"><br>
                <label for="bookname">{{__('lang.bookname')}}</label><br>
                <input type="text" id="bookname" name="bookname" class="feedback-input"><br>
                <label for="amount">{{__('lang.amount')}}</label><br>
                <input type="text" id="amount" name="amount" class="feedback-input">

              <input type="submit" href="{{ url('/mail') }}" value="{{__('lang.submit')}}">
              @csrf
           </form>
             <?php
    echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
    echo 'Select the file to upload.';
    echo Form::file('image');
    echo Form::close();
    ?>  
    </div>

    
<script type="text/javascript">
    	function second_img(){
    		document.getElementById("bigimg").style.backgroundImage="url('https://images.indianexpress.com/2020/04/books_1200.jpg')";
    	}
    	function first_img(){
    		document.getElementById("bigimg").style.backgroundImage="url('https://www.brickunderground.com/sites/default/files/styles/blog_primary_image/public/blog/images/iStock-910031442.jpg')"
    	}
    	function change_color(){
    		document.getElementById("text").style.color = "#161240";
    	}
    	function color_back(){
    		document.getElementById("text").style.color = "white";
    	}

      function change_color(){
        document.getElementById("button").style.color = "blue";
      }
      function color_back(){
        document.getElementById("button").style.color = "white";
      }
      function change_color1(){
        document.getElementById("button1").style.color = "blue";
      }
      function color_back1(){
        document.getElementById("button1").style.color = "white";
      }
        function change_color2(){
        document.getElementById("button2").style.color = "blue";
      }
      function color_back2(){
        document.getElementById("button2").style.color = "white";
      }

       const btn = document.getElementById('button');

btn.addEventListener('click', () => window.scrollTo({
  top: 100,
  behavior: 'smooth',
}));
         
         const btn2 = document.getElementById('button1');

btn2.addEventListener('click', () => window.scrollTo({
  top: 500,
  behavior: 'smooth',
}));

const btn3 = document.getElementById('button2');

btn3.addEventListener('click', () => window.scrollTo({
  top: 1000,
  behavior: 'smooth',
}));

  function page1() {
      window.location.href = "http://localhost/Laravel_project2/public/kitapall/page1";
    }  
     function page2() {
      window.location.href = "http://localhost/Laravel_project2/public/kitapall/page2";
    }
     function page3() {
      window.location.href = "http://localhost/Laravel_project2/public/kitapall/page3";
    }
     function page4() {
      window.location.href = "http://localhost/Laravel_project2/public/kitapall/page4";
    }
    </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script>
      $('#myform').submit(function(e){
          e.preventDefault();
          $.ajax({
            type: 'post',
            url:"{{ url('form_submit')}}",
            data: $('#myform').serialize(),
            success: function(response){
              console.log(response)
              alert("Data Saved");
            },
            error: function(error){
              console.log(error)
              alert("Data Not Saved");
            }
          });
});
    </script>
      

</body>
</html>