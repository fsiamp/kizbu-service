<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Kizbu : MICROTEXT POSTING</title>
	
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<meta name="description" content="Justitext is a user contributed text posting service which allows users to upload text by pressing the random text option or simply by typing text through the keyboard." ><meta name="keywords" content="text, links, random, upload, greek, free, service, post, text-based, http, bookmarks, social text, characters, web, location, favorites, justitext, category, phrase, motto , quotes, url" ><META http-equiv="Content-Script-Type" content="type">
<style type="text/css">
body {text-align:justify;  font-size:17px; line-height:19px; font-family:'droid serif', cambria, palatino, georgia, serif; }

a {   text-decoration:none;  }
a:hover { text-decoration:none;}
a:active { text-decoration:none;}


#mike {

cursor:pointer;
cursor:hand;
font-family:Arial, serif;

	font-weight:bold;

	color:rgba(0,0,0,0.9);
	text-shadow:1px 1px 0px rgba(255,255,255,0.8);
	border:1px solid rgba(0,0,0,0.5);
	
	background:-webkit-gradient(linear,0% 0%,0% 100%,from(rgba(255,255,255,1)),to(rgba(185,185,185,1)));
	background:-moz-linear-gradient(top,rgba(255,255,255,1),rgba(185,185,185,1));

  line-height:20px;
	padding:4px 4px;

}


#mike:hover {
	background:rgba(240,240,240,1);
}

#mike:active, button:focus {
	background:-webkit-gradient(linear,0% 100%,0% 0%,from(rgba(255,255,255,1)),to(rgba(185,185,185,1)));
	background:-moz-linear-gradient(bottom,rgba(255,255,255,1),rgba(185,185,185,1));
}

#mike:disabled {
	color:rgba(0,0,0,0.4);
	text-shadow:1px 1px 0px rgba(255,255,255,0.5);
	background:rgba(220,220,220,1);
}



#loadmorebutton {

cursor:pointer;
cursor:hand;
font-family:Arial, serif;



	color:rgba(0,0,0,0.9);
	text-shadow:1px 1px 0px rgba(255,255,255,0.8);
	border:1px solid rgba(0,0,0,0.5);
	
	background:-webkit-gradient(linear,0% 0%,0% 100%,from(rgba(255,255,255,1)),to(rgba(185,185,185,1)));
	background:-moz-linear-gradient(top,rgba(255,255,255,1),rgba(185,185,185,1));
line-height:20px;
	padding:4px 4px;

}


#loadmorebutton:hover {
	background:rgba(240,240,240,1);
}

#loadmorebutton:active, button:focus {
	background:-webkit-gradient(linear,0% 100%,0% 0%,from(rgba(255,255,255,1)),to(rgba(185,185,185,1)));
	background:-moz-linear-gradient(bottom,rgba(255,255,255,1),rgba(185,185,185,1));
}

#loadmorebutton:disabled {
	color:rgba(0,0,0,0.4);
	text-shadow:1px 1px 0px rgba(255,255,255,0.5);
	background:rgba(220,220,220,1);
}


#wrapper{
	
			
		}
		
		#postswrapper{
			
		}
		.postitem{
			
			
		}
		.postitem:hover{
		
		}

#sidebar {
  width: 0px;
}

#content {
  width: 770px;
}


#main {
position:relative;
border:1px solid #ccc;
padding:5px;
left:12px;
}


.search_field {
    display: inline-block;
    border: 1px inset #ccc;
}

.search_field input {
    border: none;
    padding: 0;
}

.search_field button {
    border: none;
    background: none;
}

select {
width: 70px;
line-height:22px;
font-family:Arial, serif;


	color:rgba(0,0,0,0.9);
	text-shadow:1px 1px 0px rgba(255,255,255,0.8);
	border:1px solid rgba(0,0,0,0.5);
	
	background:-webkit-gradient(linear,0% 0%,0% 100%,from(rgba(255,255,255,1)),to(rgba(185,185,185,1)));
	background:-moz-linear-gradient(top,rgba(255,255,255,1),rgba(185,185,185,1));
padding:3px;

}
select:focus {
width: auto;
}


select2:focus {
width: auto;
}

</style>
 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="../jquery.min.js"></script>





<script type="text/javascript">
		$(document).ready(function(){
			$("#loadmorebutton").click(function (){
		   
				$.ajax({
					url: "loadmore.php?lastid=" + $(".postitem:last").attr("num"),
					success: function(html){
						if(html){
							$("#postswrapper").append(html);
							$('#loadmorebutton').html('Load More');
						}else{
							$('#loadmorebutton').replaceWith('No more posts to show.');
						}
					}
				});
		    });
		});
	</script>



