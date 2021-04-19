<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Best selling</title>		
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>	
    <style type="text/css">
        body{
            display: block;
            box-sizing: border-box;
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>
    <h1>Best selling books</h1>
    <canvas id="myChart" width="200" height="200"></canvas>
</body>
</html>
<script type="text/javascript">
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type:'bar',
    data:{
        labels:['Motivational', 'Literary','Historical','Religious'],
        datasets:[
        {
            label:'Best selling',
            data:[40,20,30,10],
            backgroundColor:[
            '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
            ],

        }
        ]
    },
    options:{
        scales:{
           yAxes:[{
            ticks:{
                beginAtZero: true
            }
           }
           ]


        }
    }
});
</script>