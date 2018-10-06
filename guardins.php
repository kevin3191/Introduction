<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'studedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'guardedit.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Inserting Guardian Information </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"GUARDIAN\" tab on the left side of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/113.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Click the Add button.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/114.png'>

		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'studedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'guardedit.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>