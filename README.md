# User-Form-with-Toggle-Status


A lightweight web application to manage employee records using **HTML**, **CSS**, **PHP**, and **MySQL**. The app runs locally using **XAMPP** and supports real-time status toggling for each employee.

---

## Features

- Add new employees with name and age
- Display all employee records in a styled table
- Toggle employee status (Active/Inactive)
- Live updates synced with the database

---

## Technologies Used

| Layer      | Tech Used     |
|------------|---------------|
| Frontend   | HTML, CSS     |
| Backend    | PHP           |
| Database   | MySQL         |
| Server     | Apache (XAMPP) |

---

## Setup Instructions

Follow the steps below to run the project locally:

### 1. Install XAMPP
- Download from: [https://www.apachefriends.org](https://www.apachefriends.org)
- Install and launch XAMPP Control Panel

### 2. Start Apache and MySQL
- In XAMPP, click **Start** next to:
  - ✅ Apache
  - ✅ MySQL

### 3. Create the MySQL Database
- Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Click **New** > Name it `employees` > Create
- Create a table (e.g., `users`) with the following structure:

| Column | Type     | Attributes                        |
|--------|----------|-----------------------------------|
| id     | INT      | PRIMARY KEY, AUTO_INCREMENT       |
| name   | VARCHAR  | Length: 255                       |
| age    | INT      |                                   |
| status | TINYINT  | Default: 0                        |

### 4. Add Project Files

Copy the following files into your `htdocs` directory:

```
C:
└── xampp
    └── htdocs
        └── Employee-App
            ├── index.php
            ├── insert.php
            ├── toggle.php
            └── style.css
```


### 5. Run the Web App

- Open your browser and navigate to:  
  `http://localhost/Employee-App/`

---

##  Demo
![demo](UserInfo.gif)


