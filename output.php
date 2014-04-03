<?php
$result_of_machines =simplexml_load_file('https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:Machines&prop=info|imageinfo&gcmlimit=50&iiprop=url&width=100&height=100&format=xml');
$result_of_animals = simplexml_load_file('https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:animals&prop=info|imageinfo&gcmlimit=50&iiprop=url&format=xml'); 

for ($x=0; $x<2; $x++)
  {
    $rnd1 = mt_rand(1,30);	
    echo "<img style='height:100px;width:100px;' src='".$result_of_machines->query->pages->page[$rnd1]->imageinfo->ii['url']."'>";
  } 

for ($x=0; $x<6; $x++)
  {
    $rnd2 = mt_rand(1,30);	
    echo "<img style='height:100px;width:100px;' src='".$result_of_animals->query->pages->page[$rnd2]->imageinfo->ii['url']."'>";
  } 

?>
