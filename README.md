<<<<<<< HEAD
# Job_search
=======
# Job Search

![Banner](./public/img/banner.png)

## About

Job search is the newest solution for tracking job offers you are interested in. The website provides a handful of tools to manage each offer in a unique way, allowing total liberty and control to the user.

### Characeristics

* A Homepage where you can visualize all the applied offers with their current status and available options.
* A search bar to filter offers with the desired characteristics.
* View full details of an offer and keep a constant track by adding notes when needed.
* API to manage offers more easily.

![Homepage](public/img/screenshot.png)
![Show Element](public/img/show.png)

## installation

### Pre-requisites

* PHP 8.0 or above
* Composer
* Relational database engine (Mysql/Sqlite)
* Node.js

### Steps

1. Clone the git repository:

```
git clone https://github.com/DinGo21/Job_search
```

2. Enter inside the folder and install all dependencies by running the next command:

```
composer install && npm install
```

3. Copy and paste the '.env.example' file and rename it to '.env', then uncomment the lines ranging from 25 to 29.

![enviroment](public/img/env1.png)

4. Change the variable `DB_CONNECTION` to the database engine you are currently using, and also name your main database inside `DB_DATABASE`.

5. generate the encryption key to get access to the database:

```
php artisan key:generate
```

6. Migrate the database and tables:

```
php artisan migrate
```

7. Last thing is to initialize the server to begin using the website by running the line below:

```
npm run build && composer run dev
```

## Using The API

The Application comes with its own API in order to manage your job offers in whatever way you want. Here you can see all the available endpoints and methods:

### Offers

>/api/jobs

**Methods**: GET, POST.

>/api/jobs/{jobId}

**Methods**: GET, PUT, DELETE.

### Feedback

>/api/jobs/{jobId}/comments

**Methods**: GET, POST.

>/api/jobs/{jobId}/comments/{commentId}

**Methods**: GET, PUT, DELETE.

## Test the Applications

Test the application stability by running the command below:

```
php artisan test --coverage
```

![Test](public/img/test.png)

## BBDD Diagram

![BBDD Diagram](public/img/diagram.png)

## Languages and Tools Used

<div align="left">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" height="40" alt="laravel logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="40" alt="php logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" height="40" alt="javascript logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" height="40" alt="html5 logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" height="40" alt="css3 logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" height="40" alt="mysql logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" height="40" alt="sqlite logo"  />
</div>


## Authors

* Diego Santamaria: 

<div align="left">
  <a href="www.linkedin.com/in/diegosm21" target="_blank">
    <img src="https://raw.githubusercontent.com/maurodesouza/profile-readme-generator/master/src/assets/icons/social/linkedin/default.svg" width="52" height="40" alt="linkedin logo"  />
  </a>
</div>
>>>>>>> 5e39635bb39b3718e27ed99a2a7e27de1c1dc115
