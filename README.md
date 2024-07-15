Steps to use this project correctly:
Open this repository and click on Use this template ---> Create a new repository
Clone the repository wherever you want to develop, e.g. VS Code, VSCodium, ecc.
Open the cloned folder with a terminal
Copy and paste the .env.example file and rename it into .env without removing the env.example file
Run composer install to install all our composer packages
Run npm i to install all our npm packages
Run php artisan key:generate to generate our custom application key
Run on two separeted terminals:
run npm run dev to build iteratively our front-end packages and code
run php artisan serve to build iteratively our back-end packages and code
Start changing the world with your oustanding code!