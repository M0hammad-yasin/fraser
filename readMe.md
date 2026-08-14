# Fraser Facility Services — Enterprise Web Platform

<div align="center">

[![PHP Version](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![PHPMailer](https://img.shields.io/badge/PHPMailer-6.9.1-F05032?style=for-the-badge&logo=gmail&logoColor=white)](https://github.com/PHPMailer/PHPMailer)
[![UI Status](https://img.shields.io/badge/UI%20Design-Glassmorphic%20%26%20Dynamic-ffc600?style=for-the-badge)](https://fraserfacilityservices.ca)
[![Platform](https://img.shields.io/badge/Platform-Web%20%7C%20Mobile%20Optimized-23a036?style=for-the-badge)](https://fraserfacilityservices.ca)

**An enterprise-grade, high-performance web platform built for Fraser Facility Services — delivering integrated janitorial, building maintenance, exterior care, mechanical, and specialized property solutions across British Columbia's Lower Mainland.**

[Explore Services](service.php) • [Read Insights](blogs.php) • [Get An Estimate](contact.php) • [FAQs](faq.php)

</div>

---

## 🌟 Executive Summary & Vision

**Fraser Facility Services** is a client-centric web application designed to convert visitors into contracted property maintenance clients. Combining a **lightweight, modular PHP architecture** with **modern interactive frontend engineering**, the platform offers:

- ⚡ **Zero-Overhead Performance**: Blazing-fast page loads without heavy framework runtime bloat.
- 🎨 **State-of-the-Art Aesthetic**: Deep midnight navy palettes (`#0a1026`), radiant gold accents (`#ffc600`), and emerald trust greens (`#23a036`) with glassmorphism and subtle micro-animations.
- 📱 **Mobile-First UX**: Responsive layouts, touch-swipeable carousels, and thumb-friendly controls.
- 🛡️ **Robust Contact & Estimations Engine**: Secure SMTP-driven AJAX lead generation with zero-leak error handling.

---

## 🚀 Core Features & Capabilities

### 1. 🧩 Dynamic Component Architecture

- **Reusable Partials**: Centralized head, navigation, footer, and hero banner systems (`components/head.php`, `components/header.php`, `components/footer.php`, `components/page-header.php`).
- **Configurable Page Header Component**:
  - Dynamically takes `$pageHeaderTitle`, `$pageHeaderEyebrow`, `$pageHeaderSubtitle`, `$pageHeaderBg`, and `$breadcrumbs`.
  - Automatically renders top-left clean breadcrumbs and a centered luxury title over cinematic dark navy photo overlays.

### 2. 🧭 Dual Adaptive Navigation System

- **Desktop Main Header**: Features instant-access operational contacts (`+1 778-886-1491` & `operations@fraserfacilityservices.ca`) with automated active page detection.
- **Scroll-Triggered Narrow Floating Navbar (`#narrow-header`)**:
  - Automatically emerges on scroll with backdrop blur (`backdrop-filter: blur(10px)`) and rounded pill styling.
  - Senses scroll direction: seamlessly tucks away on scroll-down and expands on scroll-up.

### 3. 📰 Flat-File Blog & Knowledge Engine

- **Decoupled Data Store (`data/blogs.php`)**: Fully structured PHP associative array containing complete blog posts, metadata, excerpts, authors, categories, and tags.
- **Dynamic Post Resolver (`blog.php`)**: Loads articles dynamically via `?slug=slug-name`, automatically setting page title, meta description, and hero banner image to match the post.
- **Dynamic Sidebar**:
  - **Recent Posts**: Automatically computes the 4 newest articles (excluding current).
  - **Category Counts**: Auto-tallies total articles per category.
  - **Tag Cloud**: Dynamically aggregates all unique tags across the entire data store.
- **Homepage Carousel (`index.php`)**: Dynamically loops over `$blogs`, sorting newest-first in an interactive 3-card touch-swipeable carousel.

### 4. 🏢 3-Column Service Grid & Sector Taxonomy

- **Interactive Service Cards**: 6 modular service packages with glowing top gradient accents, animated icon rotations, customized checkmark badges, and direct quotation links.
- **"Who We Serve" Sector Grid**: Dedicated card-based presentation for Office Buildings, Retail & Restaurants, Medical Clinics, Strata Complexes, Warehouses, and Asset Managers.

### 5. 📬 Enterprise SMTP AJAX Contact System

- **Engineered with PHPMailer**: Powered by authenticated Gmail SMTP (Port 587 / TLS).
- **Silent Asynchronous Submission**: No disruptive page reloads; features animated spinner button state transitions.
- **Dual-Body Templating**: Sends clean HTML tables to operations while preserving fallback plain text.
- **Security & Privacy**: Auto `Reply-To` binding to customer input, output buffering to prevent header leaks, and credentials separated in `mail/config.php` (git-ignored).

### 6. ❓ Interactive FAQ Accordion System

- Clean question-and-answer interface on `faq.php`.
- Features smooth accordion collapse with automated Font Awesome caret rotation (`fa-angle-down` ⇄ `fa-angle-up`).

---

## 📂 Project Architecture

```plaintext
fraser/
├── assets/                  # CSS, images, JS assets
├── components/              # Reusable PHP partials (header, footer, head, etc.)
├── data/                    # JSON/Data files for site content
├── lib/                     # UI libraries (owl carousel, isotope, lightbox, waypoints, etc.)
├── mail/                    # Mail handling backend & scripts
│   ├── config.php           # SMTP configuration & credentials (DO NOT COMMIT)
│   ├── contact.php          # PHP backend handling form POST & PHPMailer logic
│   ├── contact.js           # AJAX form handler, UI alerts & validation logic
│   └── jqBootstrapValidation.min.js # Form validation library
├── scss/                    # SASS source files
├── vendor/                  # Composer dependencies (PHPMailer pre-bundled)
├── .gitignore               # Ignored files & credentials protection
├── about.php                # About Us page
├── blog.php / blogs.php     # Blog & single post pages
├── contact.php              # Contact Us & quote request page
├── faq.php                  # Frequently Asked Questions
├── index.php                # Home page
├── project.php              # Projects / Portfolio page
├── service.php              # Services overview page
└── readMe.md                # Project documentation
```

---

## 🎨 Design System & Color Tokens

The visual language reflects trust, safety, and modern facility excellence:

| Token / Role        |        Hex Code         |                             Preview                             | Usage Context                                                   |
| :------------------ | :---------------------: | :-------------------------------------------------------------: | :-------------------------------------------------------------- |
| **Primary Gold**    |        `#ffc600`        | ![#ffc600](https://via.placeholder.com/15/ffc600/000000?text=+) | Eyebrow badges, icons, borders, active indicators, CTA buttons  |
| **Secondary Green** |        `#23a036`        | ![#23a036](https://via.placeholder.com/15/23a036/000000?text=+) | Active nav items, checkmarks, trust accents, gradient endpoints |
| **Midnight Navy**   |        `#0a1026`        | ![#0a1026](https://via.placeholder.com/15/0a1026/000000?text=+) | Primary dark backgrounds, hero overlays, footer, dark panels    |
| **Surface Navy**    |        `#0f1d3a`        | ![#0f1d3a](https://via.placeholder.com/15/0f1d3a/000000?text=+) | Card gradients, secondary section backgrounds                   |
| **Light Slate**     |        `#f8f9fc`        | ![#f8f9fc](https://via.placeholder.com/15/f8f9fc/000000?text=+) | Light section backgrounds, sector cards                         |
| **Text Muted**      | `rgba(255,255,255,0.7)` | ![#b3b3b3](https://via.placeholder.com/15/b3b3b3/000000?text=+) | Body copy on dark containers                                    |

---

## ⚙️ Setup & Local Installation

### Prerequisites

- **PHP** >= 7.4 (PHP 8.0+ recommended with `openssl` and `curl` extensions enabled).
- **Web Server**: Apache via [XAMPP](https://www.apachefriends.org/), WampServer, MAMP, or Docker.

> 📦 **Zero Extra Installations Required**: All third-party libraries (including PHPMailer in `vendor/`) are pre-bundled in the codebase.

### Step-by-Step Execution

1. **Clone or Copy** the repository into your web root:
   ```bash
   # Windows (XAMPP default)
   C:\xampp\htdocs\fraser\
   ```
2. **Start Apache** via your server control panel (e.g. XAMPP Control Panel).
3. **Launch the application** in any browser:
   ```
   http://localhost/fraser/
   ```

---

## 📧 Mail & SMTP Configuration

Lead emails are processed via `mail/contact.php` and configured through `mail/config.php`.

### `mail/config.php` Blueprint

```php
<?php
// ─── SMTP Server Settings ───────────────────────────────────────────────────
define('MAIL_HOST',       'smtp.gmail.com');
define('MAIL_USERNAME',   'your-notifications-account@gmail.com');
define('MAIL_PASSWORD',   'xxxx xxxx xxxx xxxx');  // 16-character Google App Password
define('MAIL_PORT',       587);
define('MAIL_ENCRYPTION', 'tls');

// ─── Sender & Recipient Headers ─────────────────────────────────────────────
define('MAIL_FROM_NAME',  'Fraser Facility Services – Web Portal');
define('MAIL_FROM',       'your-notifications-account@gmail.com');
define('MAIL_TO',         'operations@fraserfacilityservices.ca');
define('MAIL_TO_NAME',    'Fraser Operations Team');
```

#### Generating a Google App Password

1. Navigate to your **Google Account** ➡️ **Security**.
2. Enable **2-Step Verification** if not already active.
3. Under _2-Step Verification_, scroll down to **App passwords**.
4. Generate a new App Password named `Fraser Web Portal` and paste the 16-letter code into `MAIL_PASSWORD`.

---

## 📝 Blog Data Management Guide

To publish a new blog post, simply append an entry to `$blogs` in [`data/blogs.php`](data/blogs.php):

```php
'preventing-winter-property-damage' => [
    'title'             => 'Preventing Winter Property Damage: Essential Checklist',
    'excerpt'           => 'Prepare your strata or commercial property for freezing temperatures, snow loads, and storm runoff.',
    'meta_description'  => 'Expert guide on winter facility preparation across BC Lower Mainland.',
    'author'            => 'Fraser Facility Services',
    'category'          => 'Exterior Care',
    'tags'              => ['Exterior Care', 'Winter Preparation', 'Strata Management'],
    'date'              => '2026-11-01',
    'image'             => './assets/img/blog/blog-winter-care.jpeg',
    'content'           => <<<HTML
      <p>Your full HTML article body goes here with headings, paragraphs, and lists.</p>
    HTML
],
```

_The platform will automatically generate the post page, count categories, populate the tag cloud, and display it in the homepage carousel!_

---

## 🔒 Security & Quality Assurance

- **XSS & Injection Protection**: User inputs are escaped using `htmlspecialchars()` and sanitized before display.
- **Header Injection Guard**: Form submissions strictly parse JSON payloads with buffer isolation (`ob_start()`).
- **Credential Segregation**: Production email credentials are isolated from source control via `.gitignore`.
- **Cross-Browser Verification**: Fully tested on Chrome, Firefox, Safari, Edge, and mobile Safari/Chrome.

---

## 👥 Contact & Support

For operational inquiries or property management support:

- **Phone**: [+1 778-886-1491](tel:17788861491)
- **Email**: [operations@fraserfacilityservices.ca](mailto:operations@fraserfacilityservices.ca)
- **Website**: [fraserfacilityservices.ca](https://fraserfacilityservices.ca)
- **Region**: Serving the Lower Mainland, BC and surrounding areas.

---

<div align="center">
  <small>© 2026 Fraser Facility Services. All Rights Reserved. Engineered for Performance, Precision & Reliability.</small>
</div>
