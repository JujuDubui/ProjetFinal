Univers of the game

Site de vente de jeu vidéo dans le cadre du cours de Projet de Développement WEB de 2ème Informatique de Gestion à l'IPAM La Louvière

Réalisé par: DUBUISSON Julien
-----------------------------
Logiciel à avoir:
- wampserver 3.1.0
- un editeur de texte (expl : Atom)
-----------------------------------
Installation:
- cliquer sur Clone or download
- sélectionner Download ZIP
- Extraire le dossier
- Renommer le dossier en "projetfinal"
- Lancer WAMP64 et lancer les serveurs "Apache" et "MySQL"
- Aller sur cet emplacement "C:\Windows\System32\drivers\etc\hosts"
- Ouvrez le fichier hosts à l'aide de votre éditeur de texte
- Déplacer le fichier hosts hors du disque C (Sinon probleme d'autorisation)
- Rajouter la ligne : "127.0.0.1 projefinal.local" (ne pas mettre les guillemets)
- Enregistrer (Ctrl + S)
- Remettre le fichier hosts à cette emplacement "C:\Windows\System32\drivers\etc\hosts"
- Aller sur cet emplacement : "C:\wamp64\alias"
- Créer un fichier : "projetfinal.conf" et y copier les lignes suivantes:
-------------------------------------------------------------------------
 ##projetfinal.local
 ##DOMAINE de ProjetFinal
 NameVirtualHost projetfinal.local
 <Directory "D:/wamp64/www/ProjetFinal/">
 AllowOverride All
 Options Indexes MultiViews FollowSymLinks
 Require all granted
 </Directory>
 <VirtualHost projetfinal.local>
 DocumentRoot D:/wamp64/www/ProjetFinal/
 ServerName projetfinal.local
 </VirtualHost>
-------------------------------------------------------------------------------------------------------

- PRENDRE SOIN DE REMPLACER "D:\EXEMPLE CHEMIN VERS\projetfinal" par le chemin menant vers le dossier du projet

- Aller sur un navigateur et lancer la page : "http://localhost/phpmyadmin/"
- Cliquer sur "Nouvelle base de données", dans le menu sur la gauche
- Entrer dans le champ "Nom de base de données" : "projetfinal" et cliquer sur "Créer"
- Cliquer maintenant sur "projetFinal" qui vient d'apparaître dans le menu de gauche
- Cliquer sur l'onglet "Importer"
- Sur la nouvelle page, cliquer sur "Choisir un fichier"
- Prendre le dump "projetfinal.sql" présent à la racine du dossier projetfinal
- Ensuite, cliquer sur "Exécuter"
- Taper l'url suivante : "http://projetfinal.local"

Fini !!!
