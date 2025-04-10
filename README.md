# Student Rental Hub 🏠  
*Your Gateway to Secure Student Housing Worldwide*  

---

## 🚀 **Quick Start Guide**

### **Prerequisites**
- XAMPP/WAMP/LAMP installed (Apache, MySQL, PHP)
- Modern web browser (Chrome, Firefox)

### **Installation**
1. **Download & Extract**  
   - Clone the repository:  
     ```bash
     git clone https://github.com/akashtejareddy/student-rental-hub.git
     ```

2. **Deploy to Server**  
   - Copy the project folder to your server's root directory:  
     - **XAMPP**: `xampp/htdocs/`  
     - **WAMP**: `wamp/www/`  
     - **LAMP**: `/var/www/html/`  

3. **Set Up Database**  
   - Open PHPMyAdmin: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)  
   - Create database: `student`  
   - Import SQL file: `student.sql`  

4. **Launch Application**  
   - Start Apache and MySQL services  
   - Access: [http://localhost/student-rental-hub](http://localhost/student-rental-hub)  

---

## 🔑 **Default Admin Credentials**  
- **Username**: `admin`  
- **Password**: `Test@123`  
*(Change immediately after first login)*  

---

## 🌟 **Key Features**  
- **Student Registration**  
  - Secure account creation with email verification  
  - Profile management system  
- **Property Search**  
  - Filter by location, price, and amenities  
  - Save favorite listings  
- **Landlord Portal**  
  - Manage property listings  
  - Track rental applications  
- **Safety Features**  
  - Verified property listings  
  - Emergency contact integration  

---

## 🛠️ **Tech Stack**  
| **Component**      | **Technology**                |  
|---------------------|-------------------------------|  
| **Frontend**        | HTML5, CSS3, JavaScript       |  
| **Backend**         | PHP 7.4+                      |  
| **Database**        | MySQL 5.7+                    |  
| **Security**        | password_hash()/verify()      |  

---

## 📊 **Database Design**  
### **Core Tables**  
| **Table**          | **Purpose**                               |  
|---------------------|-------------------------------------------|  
| `users`            | Student/Landlord profiles & credentials   |  
| `properties`       | Rental listing details                    |  
| `applications`     | Rental application records                |  
| `transactions`     | Payment history                           |  


---



---

**📧 Support**: [akashteja1173677@gmail.com](mailto:akashteja1173677@gmail.com)  
**🔗 GitHub**: [Student Rental Hub Repository](https://github.com/akashtejareddy/student-rental-hub)  
