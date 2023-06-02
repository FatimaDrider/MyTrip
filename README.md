<<<<<<< HEAD
# Planificateur de voyage

Ce projet est un planificateur de voyage permettant aux utilisateurs de créer et de gérer leurs voyages en ligne. Il utilise Angular pour le frontend et Symfony pour le backend.
## Fonctionalités  Backend
1. API RESTful : Concevoir et développer une API RESTful pour permettre la communication entre le frontend et le backend.
2. Gestion des données des utilisateurs : Mettre en place des fonctionnalités permettant de stocker et de gérer les profils utilisateur, y compris les informations personnelles, les préférences et les historiques de voyages.
3. Intégration avec des services externes : Intégrer des API tierces pour obtenir des informations sur les activités , les hôtels, les restaurants, les bars..
4. Gestion des itinéraires :  Implémenter une fonctionnalité permettant de créer, de stocker et de gérer les itinéraires des utilisateurs.
5. Système sécurisé d'authentification des utilisateurs
6. Calcul des coûts : Mettre en place des fonctionnalités pour calculer les coûts estimés des voyages en fonction des réservations et des préférences des utilisateurs
7. Commentaires sur les voyages
8. Intégration de services externes pour la réservation d'hôtels, de vols, etc.
9. Notifications pour les mises à jour de voyages

## Fonctionnalités Frontend
1. Interface utilisateur intuitive :  Créer une interface utilisateur conviviale permettant aux utilisateurs de rechercher, de planifier et de gérer leurs voyages.
2. Recherche de destinations : Fournir aux utilisateurs un moyen de rechercher des destinations en fonction de critères tels que la ville, le pays, dates , etc.
3. Gestion des itinéraires : Permettre aux utilisateurs de créer des itinéraires personnalisés en sélectionnant des destinations, des dates et des activités.
4. Affichage des informations sur les lieux : Intégrer des informations détaillées sur les lieux touristiques, les hôtels, les restaurants, les activités, etc., afin d'aider les utilisateurs à prendre des décisions éclairées.
5. Authentification des utilisateurs : Mettre en place un système d'authentification pour permettre aux utilisateurs de créer des comptes, de se connecter et de gérer leurs profils.
6. Suivi des dépenses : Fournir aux utilisateurs un moyen de suivre leurs dépenses liées aux voyages et d'obtenir des rapports détaillés.

## Prérequis
=======
# Travel Planner

This project is a travel planner allowing users to create and manage their trips online. It uses Angular for the frontend and Symfony for the backend.
## Features
- Create, edit and delete trips
- Add, edit and delete trip destinations
- Search and filter trips according to various criteria such as destination, dates, activities
- Secure user authentication system
- User profile management
- Comments on trips
- Integration of external services for booking hotels, flights, etc.
- Notifications for trip updates
## Prerequisites
>>>>>>> master
- Node.js version 16.16.0
- Angular CLI version 16.0.0
- Composer version 2.5.7
- Symfony CLI version 6.2.*
<<<<<<< HEAD
- Version Postgresql
- jasmine version 4.6.0
- Docker


## Installation

1. Clonez ce dépôt sur votre machine locale : `git clone https://github.com/your-user/Planner-trip.git`.
2. Installez les dépendances du frontend :
   `cd planificateur-de-voyage/front`
   `npm install
3. Installer les dépendances du backend :
   `cd planificateur-de-voyage/Back`
   `composer install`
4. Configurez la base de données :
- Créer une nouvelle base de données PostgreSQL
- Copiez le fichier .env en .env.local et modifiez les variables d'environnement appropriées pour la connexion à la base de données.
5. Lancez les migrations pour créer les tables de la base de données :
   `symfony console doctrine:migrations:migrate`
6. Lancez le serveur de développement :
   `symfony serve`
7. Accédez à l'application dans votre navigateur à l'adresse http://localhost:8000.


## Intégration continue (GitLab CI)

Ce projet est configuré avec GitLab CI pour l'intégration continue à l'aide de Docker. Les fichiers de configuration de CI se trouvent dans le répertoire `.gitlab-ci.yml`.

## Contribution

Si vous souhaitez contribuer à ce projet, veuillez suivre les étapes suivantes :

1. Fork ce dépôt et clonez-le localement.

2. Créez une nouvelle branche pour vos modifications
## Exécution locale

1. Pour lancer le frontend :

## Contribute
Les contributions sont les bienvenues ! Pour contribuer à ce projet, veuillez suivre les étapes suivantes :
1. Mettre le dépôt en fourche.
2. Créer une nouvelle branche de fonctionnalité (git checkout -b fonctionnalité/nom de la fonctionnalité).
3. Effectuer les modifications nécessaires et valider (git commit -am 'Add new feature').
4. Pousser les changements vers la branche (git push origin fonctionnalité/nom-de-la-fonctionnalité).
5. Soumettre une demande d'extraction.

## Auteurs
=======
- Postgresql version
- jasmine version 4.6.0
  

## Installation

1. Clone this repository on your local machine: `git clone https://github.com/your-user/Planner-trip.git`.
2. Install the frontend dependencies:
   `cd planificateur-de-voyage/front`
   `npm install
3. Install backend dependencies:
   `cd planificateur-de-voyage/Back`
   `composer install`
4. Configure the database:
- Create a new PostgreSQL database
- Copy the .env file as .env.local and modify the appropriate environment variables for the database connection.
5. Run the migrations to create the database tables:
   `symfony console doctrine:migrations:migrate`
6. Launch the development server:
   `symfony serve`
7. Access the application in your browser at http://localhost:8000.



## Contribute
Contributions are welcome! To contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new feature branch (git checkout -b feature/feature-name).
3. Make the necessary changes and commit (git commit -am 'Add new feature').
4. Push the changes to the branch (git push origin feature/feature-name).
5. Submit a pull request.

## Authors
>>>>>>> master
- Fatima-zahra Drider
- fatima-zahra.drider@epitech.eu
