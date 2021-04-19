<!DOCTYPE html>
<html>
<head>
	<title>{{__('lang.rbooks')}}</title>
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
		<h1>{{__('lang.rbooks')}}</h1>
		<p>{{__('lang.relq')}}</p>

		<h2>{{__('lang.b1')}}</h2>
		<img src="https://lh3.googleusercontent.com/proxy/W0NFl2sztXRI4W_LVb2HSL0y-P4cMpKeNzBolj3Gmxu69hde3Fl9TTgbaGOAYG0SSPGkgUKXn9EyBMLgvuOK-AULgqmR1UKuuRHQKrn7R0er">
		<p class="desc">{{__('lang.autor')}}Қалмахан Сейітұлы </p>
		<p class="desc">{{__('lang.price')}}1000tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b1')}}</h2>
		<img src="http://kitapal.kz/media/1463603582-30-hadis.png">
		<p class="desc">{{__('lang.autor')}}Асқар Әкімханов</p>
		<p class="desc">{{__('lang.price')}}1800tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b1')}}</h2>
		<img src="https://kitapall.kz/media/1457783527-imani-gul.png">
		<p class="desc">{{__('lang.autor')}}Қайрат Жолдыбайұлы</p>
		<p class="desc">{{__('lang.price')}}1500tg</p>
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