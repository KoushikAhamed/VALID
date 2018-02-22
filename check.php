<?php
	
	error_reporting(0);
	 
	//for($i=0 ; $i<strlen($username) ; $i++ ){
		//		if($username[$i]==preg_match("/^[A-Za-z -.]*$/"))){
	
	
	if(isset($_REQUEST['submitName']))
	{
		$username = $_REQUEST['username'];
		$email=$_REQUEST['email'];
		
		function spaceName($username){
			if(preg_match("/^[A-Za-z -.]*$/",$username){
		       return 1;
		    }else
				{
				   return 0;				    
				   }
			}
		 //$find = 'gmail.com';
         //$find1 = 'yahoo.com';
		 //$nameLen=strlen($username);
		 
		function iscontain($email){
			  $check = substr($email, -3  );
			  $check1 = substr($email, -9 ,-4 );
			  
       	 if ($check == 'com') {
			 if($check1 == 'gmail' || $check1 == 'yahoo' ){
				 return 1 ;}else{
		            return 0 ; }
		 }
		}
	 $mail=iscontain($email);
	 $validName = spaceName($username);
	 
		if ($validName == 0 ){
			echo "give user name!";
			
		} elseif ($mail== 0 ){
			echo "invalid mail";
		}
		else{
			echo "Username: ".$username."<br/> Email: ".$email."<br/><br/>";
			echo "Month: ".$month."<br/><br/>";
		}
	}
	//if(isset($_REQUEST['SubmitEmail'])){
	//	
	//}
	
?>

<form action="check.php" method="POST" >
	<input type="text" name="username" value="" placeholder="username"><br/>
    <input type="submit" name="SubmitName" value="SubmitName">
</form>
<form action="check.php" method="POST" >
    <h2>EMAIL</h2>
	<input type="text" name="email" value="" placeholder="anything@example.com"><br/>
	<input type="submit" name="SubmitEmail" value="SubmitEmail">
</form>
<form action="check.php" method="POST" >
    <h2>DATE OF BIRTH</h2>
	<table>
	<tr>
    <th>MM</th>
    <th>DD</th> 
    <th>YY</th>
  </tr>
  <tr>
	<th><input type="text" name="month" value="" placeholder="month"></th>
	<th><input type="text" name="date" value="" placeholder="date"></th>
	<th><input type="text" name="year" value="" placeholder="year"></th>
    </tr>
	</table>
<input type="submit" name="SubmitDob" value="SubmitDob">
	</form>



