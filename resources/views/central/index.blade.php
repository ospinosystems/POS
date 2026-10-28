<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'POS') }}</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/table/table.css') }}" rel="stylesheet">

</head>
<body>
	<ul className="list-group">
	  <li className="pointer list-group-item d-flex justify-content-between align-items-center">
	    Enviar Fallas
	    <a href="/setCentralData" target="_blank" className="badge bg-brand badge-pill"> 
	    	<i class="fa fa-send"></i> 
	    </a>
	  </li>

	  <li className="pointer list-group-item d-flex justify-content-between align-items-center">
	    Enviar Gastos
	    <a href="/setGastos" target="_blank" className="badge bg-brand badge-pill"> 
	    	<i class="fa fa-send"></i> 
	    </a>
	  </li>

	  <li className="pointer list-group-item d-flex justify-content-between align-items-center">
	    Enviar Ventas
	    <a href="/setVentas" target="_blank" className="badge bg-brand badge-pill"> 
	    	<i class="fa fa-send"></i> 
	    </a>
	  </li>
	</ul>
</body>
</html>