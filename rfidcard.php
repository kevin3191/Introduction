<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'rfidreader.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'adminsam.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> THE RFID CARD </b><br />
				&nbsp; &nbsp; &nbsp; 
				The Radio Frequency Card or better known as the RFID Card would be given to every student enrolled in the school hence giving them a unique RFID Number embedded in the RFID Card. The student's information would then be added with one attribute which is the RFID Card Number for better recognition. The RFID Card served to be hovered unto the RFID Reader.
		
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'rfidreader.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'adminsam.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarIntro . $SideBarEnd . $body . $footer . $foot;

		
		?>