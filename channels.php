<?php

# All channels available, Generated with use of the "channels.conf"
# Commands to get the values for:
# "freq" =>  awk -F ":" '{print $1 "  " $2}' channels.conf 
# "bw" => awk -F ":" '{print $1 "_" $4}' channels.conf | awk -F "_" '{print $1 "  " $3}'
# "pg" => awk -F ":" '{print $1 "  " $13}' channels.conf

$channels = array( 	"RTL" => array("freq"=>"538000000","bw"=>"8","pg"=>"16405"),
			"RTL2" => array("freq"=>"538000000","bw"=>"8","pg"=>"16406"), 
			"ProSieben" => array("freq"=>"746000000","bw"=>"8","pg"=>"16403"),
			"Kabel1" => array("freq"=>"746000000","bw"=>"8","pg"=>"16394"),
			"VOX" => array("freq"=>"538000000","bw"=>"8","pg"=>"16418"),
			"Sat1" => array("freq"=>"746000000","bw"=>"8","pg"=>"16408"),
			"Viva" => array("freq"=>"722000000","bw"=>"8","pg"=>"16416"),
			"SuperRTL" => array("freq"=>"538000000","bw"=>"8","pg"=>"16411"),
			"3Sat" => array("freq"=>"586000000","bw"=>"8","pg"=>"515"),
			"N24" => array("freq"=>"746000000","bw"=>"8","pg"=>"16398"),
			"KiKa" => array("freq"=>"586000000","bw"=>"8","pg"=>"517"),
			"ZDF" => array("freq"=>"586000000","bw"=>"8","pg"=>"514"),
			"ARD" => array("freq"=>"690000000","bw"=>"8","pg"=>"256"),
			"ZDFInfo" => array("freq"=>"586000000","bw"=>"8","pg"=>"516"),
			"WDR" => array("freq"=>"674000000","bw"=>"8","pg"=>"261"),
			"SWR" => array("freq"=>"674000000","bw"=>"8","pg"=>"226"),
			"NDR" => array("freq"=>"506000000","bw"=>"8","pg"=>"129"),
			"MDR" => array("freq"=>"506000000","bw"=>"8","pg"=>"100"),
			"Arte" => array("freq"=>"690000000","bw"=>"8","pg"=>"2"),
			"Phoenix" => array("freq"=>"690000000","bw"=>"8","pg"=>"3"),
			"EinsFestival" => array("freq"=>"690000000","bw"=>"8","pg"=>"5"),
			"CNN" => array("freq"=>"722000000","bw"=>"8","pg"=>"16390"),
			"Tele5" => array("freq"=>"722000000","bw"=>"8","pg"=>"16413"),
			"Eurosport" => array("freq"=>"722000000","bw"=>"8","pg"=>"16420")
      );





?>
