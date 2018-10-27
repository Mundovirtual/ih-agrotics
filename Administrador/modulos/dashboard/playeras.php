<?php 
 include_once("../../class/dashboard.php");
 	$playeras=new playeras();

 	/*				Hackers 	*/
 	$HackersCH=$playeras->chicasComunidad();
 	$HackersM=$playeras->MedianasComunidad();
 	$HackersG=$playeras->GrandesComunidad();
 	$HackersXG=$playeras->ExtGrandesComunidad();
 	/*				Mentores    */
 	$MentoresCH=$playeras->chicasMentores();
 	$MentoresM=$playeras->MedianasMentores();
 	$MentoresG=$playeras->GrandesMentores();
 	$MentoresXG=$playeras->ExtGrandesMentores();

 	if (isset($_POST['id'])) {
 		/*Numero de playeras hakers*/
 		$valPlayera['0']=count($HackersCH);
 		$valPlayera['1']=count($HackersM);
 		$valPlayera['2']=count($HackersG);	 
 		$valPlayera['3']=count($HackersXG);
 		/*Numero de playeras mentores*/
 		$valPlayera['4']=count($MentoresCH);
 		$valPlayera['5']=count($MentoresM);
 		$valPlayera['6']=count($MentoresG);
 		$valPlayera['7']=count($MentoresXG); 
 		echo json_encode($valPlayera); 
 	
 	}
  
 ?>