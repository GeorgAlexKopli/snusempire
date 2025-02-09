# SnusEmpire Clone Documentation

## 1. Overview

This project is a clone of the SnusEmpire website, featuring key functionalities such as an online store, product listings, a contact page, an information page about the company, and a job listings page. Additionally, it includes a user authentication system built with Laravel, allowing users to register, log in, and log out.

## 2. Technologies

- **Backend:** Laravel (PHP Framework)
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Authentication:** Laravel Breeze or Laravel Auth

## 3. Structure and Components

### 3.1. Core Components

- **Home Page** – Displays featured products and essential information  
- **Online Store** – Product listing with filters  
- **Products** – Detailed product views  
- **Contact** – Contact form and company information  
- **About Us** – Company introduction  
- **Careers** – Job openings  
- **User Authentication** – Registration, login, and logout  

### 3.2. Navbar and User Authentication

The navigation bar contains links to key pages and user authentication features. When a user is logged in, their name and a logout button are displayed.

## 4. Functionality

### 4.1. User Authentication

- Users can register and log in  
- Upon logging in, the user’s name is displayed on the right side of the navbar  
- Users can log out using a Laravel Blade form  

### 4.2. Search and Shopping Cart

- A search bar allows users to quickly find products  
- The shopping cart icon is displayed on the right side of the navbar  

### 4.3. Styling and Design

- The navbar is **sticky** and remains at the top when scrolling  
- The profile name and logout button are positioned on the right side of the navbar  
- Interactive elements, such as opening and closing the search bar  

## 5. Database

### 5.1. Users Table

| Column      | Type        | Description             |
|------------|------------|-------------------------|
| id         | int (PK)   | Unique identifier       |
| name       | varchar    | User’s name             |
| email      | varchar    | User’s email address    |
| password   | varchar    | Hashed password         |
| created_at | timestamp  | Time of creation        |
| updated_at | timestamp  | Time of last update     |

### 5.2. Products Table

| Column      | Type        | Description             |
|------------|------------|-------------------------|
| id         | int (PK)   | Unique identifier       |
| name       | varchar    | Product name            |
| description| text       | Product description     |
| price      | decimal    | Product price           |
| image      | varchar    | Product image URL       |
| created_at | timestamp  | Time of creation        |
| updated_at | timestamp  | Time of last update     |

## 6. Usage and Deployment

### 6.1. Running the Code

Clone the repository:
```bash
git clone <repo_url>
```
Navigate to the project directory:
```bash
cd snusempire-clone
```
Install dependencies:
```bash
composer install
npm install
```
Set up the environment:
1. Create a `.env` file and copy the contents from `.env.example`
2. Generate an application key:
   ```bash
   php artisan key:generate
   ```
3. Configure the database connection in the `.env` file

Run database migrations:
```bash
php artisan migrate
```
Start the Laravel server:
```bash
php artisan serve
```
Build and run the frontend:
```bash
npm run dev
```

## 7. Future Enhancements

- Shopping cart and order system  
- Admin panel for managing products and users  
- Payment gateway integration  

This documentation provides a comprehensive overview of the project structure and functionality.