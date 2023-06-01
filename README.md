# Travel Planner

This project is a travel planner allowing users to create and manage their trips online. It uses Angular for the frontend and Symfony for the backend.
## Features
- Create, edit and delete trips
- Add, edit and delete trip destinations
- Search and filter trips according to various criteria
- Secure user authentication system
- User profile management
- Comments on trips
- Integration of external services for booking hotels, flights, etc.
- Notifications for trip updates
## Prerequisites 
- Node.js version(16.16.0)
- Angular CLI version(16.0.0)
- Composer  version(2.5.7)
- Symfony CLI  version(6.2.*)
- Postgresql  version()
- jasmine version(4.6.0)
  :emoji_code:

## Installation

1. Clonez ce dépôt sur votre machine locale : `git clone https://github.com/votre-utilisateur/planificateur-voyage.git`
2. Installez les dépendances du frontend : 
`cd planificateur-voyage/frontend`
  `npm install
3. Installez les dépendances du backend :
  `cd ../backend`
   `composer install`
4. Configurez la base de données :
- Créez une nouvelle base de données MySQL
- Copiez le fichier .env en tant que .env.local et modifiez les variables d'environnement appropriées pour la connexion à la base de données.
5. Exécutez les migrations pour créer les tables de la base de données :
`symfony console doctrine:migrations:migrate`
6. Lancez le serveur de développement :
`symfony serve`
7. Accédez à l'application dans votre navigateur à l'adresse http://localhost:4200.

   

## Contribute
Les contributions sont les bienvenues ! Pour contribuer à ce projet, veuillez suivre les étapes suivantes :
1. Fork du dépôt.
2. Créez une nouvelle branche de fonctionnalité (git checkout -b feature/nom-de-la-fonctionnalite).
3. Effectuez les modifications nécessaires et commit (git commit -am 'Ajouter une nouvelle fonctionnalité').
4. Poussez les modifications vers la branche (git push origin feature/nom-de-la-fonctionnalite).
5. Soumettez une pull request.

## Auteurs
- Fatima-zahra Drider
- fatima-zahra.drider@epitech.eu
