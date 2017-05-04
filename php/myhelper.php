
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>REGISTER TO RUN</title>
 <script type="text/javascript" src="http://jadran.sdsu.edu/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jq.js"></script>
<link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>
		<div id="formcontainer">
			<div id="formmain">
			<a href="index.html">
      <img id="home_icon" src="images/Home_Button.png" alt="Go back home" height="50px" width="50px" />
      <span id="goback"> Go back </span>
      </a><br />
      <h4>Tell us a little about you.</h4>

			<form name="myForm" method="post" id="formmy" action="processrequest.php" enctype="multipart/form-data">
  				<fieldset>
  					<legend class="leg">
  						Personal Details
  					</legend>
  					<table>

  					<tr>
  						<td>
                First name:* 
                <br />
                <input id="ipfname" type="text" name="firstname" placeholder="Brad" autofocus pattern="^[a-zA-Z ,.'-]{2,30}$" value="<?php echo $_POST["firstname"];?>">
                <br />
                <div class="reqmsg" id="fsname">This field is required</div>
              </td>
  						<td>
                Middle Name: 
                <br />
                <input id="ipmidname" type="text" name="middlename" placeholder="Sam" pattern="^[a-zA-Z ,.'-]{2,30}$" value="<?php echo $_POST["middlename"]; ?>">
                <br />
                <div class="reqmsg" id="midname">Accepts 2 to 30 alphabets , . ' -</div>
              </td>
  						<td>
                Last Name:* 
                <br />
                <input id="iplsname" type="text" name="lastname" placeholder="Smith" pattern="^[a-zA-Z ,.'-]{2,30}$" required value="<?php echo $_POST["lastname"];?>">
                <br />
                <div class="reqmsg" id="lsname">This field is required</div>
                
              </td>
            </tr>
  					
            <tr>
  						<td>
                Gender:*
                <br />
                <input type="radio" name="gender" <?php if (isset($_POST["gender"]) && $_POST["gender"]=="male") echo "checked";?> value="male" required> Male
  						  <input type="radio" name="gender" <?php if (isset($_POST["gender"]) && $_POST["gender"]=="female") echo "checked";?> value="female"> Female
                <div class="reqmsg" id="genrad">Select an option</div> 
              </td>
  						<td>
                Date of Birth* 
                <br />
                <input id="ipdob" type="date" name="dob" required placeholder="MM/DD/YYYY" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" value="<?php echo $_POST["dob"];?>">
                <div class="reqmsg" id="dobdiv">This field is required</div>
              </td>
              <td>
                Upload your photo* 
                <br />
                <input id="ippic" type="file" name="file" required>
                <div class="reqmsg" id="picdiv">This field is required</div>
              </td>
  					</tr>

  				</table>

  				</fieldset>	
  				
  			<fieldset>
  				<legend class="leg">
  						Address
  				</legend>
  				<table>

  					<tr>
  						<td colspan="3">
              Address1* 
              <br />
              <input id="addr1" type="text" name="add1" placeholder="Enter an address" style="width:100%;" required value="<?php echo $_POST["add1"];?>">
              <div class="reqmsg" id="adddiv1">This field is required</div>
  					</tr>
  					<tr>
  						<td colspan="3">
              Address2 
              <br />
              <input type="text" name="add2" placeholder="Apartment number" style="width:100%;" value="<?php echo $_POST["add2"];?>">
  					  <div class="reqmsg" id="adddiv2">Not required</div>
            </tr>
  					<tr>
  						<td>
              City*
              <br/>
              <input id="cityip" type="text" name="city" style="width:100%;" placeholder="San Diego" required value="<?php echo $_POST["city"];?>">
              <div class="reqmsg" id="citydiv">This field is required</div>
              </td>
  						<td>State*<br />
  <input list="states" id="ipstates" name="states" placeholder="Select State" style="width: 100%;" required value="<?php echo $_POST["states"];?>">
  <datalist id="states">
  <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option> <option value="CO">Colorado</option> <option value="CT">Connecticut</option> <option value="DE">Delaware</option><option value="DC">District Of Columbia</option> <option value="FL">Florida</option> <option value="GA">Georgia</option> <option value="HI">Hawaii</option> <option value="ID">Idaho</option> <option value="IL">Illinois</option> <option value="IN">Indiana</option> <option value="IA">Iowa</option> <option value="KS">Kansas</option> <option value="KY">Kentucky</option> <option value="LA">Louisiana</option> <option value="ME">Maine</option> <option value="MD">Maryland</option> <option value="MA">Massachusetts</option> <option value="MI">Michigan</option> <option value="MN">Minnesota</option> <option value="MS">Mississippi</option> <option value="MO">Missouri</option> <option value="MT">Montana</option> <option value="NE">Nebraska</option> <option value="NV">Nevada</option> <option value="NH">New Hampshire</option> <option value="NJ">New Jersey</option> <option value="NM">New Mexico</option> <option value="NY">New York</option> <option value="NC">North Carolina</option> <option value="ND">North Dakota</option> <option value="OH">Ohio</option> <option value="OK">Oklahoma</option> <option value="OR">Oregon</option> <option value="PA">Pennsylvania</option> <option value="RI">Rhode Island</option> <option value="SC">South Carolina</option> <option value="SD">South Dakota</option> <option value="TN">Tennessee</option> <option value="TX">Texas</option> <option value="UT">Utah</option> <option value="VT">Vermont</option> <option value="VA">Virginia</option> <option value="WA">Washington</option> <option value="WV">West Virginia</option> <option value="WI">Wisconsin</option> <option value="WY">Wyoming</option> 
  </datalist> <div class="reqmsg" id="statediv">Please select a state</div>
  </td>
  
  						<td>
                ZIP*
                <br />
                <input id="zipid" type="text" name="zipcode" size="5" maxlength="5" style="width:100%;" pattern="[0-9]{5}" placeholder="xxxxx" required value="<?php echo $_POST["zipcode"];?>">
                <div class="reqmsg" id="zipdiv">Enter correct zipcode</div>
              </td>
  					</tr>
				</table>
			</fieldset>	
  			
  			<fieldset>
  				<legend class="leg">
  						Contact Information
  				</legend>
  				<table style="width: auto;">

  					<tr>
  						<td>EMAIL ID*</td>
  						<td>
              <input id="mailid" type="email" name="email" placeholder="abc@def.com" required value="<?php echo $_POST["email"];?>">
              <div class="reqmsg" id="maildiv">Enter correct mailid</div></td>
  					</tr>
  					<tr>
  						<td>Primary Phone*</td>
  						<td> 
              (<input id="mobi1" class="mob" type="text" name="mob1" placeholder="xxx" pattern="[0-9]{3}"  size="3" maxlength="3" required value="<?php echo $_POST["mob1"];?>">)
              <input id="mobi2" class="mob" type="text" name="mob2" placeholder="xxx" pattern="[0-9]{3}" size="3" maxlength="3" required value="<?php echo $_POST["mob2"];?>">-
              <input id="mobi3" class="mob" type="text" name="mob3" placeholder="xxxx" pattern="[0-9]{4}" size="4" maxlength="4" required value="<?php echo $_POST["mob3"];?>">
              <div class="reqmsg" id="phonediv">Enter valid phone number</div></td>
              </td>
  					</tr>
  					
				</table>
			</fieldset>	
  			
  			<fieldset>
  				<legend class="leg">
  						Marathon details
  				</legend>
  				<table style="width: auto;">

  					<tr>
  						<td>Medical Conditions</td>
  						<td><textarea name="medical" rows="4" cols="50" value="<?php echo $_POST["medical"];?>"></textarea></td>
  					</tr>
  					<tr>
  						<td>Experience Level*</td>
  						<td><input type="radio" name="explevel" <?php if (isset($_POST["explevel"]) && $_POST["explevel"]=="expert") echo "checked";?> value="expert" required> Expert
  								   <input type="radio" name="explevel" <?php if (isset($_POST["explevel"]) && $_POST["explevel"]=="experienced") echo "checked";?> value="experienced"> Experienced
  								   <input type="radio" name="explevel" <?php if (isset($_POST["explevel"]) && $_POST["explevel"]=="novice") echo "checked";?> value="novice"> Novice
                     <div class="reqmsg" id="expdiv">Select an option</div>
              </td>
  					</tr>
  					<tr>
  						<td>Category*</td>
  						<td><input type="radio" name="category" <?php if (isset($_POST["category"]) && $_POST["category"]=="teen") echo "checked";?> value="teen" required> Teen
  								   <input type="radio" name="category" <?php if (isset($_POST["category"]) && $_POST["category"]=="adult") echo "checked";?> value="adult"> Adult
  								   <input type="radio" name="category" <?php if (isset($_POST["category"]) && $_POST["category"]=="senior") echo "checked";?> value="senior"> Senior
                     <div class="reqmsg" id="catdiv">Select an option</div>
              </td>
  					</tr>
				</table>
			</fieldset>
          
		<div class="phperr">
