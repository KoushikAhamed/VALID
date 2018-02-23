<?php
	
	error_reporting(0);
	 
	//for($i=0 ; $i<strlen($username) ; $i++ ){
		//		if($username[$i]==preg_match("/^[A-Za-z -.]*$/"))){
	
	
	//if(isset($_REQUEST['submitName']))
	//{
		//$username = $_REQUEST['username'];
		//$email=$_REQUEST['email'];
		
		function catName($username){
			if(preg_match("/^[A-Z]$/",$username)){
		       if(preg_match("/^[A-Z a-z -.]*$/",$username))
				{
				   return 1;				    
				}else{
					return 0;
				}
			}
		}
		function spaceName($username){
			$space = ' ' ;
			for($i=0 ; $i<strlen($username) ; $i++ ){
				if($username === $space){
					return 1;
				}else{
					return 0 ;
				}
			}
		}
		function validName($username){
			if(catName($username)==1 || spaceName($username) == 1){
				return 1;
			}else{
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
				 return 1 ;
				}else{
		            return 0 ;
					}
		 }
		}
		function validMonth($month){
			if($month>=1 || $month <= 12){
			   return 1;
			}else{
				return 0;
			}
		}
		function validDate($date){
			if($date>=1 || $date <= 31){
			   return 1;
			}else{
				return 0;
			}
		}
		function validYear($year){
			if($year>=1953 || $year <= 1998){
			   return 1;
			}else{
				return 0;
			}
		}
		function validDob($month,$date,$year){
			if(validMonth($month)== 1 || validDate($date) == 1 ){
				if(validYear($year)==1){
					return 1;
				}else{
					return 0;
				}
			}
		}
	 //$mail=iscontain($email);
	 //$validName = spaceName($username);
	    function checkall($username,$email,$month,$date,$year){
		
		
		    if (validName($username) == 0 ){
			echo "give user name!";
			}
			else{
			echo "user name:" .$username;
			}
		    if(iscontain($email)== 0){
			echo "invalid email!";
		    }else{
				echo "Email: ".$email."<br/><br/>";
			    echo "Username: ".$username."<br/> Email: ".$email."<br/><br/>";
			    echo "Month: ".$month."<br/><br/>";
     	    }
		    if (validDob($month,$date,$year)== 0){
			    echo "put your dob";
		    }else{
				echo "your dob:".$month."-".$date."-".$year;
			}
	    }
		//$showall=checkall($username,$email,$month,$date,$year);
	
	//}
	if(isset($_REQUEST['SubmitAll'])){
		$username=$_REQUEST['username'];
        $email =$_REQUEST['email'];
        $month =$_REQUEST['month'];
        $date =$_REQUEST['date'];
        $year =$_REQUEST['year'];
        checkall($username,$email,$month,$date,$year);
        
    }
?>

<form action="#" method="POST" >
	<input type="text" name="username" value="" placeholder="username"><br/>


    <h2>EMAIL</h2>
	<input type="text" name="email" value="" placeholder="anything@example.com"><br/>


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
<input type="submit" name="SubmitAll" value="Submit">
	</form>




