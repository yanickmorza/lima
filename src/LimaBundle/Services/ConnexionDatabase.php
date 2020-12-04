<?php

namespace App\LimaBundle\Services;

use Symfony\Component\HttpFoundation\Session\Session;

class ConnexionDatabase
{
    public function iniatialise_db()
    {
        $session = new Session();
        if ($session->get('database') !== null) {
            $db = $session->get('database');
        } 
        else {
            $session->set('database', 'postgres');
            $db = $session->get('database');
        }
        return $db;
    }

    public function db_connect()
    {
        $session = new Session();
        $connexionDatabase = new ConnexionDatabase();

        $driver = "pgsql";
        $session->set('driver', $driver);

        $port = "5432";
        $session->set('port', $port);

        $serveur = "localhost";
        $session->set('serveur', $serveur);

        $userdb = "postgres";
        $session->set('userdb', $userdb);

        $passdb = "xxxxxxxx";
        $session->set('passdb', $passdb);
        
        $dbname = $connexionDatabase->iniatialise_db();
        
        $dsn = $driver . ":host=$serveur;port=$port;dbname=$dbname";
        $opt = array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC);

        return new \PDO($dsn, $userdb, $passdb, $opt);
    }

    
/* **** ****

    // $connexionDatabase->dotEnv();
    // $connexionDatabase->dotEnvLocal();

    // ---- Créer et écrire dans env.local ou .env
    public function dotEnv()
    {
        $session = new Session();
        $connexionDatabase = new ConnexionDatabase();

        $driver = $session->get('driver');
        $port = $session->get('port');
        $serveur = $session->get('serveur');
        $userdb = $session->get('userdb');
        $passdb = $session->get('passdb');
        $db = $connexionDatabase->iniatialise_db();

        $APP_SECRET = md5($db);
        $dotenv = ".env.local";
        $path_env = "../";
        fopen($path_env . "/" . $dotenv, "w+");

        $fichier_env = $path_env . "/" . $dotenv;
        $texte_env = "APP_ENV=dev
APP_SECRET=$APP_SECRET
DATABASE_URL=$driver://$userdb:$passdb@$serveur:$port/$db
MAILER_URL=null://$serveur";

        return file_put_contents($fichier_env, $texte_env);
    }
    // ---- Créer et écrire dans env.local ou .env

    // ---- Créer et écrire dans env.local.php
    public function dotEnvLocal()
    {
        $session = new Session();
        $connexionDatabase = new ConnexionDatabase();

        $driver = $session->get('driver');
        $port = $session->get('port');
        $serveur = $session->get('serveur');
        $userdb = $session->get('userdb');
        $passdb = $session->get('passdb');
        $db = $connexionDatabase->iniatialise_db();

        $APP_SECRET = md5($db);
        $dotenv = ".env.local.php";
        $path_env = "../";
        fopen($path_env . "/" . $dotenv, "w+");

        $fichier_env = $path_env . "/" . $dotenv;
        $texte_env = "<?php

use Symfony\Component\HttpFoundation\Session\Session;

\$session = new Session();
\$dbname = \$session->get('database');

return array (
    'APP_ENV' => 'dev',
    'APP_SECRET' => '$APP_SECRET',
    'DATABASE_URL' => '$driver://$userdb:$passdb@$serveur:$port/'.\$dbname,
    'MAILER_URL' => 'null://$serveur.$db'
);";

        return file_put_contents($fichier_env, $texte_env);
    }
    // ---- Créer et écrire dans env.local.php

**** **** */

}