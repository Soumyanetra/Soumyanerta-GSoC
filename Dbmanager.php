<?php
	session_start();
?>
<HTML>
	<HEAD>
		<TITLE>DB MANAGER</TITLE>
		<SCRIPT src="jquery-3.4.1.js"></SCRIPT>
		<SCRIPT type="text/javascript">
			$(function(){
				$("#head").load("Header.html");
			});
		</SCRIPT>
		<SCRIPT src="DbTbmanager.js"></SCRIPT>
		<SCRIPT src="Dbvalidation.js"></SCRIPT>
		<LINK rel="stylesheet" type="text/css" href="Dbmstyle.css"/>
	</HEAD>
	<BODY>
		<DIV id="head"></DIV>
		<DIV id="backcontainer">
			<DIV id="back1" class="support">
				<SPAN></SPAN>
				<H1 class="heading">Create Database</H1>
			</DIV>
			<DIV id="back2" class="support">
				<SPAN></SPAN>
				<H1 class="heading">Select Database</H1>
				<FORM action="Opendb.php" method="post" onsubmit="return examine()">
					<P id="dbn" class="hint">Name of Database:</P>
					<INPUT id="dbname" class="inpt" type="text" name="dbname" onfocus="change(id);" onblur="rechange(id);" onchange="database(this.value);" required></INPUT>
					<DIV id="eruser" class="error"></DIV>
					<P id="tbn" class="hint">Name of table:</P>
					<INPUT id="tbname" class="inpt" type="text" name="tbname" onfocus="change(id);" onblur="rechange(id);" onchange="table(this.value);" required></INPUT>
					<DIV id="erpass" class="error"></DIV>
					<INPUT id="smbt" type="submit" value="Open"></INPUT>
				</FORM>
			</DIV>
		</DIV>
	</BODY>
</HTML>