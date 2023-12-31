# WAMA_FOODS

WAMA FOODS est un blog culinaire qui présente des plats avec leurs ingrédients.
Cette application a été développée avec le framework Symfony version 6.3.4.

Version en ligne : en cours

## Prérequis

Pour exécuter cette application en local, vous aurez besoin de :

- Git
- Serveur XAMPP ou autres
- PHP 8.1.0 ou supérieur
- Composer
- Symfony CLI
- Un système de gestion de bases de données comme MySQL

## Installation

Suivez ces étapes pour installer et exécuter le projet en local :

1. Cloner le dépôt :
`git clone https://github.com/WalidFTAIMIA/WAMA_FOODS.git`

2. Aller dans le répertoire du projet :
`cd WAMA_FOODS`

3. Installer les dépendances avec Composer :
`composer install`
`composer require symfony/runtime`


4. Configurer votre environnement local en modifiant le fichier `.env` ou en créant un fichier `.env.local` :
 - Définissez la variable `DATABASE_URL` avec les informations de connexion à la base de données
 
5. Créer la base de données :
`php bin/console doctrine:database:create`

6. Exécuter les migrations pour créer les tables dans la base de données :
`php bin/console doctrine:migrations:migrate`

7. Lancer l'application en local avec Symfony :
`symfony server:start`


## Création d'un compte administrateur local


Vous avez ce compte adminitrateur déjà configurer qu'il a le ROLE_ADMIN

#### Identifiant : admin

#### Passe word : 123456

# OU


- Connectez-vous à la base de données;

- Accédez à la table "users". Cette table contient quatre colonnes : "id", "username", "password" et "role";

- Pour créer un nouvel administrateur, ajoutez une nouvelle ligne dans cette table. Entrez un identifiant unique pour "id", choisissez un "username" et un "password" pour le nouvel administrateur. Pour la colonne "role", entrez "ROLE_ADMIN";

- Une fois le compte administrateur créé, vous pouvez vous connecter au back-office en utilisant le nom d'utilisateur et le mot de passe que vous avez définis;

Suivez ces étapes pour créer un compte administrateur :

## CONNEXION AU BACK-OFFICE

- Cliquez sur le BOUTTON `SE CONNECTER` sur le navbar en haut 
- Entrez le nom d'utilisateur et le mot de passe de l'administrateur
- Vous êtes maintenant connecté en tant qu'administrateur et pouvez gérer le blog;

## DECONNEXION
- Pour vous déconnecter de l'administration, cliquez simplement sur le BOUTTON `DECONNEXION`
