<!DOCTYPE html>
<html>
<head>
	<title>{{__('lang.tbooks')}}</title>
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
		<h1>{{__('lang.tbooks')}}</h1>
		<p>{{__('lang.histq')}}</p>

		<h2>{{__('lang.b1')}}</h2>
		<img src="https://img3.labirint.ru/rc/2647e7496a26508b539e37d3c69e84cf/220x340/books41/409379/cover.jpg?1569234398">
		<p class="desc">{{__('lang.autor')}} - </p>
		<p class="desc">{{__('lang.price')}}2000tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b2')}}</h2>
		<img src="https://img3.labirint.ru/rc/075d2b66dfb4fde50c746414a16b17bb/246x330/books47/462047/cover.jpg?1563792560">
		<p class="desc">{{__('lang.autor')}}Людвиг Стомма</p>
		<p class="desc">{{__('lang.price')}}2200tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b3')}}</h2>
		<img src="https://adebiportal.kz/images/w350-cct-si/upload/iblock/ecd/ecd9a55aea7ebb18397e4b4aa934ec51.jpg">
		<p class="desc">{{__('lang.autor')}} Ілияс Есенберлин</p>
		<p class="desc">{{__('lang.price')}} 2500tg</p>
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