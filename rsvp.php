<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="user-scalable=yes width=device-width"/>
		<link rel="stylesheet" 
			type="text/css" 
			href="weeding.css"/>
		<link rel='stylesheet'
			type='text/css'
			href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Open+Sans:400,700'/>
		<link rel="icon" 
      type="image/png" 
      href="favicon.png"/>
		<title> RSVP </title>
	</head>
	<body id="rsvp">
			<header class="clearfix wrapper">
				<div id="topnav" class="blue">
					<ul>
						<li>
							<a href="index.html"><img src="images/home.png"/>HOME</a>
						</li>
						<li>
							<a href="rsvp.php" class="active"><img src="images/rsvp.png"/>RSVP</a>
						</li>
						<li>
							<a href="info.html"><img src="images/info.png"/>DETAILS</a>
						</li>
						<li>
						<a href="#"><img src="images/reg.png"/>REGISTRY</a>
						</li>
					</ul>
				</div> <!-- END topnav -->

				<div class="invert">
					<div id="title">
						<h1> Fred & Ginger </h1>
						<h2> Répondez S'Il Vous Plait </h2>
					</div> <!-- END Title -->
				</div> <!-- END invert -->
					
			</header>

			<section id="respond" class="clearfix wrapper">

				<?php include('form.php') ?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

					<div class="info">
						<h6> Kindly RSVP ASAP.</h6>
						<br/>
						<label for="name1"> Full Name(s): </label>
						<span class="error"> <?php echo $nameErr ?> </span>
						<br/>
						<input type="text" name="name1" value="<?php echo $name1;?>" placeholder="Who is in your party?">
					</div>

					<div class="info">
						<label for="email"> Email: </label>
						<span class="error"> <?php echo $emailErr ?> </span>
						<br/>
						<input type="text" name="email" value="<?php echo $email;?>" placeholder="In case we need to contact you">
					</div>

					<div class="info">
						<label for="attend" class="attend"> Will you be attending? </label>
							<span class="error"> <?php echo $attendErr ?> </span>
							<br/>
							<input type="radio" name="attend" 
							<?php if (isset($attend) && $attend=="affirmative") echo "checked";?>
							value="affirmative"><span class="input"> <span class="bold">YES!</span> We are looking forward to sharing in the celebration. </span>
							<br/>
							<input type="radio" name="attend" 
							<?php if (isset($attend) && $attend=="negative") echo "checked";?>
							value="negative"><span class="input">
							<span class="bold">No:</span> We regret that we cannot attend. </span>
					</div>

					<div class="info">
						<label for="comment" class="playfair italic"> A message to the bride and groom: </label>
						<br/>
						<textarea name="comment"><?php echo $comment; ?></textarea>
					</div>

					<div class="info">
						<input type="submit" name="submit" value="Répondez" class="submit">
					</div>
					<br/>
					<?php echo $success;?>
				</form>

				<a class="attribution whitebg" href="http://www.sarahmadden.com/"> PHOTO: SARAH MADDEN </a>
			
			</section>

			<footer class="wrapper clearfix">
				<div class="footbg">
					<p class="left"> We are excited. We hope you can make it! </p>
					<p class="right"> Website handmade by <a href="http://www.fredastaire.com"> Fred</a>. Fixed by <a href="http://www.gingerrogers.com/"> Ginger</a>.</p>
				</div> <!-- END footbg -->
			</footer>
	</body>
</html>