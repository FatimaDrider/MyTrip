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
- Node.js version 16.16.0
- Angular CLI version 16.0.0
- Composer version 2.5.7
- Symfony CLI version 6.2.*
- Postgresql version
- jasmine version 4.6.0
  

## Installation

1. Clone this repository on your local machine: `git clone https://github.com/votre-utilisateur/planificateur-de-voyage-.git`.
2. Install the frontend dependencies:
   `cd planner-voyage/frontend`
   `npm install
3. Install backend dependencies:
   `cd ../backend`
   `composer install`
4. Configure the database:
- Create a new MySQL database
- Copy the .env file as .env.local and modify the appropriate environment variables for the database connection.
5. Run the migrations to create the database tables:
   `symfony console doctrine:migrations:migrate`
6. Launch the development server:
   `symfony serve`
7. Access the application in your browser at http://localhost:4200.



## Contribute
Contributions are welcome! To contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new feature branch (git checkout -b feature/feature-name).
3. Make the necessary changes and commit (git commit -am 'Add new feature').
4. Push the changes to the branch (git push origin feature/feature-name).
5. Submit a pull request.

## Authors
- Fatima-zahra Drider
- fatima-zahra.drider@epitech.eu
