<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';

  //include 'index.php';
  
  if(!empty($_POST['customer_id'])){
        $query ="SELECT * FROM information WHERE  customer_id = '" . $_POST['customer_id'] . "'";
      $results = $mysqli->query($query);
      
      //var_dump($results['customer_id']);
       $rowcount=mysqli_num_rows($results);
      // var_dump($rowcount);
      if($results && $rowcount > 0){
          foreach($results as $res){
              //var_dump($res);
              $full_name = $res['full_name'];
              $gender = $res['gender'];
              $mobile_no = $res['mobile_no'];
              $category = $res['category'];
              $nationality = $res['nationality'];
              $father_name = $res['father_name'];
              $mother_name = $res['mother_name'];
              $email = $res['email'];
              $street_address = $res['street_address'];
              $ctv_name = $res['ctv_name'];
              $district = $res['district'];
              $selected_state = $res['state'];
              $pincode = $res['pincode'];
              $graduation_main_sub = $res['graduation_main_sub'];
              $postgraduation_main_sub = $res['postgraduation_main_sub'];
              $anyother_certi_main_sub = $res['anyother_certi_main_sub'];
              $graduation_year_of_passing = $res['graduation_year_of_passing'];
              $postgraduation_year_of_passing = $res['postgraduation_year_of_passing'];
              $anyother_certi_year_of_passing = $res['anyother_certi_year_of_passing'];
              $graduation_percentage_of_marks = $res['graduation_percentage_of_marks'];
              $postgraduation_percentage_of_marks = $res['postgraduation_percentage_of_marks'];
              $anyother_certi_percentage_of_marks = $res['anyother_certi_percentage_of_marks'];
              $graduation_name_of_board = $res['graduation_name_of_board'];
              $postgraduation_name_of_board = $res['postgraduation_name_of_board'];
              $anyother_certi_name_of_board = $res['anyother_certi_name_of_board'];
			  
			 /* 
			 July 5, 2018 Mobile Pre fill issue fix - Sudhir Kumar */
			 $graduation_main_sub_mobile = $res['graduation_main_sub'];
              $postgraduation_main_sub_mobile = $res['postgraduation_main_sub'];
              $anyother_certi_main_sub_mobile = $res['anyother_certi_main_sub'];
              $graduation_year_of_passing_mobile = $res['graduation_year_of_passing'];
              $postgraduation_year_of_passing_mobile = $res['postgraduation_year_of_passing'];
              $anyother_certi_year_of_passing_mobile = $res['anyother_certi_year_of_passing'];
              $graduation_percentage_of_marks_mobile = $res['graduation_percentage_of_marks'];
              $postgraduation_percentage_of_marks_mobile = $res['postgraduation_percentage_of_marks'];
              $anyother_certi_percentage_of_marks_mobile = $res['anyother_certi_percentage_of_marks'];
              $graduation_name_of_board_mobile = $res['graduation_name_of_board'];
              $postgraduation_name_of_board_mobile = $res['postgraduation_name_of_board'];
              $anyother_certi_name_of_board_mobile = $res['anyother_certi_name_of_board'];
			  /* complete */
              $exam_selected_state = $res['exam_state'];
              $exam_district = $res['exam_district'];
                $saveMode = "add";
          }
          $saveMode = "add";
      } else {
          $saveMode = "add";
      }
  } else {
      $saveMode = "add";
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HOME | GTO Process</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"/> -->
    <link href="assets/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet"/> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>

    <link href="assets/css/style.css" rel="stylesheet"/>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-58T72PG');</script>
<!-- End Google Tag Manager -->
<style>
	.required_field{ border: 1px solid red}
	.error_inputer{ display:none; color: red;}



ul.head-banner {
    list-style-type: none;
    padding: 0;
    margin: 0;
    float: left;
    width: 100%;
    margin-top: 16px;
	margin-bottom:20px;
}
ul.head-banner li {
    border: 1px solid #dedede;
    margin-top: -1px;
    background-color: #d9e9f7;
    padding: 12px;
    text-decoration: none;
    font-size: 16px;
    color: black;
    display: block;
    position: relative;
    text-align: center;
}
ul.head-banner li .hightlight_box {
  background-color: #cb3750;
    padding: 6px 10px;
    color: #fff;
}
ul.head-banner li .red_text_only {
  color: #cb3750;
}

.close {
    cursor: pointer;
    position: absolute;
    /* top: 50%; */
    top: 21px;
    right: 0%;
    padding: 12px 16px;
    transform: translate(0%, -50%);
    background-color: #cb3750;
    color: #fff;
    opacity: 1;
}
.close:hover {background: #487db3; color: #fff;}


</style>

  </head>
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


<ul class="head-banner">
  <li>

    Welcome to the Graduate Trainee Officer (GTO) Cadre. SIS is inviting all Graduates and above to be a part of the 35th GTO Batch. We have a simple and efficient recruitment process.<br> The first stage comprises of the Written Test. 
The details are as under:<br><br>

    <strong>Written Test Dates :</strong> <strong class="hightlight_box">22 &amp; 29 July'18</strong><br><br>
     
    Please fill the Application Form with correct and relevant information.<br>

<span class="red_text_only">This Application Form will be <strong>ONLY</strong> accepted after successful payment.<br>

At completion, Kindly download our <strong class="red_text_only">SIS GTO Prospectus</strong>.</span><br>
    <span class="close">×</span>
  </li>

</ul>
    </header>
    <noscript>
    	<div class="javascript_check" style="border:1px solid red; padding: 10px; text-align:center; font-size:17px; color: red; border:1px solid red; margin-top:20px; font-weight:bold;">
    		<blink>Sorry, Your browser does't have support JavaScript !</blink>
    	</div>
    </noscript>




    <!--<div class="Custom-overlay">
      <div class="Custom-popup">
        <div class="Custom-content">
		<div class="Close-button"><i class="fa fa-times"></i></div>
          <ul class="Custom-popup-text">
          <li>The payment fee of Rs. 500/- for the GTO prospectus is non-refundable.</li></br>
          <li>After successful payment, on order confirmation page, you will be provided with a link specially generated for you to download the GTO prospectus.</p></br>
          <li>Kindly note, the download link can be accessed only ONCE.</li></br>
          <li>SIS India is not responsible for refund in any case of webpage error or power failure during the payment process.</li></br>
          <li>No physical delivery of the prospectus will be made to you.</li>
        </ul>
        </div>
      </div>
    </div> -->
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title"> Terms and Conditions</h4>
      </div>
      <div class="modal-body">
       <ul>
          <li>The payment fee of Rs. 500/- for the GTO prospectus is non-refundable.</li></br>
          <li>After successful payment, on order confirmation page, you will be provided with a link specially generated for you to download the GTO prospectus.</p></br>
          <li>Kindly note, the download link can be accessed only ONCE.</li></br>
          <li>SIS India is not responsible for refund in any case of webpage error or power failure during the payment process.</li></br>
          <li>No physical delivery of the prospectus will be made to you.</li>
      </div>
    </div>

  </div>
</div>
      <div class="container">
        <form method="post" class="gto_form" id="gto_form">
        <div class="row">
          <div class="col-md-12 form-title text-center">
            <h2>GTO Application Form</h2>
          </div>

        </div>
        <p class="required_header"><em>*</em> Required Field</p>
          <div class="row">
          <div class="col-md-12">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true" aria-controls="collapseOne">
               Personal Information
              </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
              <div class="col-md-12">
                <div class="form-group col-md-4">
                  <p class="required_filed"><em>*</em></p>
                  <input type="text" class="form-control full_name" maxlength="50" name="full_name" placeholder="Full name" value="<?=$full_name?>">
                </div>
                <div class="form-group form-select col-md-4">
                  <p class="required_filed"><em>*</em></p>
                <select id="Select" class="form-control gender required" name="gender"  placeholder="Gender">

                  <option vlaue="" disabled selected>Gender</option>
                  <option vlaue="male" <?php if($gender == "Male"){ echo 'selected="selected"'; } ?>>Male</option>
                  <option vlaue="female" <?php if($gender == "Female"){ echo 'selected="selected"'; } ?>>Female</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                  <p class="required_filed"><em>*</em></p>
                  <!-- <input type="date" class="form-control dob" name="dob" placeholder="Date of Birth"> -->
                  <div class='date'>
                        <input type='text' id='datetimepicker1' name="dob" class="form-control" placeholder="Date of Birth" />
                  </div>
                </div>
                </div>
               <div class="col-md-12">
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <input type="text"  class="form-control mno" name="mobile_no" maxlength="10"  placeholder="Mobile No." value="<?=$mobile_no?>">
                </div>
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <!-- July 5 Category field change Sudhir Kumar 
				<input type="text" class="form-control category" name="category" maxlength="100"  placeholder="Category" value="<? //=$category?>">-->
				
				 <select id="Select" class="form-control category required" name="category"  placeholder="Category">

                  <option vlaue="" disabled selected>Category</option>
                  <option vlaue="General" <?php if($category == "General"){ echo 'selected="selected"'; } ?>>General</option>
                  <option vlaue="Others" <?php if($category == "Others"){ echo 'selected="selected"'; } ?>>Others</option>
                </select>
				
				
                </div>
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <input type="text"  class="form-control nationality" name="nationality" maxlength="15"  placeholder="Nationality" value="<?=$nationality?>">
                </div>
				</div>
				<div class="col-md-12">
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <input type="text"  class="form-control" name="father_name" maxlength="50"  placeholder="Father's Name" value="<?=$father_name?>">
                </div>
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <input type="text"  class="form-control" name="mother_name" maxlength="50" placeholder="Mother's Name" value=<?=$mother_name?>>
                </div>
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <input type="email" class="form-control email" name="email" placeholder="Email" value="<?=$email?>">
                </div>
				</div>
              </div>
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="false" aria-controls="collapseTwo">
               Correspondence Address
              </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
			  <div class="col-md-12">
                <div class="form-group col-md-8">
                <p class="required_filed"><em>*</em></p>
                <input type="text" class="form-control street_address" name="street_address" maxlength="200"  placeholder="Street Address" value="<?=$street_address?>">
                </div>
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <input type="text" class="form-control district" name="district"  placeholder="District" value="<?=$district?>">
                </div>

				</div>
				<div class="col-md-12">
                <div class="form-group form-select col-md-4">
                  <p class="required_filed"><em>*</em></p>
                 <!-- <select id="Select" class="form-control state" name="state"  placeholder="State">
                  <option value="" disabled selected>State</option>
                  <option>Male</option>
                  <option>Female</option>
                </select> -->
                <select id="Select" class="selectstate state form-control" name="state" onChange="getState(this.value);">
                  <option value="" disabled selected>State</option>
                  <?php
                  $query ="SELECT * FROM state ORDER BY name";
                  $results = $mysqli->query($query);
                  foreach($results as $state) {
                  ?>

                  <option <?php if($state['name'] == $selected_state) { echo 'selected="selected"'; } ?> value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
                  <?php
                  }
                  ?>

                </select>
                </div>
                 <div class="form-group form-select col-md-4">
                  <p class="required_filed"><em>*</em></p>
                <!-- <select id="Select" class="form-control ctv_name" name="ctv_name" placeholder="City/Town/Village">
                  <option value="" disabled selected>City/Town/Village</option>
                  <option>Male</option>
                  <option>Female</option>
                </select> -->
                <select id="city-list" class="ctv_name form-control" name="ctv_name" >
                  <option value="">City/Town/Village</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <p class="required_filed"><em>*</em></p>
                <input type="text" class="form-control" name="pincode" maxlength="6" placeholder="Pincode" value="<?=$pincode?>">
                </div>
				</div>
              </div>
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="false" aria-controls="collapseTwo">
               Detail of Educational Qualification
              </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <div class="table-responsive table-web">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                    <th>Qualification</th>
                    <th>Course Name</th>
                    <th>Year of Passing</th>
                    <th>% of marks</th>
                    <th>Name of Board/University</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td><p class="required_fileds">Graduation or equivalent<em>*</em></p></td>
                    <td><input class="form-control" maxlength="50" type="text" name="graduation_main_sub" placeholder="Math" value="<?=$graduation_main_sub?>"/></td>
                    <td><input class="form-control" type="number" name="graduation_year_of_passing" min="2000" max="2018" placeholder="2001" value="<?=$graduation_year_of_passing?>" /></td>
                    <td><input class="form-control" maxlength="3" type="text" name="graduation_percentage_of_marks" placeholder="60" value="<?=$graduation_percentage_of_marks?>"/></td>
                    <td><input class="form-control" maxlength="50" type="text" name="graduation_name_of_board"   placeholder="Delhi University" value="<?=$graduation_name_of_board?>"/></td>
                    </tr>
                    <tr>
                    <td >Post-Graduation or Equivalent</td>
                    <td><input class="form-control inputer_one" id="inputer_1_1" maxlength="50" type="text" name="postgraduation_main_sub" placeholder="Math" value="<?=$postgraduation_main_sub?>"/><span class="error_inputer" id="inputer_error_1_1">This field is required</span></td>
                    <td><input class="form-control inputer_one" id="inputer_1_2" type="number" name="postgraduation_year_of_passing" min="2000" max="2018" placeholder="2001" value="<?=$postgraduation_year_of_passing?>"/><span class="error_inputer" id="inputer_error_1_2">This field is required</span></td>
                    <td><input class="form-control inputer_one" id="inputer_1_3" maxlength="3" type="text" name="postgraduation_percentage_of_marks" placeholder="60" value="<?=$postgraduation_percentage_of_marks?>"/><span class="error_inputer" id="inputer_error_1_3">This field is required</span></td>
                    <td><input class="form-control inputer_one" id="inputer_1_4" maxlength="50" type="text" name="postgraduation_name_of_board" placeholder="Delhi University" value="<?=$postgraduation_name_of_board?>"/><span class="error_inputer" id="inputer_error_1_4">This field is required</span></td>
                    </tr>
                    <tr>
                    <td>Any Other Certification</td>
                    <td><input class="form-control inputer_two" id="inputer_2_1" maxlength="50" type="text" name="anyother_certi_main_sub" placeholder="Math" value="<?=$anyother_certi_main_sub?>"/><span class="error_inputer" id="inputer_error_2_1">This field is required</span></td>
                    <td><input class="form-control inputer_two" id="inputer_2_2" type="number" name="anyother_certi_year_of_passing" min="2000" max="2018" placeholder="2001" value="<?=$anyother_certi_year_of_passing?>"/><span class="error_inputer" id="inputer_error_2_2">This field is required</span></td>
                    <td><input class="form-control inputer_two" id="inputer_2_3" maxlength="3" type="text" name="anyother_certi_percentage_of_marks" placeholder="60" value="<?=$anyother_certi_percentage_of_marks?>"/><span class="error_inputer" id="inputer_error_2_3">This field is required</span></td>
                    <td><input class="form-control inputer_two" id="inputer_2_4" type="text" maxlength="50" name="anyother_certi_name_of_board" placeholder="Delhi University" value="<?=$anyother_certi_name_of_board?>"/><span class="error_inputer" id="inputer_error_2_4">This field is required</span></td>
                    </tr>
                  </tbody>
                 </table>
                </div>

				<!-- mobile view inner tabing start -->

                <div id="accordionNew" class="table-mobile">
                <h2 class="title">Qualification</h2>
                  <ul>
                    <li>
                      <div class="panel-heading" role="tab" id="headingNew1">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionNew" href="" aria-expanded="false" aria-controls="collapseNew1">
                        <i class="Downarrow fa fa-chevron-down"></i><i class="rightarrow fa fa-chevron-right"></i><p class="required_filed">Graduation or equivalent <em>*</em></p>
                        </a>
                      </div>
                      <div id="collapseNew1" class="panel-collapse" role="tabpanel" aria-labelledby="headingNew1">
                        <div class="panel-body-new">
                        <div class="first1">Course Name</div>
                        <div class="first2"><input type="text" maxlength="50" name="graduation_main_sub_mobile" placeholder="Math" value="<?=$graduation_main_sub_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">Year of Passing</div>
                        <div class="first2"><input type="number" name="graduation_year_of_passing_mobile" min="2000" max="2018" placeholder="2001" value="<?=$graduation_year_of_passing_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">% of marks</div>
                        <div class="first2"><input type="text" maxlength="3" name="graduation_percentage_of_marks_mobile" placeholder="60" value="<?=$graduation_percentage_of_marks_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">Name of Board/University</div>
                        <div class="first2"><input type="text" maxlength="50" name="graduation_name_of_board_mobile" placeholder="Delhi University"  value="<?=$graduation_name_of_board_mobile?>" /></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="panel-heading" role="tab" id="headingNew2">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionNew" href="" aria-expanded="false" aria-controls="collapseNew2">
                        <i class="Downarrow fa fa-chevron-down"></i><i class="rightarrow fa fa-chevron-right"></i>Post-Graduation or Equivalent
                        </a>
                      </div>
                      <div id="collapseNew2" class="panel-collapse" role="tabpanel" aria-labelledby="headingNew2">
                        <div class="panel-body-new">
                        <div class="first1">Course Name</div>
                        <div class="first2"><input type="text" maxlength="50" name="postgraduation_main_sub_mobile" placeholder="Math" value="<?=$postgraduation_main_sub_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">Year of Passing</div>
                        <div class="first2"><input type="number" name="postgraduation_year_of_passing_mobile" min="2000" max="2018" placeholder="2001" value="<?=$postgraduation_year_of_passing_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">% of marks</div>
                        <div class="first2"><input type="text" maxlength="3" name="postgraduation_percentage_of_marks_mobile" placeholder="60" value="<?=$postgraduation_percentage_of_marks_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">Name of Board/University</div>
                        <div class="first2"><input type="text" maxlength="50" name="postgraduation_name_of_board_mobile" placeholder="Delhi University" value="<?=$postgraduation_name_of_board_mobile?>" /></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="panel-heading" role="tab" id="headingNew3">
                        <a class="collapsed" role="button"  data-toggle="collapse" data-parent="#accordionNew" href="" aria-expanded="false" aria-controls="collapseNew3">
                        <i class="Downarrow fa fa-chevron-down"></i><i class="rightarrow fa fa-chevron-right"></i>Any Other Certification
                        </a>
                      </div>
                      <div id="collapseNew3" class="panel-collapse" role="tabpanel" aria-labelledby="headingNew3">
                        <div class="panel-body-new">
                        <div class="first1">Course Name</div>
                        <div class="first2"><input type="text" maxlength="50" name="anyother_certi_main_sub_mobile" placeholder="Math" value="<?=$anyother_certi_main_sub_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">Year of Passing</div>
                        <div class="first2"><input type="number" name="anyother_certi_year_of_passing_mobile" min="2000" max="2018" placeholder="2001" value="<?=$anyother_certi_year_of_passing_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">% of marks</div>
                        <div class="first2"><input type="text" maxlength="3" name="anyother_certi_percentage_of_marks_mobile" placeholder="60" value="<?=$anyother_certi_percentage_of_marks_mobile?>" /></div>
                        </div>
                        <div class="panel-body-new">
                        <div class="first1">Name of Board/University</div>
                        <div class="first2"><input type="text" maxlength="50" name="anyother_certi_name_of_board_mobile" placeholder="Delhi University" value="<?=$anyother_certi_name_of_board_mobile?>" /></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>

				<!-- mobile view inner tabing end -->

              </div>
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="false" aria-controls="collapseTwo">
               Center for Written Test
              </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfour">
              <div class="panel-body">
                <div class="form-group form-select col-md-4">
                  <p class="required_filed"><em>*</em></p>
                <!-- <select id="Select" class="form-control exam_state"  name="exam_state"  placeholder="State">
                  <option>Male</option>
                  <option>Female</option>
                </select> -->
                <select id="Select2" class="state form-control exam_state" name="exam_state">
                  <option value="" disabled selected>State</option>
                  <?php
                  $query ="SELECT * FROM state ORDER BY name";
                  $results = $mysqli->query($query);
                  foreach($results as $state) {
                  ?>

                  <option <?php if($state["id"] == $exam_selected_state){ echo 'selected="selected"'; } ?> value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
                  <?php
                  }
                  ?>

                </select>
                </div>
                <div class="form-group col-md-4">
                  <p class="required_filed"><em>*</em></p>
                <input type="text" class="form-control exam_district" maxlength="100"  name="exam_district"  placeholder="District" value="<?=$exam_district?>">
                </div>
              </div>
            </div>
            </div>
            </div>

            <div class="Terms_content">
               <p class="required_terms"><em>*</em></p>
               <input class="Term_checkbox" type="checkbox" value=""/>
               <p>I Accept <a class="terms" data-toggle="modal" data-target="#myModal"<!--onclick="openRemarks()"-->Terms and Conditions</a></p>
            </div>
           </div>
           <div class="col-md-12 text-center" id="form">
              <tr>
                <td><div id="imagediv"><img src="phpcaptchaex/captcha.php?num=<?php echo rand();?>" id="captchaimg"/><input type="text" name="captcha" id="captcha" maxlength="6" size="6"/></div><p class="footer-text">Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</p></td>
              </tr>
            </div>
             <div class="col-md-12 text-center">
              <div class="submit-button">
               <!-- <button type="submit">Submit & Pay Fees</button> -->
               <input type="submit" id="btn_submit" class="btn_submit button"  value="Submit & Pay Fees"/>
              </div>
             </div>
             <div class="col-md-12 Footer_logo text-center">
              <p class="Footer_content"><strong>A Rs.500 application fee is required to submit form <br> This Application Form will be accepted only after succesful payment</strong></p>
                <div class="col-md-6 col-xs-12 col-md-offset-3 text-center">
                  <img src="images/Logo+Axis_Bank2.png" />
                </div>
             </div>
         </div>
         </form>
       </div>
       <input type="hidden" id="save_mode" name="save_mode" value="<?=$saveMode?>" />
       <input type="hidden" id="captcha_val" value="<?php //echo rand();?>">



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php /*<script src="assets/js/bootstrap.min.js"></script> */ ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.js"></script>


     <script src="assets/jquery-validation/dist/jquery.validate.js"></script>
    <!-- <script src="assets/jquery-validation/dist/jquery.validate.min.js"></script> -->
    <script src="assets/jquery-validation/dist/additional-methods.js"></script>
    <script src="assets/jquery-validation/dist/additional-methods.min.js"></script>

    <script src="assets/js/custom.js"></script>


   <script type="text/javascript">
      $(function () {
          getState($('.selectstate').val());
          //$('#datetimepicker1').datetimepicker();

          $today = new Date();
          //$21yrback = $today.getFullYear() - 21;
          //console.log($21yrback);
          //$21yearback = new Date($today);
          var five_years_ago = new Date($today.getFullYear()-5,$today.getMonth(),$today.getDay());
          $21yearback = new Date($today.getFullYear()-21,$today.getMonth(),$today.getDay()); // $today.getDate() - (365*21)
          $35yearback = new Date($today.getFullYear()-35,$today.getMonth(),$today.getDay());
          //$35yearback.setDate($today.getDate() - (365*35));
          console.log($today);
          //console.log(five_years_ago);
          console.log($21yearback);
          console.log($35yearback);

        $yesterday = new Date($today);
        $yesterday.setDate($today.getDate() - 1);

          $('#datetimepicker1').datetimepicker({
                 format: 'DD-MM-YYYY',
                 minDate : $35yearback,
                 maxDate : $21yearback
           });

           $('#datetimepicker1').val('Date of Birth');
      });
      function openRemarks(){
      $('.Custom-overlay').css('display','block');
    }

$(".Close-button").click(function(){
    $('.Custom-overlay').css('display','none');
});
  </script>




<script>
  jQuery( document ).ready(function() {
   var closebtns = document.getElementsByClassName("close");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
});

</script>

  </body>
</html>
<?php ob_end_flush(); ?>


