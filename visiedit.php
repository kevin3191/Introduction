<?php
include 'format.php';

$header = "
	<tr id = 'trrow' ><td colspan = '2' >
		<a href = 'mainpage.php'><b>Home</b></a>
	</td>
	<td id = 'tdheader' >
		<a href = 'studunderguard.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'printrep.php' >  Next </a>
	</td></tr>

";

$body = "
		<td colspan = '2' >
			<b> Editing Visitor Information </b><br />
				<br />&nbsp; &nbsp; &nbsp; 
				o	Go to \"VISITOR\" tab on the left side of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/117.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				o	Select the visitor on the left side, and click the edit on the top-right of the screen.
				<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src = 'img/118.png'>
				<br />&nbsp; &nbsp; &nbsp; 
				
		</td></tr>
";

$footer = "
	<tr id = 'trrow' ><td colspan = '2'>
	</td><td id = 'tdfooter' >
		<a href = 'studunderguard.php' > Previous </a>
			&nbsp; | &nbsp;
		<a href = 'printrep.php' >  Next </a>
	</td></tr>
";

echo $head . $header . $SideBarStart . $SideBarGuide . $SideBarEnd . $body . $footer . $foot;

?>