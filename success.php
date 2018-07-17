<?php

ob_start();

session_start();

if(!empty($_SESSION['customer_id'])){

    

    require_once 'dbconnect.php';

    include('s3-signed-urls.php'); 

    

    //echo "session ID : ".$_SESSION['customer_id'];



    $query2 ="SELECT Transaction_ID, email FROM information WHERE customer_id = '" . $_SESSION['customer_id'] . "'";

    $results2 = $mysqli->query($query2);

    //var_dump($results2);exit;



    //echo "<pre>";print_r($results2);



    foreach($results2 as $trans) {

        $transactionId = $trans['Transaction_ID'];

        $email = $trans['email'];

        //$dob = $trans['dob'];

        //var_dump($trans);

    }

    //echo "mail - ".$email."- dob : ".$dob;

    if($transactionId != '0' && $transactionId != ''){

        ?>

        <!DOCTYPE html>

        <html lang="en">

          <head>

            <meta charset="utf-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <title>Success</title>

        	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

            <!-- Bootstrap -->

            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"/> -->

            <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet"/> -->

            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

            

            <link href="assets/css/style.css" rel="stylesheet"/>

          </head>

          <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-58T72PG');</script>

<!-- End Google Tag Manager -->

          <body>

            <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58T72PG"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

          

                <header class="header">

                      <div class="container">

                        <div class="row">

                          <div class="col-md-12">

                            <div class="col-md-8 col-sm-8 col-xs-8 logo">

                               <img class="web-logo" src="images/35-gto-process-header_desktop.png" />

                               <img class="mobile-logo" src="images/35-gto-process_mobile.png" />

                             </div>

                            <div class="col-md-4 col-sm-4 col-xs-4 logo text-right pull-right gto-logo">

                              <img src="images/logo-sis3.png"/>

                            </div>

                          </div>

                        </div>

                      </div>

                    </header>		

        			<div class="container">

        				<div class="row">

        					<div class="col-md-12 form-title text-center">

        						<h2>Order Confirmation</h2>

        					</div>

        				</div>

        				<div class="row">

        					<div class="Order-page">

        						<?php 

        			  			$query ="SELECT * FROM order_information WHERE customer_id = '" . $_SESSION['customer_id'] . "'";

        						$results = $mysqli->query($query);

                    

        						foreach ($results as $orderval) {

                                    $transactionID = $orderval['vpc_TransactionNo'];

                                    $orderID = $orderval['vpc_OrderInfo'];

                                    $message = $orderval['vpc_Message'];    

                                    













                                 ?>

        						<div class="Order-page-inner col-md-12 col-xs-12">

        						<div class="TopID col-md-3 col-xs-6">

        							<span>Transaction ID#</span>

        							<span><?php echo $orderval['vpc_TransactionNo']; ?></span>

        						</div>

        						<div class="TopID col-md-3 col-xs-6">

        							<span>Order ID#</span>

        							<span><?php echo $orderval['vpc_OrderInfo']; ?></span>

        						</div>

        						<div class="TopID col-md-6 col-xs-12 text-right">

        							<span>Amount of Fees</span>

        							<span>Rs.500</span>

        						</div>

        						</div>

        						<?php 



                                    



                                                /*$to      = $email;

                                                $subject = "Thank you for GTO registration latest";

                                                $message = "GTO Transaction ID :".$transactionID."- Order ID : ".$orderID; 

                                                $headers = "From: http://gto.sisindia.com"; 

                                                $headers = "Content-type: text/html; charset=iso-8859-1\r\n";

                                                'X-Mailer: PHP/' . phpversion();

                                                mail($to, $subject, $message, $headers);

                                                if(mail($to, $subject, $message, $headers))

                                                {

                                                    //echo "success";

                                                    return;

                                                }*/

                                                

                            } 

    



                                ?>

        						

        						<div class="Order-contect col-md-12 col-xs-12">

        							<!-- <div class="print-icon"><a onclick="PrintDoc()"><i class="fa fa-print"></i></a></div> -->

        							<p class="text-center">Thank you for registering for GTO Process. We will contact you shortly to confirm your examination details. <br>

                                    Get your SIS prospectus by clicking below button </p>

        							<!-- <p class="click-here text-center">Click here to<span><i class="fa fa-long-arrow-down"></i></span></p> -->

        								<div class="Download-button text-center">

        									<?php 

        										$query ="SELECT oneclick FROM information WHERE customer_id = '" . $_SESSION['customer_id'] . "'";

        										$results = $mysqli->query($query);

        										//echo "<pre>";print_r($query);exit;

                                                



                                                

        										foreach($results as $onclick) {

        										    //var_dump($onclick['oneclick']);



        										?>

        									<?php /*<a class="btnclick" href="assets/fpdf/html_table/ex.php">										

        										<?php if(empty($onclick['oneclick'])){ ?>

        											<button class="btn-sucess" onclick="ga('send', 'event', 'success', 'Click/Touch', 'Download Brocher');" type="button">Download</button>

        										<?php }else{ ?>

        											<button class="btn-sucess" onclick="ga('send', 'event', 'success', 'Click/Touch', 'Download Brocher');" disabled type="button">Download</button>

        										<?php } ?>

        										<form class="success-form" method="post" id="success-form">

        											<input type="hidden" class="btnclick" id="btnclick" value="<?php echo $onclick['oneclick']; ?>">					

        											<input type="hidden" class="btnclickdata" name="oneclick" value="">

        										</form>

        									   

        									</a> */ ?>





                                            <a class="btnclick" target="_blank" href="<?php echo getSignedUrl($awsAccessKey, $secretKey, $bucket, 'SIS_Prospectus.pdf','5'); ?>">                                       

                                                <?php if(empty($onclick['oneclick'])){ ?>

                                                    <button class="btn-sucess" onclick="ga('send', 'event', 'success', 'Click/Touch', 'Download Brocher');" type="button">Download</button>



                                                <?php }else{ ?>

                                                    <button class="btn-sucess" onclick="ga('send', 'event', 'success', 'Click/Touch', 'Download Brocher');" disabled type="button">Download</button>

                                                <?php } ?>

                                                <form class="success-form" method="post" id="success-form">

                                                    <input type="hidden" class="btnclick" id="btnclick" value="<?php echo $onclick['oneclick']; ?>">                    

                                                    <input type="hidden" class="btnclickdata" name="oneclick" value="">

                                                </form>

                                               

                                            </a> 



                                             

        									<?php } ?>

        								</div>



                                         <div class="link-expire-text"><strong>(Only valid for next four minutes.)</strong></div>



        							<div class="success_message">

        					         <p><i class="fa fa-check fa-1x" aria-hidden="true"></i>Payment Received.</p>

        					        </div>

        						</div>

        					</div>

        				</div>

        				

        			</div>

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          </body>

          </html>

          <script type="text/javascript">

        $(document).ready(function(){

        	var isAlreadytClicked  = false;

            $('.btn-sucess').on('click',function() {

            	$('.btn-sucess').val("click");

            });

        	var getval = $('#btnclick').val();

        	console.log(getval);

        	if(getval != ''){

        		$('.btn-sucess').attr('disabled', 'disabled');

        	}else{

        		$(".btn-sucess").removeAttr("disabled");

        	}

        });

        </script>

        <?php

        }

        else

        {

            header('location:home.php');    

        }

}

