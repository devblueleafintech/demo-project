<?php

	ob_start();
	session_start();
	require_once 'dbconnect.php';
	date_default_timezone_set('Asia/Kolkata');
	//echo 111;exit;
	$error = false;
	$query ="SELECT name FROM state WHERE id = '" . $_POST["state"] . "'";
	$results = $mysqli->query($query);
	while($row = $results->fetch_assoc()) {
		$state_selection = $row["name"];
	}
	$querybycity ="SELECT city_name FROM city WHERE id = '" . $_POST["ctv_name"] . "'";
	$resultcity = $mysqli->query($querybycity);
	while($row = $resultcity->fetch_assoc()) {
		$city_selection = $row["city_name"];
	}

	if( isset($_POST) ) {
	    //echo "<pre>";print_r($_POST);exit;
		// prevent sql injections/ clear user invalid inputs
		$full_name = strip_tags($_POST['full_name']);
		//var_dump($full_name);exit;
		$gender = strip_tags($_POST['gender']);
		$dobdate = $_POST['dob'];
		$dob = htmlentities($dobdate);
		//var_dump($dob);
		//var_dump(strtotime($dob));
		//var_dump(date('Y-m-d',strtotime($dob)));exit;
		$email = $_POST['email'];
		$mobile_no = strip_tags($_POST['mobile_no']);
		$category = strip_tags($_POST['category']);
		$nationality = strip_tags($_POST['nationality']);
		$father_name = strip_tags($_POST['father_name']);
		$mother_name = strip_tags($_POST['mother_name']);
		$street_address = strip_tags($_POST['street_address']);
		$ctv_name = $city_selection;
		$district = strip_tags($_POST['district']);
		$state = $state_selection;
		$pincode = strip_tags($_POST['pincode']);
		$graduation_main_sub = strip_tags($_POST['graduation_main_sub']);
		if($graduation_main_sub == ''){
			$graduation_main_sub = strip_tags($_POST['graduation_main_sub_mobile']);
		}
		$graduation_year_of_passing = strip_tags($_POST['graduation_year_of_passing']);
		if($graduation_year_of_passing == ''){
			$graduation_year_of_passing = strip_tags($_POST['graduation_year_of_passing_mobile']);
		}
		$graduation_percentage_of_marks = strip_tags($_POST['graduation_percentage_of_marks']);
		if($graduation_percentage_of_marks == ''){
			$graduation_percentage_of_marks = strip_tags($_POST['graduation_percentage_of_marks_mobile']);
		}
		$graduation_name_of_board = strip_tags($_POST['graduation_name_of_board']);
		if($graduation_name_of_board == ''){
			$graduation_name_of_board = strip_tags($_POST['graduation_name_of_board_mobile']);
		}


		$postgraduation_main_sub = strip_tags($_POST['postgraduation_main_sub']);
		if($postgraduation_main_sub == ''){
			$postgraduation_main_sub = strip_tags($_POST['postgraduation_main_sub_mobile']);
		}
		$postgraduation_year_of_passing = strip_tags($_POST['postgraduation_year_of_passing']);
		if($postgraduation_year_of_passing == ''){
			$postgraduation_year_of_passing = strip_tags($_POST['postgraduation_year_of_passing_mobile']);
		}
		$postgraduation_percentage_of_marks = strip_tags($_POST['postgraduation_percentage_of_marks']);
		if($postgraduation_percentage_of_marks == ''){
			$postgraduation_percentage_of_marks = strip_tags($_POST['postgraduation_percentage_of_marks_mobile']);
		}
		$postgraduation_name_of_board = strip_tags($_POST['postgraduation_name_of_board']);
		if($postgraduation_name_of_board == ''){
			$postgraduation_name_of_board = strip_tags($_POST['postgraduation_name_of_board_mobile']);
		}

		$anyother_certi_main_sub = strip_tags($_POST['anyother_certi_main_sub']);
		if($anyother_certi_main_sub == ''){
			$anyother_certi_main_sub = strip_tags($_POST['anyother_certi_main_sub_mobile']);
		}
		$anyother_certi_year_of_passing = strip_tags($_POST['anyother_certi_year_of_passing']);
		if($anyother_certi_year_of_passing == ''){
			$anyother_certi_year_of_passing = strip_tags($_POST['anyother_certi_year_of_passing_mobile']);
		}
		$anyother_certi_percentage_of_marks = strip_tags($_POST['anyother_certi_percentage_of_marks']);
		if($anyother_certi_percentage_of_marks == ''){
			$anyother_certi_percentage_of_marks = strip_tags($_POST['anyother_certi_percentage_of_marks_mobile']);
		}
		$anyother_certi_name_of_board = strip_tags($_POST['anyother_certi_name_of_board']);
		if($anyother_certi_name_of_board == ''){
			$anyother_certi_name_of_board = strip_tags($_POST['anyother_certi_name_of_board_mobile']);
		}
		$exam_state = strip_tags($_POST['exam_state']);
		$exam_district = strip_tags($_POST['exam_district']);
		if (!$error) {
			if($_POST['save_mode'] == 'add'){
				$res="INSERT INTO information (
    				full_name,gender,dob,email,mobile_no,
    				category,nationality,father_name,
    				mother_name,street_address,
    				ctv_name,district,state,pincode,
    				graduation_main_sub,graduation_year_of_passing,
    				graduation_percentage_of_marks,graduation_name_of_board,
    				postgraduation_main_sub,postgraduation_year_of_passing,
    				postgraduation_percentage_of_marks,postgraduation_name_of_board,
    				anyother_certi_main_sub,anyother_certi_year_of_passing,anyother_certi_percentage_of_marks,
    				anyother_certi_name_of_board,exam_state,exam_district)
    				VALUES ('".$mysqli->real_escape_string($full_name)."','".$gender."',
    					'".date('Y-m-d',strtotime($dob))."','".$email."',
    					'".$mobile_no."','".$category."','".$nationality."','".$father_name."',
    					'".$mother_name."','".$street_address."','".$ctv_name."','".$district."',
    					'".$state."','".$pincode."',
    					'".$graduation_main_sub."','".$graduation_year_of_passing."',
    					'".$graduation_percentage_of_marks."','".$graduation_name_of_board."',
    					'".$postgraduation_main_sub."','".$postgraduation_year_of_passing."',
    					'".$postgraduation_percentage_of_marks."','".$postgraduation_name_of_board."','".$anyother_certi_main_sub."',
    					'".$anyother_certi_year_of_passing."','".$anyother_certi_percentage_of_marks."',
    					'".$anyother_certi_name_of_board."','".$exam_state."',
    					'".$exam_district."')";

    					//var_dump($res);exit;
    			//echo "<pre>";print_r($res);exit;

    			$_SESSION['login_user'] = $username;
    			$result = $mysqli->query($res);

    			$last_id = mysqli_insert_id($mysqli);
    			$_SESSION['customer_id'] = $last_id;

			echo "success";exit;
			}
		}

	}else{
		echo "error";exit;
	}
?>
