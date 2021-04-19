<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mycharts</title>		
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
    <h1>About online bookshop</h1>
    <canvas id="myChart" width="200" height="200"></canvas>
</body>
</html>
<script type="text/javascript">
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type:'doughnut',
    data:{
        labels:['I like this bookshop', 'Not bad', 'I do not like it'],
        datasets:[
        {
            label:'Doughnut chart',
            data:[40,50,10],
            backgroundColor:[
            'green','orange','red',
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