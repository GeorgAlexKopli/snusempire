Website Clone Documentation: SnusEmpire.ee

1. Overview

This document outlines the structure, features, and database requirements for creating a clone of the website SnusEmpire. The purpose is to recreate the functionality, design, and user experience of the original site using a Laravel-based application.

2. Feature List

Frontend Features:

Homepage:

Banner with promotions.

Featured products.

Categories menu.

Product Catalog:

Display products by categories.

Sorting options (e.g., price, popularity).

Search functionality.

Product Details Page:

Product images.

Product name, description, and details.

Add to cart button.

Cart & Checkout:

Cart page showing selected products, quantities, and total price.

Checkout process (billing, shipping, payment).

User Authentication:

User registration and login.

Profile management (view orders, update info).

Multilingual Support:

Site content available in multiple languages (e.g., Estonian, English).

Backend Features:

Admin Panel:

Product management (CRUD operations for products).

Order management.

Category management.

Database Management:

User management (CRUD for user accounts).

Order processing.

Inventory management.

API Support:

APIs for frontend integration.

API for mobile app support (optional).

Payment Gateway Integration:

Accept payments securely using a provider like Stripe or PayPal.

3. Frontend Design

HTML/CSS/JS Observations:

Header: Contains the logo, search bar, and cart icon.

Footer: Links to privacy policy, terms, and support.

Responsive Design: Mobile and desktop support with a similar layout.

Styles: Clean and minimal design using soft color schemes and rounded elements.

Scripts: Likely uses JavaScript for:

Search autocomplete.

Cart updates without refreshing the page.

Language switching.

4. URL Structure

Homepage: /et/

Categories: /et/{category-name}

Product Details: /et/{product-name}

Cart: /et/cart

Checkout: /et/checkout

User Profile: /et/profile

5. Database Schema

Tables:

Users

id (Primary Key)

name

email

password

created_at

updated_at

Products

id (Primary Key)

name

description

price

image

category_id (Foreign Key)

stock

created_at

updated_at

Categories

id (Primary Key)

name

slug

created_at

updated_at

Orders

id (Primary Key)

user_id (Foreign Key)

total_price

status (e.g., pending, completed)

created_at

updated_at

Order_Items

id (Primary Key)

order_id (Foreign Key)

product_id (Foreign Key)

quantity

price

Languages (for multilingual support)

id (Primary Key)

key

value

language

6. APIs Observed

API Endpoints:

/api/products - Fetch product data.

/api/categories - Fetch categories.

/api/cart - Update cart items.

/api/checkout - Process checkout.

/api/user - Manage user data.

7. Next Steps

Set up Laravel and configure the database.

Design the database schema based on the above.

Create routes and controllers for each page and API endpoint.

Implement frontend views with Blade templates.

Test features thoroughly.

End of Documentation.
