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
  		<link rel="stylesheet" type="text/css" href="css/header.css" />
  		<link rel="stylesheet" type="text/css" href="css/newsfeed.css" />
  		<? include_once 'fragments/flattr.php'; ?>
  </head>
  <body>
		<div id="content">
			<? include 'fragments/header.php'; ?>
			
			<div id="main">
				<h1>Accès artistes</h1>
				<p style="float: right; width: 400px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consequat volutpat cursus. Praesent rutrum viverra placerat. Etiam sit amet orci eget velit dictum aliquet in sit amet velit. Mauris gravida tellus non ipsum molestie id mollis libero iaculis. Phasellus sapien quam, auctor id auctor a, aliquam id massa. Sed ut molestie felis. Maecenas sodales mi id neque sagittis eu convallis mi commodo. Donec orci mi, pellentesque at posuere eu, hendrerit gravida quam. Aenean non sem lorem. Donec tincidunt magna sed turpis semper a egestas tortor convallis. Phasellus blandit risus quis diam mollis ac tristique erat elementum. Phasellus a nunc non orci auctor dapibus a eget arcu. Mauris adipiscing mi eget risus malesuada venenatis. Nunc non odio tortor, quis luctus odio. Pellentesque eu purus eget quam pellentesque fermentum.</p>
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
							<option>Manga</option>
						</select>
					</td>
				</tr>
				</table>

				<p>Vous pouvez ici décrire vos travaux (un site web serait le bienvenue) :</p>
				<p><textarea rows="10" cols="60"></textarea></p>

				<button type="submit">Envoyer</button>

				</form>
            </div>

			<? include 'fragments/footer.php';?>
      </div>
  </body>
</html>