<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'adminedit.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Inserting Admin Personnel</b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"ADMIN\" tab on the left side of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/102.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Click the Add Button to insert additional Admin Personnel.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/103.png'>
				<br />&nbsp; &nbsp; &nbsp; 
					NOTE: First time Admin, has \"0000\" as the default username and password

		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'adminedit.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>