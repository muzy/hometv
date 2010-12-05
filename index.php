<html>
<body>
<h1>Programmauswahl</h1>
<p><a href="playlist.php">Playlist</a></p>
<?php

include 'channels.php';



if(empty($_REQUEST)){
  if(isrunning()){echo '<p>Aktuell laeuft: '.currentprogramm().'</p>'; }else{ echo '<p>Aktuell laeuft nichts</p>'; }
  showprogramm();
}else{
  if($_REQUEST['pg'] == "ausschalten"){ stopvlc(); }else{ startvlc($_REQUEST['pg']); }
  if(isrunning()){echo '<p>Aktuell laeuft: '.currentprogramm().'</p>'; }else{ echo '<p>Aktuell laeuft nichts</p>'; }
  showprogramm();
  if(isset($_REQUEST['pl'])){ sleep(3); header( 'Location: http://192.168.2.200:8080/', true, 303 ); }
}

function startvlc($programm){
 global $channels;
 if(!isrunning()){
  exec('vlc -d dvb-t:// :dvb-frequency='.$channels[$programm]['freq'].' :dvb-bandwidth='.$channels[$programm]['bw'].' :program='.$channels[$programm]['pg'].' --sout \'#duplicate{dst="standard{access=http,mux=ts,url=0.0.0.0:8080},select="'.$channels[$programm]['pg'].'"}\'');
  $fp = fopen('programm', 'w+');
  fwrite($fp, $programm);
  fclose($fp);
 }else{
  stopvlc();
  exec('vlc -d dvb-t:// :dvb-frequency='.$channels[$programm]['freq'].' :dvb-bandwidth='.$channels[$programm]['bw'].' :program='.$channels[$programm]['pg'].' --sout \'#duplicate{dst="standard{access=http,mux=ts,url=0.0.0.0:8080},select="'.$channels[$programm]['pg'].'"}\'');
  $fp = fopen('programm', 'w+');
  fwrite($fp, $programm);
  fclose($fp);
 } 
}

function stopvlc(){
 exec('pkill -15 vlc');
 exec('rm programm');
}

function isrunning(){
 if(@file_exists('programm')){ return true; }else{ return false; }
}

function currentprogramm(){
 return file_get_contents('programm');
}

function showprogramm(){
  global $channels;
  echo '<form method="post" action="index.php">';
  echo '<p>Bitte ein Programm auswaehlen!</p>';
  foreach($channels as $programmname => $programmarray){
    echo '<input type="radio" name="pg" value="'.$programmname.'"> '.$programmname.'<br>';
  }
  echo '<input type="radio" name="pg" value="ausschalten"> Ausschalten<br>';
  echo '<br /><input type="submit" name="submit" value="Programm umstellen!">';
  echo '</form>';

}
?>
</body>
</html>