<?php
$fname = $mname = $lname = $gender = $dob = $photo = $add1 = $add2 = $city = $state = $zip = $email = $phone = $medical = $explevel = $category = "";
$err=0;
$erp=0;

        

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$UPLOAD_DIR = 'tasvir/';
    $COMPUTER_DIR = '/home/jadrn032/public_html/proj3/tasvir';
    $photo = $_FILES['file']['name'];
    
    if(file_exists("$UPLOAD_DIR".$photo))  {
        echo "<b>Warning: the file $photo already exists on the server</b><br />\n";
        }
    elseif($_FILES['file']['error'] > 0) {
      $erro = $_FILES['file']['error'];  
        echo "Error Code: $erro ";
  if($erro == 1) {
    echo "The file was too big to upload, the limit is 2MB<br />"; }
        } 
    elseif(exif_imagetype($_FILES['file']['tmp_name']) != IMAGETYPE_JPEG) {
        echo "ERROR, not a valid image file<br />";   
        }
## file is valid, copy from /tmp to your directory.        
    else { 
        move_uploaded_file($_FILES['file']['tmp_name'], "$UPLOAD_DIR".$photo);
        echo "</br >\n"; 
    }



  if (empty($_POST["firstname"])) {
    echo "<style type='text/css'> #fsname { visibility: visible; } </style>";
  	$err=1; }
  else {
	$fname = test_input($_POST["firstname"]);
 }

  $mname = test_input($_POST["middlename"]);

  if (empty($_POST["lastname"])) { 
  	echo "<style type='text/css'> #lsname { visibility: visible; } </style>";
  	$err=1;
  }
  else {
  $lname = test_input($_POST["lastname"]); }
  
  if (empty($_POST["gender"])) { 
  	echo "<style type='text/css'> #genrad { visibility: visible; } </style>";
  	$err=1;
  }
  else {
  	$gender = test_input($_POST["gender"]); }
  
  if (empty($_POST["dob"])) { 
  	echo "<style type='text/css'> #dobdiv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
	$dob = test_input($_POST["dob"]); }

  $photo = test_input($photo);

  
  if (empty($_POST["add1"])) {
  	echo "<style type='text/css'> #adddiv1 { visibility: visible; } </style>";
  	$err=1;
  }
  else {
	$add1 = test_input($_POST["add1"]); }
  
  $add2 = test_input($_POST["add2"]);
  
  if (empty($_POST["city"])) {
  	echo "<style type='text/css'> #citydiv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
	$city = test_input($_POST["city"]); }
   
  if (empty($_POST["states"])) {
  	echo "<style type='text/css'> #statediv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
  	$state = test_input($_POST["states"]); }
  
  if (empty($_POST["zipcode"])) {
  	echo "<style type='text/css'> #zipdiv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
	$zip = test_input($_POST["zipcode"]); 
  if(!is_numeric($zip)) {
    echo "<style type='text/css'> #zipdiv { visibility: visible; } </style>";
  }
}
  
  if (empty($_POST["email"])) {
  	echo "<style type='text/css'> #maildiv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
	$email = test_input($_POST["email"]); 
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<style type='text/css'> #maildiv { visibility: visible; } </style>";
    }
}
  
  if (empty($_POST["mob1"]) || empty($_POST["mob2"]) || empty($_POST["mob3"])) {
  	echo "<style type='text/css'> #phonediv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
  	$phone = test_input($_POST["mob1"].$_POST["mob2"].$_POST["mob3"]);
  if(!is_numeric($phone)) {
    echo "<style type='text/css'> #phonediv { visibility: visible; } </style>";
  }
     }
  
  $medical = test_input($_POST["medical"]);
  
  if (empty($_POST["explevel"])) {
  	echo "<style type='text/css'> #expdiv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
	$explevel = test_input($_POST["explevel"]); }
  
  if (empty($_POST["category"])) {
  	echo "<style type='text/css'> #catdiv { visibility: visible; } </style>";
  	$err=1;
  }
  else {
  	$category = test_input($_POST["category"]); }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($err != 1) { 
  popdb();
}
else
{
	echo "There is a mistake in form. Please correct.";
}


