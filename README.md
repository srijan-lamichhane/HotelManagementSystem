<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Hotel Management System
This repository contains the code for a hotel management system that is designed to replace manual registration systems in hotels. The system is built on top of the Laravel framework and uses MySQL as the database. It features a user-friendly dashboard that allows hotel staff to easily manage guests, rooms, and bookings.

## Some Features

-   🌟 Tech stack:Laravel + Blade Templates + TailwindCSS
-   🎃  Authentication & Authorization with built-in Laravel Sanctum
-   👾 Role-based user management (Admin/User)
-   🚀  Dynamic user dashboards for different roles
-   🔄 Data seeding with pre-configured users for easy testing (Admin and regular user)

## Technologies Used

- **Frontend:**: Blade Templates, TailwindCSS
- **Backend:**  Laravel (PHP)
- **Database:** MySQL (Eloquent ORM)
- **Seeder:** Laravel Seeder for prepopulated database entries

## Project Screen Shot(s)

![dashboard Image](https://github.com/srijan-lamichhane/HotelManagementSystem/blob/master/public/New%20folder/Screenshot%20(43).png)
![calander Image](https://github.com/srijan-lamichhane/HotelManagementSystem/blob/master/public/New%20folder/hms.png)
![addbooking Image](https://github.com/srijan-lamichhane/HotelManagementSystem/blob/master/public/New%20folder/hms_addbooking.png)
![attendence Image](https://github.com/srijan-lamichhane/HotelManagementSystem/blob/master/public/New%20folder/hms_attendence.png)

## Contributing
Contributions are welcome! Feel free to fork the repository and submit pull requests.

## Setup Instructions

### Prerequisites:
- PHP >= 7.3
- Composer
- Node.js & npm (for Tailwind compilation)
- MySQL

### Steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/srijan-lamichhane/HotelManagementSystem.git
   cd HotelManagementSystem
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Set up environment variables:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Make sure to configure the `.env` file with your database credentials.

4. **Run migrations and seed the database:**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Compile assets:**
   ```bash
   npm run dev
   ```

6. **Start the development server:**
   ```bash
   php artisan serve
   ```

7. **Login using the seeded admin account: or register the user**
   - Email: `admin@gmail.com`
   - Password: `admin123`



### 🌟star to the repository is appreciated
