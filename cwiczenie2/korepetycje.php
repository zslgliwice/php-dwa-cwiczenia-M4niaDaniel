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
					<h1>Podsumowanie zamówienia korepetycji</h1>
				</header>
				
				<?php			
						if(!isset($_GET['name'])){
							header("index.php");
						}else{
							$name = $_GET['name'];
							$lessons = $_GET['lessons'];
							$num = $_GET['num'];
							$notes = $_GET['notes'];

							echo $name . $lessons . $num . $notes;
						}	
				?>			
			</article>		
		</main>
	
	</body>
</html>