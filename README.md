
Here's a concise guide for future users on setting up the project:

**Setup Guide**
Prerequisites
PHP installed
Composer installed
MySQL or a compatible database service

**Steps**
Clone the Repository: git clone https://github.com/AmaefuleMcDonald/K-Sports.git

Install Dependencies: Navigate to the project directory and run composer install.

**Environment Configuration:**

Copy the .env.example file to a new file named .env.
Update the .env file with your local settings, especially the DB_* values to match your database configuration. Use the details provided for a quick setup.
Generate App Key: Run php artisan key:generate to set the APP_KEY in the .env file.

**Migrate and Seed Database:**

Run php artisan migrate to create the database schema.
Import Fifa 23 Fut Players.csv from storage/app/ to your database or use php artisan db:seed to populate it with initial data if seeders are provided.
Serve the Application: Run php artisan serve and visit the provided URL in your browser.

**Data Import**
To get the players' data into your local setup:

Access the Fifa 23 Fut Players.csv in storage/app/ directory.
Import this CSV file to your database using a tool like phpMyAdmin or a command-line tool.
Kaggle Data Upload
To upload the players' data to Kaggle:

Sign up or log in to Kaggle.
Go to the "Datasets" section and click "New Dataset".
Follow the prompts to upload the Fifa 23 Fut Players.csv file.
