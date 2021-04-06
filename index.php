<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type = "text/css" href="style.css">
	<title></title>
</head>
<body>

	<?php

    function validate_data(){
    	$name = $_REQUEST['name'];
    	$email = $_REQUEST['email'];
    	echo convert_uuencode(" ".$email);
    	  if(empty($name)){
    		echo "Name is Required";
    	}
    	else if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
    		echo "Name is Invalid. Please try Again";
    	}
    	else{
    		echo "Name is Appropriate";
    	}

    	if(empty($email)){
    		echo "Email is required";
    	}
    	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    		echo "Email is not appropriate. Please Try again";
    	}
    	else{
    		echo " Email is appropriate";
    	}


    }

	function accept_data(){
     if($_SERVER["REQUEST_METHOD"] == "POST"){
     $name = $_REQUEST['name'];
 	 $email = $_REQUEST['email'];
     $person = array($name,$email);
	 var_dump($person);
	 if($person[0] == "Shripati"||"shripati" && $person[1] == "shripatia302@gmail.com"){
      	 echo "$person[0]" . " Has " . " Email $person[1]";
      	}
     }
  }

  function read_many()
  {
      $people = array('Name1' => 1, 'Name2' => 2, 'Name3' => 3);
      echo "<table class = 'mod1'>
		<tr class = 'mod2'>
		<th> ID </th>
		<th> Name </th>
		</tr>";
      foreach ($people as $person => $id) {
          echo "<tr class = 'mod2'>
		<td class = 'mod2'> $id </td>
		<td class='mod2' > $person </tdclass>
	</tr>";
      }
          echo "</table>";


  }


  function understanding_string(){
        $str = "Hello People";
        echo strlen($str);
        echo convert_uuencode($str);
        echo chunk_split($str,1,'.');
        echo chop($str,"People");
        echo substr_count($str,'l');

  }

   
    accept_data();
    validate_data();
    echo "<br>";
    read_many();
    understanding_string();

	  // $a = 5;
	  // $b = 10;
	  // $txt1 = "Hello from Shripati";
	  // $len = strlen($txt1);
	  // $word_len = str_word_count($txt1);
	  // $rev = strrev($txt1);
	  // $pos = strpos($txt1, "Shripati");
	  // $replaced = str_replace("Shripati","Code", $txt1);
	  // echo "<h1> $replaced </h1>" , "<h1> $len </h1>", "<h1> $word_len </h1>","<h1> $rev </h1>","<h1> $pos </h1>";
	  // echo $a + $b; 
      
	?>

</body>
</html>