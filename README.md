# Pixel-Positions

A lightweight job-board web application built with **Laravel**.  
It lets companies publish job offers, tag them by skill, and lets candidates search/filter openings in real time.

> **Status:** early MVP – core posting, tagging and search flows work. Authentication, admin moderation, and CI still in progress.

---

## ✨ Key features

| Area | What’s implemented |
|------|--------------------|
| Job postings | create / edit / archive jobs (title, salary, description, location, remote flag) |
| Employers     | company accounts, logo upload, public profile |
| Tags & search | many-to-many job ↔ tag relation, full-text “q=” search (`Job::query()->where('title','LIKE','%foo%')`) |
| Auth          | Laravel Breeze starter (sanctum + Blade) |
| UI            | Tailwind CSS + Vite hot-reload |
| Tests         | Feature tests for job CRUD |

Planned next:
* Applicant tracking (apply with CV, status updates)
* Moderation & e-mail notifications
* GitHub Actions CI + Pint / PHPUnit workflow

---

## 🖥️ Tech stack

| Layer            | Tech                                                          |
|------------------|---------------------------------------------------------------|
| Backend API      | **Laravel 12**, PHP 8.2                                       |
| Database         | MySQL 8 (works with SQLite for local dev)                     |
| Front-end stack  | Blade, Tailwind CSS, Alpine.js (can be swapped for Vue/React) |
| Tooling          | Composer, NPM, Vite, PHPUnit                                  |

---

## 🚀 Quick start

### Prerequisites

* PHP >= 8.2 with `pdo_mysql` extension
* Composer 2.x
* Node.js >= 18 + npm
* MySQL 8 (or Docker)

### Local setup

```bash
git clone https://github.com/Karrolxd/Pixel-Positions.git
cd Pixel-Positions

# install PHP deps
composer install

# copy env and set DB creds
cp .env.example .env
php artisan key:generate

# install JS deps & build assets
npm install && npm run dev

# run migrations + seed demo data
php artisan migrate --seed

# start the dev server
php artisan serve
