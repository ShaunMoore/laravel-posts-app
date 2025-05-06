# Laravel Code Challenge

## Objective

Create a simple Laravel application that allows users to create and view posts, with the ability for authenticated users to like posts. This challenge demonstrates form handling, authentication, data persistence, and Ajax interactions in Laravel.

---

## Features

- User authentication
- Create post form (authenticated users only)
- Auto-generated slugs from titles
- List of published posts on homepage
- Ajax filtering of posts by title
- Like button per post (one like per authenticated user, real-time update)

---

## Requirements

- PHP 8.1+
- Composer
- Node and NPM
- MySQL or SQLite
- Laravel 12+
- Laravel Valet Used to create local environment (Though any alternative is fine)

---

## App Usage

- Register a user
- Login to that user
- Create a post
- Like and unlike posts
- Filter posts by title

## Setup Instructions

```bash
# Clone repo
git clone https://github.com/ShaunMoore/laravel-posts-app.git
cd laravel-posts-app

# Permissions for init script
chmod +x init.sh

# Copy env
if [ ! -f .env ]; then
  echo "Copying .env file..."
  cp .env.example .env
fi
```

# Update your database connection details in the new .env
# DO THIS BEFORE RUNING init.sh

# Run initialise script

```bash
./init.sh
```