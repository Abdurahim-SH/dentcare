🦷 DentCare
DentCare is a comprehensive dental clinic management system built with the Laravel framework. It streamlines patient scheduling, records management, and clinic workflows to provide a seamless experience for both staff and patients.
🚀 Key Features
Patient Management: Effortlessly register patients and maintain detailed digital health records.
Appointment Scheduling: Intuitive booking system to manage consultations and follow-ups.
Dynamic Dashboard: Real-time overview of clinic statistics and upcoming tasks.
Responsive Design: Fully optimized for desktops, tablets, and mobile devices.
Role-Based Access: Secure login and permissions for Admins, Dentists, and Receptionists.
🛠️ Tech Stack
Based on the project's composition:
Backend: PHP (Laravel Framework)
Frontend: Blade Templating, JavaScript
Styling: SCSS & CSS
📦 Installation
To get a local copy up and running, follow these steps:
Clone the repository:
bash
git clone https://github.com
cd dentcare
Используйте код с осторожностью.

Install dependencies:
bash
composer install
npm install && npm run dev
Используйте код с осторожностью.

Environment Setup:
Copy .env.example to .env
Generate app key: php artisan key:generate
Configure your database settings in the .env file.
Database Migration & Seeding:
bash
php artisan migrate --seed
Используйте код с осторожностью.

Run the application:
bash
php artisan serve
