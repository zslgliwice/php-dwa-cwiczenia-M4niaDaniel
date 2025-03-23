<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>2 - Obsługa formularzy w PHP</title>
		<link href="arkusz-cwiczenia.css" rel="stylesheet">
		
	</head>
	<body>
		<main>
			<article>
				<header>
					<h1>Zamów korepetycje online</h1>
				</header>
				<form >
					<input type="text" name="name" id="name" required placeholder="Wpisz imię...">
					<select>
						<option value="pol">Język Polski(50)</option>
						<option value="his">Historia(60)</option>
						<option value="wos">Wiedza O Społeczeństwie(45)</option>
					</select>
					<input type="number" name="num" id="num">
					<Label for="notes">Notatki(5)</Label>
					<input type="checkbox" name="notes" id="notes">
					<input type="submit" value="Zamów Korepetycje">
				</form>
			</article>	
		</main>	
	</body>
</html>