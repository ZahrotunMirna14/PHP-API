<?php 
$conn = mysqli_connect("localhost","root","","php-ai");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$box = [];
		while ($data = mysqli_fetch_assoc($result)) {
			$box[] = $data;
		}
		return $box;
	}
$students = query("SELECT * FROM users");	
?>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1 style="text-align: center;">Data Siswa</h1>
		<table border="1px" cellpadding="10" cellspacing="0" style="margin-left: 33%">
	 		<tr>
	 			<td bgcolor="#150e63" align="center" style="color: #ffffff">Id</td>
	 			<td bgcolor="#150e63" align="center" style="color: #ffffff">Username</td>
	 			<td bgcolor="#150e63" align="center" style="color: #ffffff">Password</td>
	 			<td bgcolor="#150e63" align="center" style="color: #ffffff">Level</td>
	 			<td bgcolor="#150e63" align="center" style="color: #ffffff">Fullname</td>
	 			<td bgcolor="#150e63" align="center" style="color: #ffffff">Aksi</td>
	 		</tr>
	 		<?php foreach($students as $student) : ?>
				 <tr>
				 	<td><?= $student["Id"] ?></td>				 	
				 	<td><?= $student["Username"] ?></td>				 	
				 	<td><?= $student["Password"] ?></td>
				 	<td><?= $student["Level"] ?></td>
				 	<td><?= $student["Fullname"] ?></td>
				 	<td>
						<a  href="edit.php?id=<?php echo $student['Id']; ?>">Edit</a> |
						<a  href="delete.php?id=<?php echo $student['Id']; ?>">Hapus</a>
		  			</td>
				 </tr>
				<?php endforeach; ?>
	 	</table>
 	</body>
</html>