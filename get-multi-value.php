<!DOCTYPE html>
<html>
<head>
	<title>获取多值表单的数据</title>
</head>
<body>
<table width="500" align="center" bgcolor="#CCCCCC">
	<?php
		if(isset($_POST['submit']))
		{
			echo "You often use these programming languages: <br>";
			foreach ($_POST['languages'] as $languages) {
				echo "$languages<br>";
				
			}
			foreach ($_POST['lang'] as $lang) {
				echo "$lang<br>";
				
			}
		}
	?>
	<form method="post" action="get-multi-value.php">
		<tr>
		<td>多选框</td>
		<td>
			<select name="languages[]" size="4" multiple="multiple">
				<option value="csharp">C#</option>
				<option value="java">JAVA</option>
				<option value="php">PHP</option>
				<option value="asp">ASP</option>
			</select>
		</td>
		</tr>
		<tr>
			<td>复选框</td>
			<td>
				<input type="checkbox" name="lang[0]" value="csharp">C#<br>
				<input type="checkbox" name="lang[1]" value="php">PHP<br>
				<input type="checkbox" name="lang[2]" value="java">JAVA<br>
				<input type="checkbox" name="lang[3]" value="asp">ASP<br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="提交">
			</td>
		</tr>
	</form>
	
</table>
</body>
</html>