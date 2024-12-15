<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Appointment Management System</title>
</head>
<body>
    <h1>Laravel Appointment Management System</h1>

    <p>
        This project is a comprehensive <strong>Appointment Management System</strong> built using Laravel. 
        It allows patients, doctors, and admins to manage appointments seamlessly.
    </p>

    <h2>Features</h2>
    <h3>General Features</h3>
    <ul>
        <li><strong>Home Page:</strong> A welcoming interface with information about the platform.</li>
        <li><strong>Majors Page:</strong> Displays various medical specialties.</li>
        <li><strong>Doctors Page:</strong> List of all doctors available on the platform.</li>
        <li><strong>Doctor Profile:</strong> Detailed information about individual doctors.</li>
        <li><strong>Appointment Booking:</strong> Patients can book appointments with doctors and receive confirmation emails.</li>
    </ul>

    <h3>Patient Features</h3>
    <ul>
        <li><strong>Appointment History:</strong> View previously booked appointments.</li>
    </ul>

    <h3>Admin Dashboard</h3>
    <ul>
        <li><strong>CRUD Operations:</strong> Manage patients, doctors, and medical specialties (add, update, delete).</li>
        <li><strong>View Tables:</strong> List all appointments and read user messages.</li>
    </ul>

    <h2>Installation</h2>
    <ol>
        <li><strong>Clone the repository:</strong></li>
        <pre>
            <code>git clone https://github.com/your-repo/laravel-appointment-system.git</code>
            <code>cd laravel-appointment-system</code>
        </pre>
        <li><strong>Install dependencies:</strong></li>
        <pre>
            <code>composer install</code>
            <code>npm install && npm run dev</code>
        </pre>
        <li><strong>Environment setup:</strong>
            <ul>
                <li>Duplicate <code>.env.example</code> and rename it to <code>.env</code>.</li>
                <li>Update the <code>.env</code> file with your database credentials and email settings.</li>
            </ul>
        </li>
        <li><strong>Generate application key:</strong></li>
        <pre>
            <code>php artisan key:generate</code>
        </pre>
        <li><strong>Migrate and seed the database:</strong></li>
        <pre>
            <code>php artisan migrate --seed</code>
        </pre>
        <li><strong>Start the server:</strong></li>
        <pre>
            <code>php artisan serve</code>
        </pre>
        <li>Open the application in your browser:
            <pre>
                <code>http://127.0.0.1:8000</code>
            </pre>
        </li>
    </ol>

    <h2>Technologies Used</h2>
    <ul>
        <li><strong>Framework:</strong> Laravel</li>
        <li><strong>Frontend:</strong> Blade, TailwindCSS/Bootstrap</li>
        <li><strong>Database:</strong> MySQL</li>
        <li><strong>Email:</strong> Laravel Mail</li>
    </ul>

    <h2>Contributing</h2>
    <p>Contributions are welcome! Please follow these steps:</p>
    <ol>
        <li>Fork the repository.</li>
        <li>Create a new branch (<code>feature/your-feature</code>).</li>
        <li>Commit your changes.</li>
        <li>Push the branch to your fork.</li>
        <li>Submit a pull request.</li>
    </ol>

    <h2>License</h2>
    <p>This project is open-sourced under the <a href="LICENSE">MIT license</a>.</p>

    <h2>Contact</h2>
    <p>
        For questions or feedback, feel free to contact: <br>
        <strong>Email:</strong> <a href="mailto:your-email@example.com">your-email@example.com</a>
    </p>
</body>
</html> 