function popdb() {
	global $fname, $mname, $lname, $gender, $dob, $photo, $add1, $add2, $city, $state, $zip, $email, $phone, $medical, $explevel, $category, $erp;

	$db = get_db_handle();

    $sql = "SELECT * FROM MarReg WHERE firstname = '".$fname."' AND middlename = '".$mname."' AND lastname = '".$lname."' AND gender = '".$gender."' AND dob = '".$dob."';";
##echo "The SQL statement is ",$sql;    
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) > 0) {
        echo "Seems like you have already enrolled. This record appears to be a duplicate.";
        exit;
        }
##OK, duplicate check passed, now insert
    $sql = "INSERT INTO MarReg (firstname,middlename,lastname,gender,dob,photo,address1,address2,city,state,zip,email,phone,medical,explevel,category) VALUES ('".$fname."', '".$mname."', '".$lname."', '".$gender."', '".$dob."', '".$photo."', '".$add1."', '".$add2."', '".$city."', '".$state."', '".$zip."', '".$email."', '".$phone."', '".$medical."', '".$explevel."', '".$category."');";
##echo "The SQL statement is ",$sql;    
    mysqli_query($db, $sql);
    $how_many = mysqli_affected_rows($db);
    echo("There were $how_many rows affected");
    $erp=1;
    close_connector($db);

}
function get_db_handle() {
    $server = 'opatija.sdsu.edu:3306';
    $user = 'jadrn032';
    $password = 'pipe';
    $database = 'jadrn032';   
    if(!($db = mysqli_connect($server, $user, $password, $database))) {
        echo "SQL ERROR: Connection failed: ".mysqli_error($db);
        }
    return $db; 
    }        
       
function close_connector($db) {
    mysqli_close($db);
 }
if ($erp == 1)
{
  echo "<style> #formcontainer { display: none; } </style>";
}

?>

</div>
<div id="butcontainer">
          <div class="reqmsg" id="useravail">&nbsp;</div>
          <input id="subbut" class="but" type="submit" value="Submit">
          <input class="but" type="reset" value="Clear">
          </div>
</form>
      </div>
    </div>

	 
</body>

</head>
</html>
