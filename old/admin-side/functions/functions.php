<?php  

$page_name = "admin"; 	 	
include('../includes/head.php');
include('../includes/DBconfig.php');


if ($_GET["token"] == 0) {
  
}





//edit user and delete it
elseif ($_GET["token"] == 3) {
	echo "<table class='table'>";
	$get_user = "select * from users ORDER by 1 ";

	$run_user = mysqli_query($con, $get_user);
	$i = 0;
	echo "  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>user id</th>
      <th scope='col'>token</th>
      <th scope='col'>name</th>
      <th scope='col'>email</th>
      <th scope='col'>gender</th>
      <th scope='col'>phone</th>
      <th scope='col'>reg-date</th>
      <th scope='col'></th>
      <th scope='col'></th>
    </tr>
  </thead>"; 	 	 	
	while($row_user = mysqli_fetch_array($run_user)){
		$i = $i +1;
		$token = $row_user['user_token'];
		$user_id = $row_user['user_id']; 
    $f_name = $row_user['f_name'];
    $l_name = $row_user['l_name'];
    $email = $row_user['email'];
    $gender = $row_user['user_gender'];
    $date = $row_user['reg_date'];  
    $phone = $row_user['phone']; 
	echo"
  <tbody>
    <tr>
      <th scope='row'>$i</th>
      <td>$user_id</td>
      <td>$token</td>
      <td>$f_name  $l_name</td>
      <td>$email</td>
      <td>$gender</td>
      <td>$phone</td>
      <td>$date</td>
      <td><a href = 'delete.php?id=$user_id'><button type='button' class='btn btn-danger' name='$i'>supprimer</button></a></td>
      <td><a><button type='button' class='btn btn-info' name='$i'>edit</button></a></td>
    </tr>";}
    echo "
  </tbody>";
  	echo "</table>";}

    //end edit













elseif ($_GET["token"] == 2) {
	
}
elseif ($_GET["token"] == 4) {
	
}
elseif ($_GET["token"] == 5) {
	
}

elseif ($_GET["token"] == 6) {
	
}

elseif ($_GET["token"] == 7) {
	
}

elseif ($_GET["token"] == 8) {
	
}

elseif ($_GET["token"] == 9) {
	
}

elseif ($_GET["token"] == 10) {
	
}

elseif ($_GET["token"] == 11) {
	
}

elseif ($_GET["token"] == 12) {
	
}

elseif ($_GET["token"] == 13) {
	
}

elseif ($_GET["token"] == 14) {
	
}

elseif ($_GET["token"] == 15) {
	
}

elseif ($_GET["token"] == 16) {
	
}

elseif ($_GET["token"] == 17) {
	
}


else{
	header("location: 404.html");}























?>