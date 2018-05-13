=>projet tchatApplication

=>1).htaccess redirige les requettes vers webroot/.htaccess vers la page index.php
=>2)la page index instancie le core/Dispatcher.php, ce dernier charge le Controller (UsersController pour la gestion des amis et PostsController pour la gestion des messages) en fonction du routing definit dans le fichier config/conf.php  
=>3)Acces à l'application: 
		a) Copier le projet dans htdocs ou www
		b) Importer la base de données (tchatApplication/tchat.sql)
		c) Le fichier config/conf.php contient la parametres de connexion à la BDD
		d) Acceder a l application via le navigateur par l'URL : https://localhost/tchatApplication/
		e) Si l'utilisateur est deje inscrit je le redirige vers la page des amis, sinon son compte sera automatiquement crée et par la suite il sera rediriger directement vers sa page des amis.
		f) Pour envoyer un message à un ami cliquez sur tchat, saisir et enoyer le message.
		g) Pour voir l'historique des messages avec ami cliquez sur archiv 
		h) Cliquer sur Supprimer pour retirer un message.
		i) Vous pouvez à tout moment retourner à la page des amis à l'aide de 'retourner à la liste des amis'.
