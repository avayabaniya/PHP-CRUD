<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="save.php" method="get">
		<p>
			<label for="name">Name</label>
			<input type="text" name="name" id="name" />
		</p>
		<p>
			<label for="position">position</label>
			<input type="text" name="position" id="position" />
		</p>
		<p>
			<label for="company">company</label>
			<input type="text" name="company" id="company" />
		</p>
		<p>
			<label for="gender">gender</label>
			<select name="gender" id="gender">
				<option value="1">Male</option>
				<option value="2">Female</option>
			</select>
		</p>
		<p>
			<label for="dribbble">dribbble</label>
			<input type="text" name="dribbble" id="dribbble" />
		</p>
		<p>
			<label for="twitter">twitter</label>
			<input type="text" name="twitter" id="twitter" />
		</p>
		<p>
			<label for="linkedin">linkedin</label>
			<input type="text" name="linkedin" id="linkedin" />
		</p>
		<p>
			<label for="facebook">facebook</label>
			<input type="text" name="facebook" id="facebook" />
		</p>

		<p>
			<button type="submit">Submit</button>
		</p>
	</form>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Position</th>
				<th>Company</th>
				<th>Gender</th>
				<th>Dribbble</th>
				<th>Twitter</th>
				<th>Linkedin</th>
				<th>Facebook</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($people as $person): ?>
			<tr>
				<td><?= $person['id']; ?></td>	
				<td><?= $person['name']; ?></td>	
				<td><?= $person['position']; ?></td>	
				<td><?= $person['company']; ?></td>	
				<td><?= $person['gender'] == 1 ? 'Male' : 'Female'; ?></td>	
				<td><?= $person['dribbble']; ?></td>	
				<td><?= $person['twitter']; ?></td>	
				<td><?= $person['linkedin']; ?></td>	
				<td><?= $person['facebook']; ?></td>	
				<td>
					<a href="edit.php?id=<?= $person['id']; ?>">Edit</a>
					<a href="view.php?id=<?= $person['id']; ?>">View</a>
					<a href="delete.php?id=<?= $person['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>