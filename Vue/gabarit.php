<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        
		<link rel="stylesheet" href="Contenu/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="Contenu/bootstrap/js/bootstrap.min.js" />
		<script src="Contenu/jquery/jquery-3.2.1.min.js" ></script>
		<link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
             <div class="jumbotron">
				<header>
					<a href="index.php"><h1>MVC/PHP</h1></a>
					<p>Je vous souhaite la bienvenue.</p>
				</header>
			</div>
            <div id="contenu">
				<?= $contenu ?>
            </div>
            <footer id="piedBlog">
                Mini-blog réalisé par Aliaksei Mazurchyk
            </footer>
        </div> <!-- #global -->
    </body>
</html>