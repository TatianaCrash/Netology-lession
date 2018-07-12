<?php

$Animals = array (
	"Europe" => 'Gorilla','Syncerus caffer',
	"Asia" => 'Panthera tigris altaica','Herpestes',
	"Africa" => 'Panthera tigris altaica','Herpestes'
);
echo '<b>' . 'Животные:', '</b><br>';
foreach($Animals as $continent => $ani) {
    echo '<br>'. $continent;
    foreach($continent as $key) {
    		echo $key, '<br>';
    	}
    }
?>

