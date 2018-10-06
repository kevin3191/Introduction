<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'rfidcard.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'overview.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Admin SAM </b><br />
				&nbsp; &nbsp; &nbsp; 
				The Student's Attendance Monitoring or Admin SAM is developed for the use of the schoool staffs with the privilege to add or mark a student an access to the school. Admin SAM is the entry point of the information for every student for the Guard SAM to function, recognize and give them access to the school.
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'rfidcard.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'overview.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarIntro . $SideBarEnd . $body . $footer . $foot;

		
?>