<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>

</head>



<body  OnLoad="document.Wordform.text.focus();">

<div id="toggleText71" style='float:left; display:none; width:100%; text-align:justify; min-height:138px; padding-right:8px; font-size:12px;  font-family:Arial;  margin-top:-10px; margin-bottom:-15px;'>

<p ><div style='float:left; width:300px;  text-align:justify;' ><div style="width: 240px; height:90px;  padding:20px;background-color:#000;"><object style="font-family:Tahoma,Geneva,Kalimati,sans-serif; font-size:64px; font-style:normal; color:white; position:relative; top:29px; left:6px; ">justi</object><object style="font-style:normal; color:blue; font-family:Tahoma,Geneva,Kalimati,sans-serif; font-size:64px; position:relative; top:29px; left:6px; ">text</object></div></div><object style='font-family:Arial,serif; font-size:14px; font-style:normal; color:#666; '>Justitext is a user contributed text posting service which allows users to upload text by pressing the random text option or simply by typing text through the keyboard.</object><object style='color:navy; font-family:Verdana; font-style:normal; font-size:14px;'>It is a text-based website as it consists mainly of text characters instead of bitmapped or vector graphics.</object><object style="color:navy; font-family:Utopia; font-style:normal;">All of the website's main content uses justified alignment in order to include the maximum number of text-based information.</object><object style='font-family:Avantgarde; font-style:normal; color:#01e3;'>The site provides the possibility of uploading unlimited characters of text.</object><object style='font-style:normal;'>Currently,about <b><?php $con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

mysql_select_db("justitext", $con); 

mysql_query("SET NAMES 'utf8';");
mysql_query("SET CHARACTER SET 'utf8';");

mysql_set_charset("utf8");


$result = mysql_query("SELECT * FROM text ORDER BY num DESC LIMIT 1 ");


while(($row = mysql_fetch_array($result) ) )
  { 
  echo ''.$row['num'].'';
   } ?></b> posts have been uploaded yet.</object><object style='color:DimGray; font-family:monospace; font-style:normal;'>Everytime you upload a text,random font families and sizes are used for each post on the main page and other subpages.</object><object style='font-family:Andale Mono; color:#090; font-style:normal;'>Also,once you upload your post, a random kind of color will be defined for each one.</object><object style='font-style:normal; color:#20B2AA; font-family:Baskerville;'>Moreover, hyperlinks are appeared underlined.</object><object style='color:red; font-family:Tahoma; font-style:normal; font-size:14px;'>Each entry can be personalised via the <b>social text</b> feature.</object><object style='font-style:normal; font-family:Franklin Gothic Medium; color:#6c15ee;'>More specifically,once you make a social post then your personalised text will be accompanied by your full name,as long as you hold your mouse cursor over the post for a second.Furthermore, you can select category for each post or add the location in which you've been now.Then the category and the place from which you uploaded the current text will be appeared.</object><object style='color:DarkSlateBlue; font-style:normal; font-family:Chancery;'>Contact us at <object style='color:#666;'><code>text@justitext.com</code></object> for any questions or further information about the service.</object><object style="color:crimson;">Check out also our 
official pages on <a target="_blank" href="http://www.facebook.com/pages/Justitext/212789085471679">http://www.facebook.com/pages/Justitext/212789085471679</a> , <a href="http://twitter.com/justitext" target="_blank">http://twitter.com/justitext</a> , <a    href="http://friendfeed.com/justitext" target="_blank">http://friendfeed.com/justitext</a> and on <a target="_blank" href="http://crunchbase.com/company/justitext">http://crunchbase.com/company/justitext</a>.</object></object></p><hr><br></div>


<form  action="insert.php" method="POST" name="Wordform" accept-charset="UTF-8">




<input  type=hidden name="color" value="<?php $array = Array('black', 'blue', 'black', 'blue', 'red', 'black', 'black', '#F60' , 'black', 'blue', );
$rand = array_rand($array);
echo $array[$rand];  ?>"><input  type=hidden name="size" value="<?php echo sprintf("%x", rand(1,5)); ?>"><input type=hidden name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"><input type=hidden name="randomFont" value="<?php 
function randomizeFont(){
				$fonts = array('Arial', 'Arial', 'Arial, sans-serif;' , 'Brush Script Std, Arial, sans-serif;' , 'Arial, sans-serif;' , 'Hobo Std, Arial, monospace;' ,'Papyrus, Arial, sans-serif', 'Arial, Helvetica, sans-serif;', 'Lucida Blackletter, Arial, serif;' ,'Comic Sans MS, Arial, serif;');
				$randomNum = rand(0, count($fonts) - 1);
				return $fonts[$randomNum];				
			} $randomFont = randomizeFont(); echo $randomFont; ?>">
			
			<input type=hidden name="underline" value="<?php 
