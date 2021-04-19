<!DOCTYPE html>
<html>
<head>
	<title>{{__('lang.mbooks')}}</title>
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
		<h1>{{__('lang.mbooks')}}</h1>
		<p>{{__('lang.motivq')}}</p>

		<h2>{{__('lang.b1')}}</h2>
		<img src="https://lh3.googleusercontent.com/proxy/45qQ8BEJdP0wqJKbjT7DpGlSFQNmCUWM3n3ohjP0o4aE9PRoulmdSmhLBmN90hkhzo9GTZTi379Fv1ts__OA6iwNyt9K-yiWyBxO2J6ST39RG6nB2pfBt5_l9JwXtxi8EchAVKZch5R_Jxmq">
		<p class="desc">{{__('lang.autor')}}Shiv Khera</p>
		<p class="desc">{{__('lang.price')}}3000tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b2')}}</h2>
		<img src="https://everydaypower.com/wp-content/uploads/2018/04/how-successful-people-think.jpg">
		<p class="desc">{{__('lang.autor')}} John Maxwell</p>
		<p class="desc">{{__('lang.price')}} 4000tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b3')}}</h2>
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE-QuQzBRpE08e9_eF9YX8pNI9UgOcbVsMiw&usqp=CAU">
		<p class="desc">{{__('lang.autor')}}Stephen Covey</p>
		<p class="desc">{{__('lang.price')}} 2500tg</p>
		<button onclick="home()">{{__('lang.buy2')}}</button>
		<hr>
		<h2>{{__('lang.b4')}}</h2>
		<img src="https://a9p9n2x2.stackpathcdn.com/wp-content/blogs.dir/1/files/2018/11/414JfiBCutL._SX327_BO1204203200_.jpg">
		<p class="desc">{{__('lang.autor')}}Michelle Obama</p>
		<p class="desc">{{__('lang.price')}}3200tg</p>
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