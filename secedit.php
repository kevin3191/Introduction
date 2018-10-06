<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'secins.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'secrem.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Editing Security Personnel</b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"SECURITY\" tab on the left side of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/106.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Select the personnel you want to edit, and click the Edit Button Located at the top-right of the screen.ersonnel.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/108.png'>

	
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'secins.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'secrem.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>