<?php

$arr_for_categories=array("mountains","kittens","Puppies");
$arr_rand_categories = array();
$count_categories = count($arr_for_categories);


for ($x=0; $x<2; $x++)
  {
  	$rand_category = mt_rand(0, $count_categories -1);
    if (!in_array($arr_for_categories[$rand_category], $arr_rand_categories))
  	{
  		array_push($arr_rand_categories, $arr_for_categories[$rand_category]);
  	}
  	else{

  		$rand_category = rand(0, $count_categories-1);
  		array_push($arr_rand_categories, $arr_for_categories[$rand_category]);
  	}
	
  } 

$url_one = 'https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:'.urlencode($arr_rand_categories[0]).'&prop=imageinfo&gcmlimit=100&iiprop=url&format=json&indexpageids';
$url_two = 'https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:'.urlencode($arr_rand_categories[1]).'&prop=imageinfo&gcmlimit=100&iiprop=url&format=json&indexpageids';

$json = file_get_contents($url_one, true);
$obj = json_decode($json);
$a =  count($obj->query->pageids);
 
$json_two = file_get_contents($url_two, true);
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
