# SnusEmpire Clone Documentation

## 1. Overview

This project is a clone of the SnusEmpire website, featuring an online store, product listings, a contact page, an about page, and a job listings page. It includes a user authentication system built with Laravel, allowing users to register, log in, and log out. 

The primary goal of this project is to replicate the core functionality of SnusEmpire, providing a fully functional e-commerce platform with user authentication and seamless navigation.

## 2. Technologies

- **Backend:** Laravel (PHP Framework)
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Authentication:** Laravel Breeze or Laravel Auth

## 3. Structure and Components

### 3.1. Core Components

- **Home Page** – Displays featured products and essential information
- **Online Store** – A product listing page with filters for easy product searching
- **Product Details** – Detailed views for individual products
- **Contact** – Contact form and company information
- **About Us** – Information about the company and its mission
- **Careers** – Job openings and opportunities within the company
- **User Authentication** – User registration, login, and logout functionality

### 3.2. Navbar and User Authentication

The navigation bar contains links to all key pages and user authentication features. When a user is logged in, their name and a logout button are displayed on the right side of the navbar.

## 4. Functionality

### 4.1. User Authentication

- **User Registration** – New users can register an account
- **User Login** – Existing users can log into their accounts
- **Logout** – Logged-in users can log out, with their name and logout button visible in the navbar
- **Session Management** – User session is managed with Laravel Auth, allowing for secure authentication

### 4.2. Search and Shopping Cart

- **Product Search** – A search bar allows users to easily find products by name or description
- **Shopping Cart** – The shopping cart icon is displayed on the right side of the navbar, allowing users to view and manage their cart items

### 4.3. Styling and Design

- **Sticky Navbar** – The navbar remains at the top of the page while scrolling
- **Profile Section** – The user’s profile name and logout button are aligned to the right side of the navbar
- **Interactive Elements** – Features such as the search bar opening/closing are designed to be intuitive and responsive

## 5. Database Structure

Users Table:
------------
| Column      | Type        | Description             |
|-------------|-------------|-------------------------|
| id          | int (PK)    | Unique identifier       |
| name        | varchar     | User’s name             |
| email       | varchar     | User’s email address    |
| password    | varchar     | Hashed password         |
| is_admin    | boolean     | Admin role flag         |
| created_at  | timestamp   | Time of creation        |
| updated_at  | timestamp   | Time of last update     |

Products Table:
---------------
| Column      | Type        | Description             |
|-------------|-------------|-------------------------|
| id          | int (PK)    | Unique identifier       |
| name        | varchar     | Product name            |
| description | text        | Product description     |
| price       | decimal     | Product price           |
| image       | varchar     | Product image URL       |
| created_at  | timestamp   | Time of creation        |
| updated_at  | timestamp   | Time of last update     |

Orders Table:
-------------
| Column      | Type        | Description             |
|-------------|-------------|-------------------------|
| id          | int (PK)    | Unique identifier       |
| user_id     | int (FK)    | Linked user (nullable)  |
| name        | varchar     | Customer name           |
| email       | varchar     | Customer email          |
| address     | text        | Shipping address        |
| total_price | decimal     | Total order cost        |
| status      | enum        | Order status            |
| created_at  | timestamp   | Time of creation        |
| updated_at  | timestamp   | Time of last update     |

Order Items Table:
------------------
| Column      | Type        | Description             |
|-------------|-------------|-------------------------|
| id          | int (PK)    | Unique identifier       |
| order_id    | int (FK)    | Linked order            |
| product_id  | int (FK)    | Linked product          |
| quantity    | int         | Quantity ordered        |
| price       | decimal     | Product price at order  |
| created_at  | timestamp   | Time of creation        |
| updated_at  | timestamp   | Time of last update     |

## 6. Usage and Deployment

### 6.1. Setup and Running the Application Locally

To run the application locally, follow these steps:

#### 1. Clone the Repository

Clone the project repository to your local machine:

```bash
git clone <repo_url>
```

#### 2. Install Backend Dependencies

Navigate to the project directory and install the required PHP dependencies using Composer:

```bash
cd snusempire-clone
composer install
```

#### 3. Install Frontend Dependencies

Next, install the required JavaScript dependencies using npm:

```bash
npm install
```

#### 4. Configure Environment

Copy the example environment file to create a `.env` file:

```bash
cp .env.example .env
```

Update the `.env` file with your local environment settings, such as the database connection details.

#### 5. Generate the Application Key

Run the following command to generate a unique application key:

```bash
php artisan key:generate
```

#### 6. Run Database Migrations

To create the necessary database tables, run the migrations:

```bash
php artisan migrate
```

#### 7. Compile Frontend Assets

Before running the application, compile the frontend assets by running:

```bash
npm run dev
```

This command will start a development server and compile the CSS and JavaScript files.

#### 8. Access the Application

Once everything is set up and compiled, you can run the Laravel development server:

```bash
php artisan serve
```

This will start the server at `http://localhost:8000`. Open this URL in your browser to access the application.

#### 9. Stop the Server

To stop the server, press `CTRL+C` in the terminal.

---

This documentation provides a detailed overview of the project structure, functionalities, and instructions for setting up and running the application locally. 
