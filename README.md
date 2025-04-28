# README - Project Setup and Database Instructions

## 📚 About the Project

This project is a "Kids Learning" application where children can learn alphabets, numbers, and colors in a fun, interactive way. The project is developed using **Laravel** and **Bootstrap**.

This guide explains how to set up the database for the project, migrate the tables, and seed sample data to make the application work properly.

---

## 🛠️ What is Migration?

Migration in Laravel is a way to **build and manage the database schema** using PHP code instead of manually creating tables.

**In this project, migrations will:**

-   Create a `categories` table.
-   Create a `data` table (containing images, audios, etc.).

### Why Use Migrations?

-   Easy to **share the database structure** with others.
-   Helps **track changes** to the database.
-   Allows **easy updates and rollbacks**.

### How to Run Migration

To create all tables defined in the project, run the following command:

```bash
php artisan migrate
```

---

## 🌱 What is Seeding?

Seeding means **automatically filling** the database with **sample or default data**.

**In this project, seeders will:**

-   Insert demo categories like "Alphabet", "Numbers", "Colors".
-   Add initial sample data for learning content.

### Why Use Seeding?

-   Quickly generate **test data**.
-   Ensure the project works correctly immediately after setup.

### How to Run Seeder

To insert default data into tables, run:

```bash
php artisan --seed
```

---

## 🔥 How to Set Up the Database

### Step 1: Run Migrations

This will create all necessary tables.

```bash
php artisan migrate
```

### Step 2: Run Seeders

This will insert default data into the tables.

```bash
php artisan --seed
```

### (Optional) Run Migrate and Seed Together



---

## 📋 Important Commands

| Action                    | Command                                              |
| :------------------------ | :--------------------------------------------------- |
| Create a migration file   | `php artisan make:migration create_categories_table` |
| Run all migrations        | `php artisan migrate`                                |
| Rollback last migration   | `php artisan migrate:rollback`                       |
| Create a seeder file      | `php artisan make:seeder CategoriesTableSeeder`      |
| Run all seeders           | `php artisan db:seed`                                |
| Migrate and seed together | `php artisan migrate --seed`                         |

---

## 💡 Examples

**Migration Example:**

```php
Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('categorie_name');
    $table->string('icon');
    $table->timestamps();
});
```

**Seeder Example:**

```php
DB::table('categories')->insert([
    'name' => 'admin',
    'email' => 'admin@example.com',
    'password' => password
]);
```

---

## 🛡️ Important Notes

-   Make sure your `.env` file is correctly configured for your database.
-   Run `php artisan migrate` and `php artisan --seed` after cloning the project.
-   If you use this command `php artisan --seed` you can access this login page by email: admin@example.com and password: password.
-   **Admin User:** If you need an admin login, create a user manually or add a user seeder.
-   You may need to create a folder named `uploads/` inside `public/` to store icons and files.
-   **Admin Panel Access:** For more secure access to the admin page, use the route `/admin/login`.

---

## Data for testing
    video :
    https://drive.google.com/drive/folders/1viGz-MQfGcj2gvW1BeFrhvLzZjYgv6Ke?usp=sharing
    audio :
    https://drive.google.com/drive/folders/1h_5xkePV-OkXL7Ja1oOR-rH00IPoi-Dg?usp=sharing
        

## 🏁 Final Words

Migrations and seeders **make your Laravel project easy to deploy, easy to test**, and **professional**. They help anyone who gets the project to quickly set up the database without any issues.

Enjoy building and improving this Kids Learning platform! 🚀
