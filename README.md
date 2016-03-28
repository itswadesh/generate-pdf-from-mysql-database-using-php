# generate-pdf-from-mysql-database-using-php

##Import data
Import books.sql into your MySQL
This will create necessary tables and insert sample data into it.

##Change the settings
You need to change the following database settings in database.php
<code>
  private $host = "localhost";
	private $user = "root";
	private $password = "root";
	private $database = "crud";
</code>

##Run the program
Copy the project into your PHP servers root directory and access the index.php

This should create the PDF page and display it in the browser.
