<!DOCTYPE html>
<html>
	
<head>
	<title>
		Lettethead
	</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
		body{
			margin: 0;
			padding: 0;
			font-size: 'Roboto', sans-serif;
		}
		@page {
		size: A4;
		margin: 0;
		}
		@media print {
		html, body {
			width: 210mm;
			height: 297mm;
		}
		}
		
	
	</style>
	<style>
		table, td, th {
			border: 1px solid black;
			
		}
		
		table {
			width: 100%;
			border-collapse: collapse;
		}
	  </style>
	
</head>
<body  onload="window.print()">
		<div style="position: absolute; width: 210mm;
		height: 297mm;">
		<img style="position: fixed; top: 0; width: 100%; height: auto;" src="{{asset('letterhead/letterhade-head.jpg')}}" alt="" srcset="">
		<div style="width: 85%; margin: auto; margin-top: 220px !important;padding-top : 121px;">
		 <!-- Content goes here!  -->
		 <p> {!! $text !!}</p>
		 
		</div>
	
		<img style="position: fixed; bottom: 0; width: 100%; height: auto;" src="{{asset('letterhead/letterhade-footer.jpg')}}" alt="" srcset="">
		</div>
</body>

</html>
