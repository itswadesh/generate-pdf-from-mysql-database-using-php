# generate-pdf-from-mysql-database-using-php

##Import data
Import books.sql into your MySQL
This will create necessary tables and insert sample data into it.

##Change the settings
You need to change the following database settings in **database.php**
<pre>
  private $host = "localhost";
	private $user = "root";
	private $password = "root";
	private $database = "crud";
</pre>

##Run the program
Copy the project into your PHP servers root directory and access the index.php

This should create the PDF page and display it in the browser.
