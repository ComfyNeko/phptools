<?php

          $conn = new mysqli("localhost", "root", "", "quizdb");

          $id = $_GET['quizid']; // get id through query string
		  echo("$id");

           $del = mysqli_query($conn,"DELETE FROM quiz where quizid = '$id'");		   // delete query
		   for($i=0;$i<=$id;$i++){
			   $result=mysqli_query($conn,"SELECT qid FROM questions WHERE quizid='$id'");
			   if(!$result){
	                die(mysqli_error($conn));
	            }
	            if(mysqli_num_rows($result) > 0) { 
                $r = mysqli_fetch_assoc($result);
	            echo $r["qid"].'<br>';
	            $sql= $r["qid"];
             	}
				$del2 = mysqli_query($conn,"DELETE FROM options where qid = '$sql'");
		       }
			   
			   
		   $del1 = mysqli_query($conn,"DELETE FROM questions where quizid = '$id'");

          if($del)
          {
              mysqli_close($conn); // Close connection
              header("location:deletequiz.php"); // redirects to all records page
              exit;	
          }
          else
        {
           echo "Error deleting record"; // display error message if not delete
        }
?>