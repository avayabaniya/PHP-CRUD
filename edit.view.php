<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="update.php" method="get">
		<input type="hidden" name="id" value="<?= $person['id']; ?>">
		<p>
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?= $person['name']; ?>" />
		</p>
		<p>
			<label for="position">position</label>
			<input type="text" name="position" id="position" value="<?= $person['position']; ?>" />
		</p>
		<p>
			<label for="company">company</label>
			<input type="text" name="company" id="company" value="<?= $person['company']; ?>" />
		</p>
		<p>
			<label for="gender">gender</label>
			<select name="gender" id="gender">
				<option value="1" <?= $person['gender'] == 1 ? 'selected' : ''; ?>>Male</option>
				<option value="2" <?= $person['gender'] == 2 ? 'selected' : ''; ?>>Female</option>
			</select>
		</p>
		<p>
			<label for="dribbble">dribbble</label>
			<input type="text" name="dribbble" id="dribbble" value="<?= $person['dribbble']; ?>" />
		</p>
		<p>
			<label for="twitter">twitter</label>
			<input type="text" name="twitter" id="twitter" value="<?= $person['twitter']; ?>" />
		</p>
		<p>
			<label for="linkedin">linkedin</label>
			<input type="text" name="linkedin" id="linkedin" value="<?= $person['linkedin']; ?>" />
		</p>
		<p>
			<label for="facebook">facebook</label>
			<input type="text" name="facebook" id="facebook" value="<?= $person['facebook']; ?>" />
		</p>

		<p>
			<button type="submit">Submit</button>
		</p>
	</form>
</body>
</html>