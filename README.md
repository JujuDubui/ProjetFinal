Univers of the game

Site de vente de jeu vidéo dans le cadre du cours de Projet de Développement WEB de 2ème Informatique de Gestion à l'IPAM La Louvière

Réalisé par: DUBUISSON Julien

-----------------------------

Prérequis à avoir:

- Un logiciel qui permet d'avoir un serveur localhost (expl: Wampserver64)
- PHP 5.6.31
- Apache 2.4.27
- Un editeur de texte (expl : Atom)

-----------------------------------

Installation Windows:

- Cliquer sur Clone or download
- Sélectionner Download ZIP
- Extraire le dossier
- Renommer le dossier en "Projetfinal"
- Lancer votre logiciel serveur localhost (expl: Wampserver64)
- Aller sur cet emplacement "C:\Windows\System32\drivers\etc\hosts"
- Déplacer le fichier hosts hors du disque C (Sinon probleme d'autorisation)
- Ouvrez le fichier hosts à l'aide de votre éditeur de texte
- Rajouter la ligne : "127.0.0.1 projefinal.local" (ne pas mettre les guillemets)
- Enregistrer (Ctrl + S)
- Remettre le fichier hosts à cette emplacement "C:\Windows\System32\drivers\etc\hosts"
- Copier le fichier : "projetfinal.conf" présent dans la racine du dossier Projetfinal
- Coller le fichier à l'emplacement suivant : "C:\wamp64\alias\" (si Wamp n'est pas votre serveur local, aller dans le dossier adéquat)
- PRENDRE SOIN DE REMPLACER "D:\EXEMPLE CHEMIN VERS\projetfinal" par le chemin menant vers le dossier du projet

- Aller sur un navigateur et lancer la page : "http://localhost/phpmyadmin/"
- Entrez le Nom d'utilisateur "root", le mot de passe (aucun par défault) et appuyer sur enter
- Cliquer sur "Nouvelle base de données", dans le menu sur la gauche
- Entrer dans le champ "Nom de base de données" : "projetfinal" et cliquer sur "Créer"
- Cliquer maintenant sur "projetFinal" qui vient d'apparaître dans le menu de gauche
- Cliquer sur l'onglet "Importer"
- Sur la nouvelle page, cliquer sur "Choisir un fichier"
- Prendre le dump "projetfinal.sql" présent à la racine du dossier Projetfinal
- Ensuite, cliquer sur "Exécuter"
- Taper l'url suivante : "http://projetfinal.local"

Fini !!!

--------

Admin :

- login : Admin
- password : admin

Utilisateurs:

- Utilisateur 1:
- login : morcos71
- password: 123456789
- Utilisateur 2:
- login : Fra
- password : 1234
