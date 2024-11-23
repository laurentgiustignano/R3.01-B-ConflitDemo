# Mise en évidence des conflits de noms de classes

Dans cet exemple, le fichier conflit.php a besoin d'établir une connexion vers un connecteur Paypal et Visa. Les développeurs de ces entreprises ont développés et proposent des classes pour réaliser la connexion. Malheuresement, ils les ont appellées Authentification...

Pour tester, il faut utiliser la commande suivante dans le terminal
```php
 php conflit.php
```
Dans ce premier Commit, `conflit.php` utilise convenablement la version Visa. L'objet `$connexionVisa` est de type `Authentification` venant du dossier Visa. L'affichage est cohérent en utilisant 

Dans le deuxième, je souhaite utiliser la classe Authentification de Paypal. Je rajoute dans conflit.php l'import du fichier `require_once 'Paypal/Authentification.php'`. Je créé ensuite l'objet $connexionPaypal en appelant le constructeur Authentification. Mais l'exécution fait appraitre une erreur :
`Cannot declare class Authentification, because the name is already in use`

Sa solution est apportée dans le troisieme Commit, en utilisant un espace de noms différents pour nos deux classes Authentification. Ainsi, leurs FQN (Fully Qualified Name) permet de les différencier : `Paypal\Authentification` et `Visa\Authentification`.