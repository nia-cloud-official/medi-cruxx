# Medi-Cruxx - Online Pharmacy

Medi-Cruxx is a full-featured online pharmacy platform designed to offer users the ability to search, browse, and purchase medications with ease. Built using PHP and MySQL, the platform provides an intuitive interface for both users and administrators to manage orders, track deliveries, and keep medication inventories up to date.

## Features

- **User Registration & Authentication:** Secure user accounts with the ability to log in, update profiles, and manage orders.
- **Product Catalog:** A comprehensive listing of medications with categories, descriptions, prices, and availability.
- **Search Functionality:** Users can search for medications by name or category.
- **Shopping Cart & Checkout:** A complete e-commerce solution where users can add items to their cart, review their order, and proceed to checkout.
- **Order Tracking:** Users can view the status of their orders in real time.
- **Admin Dashboard:** A back-end admin interface for managing products, orders, users, and inventory.

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript (optional)
- **Libraries/Frameworks:** 
  - Bootstrap (for responsive UI)
  - jQuery (optional for enhanced interactivity)
  
## Installation

### Prerequisites

- A web server (Apache or Nginx recommended)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer (for dependency management)

### Steps

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/nia-cloud-official/medi-cruxx.git
   ```

2. **Set Up the Database:**

   - Create a new MySQL database.
   - Import the provided SQL file into your database:
   
     ```bash
     mysql -u yourusername -p yourdatabase < medi-cruxx.sql
     ```

3. **Configure Database Connection:**

   - Edit the `config.php` file to add your MySQL credentials:
   
     ```php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'yourusername');
     define('DB_PASSWORD', 'yourpassword');
     define('DB_DATABASE', 'yourdatabase');
     ```

4. **Install Dependencies (Optional):**

   If you're using Composer for additional PHP libraries, run:
   
   ```bash
   composer install
   ```

5. **Run the Application:**

   - Open your browser and navigate to `http://localhost/medi-cruxx` (or your server's URL).

## Usage

1. **For Users:**
   - Register or log in to your account.
   - Browse the available medications or use the search feature.
   - Add medications to your cart and proceed to checkout.
   - Track your order status from your profile.

2. **For Admins:** (Coming soon)
   - Log in to the admin dashboard.
   - Manage medications: add, update, or remove items from the catalog.
   - Process and manage orders.



## Contributions

Contributions are welcome! Feel free to fork the repository and submit a pull request. Ensure that your code follows the project’s coding standards.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Contact

For any inquiries or support, contact:

**Milton Vafana**  
Email: [miltonhyndrex@gmail.com](mailto:miltonhyndrex@gmail.com)
