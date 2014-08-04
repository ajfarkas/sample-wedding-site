<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>

		<?php;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name1"])){
				$nameErr = "Who are you?";
			} else {
			   	$name1 = test_input($_POST["name1"]);
			   	if (!preg_match("/^[a-zA-Z\D ]*$/", $name1)) {
			   		$nameErr = "Just names, no numbers.";
			   	}
		   	}
		 	if (empty($_POST["email"])){
		 		$emailErr = "How should we contact you?";
		 	} else {
				$email = test_input($_POST["email"]);
				if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
					$emailErr = "We need a real address to spam.";
				}
			}
			if (empty($_POST["comment"])){
				$commentErr = "";
			} else {
				$comment = test_input($_POST["comment"]);
			}
			if (empty($_POST["attend"])){
				$attendErr = "This is the RSVP part!";
			} else {
			  $attend = test_input($_POST["attend"]);
			}
		}

		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}

		function spamcheck($field) {
		  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
		  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
		    return TRUE;
		  } else {
		    return FALSE;
		  }
		}

		if (isset($_POST["submit"])){
			if (isset($_POST["name1"])){
			if (preg_match("/^[a-zA-Z\D ]*$/", $name1)) {
				if (isset($_POST["email"])){
					$mailcheck = spamcheck($_POST["email"]);
					if ($mailcheck==FALSE){ //do nothing
					} else {
						if (isset($_POST["attend"])){
							$subject = "weeding RSVP";
							$name1 = $_POST["name1"];
							$attend = $_POST["attend"];
							$comment = $_POST["comment"];
							$message = $name1 . "\r\n" . $email . "\r\n" . $attend . "\r\n" . $comment;
							$email = $_POST["email"];
							$message = wordwrap($message, 70, "\r\n");
							mail("sarahandaj831@yahoo.com", $subject, $message, "From: none@email.com\n");
							$success = '<div class="confirm">Thanks for your response!</div>';
						}
					}
				}
			}}
		}
		?>

	</body>
</html>