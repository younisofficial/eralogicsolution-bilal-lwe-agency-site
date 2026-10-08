# Eralogicsolution Website (Laravel + Vue 3)

Agency website built with Laravel (PHP) and Vue 3, bundled with Vite.

**How it is structured:** Laravel renders every page as full HTML (Blade), so Google can read all content. Vue 3 then runs the interactive parts: the mobile menu, the FAQ accordion and the contact form. This keeps SEO strong, which a Vue-only single page app would not.

## Requirements

- PHP 8.2 or newer, Composer (Laravel 12)
- Node.js 20.19 or newer and npm
- MySQL or SQLite

## Run on your computer

```bash
composer install
npm install
npm run build              # compiles the CSS and Vue files into public/build
cp .env.example .env       # Windows PowerShell: copy .env.example .env
php artisan key:generate
php artisan migrate        # SQLite by default; answer "yes" to create the database file
php artisan serve          # open http://localhost:8000
```

`npm run build` is required once before the site will load. While editing files in `resources/css` or `resources/js`, run `npm run dev` in a second terminal instead, and run `npm run build` again before uploading.

**XAMPP / "could not find driver" on migrate:** either enable `extension=pdo_sqlite` in `php.ini`, or use MySQL: create a database in phpMyAdmin and set in `.env`: `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=eralogic`, `DB_USERNAME=root`, `DB_PASSWORD=`.

## Set your business details (`.env`)

Everything is controlled from `.env`. No code changes needed.

| Key | Meaning |
|---|---|
| `APP_URL` | Your live domain, e.g. `https://www.eralogicsolution.com`. Used for canonical URLs, sitemap and schema. |
| `SITE_CITY`, `SITE_STREET`, `SITE_REGION`, `SITE_POSTCODE` | Office address (local SEO) |
| `SITE_LATITUDE`, `SITE_LONGITUDE` | Office coordinates from Google Maps |
| `SITE_PHONE`, `SITE_EMAIL` | Contact details. Enquiries are emailed to `SITE_EMAIL`. |
| `SITE_FACEBOOK`, `SITE_INSTAGRAM`, `SITE_LINKEDIN` | Full profile URLs (leave empty to skip) |
| `SITE_STAT_PROJECTS`, `SITE_STAT_YEARS` | Home page numbers. Use your real figures. |
| `MAIL_*` | SMTP settings from your hosting, so enquiry emails are delivered. Default `log` only writes them to `storage/logs`. |

After changing `.env` on the live server run `php artisan config:cache`.

## Where to edit content

| What | File |
|---|---|
| Services, service page text, FAQs | `config/agency.php` |
| Business details, stats | `config/site.php` / `.env` |
| Home page sections (hero, projects, reviews, process) | `resources/views/home.blade.php` |
| Service page layout | `resources/views/service.blade.php` |
| Header, footer, contact section | `resources/views/partials/` |
| Meta tags, fonts | `resources/views/layouts/app.blade.php` |
| Styles | `resources/css/app.css` |
| Vue components | `resources/js/components/` |
| Schema markup | `app/Support/Schema.php` |

To add a new service, copy one block in `config/agency.php` and change the `slug`. The page, menu link, sitemap entry and schema are created automatically.

Before going live, replace the sample project cards and the three review placeholders in `home.blade.php` with real ones.

## Pages and routes

| URL | Purpose |
|---|---|
| `/` | Home |
| `/services/{slug}` | 9 service pages, e.g. `/services/shopify-development` |
| `POST /contact` | Contact form (saved to the `contact_messages` table and emailed) |
| `/sitemap.xml`, `/robots.txt` | Generated automatically from `APP_URL` |

Contact form enquiries are stored in the `contact_messages` database table. There is no admin panel yet; view them in phpMyAdmin or with `php artisan tinker`.

## Upload to live hosting (cPanel)

1. Create a MySQL database and put its details in `.env` (`DB_CONNECTION=mysql`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).
2. Run `npm install` and `npm run build` on your computer, then upload the project including the `public/build` folder (not `node_modules`). Point the domain's document root to the `public` folder.
3. Run `composer install --no-dev --optimize-autoloader` (cPanel Terminal or SSH).
4. Set `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://your-domain`.
5. Run `php artisan key:generate`, `php artisan migrate --force`, `php artisan config:cache`, `php artisan route:cache`, `php artisan view:cache`.
6. Install SSL, then uncomment the "Force HTTPS" lines in `public/.htaccess`.

## SEO included

- **On-page:** unique title and description per page, one H1 per page, separate page per service, internal links, breadcrumbs, Open Graph and Twitter tags.
- **Technical:** server-rendered HTML, canonical URLs, automatic `sitemap.xml` and `robots.txt`, JSON-LD schema (ProfessionalService, WebSite, Service, BreadcrumbList, FAQPage), compression, caching, 404 page set to `noindex`.
- **Local:** business schema with address, phone, coordinates, hours and service area; city in service titles and content; address and phone in the footer of every page.

## SEO you must do yourself (not possible in code)

1. Google Search Console: add the site and submit `/sitemap.xml`. Add Bing Webmaster Tools and Google Analytics 4.
2. Google Business Profile: create and verify it with exactly the same name, address and phone as the website. Ask real clients for reviews.
3. Off-page: social pages; agency profiles on Clutch, GoodFirms, Behance, Dribbble; backlinks from client sites and guest posts. Avoid paid spam links.
4. Content: publish useful blog articles and real case studies regularly.

No code can guarantee a 100% score or a #1 ranking. This project covers the technical, on-page and local foundation; rankings then depend on content, reviews, backlinks and time.
