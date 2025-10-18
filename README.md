# BAS Laravel Landing Page

A Laravel + TailwindCSS version of the Business Applications Solutions landing page, converted from the original Nuxt.js project.

## Features

- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI**: Clean and professional design with TailwindCSS
- **Smooth Animations**: GSAP-powered animations and smooth scrolling
- **Multi-page Structure**: Home, About, Services, Equipment, and Career pages
- **Asset Management**: Vite for modern asset bundling and optimization

## Project Structure

```
bas-laravel-landing/
├── app/
│   ├── Http/Controllers/     # Laravel controllers
│   └── Models/              # Eloquent models
├── resources/
│   ├── views/              # Blade templates
│   │   ├── layouts/        # Main layout
│   │   ├── components/     # Reusable components
│   │   ├── welcome.blade.php    # Homepage
│   │   ├── about.blade.php      # About page
│   │   ├── services.blade.php   # Services page
│   │   ├── equipments.blade.php # Equipment page
│   │   └── career.blade.php     # Career page
│   ├── css/
│   │   └── app.css         # Main stylesheet with TailwindCSS
│   └── js/
│       ├── app.js          # Main JavaScript with GSAP
│       └── bootstrap.js    # Axios configuration
├── public/                 # Public assets
│   ├── about/             # About page images
│   ├── career/            # Career page images
│   ├── equipments/        # Equipment page images
│   ├── index/             # Homepage images
│   ├── logos/             # Partner logos
│   ├── services/          # Services page images
│   ├── vendors/           # Vendor logos
│   ├── video.mp4          # Background video
│   └── *.svg              # Various SVG assets
├── routes/
│   └── web.php            # Application routes
└── config/                # Laravel configuration
```

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js and npm
- Laravel 10.x

### Setup Instructions

1. **Install PHP Dependencies**
   ```bash
   composer install
   ```

2. **Install Node Dependencies**
   ```bash
   npm install
   ```

3. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Build Assets**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

5. **Start Development Server**
   ```bash
   php artisan serve
   ```

## Pages

### Homepage (`/`)
- Hero section with video background
- Animated statistics counters
- Company advantages section
- Partner logos

### About (`/about`)
- Company information
- Mission and vision statements
- Company values and culture

### Services (`/services`)
- IT services overview
- Oracle solutions
- Technical support services
- Service categories

### Equipment (`/equipments`)
- Equipment portfolio
- Vendor partnerships
- Equipment categories
- Technical specifications

### Career (`/career`)
- Company values
- Development opportunities
- Selection process
- Contact information

## Technologies Used

- **Backend**: Laravel 10.x
- **Frontend**: TailwindCSS 3.x
- **Animations**: GSAP (GreenSock)
- **Build Tool**: Vite
- **JavaScript**: Vanilla JS with GSAP
- **Styling**: TailwindCSS with custom components

## Key Features

### Responsive Design
- Mobile-first approach
- Breakpoints: sm, md, lg, xl, 2xl
- Flexible grid layouts
- Responsive typography

### Animations
- Smooth scrolling with GSAP ScrollSmoother
- Counter animations
- Scroll-triggered animations
- Smooth transitions

### Performance
- Optimized images
- Lazy loading
- Minified assets
- Efficient CSS/JS bundling

## Development

### Running in Development Mode
```bash
# Terminal 1: Laravel server
php artisan serve

# Terminal 2: Vite dev server
npm run dev
```

### Building for Production
```bash
npm run build
```

## Customization

### Adding New Pages
1. Create a new Blade template in `resources/views/`
2. Add route in `routes/web.php`
3. Update navigation in `resources/views/components/navbar.blade.php`

### Modifying Styles
- Main styles: `resources/css/app.css`
- TailwindCSS config: `tailwind.config.js`
- Custom components can be added to the CSS file

### Adding Animations
- Main animation logic: `resources/js/app.js`
- GSAP plugins are already configured
- Add new animations in the `initAnimations()` function

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## License

This project is proprietary software for Business Applications Solutions.

## Contact

For questions or support, contact:
- Email: info@bas.kz
- HR: hr@bas.kz
- Sales: sales@bas.kz

---

**Note**: This is a Laravel conversion of the original Nuxt.js project. All assets and design elements have been preserved while adapting the structure for Laravel's Blade templating system.
