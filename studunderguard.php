<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'guardedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'visiedit.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Adding Student under Guardian </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"GUARDIAN\" tab on the left side of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/113.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Select the guardian on the left side of the screen, on the bottom of the screen can be found the list of students designated to the selected Guardian.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/116.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Here, you can also increase or decrease the Student designated to the selected Guardian.
	
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'guardedit.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'visiedit.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>