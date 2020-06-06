# Girlscript

## Student Registeration Form

##Setup Database

### Create A database girlscript
```
CREATE DATABASE girlscript;
```
### Create A table student in girlscript Database
```
CREATE TABLE `girlscript`.`students` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `number` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`));
```
### Replace your Credentials in Connect.php
```
$SERVER_NAME="your server url";
$DATABASE_NAME="db name";
$PASSWORD="db password";
$USER_NAME="db username";

```
