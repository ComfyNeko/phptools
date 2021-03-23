<?php
include_once 'dbConnection.php';
session_start();
$empid=$_SESSION['empid'];
$name=$_SESSION['name'];

//quiz start
 

if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$quizid=@$_GET['quizid'];
$sn=@$_GET['n'];
$noq=@$_GET['noq'];
$ans=$_POST['ans'];
$qid=@$_GET['qid'];

$q=mysqli_query($con,"SELECT * FROM questions WHERE qid='$qid' " );
$os=mysqli_query($con,"SELECT * FROM users WHERE empid='$empid' AND quizid='$quizid' " );
$rowcount=mysqli_num_rows($os);
while($row=mysqli_fetch_array($q) )
{
$ansid=$row['ca'];
}

if($rowcount==0)
{
	$q=mysqli_query($con,"INSERT INTO users VALUES('$empid','$name' ,'$quizid','0','0')")or die('Error');
	$q=mysqli_query($con,"SELECT * FROM users WHERE empid='$empid' AND quizid='$quizid'");
	
	while($row=mysqli_fetch_array($q))
	{
	 	$quizscore=$row['quizscore'];
		$overallscore=$row['overallscore'];
	
	}
	if($sn==1)
	{
		$quizscore=0;
	}
if($ans == $ansid)
{
$quizscore++;
$overallscore=$overallscore+$quizscore;
$q=mysqli_query($con,"UPDATE `users` SET `quizscore`=$quizscore, `overallscore`=$overallscore  WHERE  empid = '$empid' AND quizid = '$quizid'")or die('Error');
} 

else
{
$quizscore=$quizscore+0;
$overallscore=$overallscore+$quizscore;
$q=mysqli_query($con,"UPDATE `users` SET `quizscore`=$quizscore `overallscore`=$overallscore WHERE  empid = '$empid' AND quizid = '$quizid'")or die('Error147');
}
	
}
//old user
else
{  
$q=mysqli_query($con,"SELECT * FROM users WHERE empid='$empid' AND quizid='$quizid'");
	
	while($row=mysqli_fetch_array($q))
	{
	 	$quizscore=$row['quizscore'];
		$overallscore=$row['overallscore'];
	}	
	
	if($sn==1)
	{
		$quizscore=0;
	}
if($ans == $ansid)
{
$quizscore++;
$overallscore=$overallscore+$quizscore;

$q=mysqli_query($con,"UPDATE `users` SET `quizscore`=$quizscore, `overallscore`=$overallscore  WHERE  empid = '$empid' AND quizid = '$quizid'")or die('Error');
} 

else
{
$quizscore=$quizscore+0;
$q=mysqli_query($con,"UPDATE `users` SET `quizscore`=$quizscore,`overallscore`=$overallscore  WHERE  empid = '$empid' AND quizid = '$quizid'")or die('Error147');
}

}
if($sn != $noq)
{
$sn++;
header("location:account.php?q=quiz&step=2&quizid=$quizid&n=$sn&noq=$noq")or die('Error152');
}
else
{
header("location:account.php?q=result&quizid=$quizid");
}

/*else if( $_SESSION['key']!='sunny7785068889')
{
$q=mysqli_query($con,"SELECT quizscore FROM users WHERE quizid='$quizid' AND empid='$empid" )or die('Error156');
while($row=mysqli_fetch_array($q) )
{
$s=$row['quizscore'];
}
$q=mysqli_query($con,"SELECT * FROM users WHERE empid='$empid'" )or die('Error161');
$rowcount=mysqli_num_rows($q);
if($rowcount == 0)
{
$q2=mysqli_query($con,"INSERT INTO users VALUES('$empid','$s',")or die('Error165');
}
else
{
while($row=mysqli_fetch_array($q) )
{
$sun=$row['score'];
}
$sun=$s+$sun;
$q=mysqli_query($con,"UPDATE `rank` SET `score`=$sun ,time=NOW() WHERE email= '$email'")or die('Error174');
}
header("location:account.php?q=result&quizid=$quizid");
}*/
}
?>