function randomizeFont2(){
				$fonts2 = array('underline', '' , '' , '' , '' , '' , '');
				$randomNum2 = rand(0, count($fonts2) - 1);
				return $fonts2[$randomNum2];				
			} $randomFont2 = randomizeFont2(); echo $randomFont2; ?>">
			
			<input type=hidden name="background" value="<?php 
function randomizeFont3(){
				$fonts3 = array('#EFEFEF', '' , '' , '' , '' , '');
				$randomNum3 = rand(0, count($fonts3) - 1);
				return $fonts3[$randomNum3];				
			} $randomFont3 = randomizeFont3(); echo $randomFont3; ?>">
			
			<input id="elem"  style="
 width:35.5%;  padding:4px 4px; margin-bottom:8px; font-size:15px;" type="text" name="text" autocomplete="off" placeholder="Text" onKeyDown="limitText(this.form.text,this.form.countdown,180);" onKeyUp="limitText(this.form.text,this.form.countdown,180);" 

maxlength="180"> <object id="toggleText82"><input style="padding:4px; width:30px; font-size:15px;" id="limit1" readonly 

type="text" name="countdown" value="180"></object> <object id="toggleText7" style="display:none;"> <input id="elez" style='width:28.5%; margin:0 auto; padding:5px;' type='text' name='social' placeholder='Full Name'></object> <object id="toggleText2" style="display:none;"><input style='width:31.8%; margin:0px; padding:4px; position:relative; top:2px;' type='text' name='place' placeholder='Location'></object> <object id="toggleText4" style="display:none;"><select style='position:relative; top:2px; padding:2px; width:auto; margin:0 auto; ' type='text' name='category' id='select2'><option></option><option>News</option><option>Story</option><option>Quotation</option><option>Wish</option><option>Experience</option><option>Politics</option><option>Sports</option><option>Economy</option><option>Feeling</option><option>Culture</option></select></object> <object id="toggleText3" style="display:none;"> <input id="elez" style='position:relative; top:2px; width:30%; margin:0 auto; padding:4px;' type='text' name='url' placeholder='URL'></object>     <object id="toggleText6"><input style="cursor:pointer; cursor:hand; font-size:15px;   position:relative; left:2px; font-weight:bold;  " type="submit" id="mike"  value="&nbsp;&nbsp;Post&nbsp;&nbsp;"></object> 

<object id="wrapper">
<object id="postswrapper" >

&nbsp;
<?php
$color = sprintf("#%x%x%x", rand(0,255), rand(0,255), rand(0,255));

$size = sprintf("%x", rand(1,5));


$ip=$_SERVER['REMOTE_ADDR'];

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("justitext", $con); 


mysql_query("SET NAMES 'utf8';");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_set_charset("utf8");
 

$result = mysql_query("SELECT * FROM text ORDER BY num DESC LIMIT 0,250");


while(($row = mysql_fetch_array($result) ) )
  {

$text = htmlentities(($row['text']) , ENT_COMPAT , "UTF-8") ;
$j = $row['num'] ;



  if (!empty($row['category'])) {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments" title="'.$row['category'].' - posted by '.$row['names'].' from '.$row['location'].'" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments" title="'.$row['category'].' - posted by '.$row['names'].'" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments" title="'.$row['category'].' -  posted from '.$row['location'].'" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments" title="'.$row['category'].'" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }
  else {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments" title="posted by '.$row['names'].' from '.$row['location'].'" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments" title="posted by '.$row['names'].'" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments" title="posted from '.$row['location'].'" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a  href="post/'.$j.'"><font color="'.$row['color'].'" >'.$row['text'].'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }  
	

   
	
	
  
   

     
}

mysql_close($con);
?>


</object> </object>
	
		<input style="cursor:hand; cursor:pointer; font-size:15px; " type="button" id="loadmorebutton"  value="&nbsp;&nbsp;Load more posts&nbsp;&nbsp;">
		</object>

</form>

</body></html>