else

{

    header('location:home.php');    

}



/*

if($message == "Approved")

{



?>    

     <script type="text/javascript">

        $(document).ready(function(){

            

            $.ajax({

                    type: "POST",

                    data:values,

                    url: "http://demo15.web.dev1.bl/mail.php",

                    success: function(data){

                        if(data == 'success'){

                          return true;

                          alert('code is in ajax call');

                        }

                    }

                });

     });

    </script>

<?php    

}



/* if(isset($email))

{

    $to      = $email;

    $subject = "Thank you for GTO registration"; 

    $message = "GTO Transaction ID : ".$transactionID." - Oder ID = ". $orderID; 

    $headers = "From: http://demo15.web.dev1.bl/"; 

    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";

    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers));

}

*/

  

$to      = $email;



$subject = "GTO Registration";



$message = "Dear Candidate,"."\r\n\n".

"Thank you for applying in the GTO Program. We have received your application. "."\r\n\n".

"We will contact you shorty with details regarding your written test."."\r\n\n".

"Payment Summary"."\r\n".

"Order ID : ".$orderID."\r\n".

"Date  : ".date("F j, Y")."\r\n".

"Amount Received : 500"."\r\n\n".

"If you have any further questions. Please write to us at gto@sisindia.com"."\r\n\n".

"SIS GTO Program Suppport Team";



$headers = "From: gto@sisindia.com"; 

 //$headers = "Content-type: text/html; charset=iso-8859-1\r\n";

 //'X-Mailer: PHP/' . phpversion();



 mail($to, $subject, $message, $headers); 

 echo "thanks for sending mail";

 echo " testing mail";



?>