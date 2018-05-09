Univers of the game

Site de vente de jeu vidéo dans le cadre du cours de Projet de Développement WEB de 2ème Informatique de Gestion à l'IPAM La Louvière

Réalisé par: DUBUISSON Julien

-----------------------------

prérequis à avoir:
- Un logiciel qui permet d'avoir un serveur localhost (expl: Wampserver64)
- PHP 5.6.31
- Apache 2.4.27
- un editeur de texte (expl : Atom)

-----------------------------------

Installation:
- cliquer sur Clone or download
- sélectionner Download ZIP
- Extraire le dossier
- Renommer le dossier en "projetfinal"
- Lancer votre logiciel serveur localhost (expl: Wampserver64)
- Aller sur cet emplacement "C:\Windows\System32\drivers\etc\hosts"
- Déplacer le fichier hosts hors du disque C (Sinon probleme d'autorisation)
- Ouvrez le fichier hosts à l'aide de votre éditeur de texte
- Rajouter la ligne : "127.0.0.1 projefinal.local" (ne pas mettre les guillemets)
- Enregistrer (Ctrl + S)
- Remettre le fichier hosts à cette emplacement "C:\Windows\System32\drivers\etc\hosts"
- Aller sur cet emplacement : "C:\wamp64\alias\"
- copier le fichier : "projetfinal.conf" présent dans la racine du dossier projet final
- coller le fichier à l'emplacement suivant : "C:\wamp64\alias\"
- PRENDRE SOIN DE REMPLACER "D:\EXEMPLE CHEMIN VERS\projetfinal" par le chemin menant vers le dossier du projet

- Aller sur un navigateur et lancer la page : "http://localhost/phpmyadmin/"
- Entrez le Nom d'utilisateur "root", le mot de passe (aucun par défault) et appuyer sur enter
- Cliquer sur "Nouvelle base de données", dans le menu sur la gauche
- Entrer dans le champ "Nom de base de données" : "projetfinal" et cliquer sur "Créer"
- Cliquer maintenant sur "projetFinal" qui vient d'apparaître dans le menu de gauche
- Cliquer sur l'onglet "Importer"
- Sur la nouvelle page, cliquer sur "Choisir un fichier"
- Prendre le dump "projetfinal.sql" présent à la racine du dossier projetfinal
- Ensuite, cliquer sur "Exécuter"
- Taper l'url suivante : "http://projetfinal.local"

Fini !!!
