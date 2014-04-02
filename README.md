Gathering-Commons-Response-for-an-Request
=========================================

This is an explanation of how to gather JSON response from Wikimedia Commons about image from a partiular category.

=========================================

The api request to retrieve link of images belonging to a category is:

'''https://commons.wikimedia.org/w/api.php?action=query&generator=categorymembers&gcmtype=file&gcmtitle=Category:human&prop=info|imageinfo&gcmlimit=200&iiprop=url&format=xml '''

Now in order to fetch a random image from those provided, we need to write a php script to:

1) Convert a JSON into an array a sample code to convert an json to array is given here:

'''<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
var_dump(json_decode($json, true));
?>'''

2) Select a random array element from those of decoded json ,a sample code to fetch six random array element from a given 
array is:

'''php <?php
$input = array("link1", "link2", "link3", "link4", "link5", "link6");

$rando_m = array_rand($input, 6);

echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n";
echo $input[$rand_keys[3]] . "\n";
echo $input[$rand_keys[4]] . "\n";
echo $input[$rand_keys[5]] . "\n";
?> '''

The presented format for the api requested is xml for ease of readibilty but for faster request json will be used.
