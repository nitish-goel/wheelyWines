# WheelyWines


WheelyWines is an automobile service booking web application, similar to platforms that allow users to browse services, book appointments, and enable admins to manage workshops and customers. It is a Laravel-based web application containerized with Docker and deployed on Render using PostgreSQL as the database and Cashfree Payment Gateway for secure transactions.
---

## 🚀 Live Demo

Deployed on Render:

```
https://wheelywines.onrender.com
⚠️ App may take time to load due to Render free tier sleep mode.
```

*(https://wheelywines.onrender.com)*
## 📸 Project Screenshots

### 🏠 Homepage
![Homepage](/public/1770955191342.jpg)


---

## 🛠️ Tech Stack

* **Backend:** Laravel
* **Language:** PHP 8.4
* **Database:** PostgreSQL
* **Payment Gateway:** Cashfree
* **Containerization:** Docker
* **Hosting:** Render
* **Version Control:** Git & GitHub

---

## 💳 Payment Integration (Cashfree)

WheelyWines now supports online payments using Cashfree Payment Gateway.

### ✅ Features:
* Secure payment processing
* Order creation with unique order_id
* Payment status handling:
    * **PAID** → Appointment confirmed
    * **FAILED** → Appointment marked as failed
* Webhook support for real-time payment updates

### 🔄 Payment Flow:

```
User books appointment
↓
Order created in backend
↓
Redirect to Cashfree payment page
↓
User completes payment
↓
Webhook/response received
↓
Appointment status updated (PAID / FAILED)

```

---

## 📦 Local Development Setup

###  Clone Repository

```bash
git clone https://github.com/nitish-goel/wheelyWines.git
cd wheelyWines
```

###  Install Dependencies

```bash
composer install
```

###  Create Environment File

```bash
cp .env.example .env
```

###  Generate Application Key

```bash
php artisan key:generate
```

###  Configure Database (.env)

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

###  Configure Cashfree (.env)

```env
CASHFREE_APP_ID=your_app_id
CASHFREE_SECRET_KEY=your_secret_key
CASHFREE_ENV=sandbox   # or production
```

###  Run Migrations

```bash
php artisan migrate
```

###  Start Development Server

```bash
php artisan serve
```

Visit:

```
http://127.0.0.1:8000
```

---

## 🐳 Docker Setup

### Build Docker Image

```bash
docker build -t wheelyWines .
```

### Run Docker Container

```bash
docker run -p 10000:10000 wheelyWines
```

Application will run at:

```
http://localhost:10000
```

---

## ☁️ Deployment on Render

### Deployment Flow

```
Push Code to GitHub
↓
Render pulls repository
↓
Docker builds image
↓
Container starts
↓
Laravel runs
```

---

## 🔐 Production Environment Variables

Set the following in Render:

```env
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:your_generated_key
APP_URL=https://your-app-name.onrender.com

SESSION_DRIVER=file

DB_CONNECTION=pgsql
DB_HOST=your_render_internal_host
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Cashfree
CASHFREE_APP_ID=your_app_id
CASHFREE_SECRET_KEY=your_secret_key
CASHFREE_ENV=production
```

---

## 📁 Project Structure

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
Dockerfile
```

---

## ⚠️ Notes

* Render free plan may sleep after inactivity.
* PostgreSQL free plan has resource limits.
* Use sandbox mode for testing payments
* `SESSION_DRIVER=file` is recommended for simple cloud deployments.

---

## 👨‍💻 Author

**Nitish Goel**
Backend Developer | Laravel & PHP Enthusiast

---

If you found this project helpful, feel free to ⭐ the repository.
