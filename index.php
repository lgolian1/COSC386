<html>
	<body>
		<div style ="text-align:center">
		<form action = "" method = "post">
		Select an option from the following:
			<select id = "selecttype" name = "attribute">
				<option value = "model">Model</option>
				<option value = "speed">Speed</option>
				<option value = "ram">Ram</option>
				<option value = "hd">HDD</option>
				<option value = "price">Price</option>
			</select>
			<br>
			<input type = "text" name = "value" value = "">
			<input type = "submit" name = "submit" value = "Submit!">
		</form>
		<?php
			if($connection = @mysqli_connect('localhost','lgolian1','lgolian1','lgolian1DB')){
				#print '<p> Successfully connected to MySQL. </p>';
			} else {
				die('<p> Could not connect to MYSQL because: <b>'.mysqli_error().'</b></p>');
			}
			
			$menu = $_POST['attribute'];
			$value = $_POST['value'];
			#$querying = "SELECT * FROM PC WHERE ".$menu "=".$value;
			#$returnthis = mysqli_query($connection,querying);
				echo "<h1 align='center'>PC Database\n</h1>";
			$query = "SELECT * FROM PC";
			$return = mysqli_query($connection, $query);
				echo "<table align='center' border = '1'>
					<thead>
						<tr>
							<th> Model </th>
							<th> Speed </th>
							<th> Ram </th>
							<th> HDD </th>
							<th> Price </th>
						<tr>
					</thead>";
			while($row = mysqli_fetch_array($return)){
			echo "<tr>";
			echo "<td>" . $row['model'] . "</td>";
			echo "<td>" . $row['speed'] . "</td>";
			echo "<td>" . $row['ram'] . "</td>";
			echo "<td>" . $row['hd'] . "</td>";
			echo "<td>" . $row['price'] . "</td>";
			}
			echo "</table>";
			mysqli_close($connection);
		?>
		</div>
	</body>
</html>
