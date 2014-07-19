<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ghetto Yo!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">




    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="font-size:100px">What's up playa</h1>
                    <div class="intro-text">
						
						

						
                        <form action="twilio/sendnotifications.php" name=sms1 method="post">
			<input type="text" hidden value="what's good my playa" name=quoterecieved>
			<div class=number style=padding-top:20px;><input id="phonenumber" type=text name="phonenumber" style="width: 150px;" placeholder="Enter those digits">
				<input type="submit" name="submit" value="Hit it!" id="submit" style="width:90px;margin-left:3px;color:purple">
				</form>		
							
													
                        <hr class="star-light">
                        <span class="skills">Hit up a homie with a ghetto text message</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



	<footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - Hansen Chang
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/freelancer.js"></script>

</body>

</html>
