Bonjour,

Pour que l'application fonctionne il faudra faire des changement pour la base de donnée : - .env -> ligne 27
En suite mettre le projet en mode "prod" ligne 18

Une fois fait il va falloir installer les package avec composer -> composer install,
pour pouvoir créer la base de donnée grâce a doctrine -> symfony console doctrine:database:create,
et récupéré cette dernière avec une migration -> symfony console doctrine:migrations:migrate

C'est parti ! Plus qu'a lancer le serveur -> symfony server:start
