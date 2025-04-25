# pixel-position

This is a simple job board application built with **Laravel**, using **Blade** for templating and **Tailwind CSS** for styling. It allows users to view jobs, register and log in, and post jobs if authenticated.

---

## Features

- 🏠 Home page listing all jobs  
- 🔍 Search functionality  
- 🏷️ Tag filtering  
- 👤 User registration & login  
- ➕ Authenticated job posting  
- 🔒 Authorization for creating jobs  

---

## Tech Stack

- **Framework**: Laravel  
- **Views**: Blade Templates  
- **Styling**: Tailwind CSS  
- **Authentication**: Laravel Breeze / Custom Auth Logic  
- **Authorization**: Laravel Policies  
- **Database**:  Sqlite  

---

## Routes Overview

### Public Routes

| Route             | Method | Description                      |
| ----------------- | ------ | -------------------------------- |
| `/`               | GET    | Homepage displaying job listings |
| `/jobs/{job}`     | GET    | View a specific job              |
| `/search`         | GET    | Search for jobs                  |
| `/tag/{tag:name}` | GET    | Filter jobs by tag               |

### Guest-Only Routes

| Route       | Method | Description              |
| ----------- | ------ | ------------------------ |
| `/register` | GET    | Show registration form   |
| `/register` | POST   | Submit registration data |
| `/login`    | GET    | Show login form          |
| `/login`    | POST   | Submit login credentials |

### Authenticated Routes

| Route          | Method | Description                                 |
| -------------- | ------ | ------------------------------------------- |
| `/jobs/create` | GET    | Show job creation form (with authorization) |
| `/jobs`        | POST   | Store a new job post                        |
| `/logout`      | DELETE | Logout the user                             |

---

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/HamzaSyrage/pixel-position.git
   cd pixel-position
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Set up environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run migrations:**
   ```bash
   php artisan migrate
   ```

5. **Serve the application:**
   ```bash
   php artisan serve
   ```

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Notes

- Make sure to configure your database in `.env`.
- Tailwind is set up via Laravel Mix and compiled using `npm run dev`.
- Ensure you have the necessary Laravel permissions and policies for job creation
