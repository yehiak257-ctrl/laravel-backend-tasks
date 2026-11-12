# Laravel Backend Tasks

Solutions to **6 backend tasks** for beginners, built with Laravel.
Each task is a standalone Laravel project, and later tasks build on earlier ones.

The full description of every task is in [`backend-tasks/README.md`](./backend-tasks/README.md).

## Tasks

| # | Task | Description | Solution |
|---|------|-------------|----------|
| 1 | REST API for CRUD operations on a Book | [Read](./backend-tasks/README.md#task-1-rest-api-for-crud-operations-on-a-book) | [Task1](./backend-tasks/Task1) |
| 2 | REST API with relations (Authors and Books) | [Read](./backend-tasks/README.md#task-2-rest-api-with-relations-and-multiple-crud-operations) | [Task2](./backend-tasks/Task2) |
| 3 | Books management system (register, login, token) | [Read](./backend-tasks/README.md#task-3-books-management-system) | Coming soon |
| 4 | Category, Product, and Order management system | [Read](./backend-tasks/README.md#task-4-category-product-and-order-management-system) | Coming soon |
| 5 | Authorization challenge (roles and permissions) | [Read](./backend-tasks/README.md#task-5-authorization-challenge) | Coming soon |
| 6 | CRUD for Posts with a sync command | [Read](./backend-tasks/README.md#task-6-crud-for-posts-with-sync-command) | Coming soon |

## Tech Stack

- PHP 8.2
- Laravel
- SQLite
- Postman for API testing

## Running a Task

```bash
cd backend-tasks/Task1
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

The API is then available at `http://127.0.0.1:8000/api`.
On Windows Command Prompt, use `copy .env.example .env` instead of `cp`.
