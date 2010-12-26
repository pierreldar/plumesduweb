<? if (isset($_POST['prout'])) {
  include 'controle/proposer.php';
} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  		<title>Accès artistes</title>
  		<link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
  		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:regular,bold' rel='stylesheet' type='text/css'>
  		<link href='http://fonts.googleapis.com/css?family=Bentham' rel='stylesheet' type='text/css'>
  		<link rel="stylesheet" type="text/css" href="css/main.css" />
  		<link rel="stylesheet" type="text/css" href="css/footer.css" />
  		<link rel="stylesheet" type="text/css" href="css/proposer.css" />
  		<link rel="stylesheet" type="text/css" href="css/header.css" />
  		<link rel="stylesheet" type="text/css" href="css/newsfeed.css" />
  		<? include_once 'fragments/flattr.php'; ?>
  </head>
  <body>
		<div id="content">
			<? include 'fragments/header.php'; ?>
			
			<div id="main">
				<table>
					<tr>
						<td>
							<h1>Accès artistes</h1>	
			
							<form action="proposer.php" method="post">
				
							<table>
							<tr>
								<td>Nom</td>
								<td><input type="text" name="nom" /></td>
							</tr>
							<tr>
								<td>Prénom</td>
								<td><input type="text" name="nom" /></td>
							</tr>
							<tr>
								<td>E-mail</td>
								<td><input type="text" name="nom" /></td>
							</tr>
							<tr>
								<td>Genre artistique</td>
								<td>
									<select name="genre">
										<option>Choisir...</option>
										<option>Littérature</option>
										<option>Manga / BD</option>
										<option>Musique</option>
										<option>Articles</option>
										<option>Autres (préciser plus bas)</option>
									</select>
								</td>
							</tr>
							</table>

							<p>Vous pouvez ici décrire vos travaux (un site web serait le bienvenue) :</p>
							<p><textarea rows="10" cols="60"></textarea></p>

							<button type="submit">Envoyer</button>

							</form>
						</td>
						
						<td class="proposer_table_gauche">
							<h2>Être artiste sur PlumesduWeb</h2>
							<p><b>Faire une demande</b></p>
							<p>Indiquez tout d'abord vos coordonnées, puis choisissez votre genre artistique.</p>
							<p><b>Expliquez votre travail</b></p>
						<p>Décrivez clairement votre travail dans la zone de texte. Montrez des images, en donnant un lien vers votre site ou vers un <a href="http://www.google.be/search?source=ig&hl=fr&rlz=&=&q=h%C3%A9bergement+d%27images&btnG=Recherche+Google&meta=lr%3D">hébergeur d'image</a>, afin qu'on vous connaisse un peu mieux. Il est important de préciser votre rythme de travail: ponctuel? mensuel? irrégulier? Car notre but est de présenter des oeuvres de manière régulières.</p>
							<p><b>Enfin</b></p>
							<p>Nos critères de sélections sont avant tout:
							<ul>
								<li>Une bonne qualité d'image: ne prenez pas de photo avec un téléphone portable!</li>
								<li>Un travail intérressant: c'est là un critère assez large, mais nous avons à coeur de présenter des oeuvres inovantes, sortants de l'ordinaire.</li>
							</ul>
						</td>
					</tr>
				</table>			
				
            </div>

			<? include 'fragments/footer.php';?>
      </div>
  </body>
</html>
