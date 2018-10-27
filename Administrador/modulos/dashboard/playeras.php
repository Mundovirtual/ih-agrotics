<?php 
 include_once("../../class/dashboard.php");
 	$dashboard=new dashboard();

 	/*				Hackers 	*/
 	$HackersCH=$dashboard->chicasComunidad();
 	$HackersM=$dashboard->MedianasComunidad();
 	$HackersG=$dashboard->GrandesComunidad();
 	$HackersXG=$dashboard->ExtGrandesComunidad();
 	/*				Mentores    */
 	$MentoresCH=$dashboard->chicasMentores();
 	$MentoresM=$dashboard->MedianasMentores();
 	$MentoresG=$dashboard->GrandesMentores();
 	$MentoresXG=$dashboard->ExtGrandesMentores();

 	$jueces=$dashboard->jueces();
 	$hakers=$dashboard->comunidad();
 	$proyectos=$dashboard->proyectos();

 	$Participantes=count($jueces)+count($hakers);


 	if (isset($_POST['id'])) {
 		/*Numero de playeras hakers*/
 		$val['0']=count($HackersCH);
 		$val['1']=count($HackersM);
 		$val['2']=count($HackersG);	 
 		$val['3']=count($HackersXG);
 		/*Numero de playeras mentores*/
 		$val['4']=count($MentoresCH);
 		$val['5']=count($MentoresM);
 		$val['6']=count($MentoresG);
 		$val['7']=count($MentoresXG); 
 		/*Proyectos*/
 		$val['8']=count($proyectos); 
 		/*Participantes*/
 		$val['9']=$Participantes; 
 		/*Mentores*/
		$val['10']=count($jueces); 
 		/*Hackeras*/
 		$val['11']=count($hakers);
 		echo json_encode($val); 
 	
 	}
  
 ?>