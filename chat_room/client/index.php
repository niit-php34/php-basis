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
				<li><strong>Username</strong>:<span>Hello !!!</span></li>
				<li><strong>Username</strong>:<span>Hello !!!</span></li>
				<li><strong>Username</strong>:<span>Hello !!!</span></li>
				<li><strong>Username</strong>:<span>Hello !!!</span></li>
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
					$('.room-view ul').append(`<li><strong>${data.username}</strong>:<span>${data.message}</span></li>`);
					$('.message').val('');
				})
			});
		}else{
			//khi ma user bang null
		}
	});
</script>
</body>
</html>