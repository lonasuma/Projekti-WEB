<!DOCTYPE html>
<html>
<head>
	<title>Page with database</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID:<br></th>
				<th>Emri:<br></th>
				<th>Email:<br></th>
				<th>Phone:<br></th>
				
			</tr>
		</thead>
		<tbody>
			<?php
			// Konektimi me databaze
			$host = "localhost";
			$user = "root";
			$pass= "";
			$db = "databaze";

			$conn = mysqli_connect($host, $user, $pass, $db);

			// Kontrollimi konektimit
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			// Kodi per  SQL query per te dhenat ndatabaze
			$sql = "SELECT * FROM databaze";

			// Egzekutimi i databazes
			$result = mysqli_query($conn, $sql);

			// Check if any records were found
			if (mysqli_num_rows($result) > 0) {
			    // Output data of each row
			    while ($row = mysqli_fetch_assoc($result)) {
			        echo "<tr>";
			        echo "<td>" . $row["id"] . "</td>";
			        echo "<td>" . $row["emri"] . "</td>";
			        echo "<td>" . $row["email"] . "</td>";
			        echo "<td>" . $row["phone"] . "</td>";
			        echo "</tr>";
			    }
			} else {
			    echo "No records found";
			}

			// Mbyllja e konektimit ne databaze
			mysqli_close($conn);
			?>
		</tbody>
	</table>
</body>
</html>