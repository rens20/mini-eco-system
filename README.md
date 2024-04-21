
## for index.php
Trashcycle Website Functions Documentation
1. toggleMenu Function
Description: This function toggles the visibility of the navigation menu on small screens when the burger icon is clicked.
Parameters: None
Return Value: None

Usage:
Called when the burger icon is clicked.
Toggles the visibility of the navigation links (navLinks) and changes the burger icon color.


2. Event Listener for Navigation Links
Description: This event listener closes the menu when a navigation link is clicked (optional functionality).
Parameters: None
Return Value: None

Usage:
Adds a click event listener to each navigation link.
Calls the toggleMenu function if the menu is open when a link is clicked, effectively closing the menu.


## for recycle.php

Trashcycle Website Functions Documentation

1. toggleMenu Function
Description: This function toggles the visibility of the navigation menu on small screens when the burger icon is clicked.
Parameters: None
Return Value: None

Usage:
Called when the burger icon is clicked.
Toggles the visibility of the navigation links (navLinks) and changes the burger icon color.

2. Event Listener for Navigation Links
Description: This event listener closes the menu when a navigation link is clicked (optional functionality).
Parameters: None
Return Value: None

Usage:
Adds a click event listener to each navigation link.
Calls the toggleMenu function if the menu is open when a link is clicked, effectively closing the menu.

3. Click Event for "Read More" Buttons
Description: These click events redirect the user to different pages when the "Read More" buttons are clicked.
Parameters: None
Return Value: None

Usage:
Adds a click event to each "Read More" button.
Uses window.location.href to redirect the user to the specified page (newspaper.php or plastik.php).


## for donate.php
#Setting up XAMPP for PHP Development

1.Download XAMPP:
Go to the XAMPP website and download the XAMPP installer for your operating system (Windows, macOS, Linux).

2.Install XAMPP:
Run the XAMPP installer and follow the on-screen instructions.
Choose the components you want to install (e.g., Apache, MySQL, PHP, phpMyAdmin).

3..Start XAMPP:
Once installed, start XAMPP. On Windows, you can start it from the Start menu or desktop shortcut.

4.Start Apache and MySQL:
In the XAMPP Control Panel, start the Apache and MySQL services. These are required for PHP development and database operations.

5.Test XAMPP:
Open your web browser and enter http://localhost in the address bar. You should see the XAMPP dashboard, indicating that XAMPP is running correctly.

#Creating Database Tables in MySQL (Using phpMyAdmin)

1.Access phpMyAdmin:
Open your web browser and go to http://localhost/phpmyadmin.
Log in using the default credentials (usually root for username and blank for password).

2.Create a Database:
Click on the "Databases" tab in phpMyAdmin.
Enter a name for your database (e.g., receipt_info) and click "Create."

3.Create Tables:
Inside your database (receipt_info), click on the "SQL" tab to run SQL queries.

Use SQL commands to create your tables. For example:
CREATE TABLE receipt_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    account_name VARCHAR(255) NOT NULL,
    gcash_number VARCHAR(255) NOT NULL,
    receipt_mobile_number VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    receipt_attachment VARCHAR(255) NOT NULL
);
This SQL creates a table named receipt_info with columns for id (auto-incrementing primary key), account_name, gcash_number, receipt_mobile_number, amount, and receipt_attachment.

4.Insert Sample Data (Optional):
You can insert sample data into your tables using SQL INSERT INTO statements.

#Using the PHP Code with XAMPP and MySQL

1.Place your PHP files (like the one you provided for handling form submissions) inside the XAMPP htdocs directory.

2.Access your PHP files via http://localhost/your_php_file.php in your web browser.

#Explanation of Code Functions:

1.Form Submission Handling:
The code checks if the HTTP request method is POST, indicating that a form has been submitted.

2.Database Connection Setup:
It sets up the database connection using the provided server name, username, password, and database name.
mysqli_connect() establishes the connection.

3.Sanitization and Data Retrieval:
mysqli_real_escape_string() is used to sanitize and prevent SQL injection by escaping special characters in the form data.
Form data such as account_name, gcash_number, receipt_mobile_number, and amount are retrieved from $_POST.

4.File Upload Handling:
It defines the directory ($uploadDir) where uploaded files will be saved.
The script handles file upload by moving the uploaded file to the specified directory ($receiptAttachment).

5.Database Insertion:
It constructs an SQL query to insert form data into the receipt_info table.
The query includes values for account_name, gcash_number, receipt_mobile_number, amount, and receipt_attachment.
mysqli_query() executes the SQL query.

6.Error Handling:
If the database insertion is successful, it echoes a success message.
If there's an error, it echoes an error message along with the SQL query and the specific error returned by MySQL (mysqli_error()).

7.Closing Database Connection:
mysqli_close() closes the database connection after processing the form data.

8.Else Condition (Optional):
If the request method is not POST, it echoes a message (e.g., "connecting").

## for about.php
Trashcycle Website Functions Documentation
1. toggleMenu Function
Description: This function toggles the visibility of the navigation menu on small screens when the burger icon is clicked.
Parameters: None
Return Value: None

Usage:
Called when the burger icon is clicked.
Toggles the visibility of the navigation links (navLinks) and changes the burger icon color.


2. Event Listener for Navigation Links
Description: This event listener closes the menu when a navigation link is clicked (optional functionality).
Parameters: None
Return Value: None

Usage:
Adds a click event listener to each navigation link.
Calls the toggleMenu function if the menu is open when a link is clicked, effectively closing the menu.

3.scrolling
scrolling if you scroll you can see the all infomrations abouts and  team mates

## for submit_receipt.php

1.Form Submission Check:
It begins by checking if the form is submitted using $_SERVER["REQUEST_METHOD"] == "POST". This ensures that the code executes only when the form is submitted via POST method.

2.Database Connection:
It includes the db_connection.php file to establish a connection to the database using MySQLi (MySQL Improved) extension.

3.Data Sanitization:
The form data is retrieved using $_POST superglobal and sanitized using mysqli_real_escape_string() to prevent SQL injection attacks. This function escapes special characters in a string for use in an SQL statement.

4.File Upload Handling:
It defines the directory ($uploadDir) where uploaded files will be saved (uploads/ in this case).
The code handles file upload using move_uploaded_file() function. It moves the uploaded file from the temporary directory to the specified upload directory.

5.Database Insertion:
It constructs an SQL INSERT query to insert the form data and the file path of the uploaded receipt attachment into the database table receipt_info.

6.Execution and Error Handling:
The INSERT query is executed using mysqli_query() function. If successful, it echoes a success message. Otherwise, it displays an error message along with the SQL query and the error returned by MySQL.
Database Connection Closure:
After executing the query, the database connection is closed using mysqli_close() to free up resources.

7.Redirect on Direct Access:
If the PHP file is accessed directly without form submission (else block), it redirects the user back to the form (index.php) using header("Location: index.php").


## for db_connection.php

This PHP code is responsible for configuring and establishing a connection to a MySQL database. Here's how it works:

1.Database Configuration:
It defines variables for the database server name ($servername), username ($username), password ($password), and database name ($database). Adjust these values based on your database setup.

2.Connection Establishment:
It creates a connection to the MySQL database using mysqli_connect() function with the provided server name, username, password, and database name.

3.Connection Check:
After attempting to connect, it checks if the connection was successful using if (!$conn). If the connection fails, it terminates the script execution with an error message using die() and mysqli_connect_error() to display the specific connection error.