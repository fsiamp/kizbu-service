<?php 
 // Connects to your Database 
 mysql_connect("localhost", "root", "root") or die(mysql_error()); 
 mysql_select_db("justitext") or die(mysql_error()); 


mysql_query("SET NAMES 'utf8';");
mysql_query("SET CHARACTER SET 'utf8';");

 mysql_set_charset('utf8');  // TODO: error handling



$text = ($_POST['text']); 



 // now we insert it into the database
	mysql_query("INSERT INTO text (text, color , ip ,urls , names , location , fontfamily , fontsize , category , underline, background)
 			VALUES ('".$text."' , '" .$_POST['color']. "' , '" . $_POST['ip'] . "' , '" . $_POST['url'] . "' , '" . $_POST['social'] . "' , '" . $_POST['place'] . "' , '" . $_POST['randomFont'] . "' , '" . $_POST['size'] . "' , '" . $_POST['category'] . "', '" . $_POST['underline'] . "', '" . $_POST['background'] . "')") or die(mysql_error());  
 	
 	
 	$result = mysql_query("SELECT * FROM text ORDER BY num DESC LIMIT 1 ");
 	
 	while(($row = mysql_fetch_array($result) ) )
  { 
  $number = (''.$row['num'].'');
  
   } 

  mkdir('post/'.$number);
 $file = 'transfer.php';
$secondfile = 'includeload/loadmore.php';
 $newfile = 'index.php';
 $newsecondfile = 'loadmore.php';
 $destination = 'post/'.$number;
  copy("$file", "$destination/$newfile");
  copy("$secondfile", "$destination/$newsecondfile");

        { 			header("Location:index.php"); 
 			} 
 	?>






