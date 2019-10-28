<?php
function cardShow($id){
    echo '<div class="card my-3 bg-secondary col-" >
				  <img src="';
    echo "https://picsum.photos/id/$id/800/800";echo '" class="card-img-top" alt="...">
				  <div class="card-body">
				  	<h2>заголовок текста</h2>
				    
				    <p class="card-text">Необычно холодная весна нынешнего года была неблагоприятной для пчел, даже, можно сказать, опасной. Весной колонии пчел, чтобы вырастить полноценное, работоспособное потомство, нужно много пыльцы и меда. К сожалению, холодная погода стояла в апреле, заморозки испортили и начало мая. А значит, все это неизбежно скажется и на ценах. «МК-Эстония» разбиралась в проблемах местных пчеловодов.</p>
				    <p class="card-text">Пчеловодство Эстонии переживает непростые времена. Холодная, капризная весна вынуждает пчеловодов внимательно следить за пасекой, ведь пчелы сейчас нуждаются в особой заботе. Обычно пчелы вылетают из ульев уже в начале марта в первые же солнечные дни.</p>
				    <p class="card-text">Но весенние месяцы текущего года оказались не только холодными, но и скупыми на пыльцу – даже мать-и-мачеха и одуванчики запоздали с цветением более чем на три недели. Из-за холода пчелы очень редко покидали ульи, чтобы собрать пыльцу и нектар с раннецветущих растений. Истощение запасов пищи грозит голодной смертью колониям пчел. По данным Эстонского союза пчеловодов, немалая часть пчелиных семей нашей страны уже погибла из-за голода.</p>
				  </div>
				</div>';
}
function headerShow($headerTitle){

    echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row mb-3">
			<div class="col-sm-12 bg-dark text-center text-success py-4"><h1>';
    echo $headerTitle."</h1></div></div>";
}