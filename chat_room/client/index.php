<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
</head>
<body>
	<div class="room-wrapper">
		<div class="room-view">
			<ul>
			</ul>
		</div>

		<div class="room-footer">
			<input type="text" name="" class="message">
			<button class="btn-send">Send</button>
		</div>
	</div>

	<style type="text/css">
	.room-view{
		display: block;
		overflow-y: scroll;
		height: 200px;
		width: 500px;
		border:1px solid #cdcdcd;
	}

	.room-view ul li{
		list-style: none;
	}
</style>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		var username = prompt("What is your username ?");
		if(username!=null){
			//khi ma user khac null
			$('.btn-send').click(function(event) {
				$.ajax({
					url: '../server/insert_msg.php',
					type: 'POST',
					dataType: 'json',
					data: {user_name: username, msg: $('.message').val()},
				})
				.done(function(data) {

					$('.message').val('');
				})
			});

			var last_id = 0;
			setInterval(function(){
				//lay ve tin nhan moi nhat 
				$.ajax({
					url: '../server/list_msg.php?last_id='+last_id,
					type: 'GET',
					dataType: 'json'
				})
				.done(function(resp) {
					if(resp.num>0){
						for(i=0;i<resp.data.length;i++){
							$('.room-view ul').append(`<li><strong>${resp.data[i].username}</strong>:<span>${resp.data[i].message}</span></li>`);
						}
						last_id =resp.data[resp.data.length-1].id ///lay ve last id
					}
				})
			}, 2000);
		}else{
			//khi ma user bang null
		}

	});
</script>
</body>
</html>