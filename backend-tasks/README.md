# Backend Tasks (Laravel)

My solutions to the six backend tasks from the
[software-engineering-tasks-for-beginners](https://github.com/) repository,
built with Laravel.

Each task lives in its own folder and is an independent Laravel project,
so tasks that share route names (like `/books`) never conflict with each other.

## Tasks

| # | Folder | Topic | Status |
|---|--------|-------|--------|
| 1 | [`Task1`](./Task1) | REST API for CRUD operations on a Book | Done |
| 2 | `Task2` | REST API with relations (Authors and Books) | Planned |
| 3 | `Task3` | Books management with register/login (token auth) | Planned |
| 4 | `Task4` | Categories, Products, and Orders with order items | Planned |
| 5 | `Task5` | Authorization with roles and permissions | Planned |
| 6 | `Task6` | Posts CRUD with a sync command and review/approve flow | Planned |

## Tech Stack

- PHP 8.2
- Laravel
- SQLite (default local database)
- Postman for API testing

## Repository Structure

```
backend-tasks/
├── README.md
├── Task1/      # Laravel project
├── Task2/      # Laravel project
└── ...
```

## Running a Task Locally

Each task is run the same way. Replace `Task1` with the task you want.

```bash
cd Task1
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

The API is then available at `http://127.0.0.1:8000/api`.

On Windows Command Prompt, use `copy .env.example .env` instead of `cp`.

## Notes

- `.env` and `vendor/` are not committed. Use `.env.example` as the template.
- All endpoints return JSON. Send the header `Accept: application/json`
  when testing.
- Validation is handled with Form Requests, and responses are shaped
  with API Resources.
