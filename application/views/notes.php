<?php ?>
<html>
<head>
	<title>Notes Ajax Exercise</title>
	<!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function(){
			alert('working');
			$.ajax({
					url: '/notes/getpost/',
					data: " ",
					dataType: 'json',
					success: function(go){
					// console.log(go);
					console.log(go);
					for (var i=0;i<go.length;i++){
						$("#posts").append("<div class='col-xs-6 col-sm-4 boxes'>" + go[i].post + "</div>")
					}
				}
			});
		});
			// $('form').submit(function(){
			// 	var formdata = $("form").serialize();
			// 	$.ajax({
			// 		type: 'post',
			// 		url: '/notes/post/',
			// 		data: formdata,
			// 		datatype: 'json',
			// 		success: function(go){
			// 			// console.log(go);
			// 		var obj = jQuery.parseJSON(go);
			// 		console.log(obj);
			// 		for (i=counter;counter<obj.length;i++){
			// 		$("#posts").append("<div class='col-xs-6 col-sm-4 boxes'>" + obj[i].post + "</div>")
			// 		var counter=i;
			// 			}
			// 		}
			// 	});
			// 	return false;
			
		</script>


		<style type="text/css">
		.boxes {
			border: 1px solid black;
			background-color: yellow;
			box-shadow: 5px 8px 8px 2px;
			padding:50px;
			margin-right: 10px;
			width: 30.3%;
			height:250px;
			font-family: "Comic Sans MS", cursive, sans-serif;
			font-size: 1.2em;
		}

		#notes {
			margin-top: 100px;
		}

		textarea{
			margin-bottom: 10px;
		}

		button {
			margin-left: 74%;
		}

		</style>
</head>
<body>
	<div class="container">
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-8"><h1>My Posts</h1></div>
		  <div class="col-xs-6 col-md-4"></div>
		</div>
		<div class="row">
		  <div class="col-xs-6 col-sm-4 boxes">To Struggle is to learn</div>
		  <div class="col-xs-6 col-sm-4 boxes">Work willing at whatever you do, as though you were working for the Lord rather than for people. Col. 3:23</div>
		  <!-- Optional: clear the XS cols if their content doesn't match in height -->
		  <div id="posts"></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8">
				<form class="form-horizontal">
					 
					    <label for="inputEmail3" class="col-sm-2 control-label">Add new note</label>
					    <div class="col-sm-10">
					      <textarea class="form-control" id="note" name="noteinput"></textarea>
					   
					
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success btn-lg">Post New Note</button>
					      <input type="hidden" name="notepost" value="postit">
					  </div>
</form>
			</div>


		</div>
	</div>
</body>
</html>