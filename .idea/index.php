<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'sinicin');
define('DB_USER', 'root'); 
define('DB_PASS', 'root');

$link=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_query($link,"SET NAMES 'utf8'");

if(isset($_GET['del'])){
$id=$_GET['del'];
$query="DELETE FROM phone
	WHERE id= $id";
$result=mysqli_query($link,$query) or die (mysqli_error($link));
}

$query="SELECT * FROM phone";
$result=mysqli_query($link,$query) or die (mysqli_error($link));

for ($data=[]; $row=mysqli_fetch_assoc($result); $data[]=$row);
?>
<style>
table {width: 100%; border-collapse: collapse;}
table td {padding: 12px 16px;}
table thead tr {font-weight: bold; border-top: 1px solid #e8e9eb;}
table tr {border-bottom: 1px solid #e8e9eb;}
table tbody tr:hover {background: #e8f6ff;}
</style>
<table>
	<?php foreach ($data as $phone){?>
		<tr>
			<td><?=$phone['id']?></td>
			<td><?=$phone['mark']?></td>
			<td><?=$phone['price']?></td>
			<td><a href="?del=<?=$phone['id']?>">удалить</a></td>
		</tr>
	<?php } ?>
</table>