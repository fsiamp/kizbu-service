<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title><?php 

$lastword = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) - 5;


$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

mysql_select_db("justitext", $con); 

mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER_SET utf8");


$result = mysql_query("SELECT * FROM text ORDER BY num LIMIT 1 OFFSET $lastword ");


	
while(($row = mysql_fetch_array($result) ) )
  { 
$text = htmlentities(($row['text']) , ENT_COMPAT , "UTF-8") ;


  echo $text;

   } ?> - Justitext</title>
	
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> 
<meta name="title" content="" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="">
	
<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" /> 
<meta name="title" content="Justitext" >
<meta name="keywords" content="text, links, random, upload, greek, free, service, post, text-based, http, bookmarks, social text, characters, web, location, favorites, justitext, category, phrase, motto , quotes, url" > <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {text-align:justify;  font-size:14px; line-height:20px; font-family:'droid serif', cambria, palatino, georgia, serif; }

a {   text-decoration:none; cursor:hand; cursor:pointer; }

a:hover {   background-color:#FFF0F5; text-decoration:none; cursor:hand; cursor:pointer; }

#mike {

cursor:pointer;
cursor:hand;
font-family:Arial, serif;

	color:rgba(0,0,0,0.9);
	text-shadow:1px 1px 0px rgba(255,255,255,0.8);
	border:1px solid rgba(0,0,0,0.5);
	
	background:-webkit-gradient(linear,0% 0%,0% 100%,from(rgba(255,255,255,1)),to(rgba(185,185,185,1)));
	background:-moz-linear-gradient(top,rgba(255,255,255,1),rgba(185,185,185,1));

  line-height:20px;
	padding:5px 5px;

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
	padding:6px 6px;

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

  #custom-tweet-button a {

    

    padding: 10px 5px;

   
background-color:#EFEFEF;
    border: 1px double #ccc;

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
<script type="text/javascript" src="../../jquery.min.js"></script>





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









<script language="javascript"> 
function toggle2() {
	var ele = document.getElementById("toggleText3");
	var text = document.getElementById("displayText2");
        var textz = document.getElementById("displayText3");
        var elem = document.getElementById("elem");
        var elen = document.getElementById("toggleText2");
        var mike = document.getElementById("toggleText6");
           var mike2 = document.getElementById("toggleText7");
           var mike3 = document.getElementById("toggleText61");
	
          if(ele.style.display == "none") {
 
                 if (elen.style.display == "inline") {
    		ele.style.display = "inline";
                mike.style.display = "none";
                mike2.style.display = "none";
                mike3.style.display = "inline";
     
                
                elem.style.width = "90.5%";
		text.innerHTML = "Insert Link";
                }
                else {  
                  ele.style.display = "inline";
                mike.style.display = "none";
                mike2.style.display = "inline";
                mike3.style.display = "none";
                elem.style.width = "90.5%";
		text.innerHTML = "Insert Link";
                 }      
          

        }
	else {
                        
                    if (elen.style.display == "inline") {
                     ele.style.display = "none";
                     mike.style.display = "none";
                     mike2.style.display = "none";
                     mike3.style.display = "inline";
                   elem.style.width = "90.5%";
		   text.innerHTML = "Insert Link";
                   }
                   else {

                     ele.style.display = "none";
                     mike.style.display = "inline";
                     mike2.style.display = "none";
                   mike3.style.display = "none;";
                   elem.style.width = "74%";
		   text.innerHTML = "Insert Link";
                   
                   
                  }
                   

                   
                   
	}
} 
</script>

<script language="javascript"> 
function toggle3() {
        var textz = document.getElementById("displayText3");
        var elem = document.getElementById("elem");
        var elen = document.getElementById("toggleText2");
            var elez = document.getElementById("elez");
        var mike = document.getElementById("toggleText6");
       var mike2 = document.getElementById("toggleText7");
           var mike3 = document.getElementById("toggleText61");

     
       
	 
            if (elen.style.display == "none" ) {
                
                 
    		elen.style.display = "inline";
                mike.style.display = "none";
                mike2.style.display = "none";
                mike3.style.display = "inline";
                 
                elem.style.width = "90.5%";
                elez.style.width = "97.5%";
		textz.innerHTML = "Location-based Text";
                
               }
          
         	        

       
       else {
                     if (elez.style.display == "inline") {
                      
                     elen.style.display = "none";
                     
                     mike.style.display = "none";
                     mike2.style.display = "inline";
                     mike3.style.display = "none";
                     elem.style.width = "70%";
                     elez.style.width = "81%";
                     
		     textz.innerHTML = "Location-based Text"; 
                     }
                     else { 
                      
		     elen.style.display = "none";
                     mike.style.display = "inline";
                     mike2.style.display = "none";
                     mike3.style.display = "none";
                     
                     elem.style.width = "74%";
                     
		     textz.innerHTML = "Location-based Text"; 
                        
                      
                     }
                     
                    
                   
	}
             
               
          
} 
</script>

 

 
<script language="javascript"> 
function toggle4() {
	var ele = document.getElementById("toggleText4");
	var text = document.getElementById("displayText4");
	if(ele.style.display == "none") {
    		ele.style.display = "inline";
		text.innerHTML = "Select Category";
  	}
	else {
		ele.style.display = "none";
		text.innerHTML = "Select Category";
	}
} 
</script>


  
  <script>
    $(function(){
      $(':input[placeholder]').placeholder();
    });
  </script>

<script type="text/javascript">
var NumberOfWords = 1
var words = new BuildArray(NumberOfWords)
words[1] = "<?php $con = mysql_connect('localhsot','root','root');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('justitext', $con); 



$result = mysql_query('SELECT * FROM text ORDER BY RAND() LIMIT 1');


while(($row = mysql_fetch_array($result) ) )
  {
  echo ''.$row['text'].'';

  } 

?>"

function BuildArray(size){
    this.length = size
    for (var i = 1; i <= size; i++){
        this[i] = null}
    return this
}

function PickRandomWord(frm) {
    // Generate a random number between 1 and NumberOfWords
    var rnd = Math.ceil(Math.random() * NumberOfWords)

    // Display the word inside the text box
    frm.text.value = words[rnd]
}

</script>


<script>
function changeLocation(menuObj)
{
   var i = menuObj.selectedIndex;
  
   if(i > 0)
   {
      window.location = menuObj.options[i].value;
   }
}
</script>


<script language="javascript"> 
function toggle2() {
	var ele = document.getElementById("toggleText3");
	var text = document.getElementById("displayText2");
 
	
          if(ele.style.display == "none") {
 
               
    		ele.style.display = "inline";
       text.innerHTML = "Insert Link";
                
          
          

        }
	else {
                        
                  
                     ele.style.display = "none";
                 
		   text.innerHTML = "Insert Link";
                  
                   
                   
                  
                   

                   
                   
	}
} 
</script>

<script language="javascript"> 
function toggle3() {
	var ele = document.getElementById("toggleText2");
	var text = document.getElementById("displayText3");
 
	
          if(ele.style.display == "none") {
 
               
    		ele.style.display = "inline";
       text.innerHTML = "Add Location";
                
          
          

        }
	else {
                        
                  
                     ele.style.display = "none";
                 
		   text.innerHTML = "Add Location";
                  
                   
                   
                  
                   

                   
                   
	}
} 
</script>

<script language="javascript"> 
function toggle5() {
	var ele = document.getElementById("toggleText7");
	var text = document.getElementById("displayText7");
 
	
          if(ele.style.display == "none") {
 
               
    		ele.style.display = "inline";
       text.innerHTML = "Social Text";
                
          
          

        }
	else {
                        
                  
                     ele.style.display = "none";
                 
		   text.innerHTML = "Social Text";
                  
                   
                   
                  
                   

                   
                   
	}
} 
</script>

<script language="javascript"> 
function toggle82() {
	var ele = document.getElementById("toggleText82");
	var text = document.getElementById("displayText82");
 
	
          if(ele.style.display == "none") {
 
               
    		ele.style.display = "inline";
       text.innerHTML = "Character Limit";
                
          
          

        }
	else {
                        
                  
                     ele.style.display = "none";
                 
		   text.innerHTML = "Character Limit";
                  
                   
                   
                  
                   

                   
                   
	}
} 
</script>


<script language="javascript"> 
function toggle6() {
	var ele = document.getElementById("toggleText71");
	var text = document.getElementById("displayText71");
 
	
          if(ele.style.display == "none") {
 
               
    		ele.style.display = "inline";
       text.innerHTML = "About Justitext";
                
          
          

        }
	else {
                        
                  
                     ele.style.display = "none";
                 
		   text.innerHTML = "About Justitext";
                  
                   
                   
                  
                   

                   
                   
	}
} 
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



<object style="line-height:40px;">
<?php

$lastword = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) - 5;


