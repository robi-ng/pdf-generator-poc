# PDF Generator POC

PDF Generator POC is a Laravel-based sample application to demonstrate generating PDF using library mpdf. The submission page consists of 5 boxes of input and a submit button. After the user submitted, it will then store the data into MySQL database and generate a PDF file for download.

# Steps to run

### 1. Clone the repository
```
git clone https://github.com/robi-ng/pdf-generator-poc.git
```
### 2. Ensure that you have PHP, MySQL, and composer installed locally
Tested on `PHP 7.1.23` and `MySQL 5.7.25`.
### 3. Run composer to install dependencies
```
cd pdf-generator-poc
composer install
```
### 4. Copy .env.example into .env file 
```
cp .env.example .env
```
### 5. Generate app key
```
php artisan key:generate
```
### 6. Fill in your local database details in .env file
```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
DB_SOCKET=
```
### 7. Migrate database to create the defined table
```
php artisan migrate
```
### 8. Run Laravel app
```
php artisan serve
```
### 9. Load the app on browser
Open http://localhost:8000 on browser and the app should load.
