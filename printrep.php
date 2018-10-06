<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'visiedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'creabackup.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
		<b> Printing Reports </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	To print reports, go to \"Reports\" tab on the left of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/119.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	On the filters you can select which report you want to print.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/120.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Then click the print as document to print the report located at the bottom of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/121.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'visiedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'creabackup.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>