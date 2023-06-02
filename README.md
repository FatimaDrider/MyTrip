
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

- Node.js version 16.16.0
- Angular CLI version 16.0.0
- Composer version 2.5.7
- Symfony CLI version 6.2.*
- Version Postgresql
- jasmine version 4.6.0
- Docker


## Installation

1. Clonez ce dépôt sur votre machine locale : `git clone https://github.com/your-user/Planner-trip.git`.
2. Installez les dépendances du frontend :
   `cd Planner-trip/front`
   `npm install
3. Installer les dépendances du backend :
   `cd Planner-trip/Back`
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


## Authors
- Fatima-zahra Drider
- fatima-zahra.drider@epitech.eu
