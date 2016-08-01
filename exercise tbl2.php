<style type="text/css">
.bold {font-weight: bold;}
td{ text-align: center; width: 150px;}
td.fh{text-align: left;}
</style>

<?php
	class negeri
	{
		function malaysia() {
			 return array(array('s'=>'State Name', 'ibn'=>'Ibu Negeri', 'kod'=>'Short Name'),
			 	          array('s'=>'Selangor', 'ibn'=>'Shah Alam', 'kod'=>'SGR'),
			 			  array('s'=>'Johor', 'ibn'=>'Johor Bahru', 'kod'=>'JHR'),
			 			  array('s'=>'Kelantan', 'ibn'=>'Kota Bharu', 'kod'=>'KEL'),
			 			  array('s'=>'kedah', 'ibn'=>'Alor Setar', 'kod'=>'KDH'),
			 			  array('s'=>'Melaka', 'ibn'=>'Bandar Melaka', 'kod'=>'MEL'),
			 			  array('s'=>'Negeri sembilan', 'ibn'=>'Seremban', 'kod'=>'NSN'),
			 			  array('s'=>'Pahang', 'ibn'=>'Kuantan', 'kod'=>'PHG'),
			 			  array('s'=>'Perak', 'ibn'=>'Ipoh', 'kod'=>'PRK'),
			 			  array('s'=>'Perlis', 'ibn'=>'Kangar', 'kod'=>'PLS'),
			 			  array('s'=>'Pulau Pinang', 'ibn'=>'Georgetown', 'kod'=>'PNG'),
			 			  array('s'=>'Sabah', 'ibn'=>'kota Kinabalu', 'kod'=>'SBH'),
			 			  array('s'=>'Sarawak', 'ibn'=>'Kuching', 'kod'=>'KCG'),
			 			  array('s'=>'Terengganu', 'ibn'=>'Kuala Terengganu', 'kod'=>'TRG')
			 			  );			
		}
	}

	$states = new negeri; 
	echo "<p align=center>Malaysia States:</p>";
	echo "<table border='1' cellspacing='0' cellpadding='0' table align='center'>";
	 foreach ($states->malaysia() as $state) {
       if ($state['kod']=='JHR'){
       echo "<tr><td class='bold'>". $state['s']. "</b></td><td class='bold'>". $state['ibn']. "</td><td class='bold'>". $state['kod']. "</td></tr>";
       }
       else
       { echo "<tr><td width=100px>". $state['s']. "</td><td width=100px>". $state['ibn']. "</td><td width=100px>". $state['kod']. "</td></tr>";}
   }
   echo "</table><hr/>";
   echo "<p align=center>*Bold</b>state is the state you're living in.</p>";
?>