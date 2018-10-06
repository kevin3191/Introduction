<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'studins.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'guardins.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Editing Student Information </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"STUDENT\" tab on the left side of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/110.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Select the student you want to edit, and click the Edit button located at the top-right of the screen. 
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/112.png'>

	
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'studins.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'guardins.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>