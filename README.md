# 🇱🇰 Travel With Lanka (Laravel Blade Onboarding)

A modern, responsive Sri Lankan Tourism web application built using **Laravel** and **Blade Templating Layout Architecture**, styled with a custom **Tailwind CSS** color scheme. This project was created as part of the `laravel-blade-onboarding` technical task.

---

##  Preview & Highlights

- **Master Layout Architecture:** Clean DRY (Don't Repeat Yourself) implementation with reusable view partials.
- **Sri Lankan Tourism Theme:** Custom color palette using Dark Blue (`slate-900`, `blue-900`), Light Blue (`sky-400`, `sky-300`), and Soft Gray (`slate-100`).
- **Dynamic Active Navigation:** Automatically highlights the currently active page in the header.
- **Fully Responsive:** Custom hamburger toggle menu optimized for mobile screens (400px and below).
- **Direct Asset Loading:** Uses direct pinned CDN versions to guarantee clean `200 OK` HTTP status responses.

---

##  Project & Blade Architecture

The view structure follows a strict modular approach to minimize code duplication:

```text
resources/views/
├── includes/
│   ├── head.blade.php      # Metadata, SVG Favicon, Tailwind CDN
│   ├── header.blade.php    # Dynamic Navigation, Logo, Mobile Toggle Script
│   └── footer.blade.php    # Standardized Footer Links & Copyright
├── layouts/
│   └── app.blade.php       # Central Master Layout (@yield directives)
└── pages/
    ├── home.blade.php      # Home / Hero Section (/)
    ├── about.blade.php     # Company Story & Values (/about)
    └── contact.blade.php   # Responsive Contact Form (/contact)
