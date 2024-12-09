<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# WebSite Laravel

## About Project

This project is a website for a food industry brand that produces various types of products such as Boulangerie, Viennoiserie, Pâtisserie, and Cuisine. The website represents the company's products and provides clients with an idea about the company. It includes a catalog to navigate and see products by multiple categories such as Boulangerie, Viennoiserie, Pâtisserie, Cafés Gourmands, Snacking, and Produits Service. There is also an option to contact the company.

## Table of Contents

1. [Features](#features)
2. [Installation](#installation)
3. [Usage](#usage)
4. [Technologies Used](#technologies-used)
5. [Contributing](#contributing)
6. [License](#license)
7. [Contact](#contact)

## Features

-   **Product Catalog**: Browse products by categories.
-   **Contact Page**: Contact the company via a form.
-   **Admin Interface**: Manage the content of the website, including products and categories.
-   **Live Search**: Use Livewire for live searching by typing the name of the product or selecting other attributes like "technologie" or "recette".
-   **Email Sending**: Use Mailtrap for testing email functionality.

## Status

-   **Responsive Design**: The responsive design is not finished yet.
-   **Live Search**: Implemented using Livewire.
-   **Email Sending**: Implemented using Mailtrap for testing.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/achraf360/website-laravel.git
    ```
2. Navigate to the project directory:
    ```bash
    cd website-laravel
    ```
3. Install dependencies:
    ```bash
    composer install
    npm install
    ```
4. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```
5. Generate the application key:
    ```bash
    php artisan key:generate
    ```
6. Run the migrations:
    ```bash
    php artisan migrate
    ```
7. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

-   Access the website at `http://localhost:8000`.
-   Navigate to `/admin` for backoffice access to manage data.
-   Use the search functionality to find products by name or attributes.

## Technologies Used

-   **Laravel**: PHP framework for web development.
-   **Livewire**: For live searching functionality.
-   **Tailwind CSS**: For styling and layout.
-   **MySQL**: Database for storing product and category information.
-   **Mailtrap**: For testing email functionality.

## Contributing

Contributions are welcome! Please read the [CONTRIBUTING.md](CONTRIBUTING.md) file for guidelines on how to contribute to this project.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Contact

For any questions or inquiries, please contact [Achraf Mouissa](mailto:mouissa.achraf@gmail.com).

## Website Screenshots

### Client

<div align="center">
    <table>
        <tr>
            <td>
                <strong>Hero Section</strong><br>
                <img src="/public/images/screenshots/Hero.png" alt="Hero Section" width="500">
            </td>
            <td>
                <strong>About us Section</strong><br>
                <img src="/public/images/screenshots/About-us.png" alt="About us Section" width="500">
            </td>
        </tr>
        <tr>
            <td>
                <strong>Categories Section</strong><br>
                <img src="/public/images/screenshots/Categories.png" alt="Categories Section" width="500">
            </td>
            <td>
                <strong>Footer</strong><br>
                <img src="/public/images/screenshots/Footer.png" alt="Footer" width="500">
            </td>
        </tr>
        <tr>
            <td>
                <strong>Category Description</strong><br>
                <img src="/public/images/screenshots/Category-Description.png" alt="Category Description" width="500">
            </td>
            <td>
                <strong>Products List</strong><br>
                <img src="/public/images/screenshots/Products.png" alt="Products List" width="500">
            </td>
        </tr>
        <tr>
            <td>
                <strong>Contact us</strong><br>
                <img src="/public/images/screenshots/Contact-us.png" alt="Contact us" width="500">
            </td>
            <td>
                <strong>Test Email</strong><br>
                <img src="/public/images/screenshots/Test-email.png" alt="Test email" width="500">
            </td>
        </tr>
    </table>
</div>

### Content Management

<div align="center">
    <table>
        <tr>
            <td>
                <strong>Login Page</strong><br>
                <img src="/public/images/screenshots/login.png" alt="Login Page" width="500">
            </td>
            <td>
                <strong>Dashboard</strong><br>
                <img src="/public/images/screenshots/Dashboard.png" alt="Dashboard" width="500">
            </td>
        </tr>
        <tr>
            <td>
                <strong>Categories List</strong><br>
                <img src="/public/images/screenshots/Categories-admin-list.png" alt="Categories List" width="500">
            </td>
            <td>
                <strong>Category Create</strong><br>
                <img src="/public/images/screenshots/Category-create.png" alt="Category Create" width="500">
            </td>
        </tr>
         <tr>
            <td>
                <strong>Category Update</strong><br>
                <img src="/public/images/screenshots/Category-update.png" alt="Category Update" width="500">
            </td>
        </tr>
    </table>
</div>
