# Student-Registration-Form
A web-based student registration system for admission to Class 1, with form validation, file uploads, and a MySQL database.

>>Features
•Student Registration Form with Name, DOB, Category, Gender, Facilities, and File Uploads.
•Bootstrap & CSS for Responsive Design.
•jQuery & Bootstrap Validator for form validation.
•MySQL Database with relational tables.
•Admin Panel for managing student records.

>>Folder Structure

/StudentRegistrationForm
│── /js/                 # JavaScript files (Validation, Bootstrap, jQuery)  
│── /upload_image/       # Uploaded files (Excluded from GitHub)  
│── /students_db.sql     # Database schema  
│── conn.php             # Database connection file (Exclude credentials before upload)  
│── newform.php          # Main student registration form  
│── insertstudents.php   # Handles form submission  
│── addstudents.php      # Adds new students  
│── updatestudents.php   # Updates student records  
│── delete.php           # Deletes student records  
│── showdata.php         # Displays student records  
│── admin.php            # Admin panel  
│── README.md            # Project Documentation  
│── .gitignore           # Files to exclude from GitHub

>>Installation & Setup

1. Clone Repository
git clone https://github.com/your-username/your-repository.git
cd RegistrationProject

2. Import Database
  a. Open phpMyAdmin.
  b. Create a database:
     CREATE DATABASE student_db;
  c. Import student_db.sql into phpMyAdmin → Import.



3. Configure Database Connection
Edit conn.php and update database credentials:

$servername = "localhost";
$username = "root";  // Change if using a different username
$password = "";      // Add password if required
$dbname = "student_db";

4. Start Server
If using XAMPP or WAMP:
Place the project inside htdocs/ (C:\xampp\htdocs\RegistrationProject)
Start Apache & MySQL in XAMPP
Open http://localhost/RegistrationProject/newform.php in a browser

>>Usage
Students can fill in the form and upload documents.
Admin Panel (admin.php) allows management of student data.

>>Security Measures
•Anti-XSS Protection → User inputs sanitized.
•Server-Side Validation → Data verified before storing.
•Password Hashing → Admin passwords should be stored securely.

>>License
This project is open-source under the MIT License.

>>Next Steps
[ ] Add an authentication system for admins.
[ ] Improve UI design using modern CSS frameworks.
