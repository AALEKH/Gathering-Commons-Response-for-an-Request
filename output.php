<?php
$json = file_get_contents('https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:machines&prop=imageinfo&gcmlimit=100&iiprop=url&format=json&indexpageids', true);
$obj = json_decode($json);
$a =  count($obj->query->pageids);
 
$json_two = file_get_contents('https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:animals&prop=imageinfo&gcmlimit=100&iiprop=url&format=json&indexpageids', true);
$obj_two = json_decode($json_two);
$a_two =  count($obj_two->query->pageids);


$arr_one=array();
$arr_two=array();

for ($x=0; $x<2; $x++)
  {
    
    $random = rand(0, $a-1);
    if (!in_array($random, $arr_one))
  	{
  		array_push($arr_one, $random);
  	}
	
  }

for ($x=0; $x<6; $x++)
  {
    
    $random_two = rand(0, $a_two-1);
    if (!in_array($random_two, $arr_two))
  	{
  		array_push($arr_two, $random_two);
  	}
  	else{

  		$random_two = rand(0, $a_two-1);
  		array_push($arr_two, $random_two);
  	}
	
  }  


for ($x=0; $x<2; $x++)
  {

  	$b = $arr_one[$x];

	$l =  $obj->query->pageids[$b];
	$s = strval($l);

	echo "<img style='height:100px;width:100px;' src='".$obj->query->pages->$s->imageinfo[0]->url."' >"."\n";
    
  }

for ($x=0; $x<6; $x++)
  {

  	$b_two = $arr_two[$x];

	$l_two =  $obj_two->query->pageids[$b_two];
	$s_two = strval($l_two);

	echo "<img style='height:100px;width:100px;' src='".$obj_two->query->pages->$s_two->imageinfo[0]->url."' >"."\n";
    
  }

 
?>
