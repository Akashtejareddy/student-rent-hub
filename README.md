# Student Rental Hub 🏠  
**A Secure Housing Platform for International Students**  


## 🌟 Features  
- Secure user registration/login system 🔒  
- Property search by location and rental period 🔍  
- Responsive Bootstrap-based UI 📱  
- MySQL database integration 🗃️  
- Admin dashboard for property management 📊  
- Password hashing & session validation 🔑  

## 🛠️ Tech Stack  
| **Component**   | **Technology**          |  
|------------------|-------------------------|  
| Frontend         | HTML5, CSS3, JavaScript |  
| Backend          | PHP 7.4+                |  
| Database         | MySQL 5.7+              |  
| Styling          | Bootstrap 4             |  
| Server           | Apache/XAMPP            |  

## 🚀 Quick Start  

### Prerequisites  
- XAMPP/WAMP/MAMP  
- PHP 7.4+  
- MySQL 5.7+  

### Installation  
1. Clone the repo:  
   ```bash  
   git clone https://github.com/akashtejareddy/student-rental-hub.git
2. Setup Database
  CREATE DATABASE student;  
USE student;  
SOURCE student.sql;
3. Configure Connection
   // includes/db.php  
<?php  
$host = "localhost";  
$user = "root";  
$password = "";  
$dbname = "student";  
4. Start Server
sudo /opt/lampp/lampp start  # Linux/macOS  
5. Access Application
http://localhost/student-rental-hub/login.php  
📂 File Structure
student-rental-hub/  
├── includes/  
│   ├── db.php         # Database config  
│   └── functions.php  # Core logic  
├── login.php          # Login system  
├── register.php       # Registration  
├── invitation.php     # Dashboard  
├── aboutus.html       # About page  
├── student.sql        # Database schema  
└── assets/            # CSS/Images  
🔐 Security
Password hashing with password_hash()

Session validation using session_start()

Input sanitization for SQL injection prevention

CSRF protection

🧑💻 Usage
Test Accounts

Role	Email	Password
Student	student@test.com	Test@123
Admin	admin@test.com	Admin@123
Workflow

Register at /register.php

Login at /login.php

Search properties in dashboard

Contact landlords via listed details

🚨 Troubleshooting
Issue	Solution
Database Connection	Verify credentials in db.php
Session Errors	Add session_start() to files
404 Errors	Check file paths in href/src
Password Issues	Use password_verify() check

📧 Contact: akashteja1173677@gmail.com
🔗 LinkedIn: https://www.linkedin.com/in/akash-teja-reddy-4ba7221a3/
