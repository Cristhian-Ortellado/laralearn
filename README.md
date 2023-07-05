# Lara Learn Blog

Lara Learn is a blog project developed using the Laravel framework, MySQL, PHP, JavaScript (JS), Blade templating engine, CSS, and Tailwind CSS. It is a powerful and feature-rich application designed to provide a seamless and interactive blogging experience. This README file provides an overview of the Lara Learn project, installation instructions, and key features.

## Features

- User registration and authentication system
- Admin panel for managing blog posts
- Role-based access control (Admin and User roles, there is just one admin, you can add your account as an admin)
- Create, edit, and delete blog posts
- Categorize blog posts into different categories
- Commenting system for users to engage with blog posts
- User-friendly interface with responsive design
- Search functionality to find specific blog posts
- Pagination for easy navigation through blog posts

## Installation

Follow these steps to set up the Lara Learn blog project on your local development environment:

1. Clone the repository: `git clone https://github.com/Cristhian-Ortellado/laralearn.git`
2. Navigate to the project directory: `cd laralearn`
3. Install composer dependencies: `composer install`
4. Create a copy of the `.env.example` file and rename it to `.env`.
5. Generate an application key: `php artisan key:generate`
6. Configure the database connection in the `.env` file with your MySQL credentials.
7. Run database migrations: `php artisan migrate`
8. (Optional) Seed the database with sample data: `php artisan db:seed`
9. Start the development server: `php artisan serve`
10. Visit `http://localhost:8000` in your web browser to access the Lara Learn blog.

**Note:** Make sure you have PHP and Composer installed on your machine before proceeding with the installation.

## Usage

Once the Lara Learn blog is installed and running, you can access the following sections:

- Home: Browse through the latest blog posts and discover featured content.
- Categories: Explore blog posts based on different categories.
- Search: Find specific blog posts by searching for keywords.
- User Registration: Create a new user account to access additional features.
- User Login: Existing users can log in to their accounts.
- Admin Panel: Administrators can manage blog posts.

Feel free to explore the Lara Learn blog, create new blog posts, comment on existing posts, and customize the application according to your needs.

## Contributing

Contributions to the Lara Learn blog project are welcome! If you find any issues or have suggestions for improvements, please submit an issue or a pull request on the project's GitHub repository.

## License

Lara Learn is open-source software released under the [MIT License](https://opensource.org/licenses/MIT). You are free to use, modify, and distribute the codebase in accordance with the terms of the license.

## Acknowledgements

Lara Learn utilizes the Laravel framework, MySQL, PHP, JavaScript (JS), Blade templating engine, CSS, and Tailwind CSS, along with various open-source libraries and packages. We express our gratitude to the Laravel community and the contributors of the used packages for their valuable work.

## Contact

If you have any questions or need assistance with the Lara Learn blog project, you can reach out to the project maintainer at [cortelladofernandez@gmail.com](mailto:cortelladofernandez@gmail.com).
