<html>

   <head>
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sending HTML email using PHP</title>
      <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </head>

   <body>
   <h1 class="well container text-center">Send dummy mail and get fun</h1>
   <div class="container panel panel-info">
	  <div class="panel-body">
	    <form action="email.php" method="POST">
		  <div class="form-group">
		    <label for="emailFrom">Email From: </label>
		    <input type="email" name="emailFrom" class="form-control" id="emailFrom" placeholder="Enter email from">
		  </div>
		  <div class="form-group">
		    <label for="emailto">Email To: </label>
		    <input type="email" name="emailto" class="form-control" id="emailto" placeholder="Enter email to">
		  </div>
		  <div class="form-group">
		    <label for="subject">Subject: </label>
		    <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter subject">
		  </div>
		  <div class="form-group">
		    <label for="message">Message: </label>
		    <textarea name="message" id="message" class="form-control" placeholder="Enter message" cols="30" rows="5"></textarea>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Send</button>
		</form>
	  </div>
	</div>
   </body>
   </html>