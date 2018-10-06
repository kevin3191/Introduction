<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'adminsam.php' > Previous </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Overview </b>
				<br />&nbsp; &nbsp; &nbsp; 
				Thank you for using SAM Systems! 
				This manual is for Admin SAM only. 
				Admin SAM is where the data manipulation takes place (Inserting, Editing, Deleting). 
				It is mainly for the use of the school's Administrator or the school's assigned staff for verifying enrolled students.
			
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'adminsam.php' > Previous </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarIntro . $SideBarEnd . $body . $footer . $foot;

		
		?>