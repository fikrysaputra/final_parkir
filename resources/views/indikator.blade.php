<!DOCTYPE html>

<head>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.3" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            </style>
    
    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Jumlah Kendaraan Dalam 1 Bulan terakhir"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "Motor dan Mobil",
		dataPoints: [      
			{ y: 368, label: "TUCH" },
			{ y: 345,  label: "GKU" },
			{ y: 234,  label: "FIK" },
			{ y: 126,  label: "FIT" },
			{ y: 40,  label: "Gedung K" },
			{ y: 124, label: "Gedung D" },
			{ y: 456,  label: "MSU" },
		]
	}]
});

chart.render();
registredMemberCount($connection);
}
</script>
</head>

<body>
@extends('layouts.navigator')
@section('content')

<main>
<div class="w3-light-grey">
    <div class="w3-container w3-white w3-center">Indikator Kendaraan</div>
    <div class="w3-container w3-red w3-center" style="width:37%">FIK 30/80</div>
    <div class="w3-container w3-blue w3-center" style="width:40%">FIT 40/100</div>
    <div class="w3-container w3-green w3-center" style="width:25%">GKU 100/400</div>
    <div class="w3-container w3-grey w3-center" style="width:75%">TUCH 75/100</div>
    <div class="w3-container w3-pink w3-center" style="width:50%">Gedung D 15/30</div>
    <div class="w3-container w3-cyan w3-center" style="width:50%">Gedung D 30/60</div>
    <div class="w3-container w3-yellow w3-center" style="width85%">MSU 120/140</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</main>

@endsection
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script src="../assets/js/material-dashboard.min.js?v=3.0.3"></script>
</body>

</html>