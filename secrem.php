<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'secedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'studins.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Removing Security Personnel </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"SECURITY\" tab on the left side of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/106.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Select the personnel you want to remove, and click the Trash bin Icon.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/109.png'>

		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'secedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'studins.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>