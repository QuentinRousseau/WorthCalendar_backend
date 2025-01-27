# (In Progress) WorthCalendar : Professional Tools plateform to improve your appointments and management !

This tool is to discover a new language / Framework. It is in Laravel 11 for Backend/API and VueJs for the Frontend.

## [Frontend repository](https://github.com/QuentinRousseau/WorthCalendar_frontend)

<br/>
<details>
<summary><b>With Docker</b></summary>

## Prerequisites :

> [Install Docker & Docker Compose](https://docs.docker.com/get-started/)

## Setup (after clone it):

```
docker-compose up --build
```

**Backend host :** http://localhost:8000
**Frontend host :** http://localhost:5173

</details>
</br>

<details>
<summary><b>Without Docker</summary>

## Prerequisites :

> [npm, PHP & Laravel](https://laravel.com/docs/11.x#installing-php) > [Composer (:warning: don't forget attribue to the Path variable !:warning:)](https://getcomposer.org/doc/00-intro.md)

## Setup (after clone it):

### Frontend:

```
cd frontend
npm i
cp .env.example .env
npm run dev
```

**Frontend host :** http://localhost:5173

### Backend:

```
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

**Backend host :** http://localhost:8000

</details>
<br/>

<details>
<summary> 🚀 Contributing to the Project</summary>

We welcome all contributions, whether you're reporting a bug, suggesting a feature, or improving the codebase! 🎉

### 🐛 Reporting Issues

1. Go to the [Issues](https://github.com/your-repository/issues) tab in this repository.
2. Click on **"New Issue"** to open a ticket.
3. Clearly describe the issue with as much detail as possible. Include screenshots or code snippets if applicable.

---

### 💡 Submitting Pull Requests (PRs)

1. **Fork** the repository by clicking the **"Fork"** button.
2. Clone your forked repository locally:
    ```bash
    git clone https://github.com/your-username/your-repository.git
    ```

---

### 🪲 For Bug fixes :

```bash
   git checkout -b fix/describe-the-bug
```

---

### 🚀 :rocket: For Bug fixes :

```bash
   git checkout -b fix/describe-the-bug
```

</details>
