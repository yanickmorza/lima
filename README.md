# LIMA - Light Interface Maker Application
- Un Bundle pour Symfony permettant de créer des SCRUD (Seach, Create, Read, Update, Delete).
- Concevoir une application avec Symfony simplement tout en restant concentré sur les fonctionnalités.
- Prérequis PHP-7.2, Base de données PostgreSQL.

# Installation et lancement

<code>- 1 - composer create-project -s dev yanickmorza/projetym nom_de_votre_projet</code>

- 2 - Supprimer le fichier : composer.json et renommer le fichier composer-SF5.txt en : composer.json (ou remplacer son contenu par celui de composer-SF5.txt)

<code>- 3 - composer update</code>

- 4 - Modifier le mot de passe PostgreSQL du fichier se trouvant dans /src/LimaBundle/Services/ConnexionDatabase.php

- 5 - Lancer votre serveur web Symfony (http ou https) : 
<code>symfony serve</code>
ou 
<code>php -S localhost:8000 -t public/</code>

- 6 - Lancer un navigateur internet récent (à jour) : <a href="https://localhost:8000/lima/">https://localhost:8000/lima/</a>