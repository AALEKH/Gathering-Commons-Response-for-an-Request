<?php
$result_of_machines =simplexml_load_file('https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:Machines&prop=info|imageinfo&gcmlimit=100&iiprop=url&width=100&height=100&format=xml');
$result_of_animals = simplexml_load_file('https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:animals&prop=info|imageinfo&gcmlimit=100&iiprop=url&format=xml'); 

$rnd1 = mt_rand(1,99);
$rnd2 = mt_rand(1,99);
$rnd3 = mt_rand(2,99);
$rnd4 = mt_rand(2,99);
$rnd5 = mt_rand(2,99);
$rnd6 = mt_rand(2,99);
$rnd7 = mt_rand(2,99);
$rnd8 = mt_rand(2,99);

echo "<img style='height:100px;width:100px;' src='".$result_of_machines->query->pages->page[$rnd1]->imageinfo->ii['url']."'>";
echo "<img style='height:100px;width:100px;' src='".$result_of_machines->query->pages->page[$rnd2]->imageinfo->ii['url']."'>";
echo "<img style='height:100px;width:100px;' src='".$result_of_animals->query->pages->page[$rnd3]->imageinfo->ii['url']."'>";
echo "<img style='height:100px;width:100px;' src='".$result_of_animals->query->pages->page[$rnd4]->imageinfo->ii['url']."'>";
echo "<img style='height:100px;width:100px;' src='".$result_of_animals->query->pages->page[$rnd5]->imageinfo->ii['url']."'>";
echo "<img style='height:100px;width:100px;' src='".$result_of_animals->query->pages->page[$rnd6]->imageinfo->ii['url']."'>";
echo "<img style='height:100px;width:100px;' src='".$result_of_animals->query->pages->page[$rnd7]->imageinfo->ii['url']."'>";
echo "<img style='height:100px;width:100px;' src='".$result_of_animals->query->pages->page[$rnd8]->imageinfo->ii['url']."'>";

?>
