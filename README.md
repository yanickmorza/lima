# LIMA - Light Interface Maker Application
- Un Bundle pour Symfony permettant de créer des SCRUD (Seach, Create, Read, Update, Delete).
- Concevoir une application avec Symfony simplement tout en restant concentré sur les fonctionnalités.
- Prérequis PHP-7.2, Base de données PostgreSQL.

# Installation et lancement

<code>- 1 - composer create-project -s dev yanickmorza/lima nom_projet</code>

<code>- 1 - ou git clone https://github.com/yanickmorza/lima.git nom_projet</code>

- 2 - Supprimer le fichier : composer.json et renommer le fichier composer-SF5.txt en : composer.json 
- 2 - ou alors remplacer son contenu par celui de composer-SF5.txt

<code>- 3 - composer update</code>

- 4 - Modifier le mot de passe PostgreSQL du fichier se trouvant dans
<code>/src/LimaBundle/Services/ConnexionDatabase.php</code>

- 5 - Lancer votre serveur web avec la commande 'Symfony' (http ou https) : 
<code>symfony serve</code>
- 5 ou alors si vous n'avez pas installé la commande 'Symfony' :
<code>php -S localhost:8000 -t public/</code>

- 6 - Lancer un navigateur internet récent (à jour) : <a href="https://localhost:8000/lima/">https://localhost:8000/lima/</a>