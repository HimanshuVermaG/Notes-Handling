<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/welcome.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

	<title>Chat System</title>


	<link rel="stylesheet" href="style.css" type="text/css" />


	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>
<body>
	 
<div class="wrapper">
        <div class="sidebar">
            <h2>Notes Handling</h2>
            <ul>
                <li><a href="welcome.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="userprofile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="about.php"><i class="fas fa-address-card"></i>About Us</a></li>
                <li><a href="contact_form.php"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="upload.php"><i class="fas fa-upload"></i>Upload File</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

	<div class="centeralised">
	
	<div class="chathistory"></div>

	<div class="chatbox">
		
		<form action="" method="POST">
			
			<textarea class="txtarea" id="message" name="message"></textarea>

		</form>

	</div>

	</div>


	

	<script>


		$(document).ready(function(){
			loadChat();
		});


		
		$('#message').keyup(function(e){


			var message = $(this).val();

			if( e.which == 13 ){

				$.post('handlers/ajax.php?action=SendMessage&message='+message, function(response){
					
					loadChat();
					$('#message').val('');

				});

			}

		});



		function loadChat()
		{
			$.post('handlers/ajax.php?action=getChat', function(response){
				
				$('.chathistory').html(response);

			});
		}


		setInterval(function(){
			loadChat();
		}, 2000);

	</script>


</body>
</html>