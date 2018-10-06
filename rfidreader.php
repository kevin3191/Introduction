<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'mainpage.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'rfidcard.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> THE RFID READER </b><br />
				&nbsp; &nbsp; &nbsp; 
				The Radio Frequency Reader or better known as the RFID Reader is what runs the system to be an Access Control. It is connected to the Computer and communicates with the system via a microcontroller called Arduino. In the Admin SAM, RFID Reader acts as a reader of the RFID Card (Radio Frequency Card) to be assigned to the newly enrolled student to become their ID. 

		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'mainpage.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'rfidcard.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarIntro . $SideBarEnd . $body . $footer . $foot;

		
		?>