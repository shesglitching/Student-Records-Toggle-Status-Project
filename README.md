# Student Records – Toggle Status Project

## Live Website

**Hosting Link:** [(http://razan02.kesug.com/)]

---

## 1. Project Description

This is a simple full-stack web application built with **HTML, CSS, JavaScript, PHP, and MySQL**. It allows the user to submit a **Name** and **Age** through a single-line form, stores each submission as a record in a MySQL database, and displays all records in a table. Every record has a **Status** field (0 or 1) that can be flipped instantly using a **Toggle** button without reloading the page (via AJAX/fetch).

The project was successfully deployed and tested on live shared hosting using **InfinityFree**.

A new record was successfully added to the table using the name **Razan Otayf** and age **21**, and the record was also stored in the MySQL database.

## 2. Project Objectives

* Practice building a form that writes to a MySQL database using PHP.
* Practice reading and displaying database records in an HTML table.
* Practice using JavaScript `fetch()` to call a PHP script and update the page instantly (AJAX).
* Understand basic client-server-database architecture and deploy it to real shared hosting (InfinityFree).
* Successfully add and store a new student record in the database.

## 3. Technologies Used

| Technology           | Purpose                                         |
| -------------------- | ----------------------------------------------- |
| HTML5                | Page structure and form                         |
| CSS3                 | Styling                                         |
| JavaScript (Vanilla) | AJAX toggle requests                            |
| PHP                  | Server-side logic and database queries          |
| MySQL                | Data storage                                    |
| XAMPP                | Local development server (Apache + MySQL + PHP) |
| InfinityFree         | Free live PHP/MySQL hosting for deployment      |

## 4. Project Structure

```text
project/
│
├── index.php        # Main page: form + records table
├── db.php           # Database connection settings
├── insert.php       # Handles form submission and adds new records
├── toggle.php       # Handles AJAX toggle requests and flips status
├── style.css        # Page styling
├── script.js        # Client-side JavaScript for the Toggle button
├── database.sql     # Original database SQL file
├── records.sql      # Database export after adding the new record
└── README.md        # Project documentation
```

## 5. Explanation of Every File

* **index.php** – The homepage. Connects to the database, shows the Name/Age/Submit form, and displays all database records in a table. Each row has a Toggle button.
* **db.php** – Contains the MySQL connection settings, including the host, username, password, database name, and port. It is configured to connect to the MySQL database on InfinityFree.
* **insert.php** – Receives the Name and Age submitted through the form, validates the input, and inserts a new record into the `records` table with the default status set to `0`.
* **toggle.php** – Receives an ID through AJAX, checks the current status, changes it from `0` to `1` or from `1` to `0`, updates the database, and returns the new status as JSON.
* **style.css** – Provides the styling for the form, table, buttons, messages, and status badges.
* **script.js** – Contains the `toggleStatus(id)` function. It sends a `fetch()` POST request to `toggle.php` and updates the Status value on the page immediately without reloading the page.
* **database.sql** – Contains the original database SQL code used for the project.
* **records.sql** – Contains the database export after adding the new record with the name **Razan Otayf** and age **21**. This file represents the database data after testing the application and adding the new record.
* **README.md** – Contains the project documentation and deployment information.

## 6. Live Deployment

The project was deployed successfully on **InfinityFree**.

The MySQL database was created through the InfinityFree Control Panel, and the database table was imported through phpMyAdmin. The database connection settings in `db.php` were updated with the InfinityFree MySQL connection details.

The project files were uploaded to the `htdocs` folder, and the website was successfully accessed through the live hosting URL.

## 7. Project Testing

The project was tested successfully on the live website.

* A new record was added using the name **Razan Otayf**.
* The age **21** was entered.
* The new record appeared successfully in the table.
* The record was successfully stored in the MySQL database.
* The Status value was displayed as `0`.
* The **Toggle** button can be used to change the Status between `0` and `1`.
* The Status changes instantly without reloading the entire page using JavaScript/AJAX.
* After adding the new record, the updated database was exported and saved in the `records.sql` file.

## 8. How to Use the Website

1. Enter a name in the **Name** field.
2. Enter an age in the **Age** field.
3. Click **Submit**.
4. The new record will be added to the table and stored in the MySQL database.
5. The Status starts at `0`.
6. Click the **Toggle** button to change the Status between `0` and `1`.
7. The Status is updated instantly without reloading the page.

## 9. Explanation of the Toggle Feature

The **Toggle** feature allows the user to change the Status value of a record between `0` and `1`.

For example:

```text
Status = 0
      ↓
Click Toggle
      ↓
Status = 1
```

If the Toggle button is clicked again:

```text
Status = 1
      ↓
Click Toggle
      ↓
Status = 0
```

The update is performed using JavaScript `fetch()` and AJAX, so the Status value changes immediately on the page without a full page reload.

## 10. Final Result

The project is successfully running on live hosting using **InfinityFree**. The application can add new student records, store them in the MySQL database, display them in a table, and update the Status field instantly using the Toggle button.

A test record containing **Razan Otayf** and age **21** was successfully added to the table and stored in the database. After testing the application, the updated database data was exported and saved separately in the **`records.sql`** file, while the original **`database.sql`** file remained unchanged.