$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  } 

mysql_select_db("justitext", $con); 

mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER_SET utf8");





$result = mysql_query("SELECT * FROM text ORDER BY num LIMIT 1 OFFSET $lastword ");


while(($row = mysql_fetch_array($result) ) )
  { 
if (empty($row['names'])) {
  if (empty($row['urls'])) {
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;'.htmlentities(($row['text']) , ENT_COMPAT , "UTF-8").'&nbsp;</object>';



    }
   else {
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;'.htmlentities(($row['text']) , ENT_COMPAT , "UTF-8").'</object>';
   echo "&nbsp";
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;<a href="'.$row['urls'].'">'.$row['urls'].'</a>&nbsp;</object>';

   }

}

else {
if (empty($row['urls'])) {
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;" >&nbsp;'.htmlentities(($row['text']) , ENT_COMPAT , "UTF-8").'&nbsp;</object>';
echo "&nbsp";
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;posted by '.$row['names'].'&nbsp;</object>';


    }
   else {
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;'.htmlentities(($row['text']) , ENT_COMPAT , "UTF-8").'</object>';
echo "&nbsp";
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;posted by '.$row['names'].'&nbsp;</object>';
   echo "&nbsp";
  echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;<a href="'.$row['urls'].'">'.$row['urls'].'</a>&nbsp;</object>';

   }
}

if (!empty($row['location'])) {
echo "&nbsp";
 echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;from '.$row['location'].'&nbsp;</object>';
}

if (!empty($row['category'])) {
echo "&nbsp";
 echo '<object style="font-family:Times,serif; border:2px double; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;'.$row['category'].'&nbsp;</object>';
}
   } ?>

