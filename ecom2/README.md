These files are a combination of a currently being worked on e-commerce website. 

TO DOWNLOAD THESE FILES AND A LOCAL SERVER, PLEASE FOLLOW THE FOLLOWING STEPS:
1. Download the ecom2.zip file.
2. Extract the file.
3. Download Xampp server for a local server to run the website.
4. Install MySql, FireZilla FTP Server, Mercury Mail Server, phpMyAdmin, and Webalizer. This languages are to help run the server effectively.
5. Locate your Xampp folder in your system. 
6. Locate htdocs inside of the Xampp folder. 
7. Move the extracted file into the htdocs folder. 

TO RUN YOUR SERVER AND CREAT A DATABASE, PLEASE FOLLOW THE FOLLWOING STEPS:
Please copy and paste to your web browser anything in quote from step 1
1. Go to your respective browser and type "localhost/phpmyadmin/".
2. In phpmyadmin click on NEW. Click on the SQL TAB under new and type "CREATE DATABSE 'ecom_db'".
3. In ecom_db click on NEW. Click on the SQL TAB under ecom_db and copy and paste the following: 
      CREATE TABLE categories(
          cat_id INT AUTO_INCREMENT NOT NULL, 
          cat_name text NOT NULL, 
          primary key (cat_id)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
      
 Click on "go" after pasting this SQL script.  
 
      
4. Clik on categories table and select the SQL TAB under categories, erase the first line and copy and paste the following: 

    INSERT INTO categories (cat_id, cat_name) VALUES
    (1, 'Electronics'),
    (2, 'Books'),
    (3, 'Fashion'),
    (4, 'Shoes'),
    (5, 'Camera & Photo');
    
  Click on "go" after pasting this SQL script.


