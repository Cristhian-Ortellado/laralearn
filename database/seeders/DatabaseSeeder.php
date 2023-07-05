<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'email' => 'cortelladofernandez@gmail.com',
            'name' => 'cristhian_ortellado',
            'username' => 'cristhian_ortellado',
            'password' => 'password'
        ]);

        //categories
        Category::create([
            'name' => 'Laravel tips',
            'slug' => 'laravel-tips',
        ]);

        Category::create([
            'name' => 'Good Practices',
            'slug' => 'good-practices',
        ]);

        Category::create([
            'name' => 'Helpers',
            'slug' => 'helpers',
        ]);

        Post::create([
            'title' => 'Avoiding n+1 query issues',
            'body' => 'A good way to avoid n+1 issues is by being mindful of all the relationships we will be using and including them in the initial query using the with() method',
            'excerpt' => 'A good way to avoid n+1 issues..',
            'slug' => 'n-plus-1-query-issues',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Use Eloquent instead of raw query',
            'body' => "<p>Readability and Maintainability: Eloquent provides a clean and expressive syntax for interacting with the database. It uses a fluent query builder interface that allows you to write complex database queries in a more readable and intuitive way. This improves the maintainability of your code as it is easier for other developers to understand and work with.</p>
                    <p>Database Agnostic: Eloquent abstracts away the specific database implementation details, allowing you to write database-agnostic code. This means you can switch between different database systems (e.g., MySQL, PostgreSQL, SQLite) without modifying your codebase. Eloquent takes care of generating the appropriate SQL queries for the specific database engine you are using.</p>
                    <p>Relationships and Eager Loading: Eloquent simplifies working with relationships between database tables. It provides an intuitive syntax for defining and querying relationships, making it easy to retrieve related data. Eager loading allows you to load related data upfront, minimizing the number of database queries needed and improving performance.</p>
                    <p>Model-Based Development: Eloquent encourages a model-based development approach. Each database table is represented by a corresponding model class, which encapsulates the table's properties and behavior. This helps to organize and structure your codebase, making it easier to manage and maintain.</p>
                    <p>Automatic Query Optimization: Eloquent includes query optimization features to improve performance. It automatically generates optimized SQL queries by utilizing features like query caching, lazy loading, and eager loading. These optimizations help reduce the number of database queries and improve the overall performance of your application.</p>
                    <p>Security: Eloquent helps prevent SQL injection attacks by automatically escaping and binding input values. It uses parameter binding to separate the SQL query from the user input, eliminating the risk of malicious code execution. Eloquent provides a higher level of abstraction, making database interactions easier, more efficient, and more secure. It simplifies development, improves code maintainability, and offers performance optimizations out of the box.</p>",
            'excerpt' => '<p>Eloquent provides a higher level of abstraction, making database interactions easier, more efficient, and more secure. It simplifies development, improves code maintainability, and offers performance optimizations out of the box.</p>',
            'slug' => 'eloquent-instead-raw-query',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
