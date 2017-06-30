#XAMPP + Mysql:   

Download:  
https://dev.mysql.com/downloads/mysql/5.6.html#downloads   

After Extract in folder. Ex:...  
C:\xampp\mysql-5.6.36-winx64\bin  


Add this content in ```C:\xampp\mysql-5.6.36-winx64\my-default.ini```
```
[client] 
# password       = your_password 
port            = 3306 
socket          = "C:/xampp/mysql-5.6.36-winx64/mysql.sock"

[mysqld]
# Change here for bind listening
bind-address="127.0.0.1" 
```

Open CMD, and navegate to folder bin:  
```
cd C:\xampp\mysql-5.6.36-winx64\bin
```


Test php:
```php
<?php

ini_set('display_errors', true);
error_reporting(E_ALL);


try {
	$cli = 'homologacao2';

	$db = new PDO("mysql:host=localhost;dbname=" . $cli , 'root', '');  
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
	$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

	$sql = "SELECT * FROM acesso_setores";
	$stmt = $db->prepare($sql);
	//$stmt->bindParam(':id', $id, PDO::PARAM_STR);       
	$stmt->execute();
	$usuario = $stmt->fetchAll(PDO::FETCH_OBJ);
	
	print_r($usuario);
}
catch( PDOException $exception ) {
    print $exception->getMessage();
}
```