&nbsp;<dfn style="font-family:Times,serif; border:2px double; font-style:normal; padding:5px 5px; position:relative; top:-3px;  font-size:20px; font-weight:bold; background-color:#EFEFEF;">&nbsp;<a title="Post this text on Twitter!"  href='https://twitter.com/share' class='twitter-share-button' data-via='justitext' data-size='large'>Tweet</a>
</dfn>
</object>
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

mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER_SET utf8");


$result = mysql_query("SELECT * FROM text ORDER BY RAND() LIMIT 40");


while(($row = mysql_fetch_array($result) ) )
  {
$text = htmlentities(($row['text']) , ENT_COMPAT , "UTF-8") ;
$j = $row['num'] ;



  if (!empty($row['category'])) {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }
  else {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="../../post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }  
	





   
	


                  
        
  
   

     
}

mysql_close($con);
?><object style="float:left; width:366px; text-align:justify; border:1px solid grey; height: 2.6em; margin-right:5px; position:relative; top:4px; margin-bottom:2px;">
			
			<span style="font-size:28px; position:relative; top:6px; text-align:justify;">&nbsp;&nbsp;<a style="color:green;" href="http://justitext.com
" class="menu_item">Home Page</a>&nbsp; -&nbsp; <a style="color:black; " href="../../about" class="menu_item" >About Justitext</a></span></object>
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

mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER_SET utf8");


$result = mysql_query("SELECT * FROM text ORDER BY RAND() LIMIT 120");


while(($row = mysql_fetch_array($result) ) )
  {
$text = htmlentities(($row['text']) , ENT_COMPAT , "UTF-8") ;
$j = $row['num'];



  if (!empty($row['category'])) {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }
  else {
   if (!empty($row['names'])) {
     if (!empty($row['location'])) {
	      echo '<object name="comments" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
     }
	  else {
	      echo '<object name="comments" style="font-family:' . $row['fontfamily'] . '; " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
      }
	}
    else {
	    if (!empty($row['location'])) {
	      echo '<object name="comments"  style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
          echo "&nbsp;";
        }
		
		else {
		  echo '<object name="comments" style="font-family:' . $row['fontfamily'] . ';  " class="postitem" num="'.$row['num'].'"><a href="../../post/'.$j.'"><font color="'.$row['color'].'" size="' .$row['fontsize'] .'">'.$text.'</font></a></object>';
             echo "&nbsp;";
		}
	     
    }
  }  
	





   
	


                  
        
  
   

     
}

mysql_close($con);
?>

</object> </object>




	
		<input style="cursor:hand; cursor:pointer; font-size:17px; font-family:Tahoma;" type="button" id="loadmorebutton" value="&nbsp;&nbsp;Load more posts&nbsp;&nbsp;">
		</object>



</body></html>