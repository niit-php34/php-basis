<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>

<script type="text/javascript">
	function load(){
		var xhttp= new XMLHttpRequest();
		//bat su kien response tra ve
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status==200){
				//console.log(this.responseText);
				//var jsonData = JSON.parse(this.responseText);
				var dataDom = document.getElementById("data");
				dataDom.innerHTML = this.responseText;
			}
		}
		xhttp.open('GET', 'data/data.json');
		//var form = new FormData();
		//form.append('key','value');
		//xhttp.send(form);
		xhttp.send();
	}

	jQuery(document).ready(function($) {
		function load2(){
			$.ajax({
				url: 'data/data.json',
				type: 'GET',
				dataType: 'json'
			})
			.done(function(data) {
				$('#data').html(JSON.stringify(data));
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		}

		$('#btn-load').click(function(event) {
			load2();
		});
	});

</script>
<body>
	<p id="data"></p>
	<button  id="btn-load">Call data</button>
</body>
</html>