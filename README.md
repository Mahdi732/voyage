

Key Features

##Add Clients:

Add new client information such as name, email, phone number, address, and date of birth.

Save this data in the database.

##Delete Clients:

Delete client entries from the database using a delete button in the client list.

##View Clients:

View a list of all clients stored in the database in a tabular format.

Manage Activities (Feature to Add):

Add, view, and delete activities linked to clients.

How to Set Up and Run the App

##1. Prerequisites

Web Server with PHP Support: Use XAMPP or WAMP.

MySQL Database: To store and retrieve client and activity data.

Web Browser: To access the application frontend.

##2. Setting Up the Application

Install XAMPP/WAMP:

Download and install XAMPP or WAMP.

Start the Apache and MySQL services from the control panel.

Set Up the Database:

Open phpMyAdmin (http://localhost/phpmyadmin).

Create a new database named voyage.

Create the client table with the following fields:

id_client (Primary Key, Auto Increment)

nom (VARCHAR)

prenom (VARCHAR)

email (VARCHAR)

telephone (INT)

address (TEXT)

data_naissance (DATE)

Add Project Files:

Copy the PHP, HTML, and CSS files into the htdocs folder inside your XAMPP/WAMP installation directory (e.g., C:\xampp\htdocs\voyage).

##3. Running the Application

Access the Application:

Open your web browser and navigate to:http://localhost/voyage/client.php

Using the App:

Add a Client:Fill out the "Sign Up" form on the main page and click "Sign Up Now" to add a client.

View All Clients:Visit the Client page to see a table of all client records.

Delete a Client:Click the Delete button next to any client to remove them from the database.

Expand the App for Activities:

To manage activities, create a new activity table in the database with fields such as id_activity, activity_name, client_id, and date.

Modify the PHP files to include forms and operations for managing activities.

##4. Notes for Use

Ensure you restart the Apache and MySQL servers every time you make changes to your files or database.

Validate all inputs (e.g., avoid empty fields or invalid formats for emails and dates).

Use the browser's developer console to debug any errors in real time.
