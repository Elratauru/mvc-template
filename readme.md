# MVC Template Project Structure

This is a small skeleton template that I made in an hour or so to practice some structuring.

## Getting Started

Download the project and run composer install to add any dependencies it may have.

You also need to install the Database on a MySQL server. It's just a simple plain 1-table database with an Users Table and Plain (never do this live pls) passwords. You can find this database (or create yourself one), in the database.sql dump file.

### Basic Usage

The project uses Altorouter for routing, so all routes are configured on the index.php file. 

The way it works is as follows:
 - Index.php detects the route.
 - Depending on the route detected, it will load the matching regexp function.
 - This function usually calls a class or object and displays something.
 - In the case of the homepage, it calls a controller that loads a view.
 - In the case of the simple API, it returns a JSON array.

You can check the index.php for more information.

## Built With

* [PHP7](http://www.php.net/) - The Language Used.
* [Composer](https://getcomposer.org/) - Package Manager

## Authors

* **Alfonso Carvallo** - *The answers you seek, lie within*

See also the list of [contributors](https://github.com/elratauru/mvc-template/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [license.md](license.md) file for details
