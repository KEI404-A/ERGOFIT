# ERGOFIT

**Precision in Every Motion**

ERGOFIT is an intelligent platform designed to prevent Musculoskeletal Disorders (MSDs) in the workplace through real-time monitoring using advanced sensor technology and machine learning algorithms. This is the first comprehensive solution in Indonesia that integrates IoT, AI, and ergonomic expertise to create a proactive and adaptive workplace health ecosystem.

## 🎯 Overview

ERGOFIT revolutionizes workplace health by providing real-time posture monitoring and predictive analytics to prevent MSDs before they develop into serious injuries. The system uses IMU (Inertial Measurement Unit) sensors and machine learning algorithms to analyze worker postures, calculate RULA (Rapid Upper Limb Assessment) scores, and provide immediate feedback through visual, audio, and haptic notifications.

## ✨ Key Features

### Core Capabilities

- **Real-time Monitoring**: 24/7 posture monitoring with ultra-low latency for instant response to risky postures
- **Predictive Analytics**: Predicts MSD risks based on historical work patterns using advanced machine learning models
- **AI-Powered Personal Coaching**: Provides ergonomic tips tailored to each worker's characteristics and work patterns
- **Advanced Analytics Dashboard**: Comprehensive insights for optimizing workplace ergonomics
- **Cloud Integration**: Seamless cloud integration with multi-platform access and real-time data synchronization
- **Customizable Alerts**: Notification system that can be customized according to industry needs and worker preferences

### Technology Highlights

- **RULA Scoring System**: Real-time risk assessment using modified RULA methodology
  - Score 1-2: Acceptable
  - Score 3-4: Investigate further
  - Score 5-6: Investigate & change soon
  - Score 7: Investigate & change immediately

- **Multimodal Feedback**: 
  - Visual notifications
  - Audio alerts
  - Haptic vibrations

## 🛠️ Technology Stack

### Backend
- **Laravel 12**: PHP web application framework
- **PHP 8.2+**: Server-side programming language
- **SQLite**: Database (can be configured for other databases)

### Frontend
- **Bootstrap 5.3.2**: CSS framework for responsive design
- **Tailwind CSS 4.0**: Utility-first CSS framework
- **Vite 7.0**: Next-generation frontend build tool
- **AOS (Animate On Scroll)**: Scroll animation library
- **Bootstrap Icons**: Icon library

### Development Tools
- **Laravel Vite Plugin**: Asset bundling
- **Axios**: HTTP client
- **Concurrently**: Run multiple commands simultaneously

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** >= 8.2
- **Composer** (PHP dependency manager)
- **Node.js** >= 18.x and **npm**
- **SQLite** (or another database like MySQL/PostgreSQL)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd ERGOFIT
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   # SQLite database is created automatically, or configure your preferred database in .env
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   npm run build
   # Or for development with hot reload:
   npm run dev
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## 🎮 Usage

### Development Mode

For a complete development experience with hot reload, queue processing, and logging:

```bash
composer dev
```

This command runs:
- Laravel development server
- Queue listener
- Laravel Pail (log viewer)
- Vite development server

### Production Build

```bash
npm run build
php artisan optimize
```

## 📁 Project Structure

```
ERGOFIT/
├── app/                    # Application core
│   ├── Http/
│   │   └── Controllers/   # Application controllers
│   ├── Models/            # Eloquent models
│   └── Providers/         # Service providers
├── bootstrap/             # Application bootstrap files
├── config/                # Configuration files
├── database/              # Database migrations and seeders
├── public/                # Public assets
│   ├── images/           # Image assets
│   └── logo_ergofit.png  # Project logo
├── resources/
│   ├── css/              # Stylesheets
│   ├── js/               # JavaScript files
│   └── views/            # Blade templates
│       ├── ergofit.blade.php      # Main landing page
│       └── smkn2-team.blade.php   # Team page
├── routes/
│   └── web.php           # Web routes
├── storage/              # Storage directory
├── tests/                # Test files
└── vendor/               # Composer dependencies
```

## 🌐 Routes

- `/` - Main ERGOFIT landing page
- `/ergofit` - ERGOFIT page (alias)
- `/team` - Team information page

## 🧪 Testing

Run the test suite:

```bash
composer test
```

Or use PHPUnit directly:

```bash
php artisan test
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🔒 Security

If you discover any security vulnerabilities, please send an email to the project maintainers. All security vulnerabilities will be promptly addressed.

## 📞 Support

For support, please contact the development team or open an issue in the repository.

## 🙏 Acknowledgments

- Laravel Framework
- Bootstrap Team
- All contributors and partners

---

**ERGOFIT** - *Precision in Every Motion*
