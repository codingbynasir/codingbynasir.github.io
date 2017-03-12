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

<?php
$emailFrom = $_POST['emailFrom'];
$emailto = $_POST['emailto'];
$subject = $_POST['subject'];

$message = $_POST['message'];

$header = "From:" . $emailFrom . " \r\n";
$header .= "Cc:" . $emailFrom . " \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($emailto, $subject, $message, $header);

if ($retval == true) {?>
	<div class="container">
		<p class="alert alert-success"><span class="glyphicon glyphicon-thumbs-up"></span> Message successfully sent</p>
		<strong>From:</strong> <?php echo $emailFrom; ?><br/>
		<strong>To:</strong> <?php echo $emailto; ?><br/>
		<strong>Subject:</strong> <?php echo $subject; ?><br/>
		<strong>Body:</strong> <?php echo $message ?><br/>
		<a href="index.php" title=""><span class="glyphicon glyphicon-arrow-left"></span>Go back</a>
	</div>
<? } else {
	echo '<p class="container text-center alert alert-danger">Message could not be sent...</p>';
	echo '<div class="container">
		<a href="index.php" title=""><span class="glyphicon glyphicon-arrow-left"></span> Go back</a>
	</div>';
}
?>

   </body>
</html>