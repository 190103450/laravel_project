<!DOCTYPE html>
<html>
<head>
	<title>{{__('lang.lbooks')}}</title>
	<style type="text/css">
		button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
	</style>
</head>
<body>
<div class="menu">
	<div class="container">
		<h1>{{__('lang.lbooks')}}</h1>
		<p>{{__('lang.litq')}}</p>

		<h2>{{__('lang.b1')}}</h2>
		<img src="http://ic.pics.livejournal.com/lylabon/48408063/191269/191269_800.jpg">
		<p class="desc">{{__('lang.autor')}}Джэйн Эйр</p>
		<p class="desc">{{__('lang.price')}} 2500tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b2')}}</h2>
		<img src="https://buklya.com/uploads/top100/1.jpg">
		<p class="desc">{{__('lang.autor')}} Михаил Булгаков</p>
		<p class="desc">{{__('lang.price')}} 2200tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b3')}}</h2>
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg4aVYoEhnp8d7Ry7iwOzJmitt6obFxHMCDc2GioVPpdwJnjWSu8BAPszhtLIEorLHnUI&usqp=CAU">
		<p class="desc">{{__('lang.autor')}}Эрнест Хэмингуэй</p>
		<p class="desc">{{__('lang.price')}}2300tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b4')}}</h2>
		<img src="https://adebiportal.kz/images/w260-cct-si/upload/iblock/8f7/8f7a10141aa4bcf16d9d853b95e9b639.png">
		<p class="desc">{{__('lang.autor')}} Шарбану Құмарова</p>
		<p class="desc">{{__('lang.price')}} 1000tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
	</div>
</div>
<script type="text/javascript">
	function home(){
		window.location.href = "http://localhost/Laravel_project2/public/kitapall";
	}
</script>
</body>
</html>