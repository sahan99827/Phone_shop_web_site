
# 📱 Moblicity – Phone Shop Website

Moblicity is a **mobile phone selling web application** developed using **PHP for backend** and **HTML, CSS, and JavaScript for frontend**.
The system allows users to browse phones, search products, and manage phone records through a simple web interface.

This project demonstrates basic **CRUD operations using PHP and MySQL**.

---

## 🚀 Features

* 📱 Browse available mobile phones
* 🔍 Search phone products
* 🔐 Login system for users
* ➕ Add new phone records
* ✏️ Edit phone details
* ❌ Delete phone records
* 📄 View phone list
* 📞 Help and About pages

---

## 🛠️ Technologies Used

### Programming Language

* PHP

### Frontend

* HTML
* CSS
* JavaScript
* Bootstrap
* jQuery

### Backend

* PHP
* MySQL

### Tools

* IntelliJ IDEA
* PhpStorm
* Git & GitHub

---

## 📂 Project Structure

```
PHONE_SHOP_WEB_SITE
│
├── Images/               # Phone images and assets
├── sass-cache/
│
├── Home.html             # Home page
├── About.html            # About page
├── Help.html             # Help page
├── login.html            # Login page
│
├── connection.php        # Database connection
├── create.php            # Add phone
├── update.php            # Update phone
├── delet.php             # Delete phone
├── View.php              # View phone list
├── search.php            # Search phones
│
├── style.css             # Main styles
├── bootstrap.min.css
├── bootstrap.min.js
├── jquery-3.6.0.js
│
└── Untitled-1.sql        # Database file
```

---

## ⚙️ Installation

### 1️⃣ Clone Repository

```bash
git clone https://github.com/YOUR_USERNAME/moblicity-phone-shop.git
```

### 2️⃣ Setup Database

1. Open **phpMyAdmin**
2. Create a new database
3. Import the file:

```
Untitled-1.sql
```

---

### 3️⃣ Configure Database Connection

Edit `connection.php`:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moblicity";
```

---

### 4️⃣ Run Project

Move project folder to:

```
xampp/htdocs/
```

Then open in browser:

```
http://localhost/PHONE_SHOP_WEB_SITE/Home.html
```

---

## 👨‍💻 Developer

**Sahan Geesara**

* PHP Web Developer
* Backend Developer

📍 Polonnaruwa, Sri Lanka

---
