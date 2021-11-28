# HappyBookStore

Happy Book Store is a web application for seeing a store's books. As a user, you can look what book is available in the store by visiting the home page or by choosing a category, the web application will then redirect you to a page where only books associated with that category is shown, for example if you choose Fantasy category, the application will only show you Fantasy-genre books. This web application was made by HTML and CSS with PHP logic and Laravel 8 Framework that uses MySQL to connect to the database. 

Happy Book Store was built with Model View Controller (MVC) architecture.

# Startup Guide
1. Install XAMPP, then start Apache and MySQL module (make sure these two modules are active, otherwise the application can't connect to the database and won't start).
2. Go to http://localhost/phpmyadmin/.
3. Create a database named 'happybookstoredb'.
4. Open the project's directory in a terminal and run the command php artisan migrate:refresh, php artisan db:seed, and php artisan serve.
5. Open the link given after the last command to open the web application.

Below is the preview and/or flow of the application:
# (1/4) Home Page

# (2/4) Book Detail Page

# (3/4) Category Page

# (4/4) Contact Page
