<?php

function countArr($Array){
	$cnt = 0;
		foreach($Array as $key){
			$cnt++;
		}
		return $cnt;
	}

$Array=array('Java','Ruby','Php',112,3,45,88);

 for ($i=0; $i<countArr($Array); $i++) {

    for ($j=0; $j<countArr($Array); $j++) {

     

      if ($Array[$j] > $Array[$i]){

        $tmp = $Array[$i];

        $Array[$i] = $Array[$j];

        $Array[$j] = $tmp;

      }

    }

 }



 for($i=0;$i<countArr($Array);$i++){

   echo $Array[$i]."<br>\n";

 }

	?>