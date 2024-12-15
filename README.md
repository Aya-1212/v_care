

# Laravel Appointment Management System

This project is a comprehensive **Appointment Management System** built using Laravel.  
It allows patients, doctors, and admins to manage appointments seamlessly.

---

## Features

### General Features
- **Home Page:** A welcoming interface with information about the platform.
- **Majors Page:** Displays various medical specialties.
- **Doctors Page:** List of all doctors available on the platform.
- **Doctor Profile:** Detailed information about individual doctors.
- **Appointment Booking:** Patients can book appointments with doctors and receive confirmation emails.

### Patient Features
- **Appointment History:** View previously booked appointments.

### Admin Dashboard
- **CRUD Operations:** Manage patients, doctors, and medical specialties (add, update, delete).
- **View Tables:** List all appointments and read user messages.

---

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Aya-1212/v_care.git


2. Install dependencies:
```bash
composer install
npm install && npm run dev


3. Environment setup:

Duplicate .env.example and rename it to .env.

Update the .env file with your database credentials and email settings.



4. Generate application key:

php artisan key:generate


5. Migrate and seed the database:

php artisan migrate --seed


6. Start the server:

php artisan serve


7. Open the application in your browser:

http://127.0.0.1:8000




---

Technologies Used

Framework: Laravel

Frontend: Blade, Bootstrap

Database: MySQL

Email: Laravel Mail (Mailtrap) 

---


Contact

For questions or feedback, feel free to contact:
Email: ayar4407@gmail.com 


 