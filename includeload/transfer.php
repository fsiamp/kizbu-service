<?php
$color = sprintf("#%x%x%x", rand(0,255), rand(0,255), rand(0,255));

function randomizeFont(){
				$fonts = array('Verdana', 'Georgia', 'Times New Roman', 'Arial', 'Comic Sans' ,'Helvetica', 'Serif' ,'Gill Sans', 'Avantgarde', 'New Century Schoolbook', 'Bookman', 'Palatino', 'Andale Mono', 'Courier New', 'Lucidatypewriter', 'Fixed', 'Zapf Chancery', 'Coronetscript', 'Florence', 'Parkavenue', 'Cursive', 'Impact', 'Arnoldboecklin', 'Oldtown', 'Blippo', 'Brushstroke', 'fantasy', 'monospace', 'Tahoma', 'Geneva', 'Century Gothic', 'Lucida Sans Unicode', 'Copperplate / Copperplate Gothic Light', 'Lucida Console', 'Monaco', 'Gill Sans', 'Trebuchet MS', 'Baskerville', 'Cambria', 'Garamond', 'Futura', 'Consolas', 'Apple Gothic', 'Lucida Grande', 'Calibri', 'Franklin Gothic Medium', 'Haettenschweiler' ,'Impact', 'Helvetica Neue');
				$randomNum = rand(0, count($fonts) - 1);
				return $fonts[$randomNum];				
			}


$dblink = mysql_connect('localhost', 'root', 'root');
mysql_select_db('justitext');
mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER_SET utf8");
if($_GET['lastid']){
	$query = 'SELECT * FROM text  ORDER BY RAND() LIMIT 0,20';
	$result = mysql_query($query);

	while(($row = mysql_fetch_array($result) ) ) {
$text = htmlentities(($row['text']) , ENT_COMPAT , "UTF-8") ;
$randomFont = randomizeFont();
$j = $row['num'];
		
  if (!empty($row['category'])) {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments"  class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }
  else {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="../'.$j.'"><font color="'.$row['color'].'" >'.$text.'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }  
	

   
	
	


     
}

}


?>