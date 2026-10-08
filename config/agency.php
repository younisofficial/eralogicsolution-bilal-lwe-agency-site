<?php

// All service pages, the pricing page and FAQs are generated from this file.
// Edit text here; no template changes are needed.
//
// Each service has:
//   intro, highlights  -> top of the service page
//   offerings          -> "What we offer" list
//   features           -> "Why choose us" cards
//   process            -> 5 step process
//   packages           -> prices shown on the service page AND the pricing page
//                         (US dollars, DUMMY figures — change them to your real prices)
//   faqs               -> questions on the service page (also sent to Google)

return [
    'services' => [
        [
            'slug' => 'shopify-development',
            'name' => 'Shopify Development',
            'icon' => 'i-bag',
            'h1' => 'Shopify Development Services',
            'description' => 'Custom Shopify store design and development: themes, apps, speed optimization and migration by Eralogicsolution. Get a free quote today.',
            'lead' => 'We design and build Shopify stores that load fast, look premium and turn visitors into buyers, from a first launch to a full Shopify Plus migration.',
            'features' => [
                [
                    'title' => 'Custom Theme Development',
                    'text' => 'Unique Shopify themes built to match your brand, not a template everyone else uses.',
                ],
                [
                    'title' => 'Store Setup & Configuration',
                    'text' => 'Products, collections, payments, shipping and taxes set up correctly from day one.',
                ],
                [
                    'title' => 'Shopify App Integration',
                    'text' => 'Reviews, upsells, email, inventory and custom apps connected and tested.',
                ],
                [
                    'title' => 'Speed Optimization',
                    'text' => 'Faster pages and better Core Web Vitals for higher rankings and more sales.',
                ],
                [
                    'title' => 'Store Migration',
                    'text' => 'Move from WooCommerce, Magento or any platform to Shopify without losing data or SEO.',
                ],
                [
                    'title' => 'Conversion Optimization',
                    'text' => 'Product pages, cart and checkout improvements that raise your conversion rate.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'How long does it take to build a Shopify store?',
                    'a' => 'A standard store takes 2 to 3 weeks. Stores with custom features or large catalogs take longer, and you get a timeline before work starts.',
                ],
                [
                    'q' => 'Can you redesign my existing Shopify store?',
                    'a' => 'Yes. We redesign, speed up and fix existing Shopify stores without interrupting your sales.',
                ],
                [
                    'q' => 'How much does a Shopify store cost?',
                    'a' => 'It depends on design, number of products and features. See the packages on our pricing page or ask for a free quote.',
                ],
                [
                    'q' => 'Do you provide support after launch?',
                    'a' => 'Yes. We offer support for updates, new features, apps and fixes after your store goes live.',
                ],
            ],
            'summary' => 'High-converting Shopify stores with custom themes, apps and checkout functionality.',
            'intro' => 'Launch or grow your online store with a Shopify team that understands design, speed and sales. We handle everything from theme and setup to apps, payments and launch, so you can focus on selling.',
            'highlights' => [
                'Up to 30% better conversion with a store designed to sell',
                '100% unique design built for your brand',
                'Fast, mobile-first store that ranks on Google',
            ],
            'offerings' => [
                'Shopify Store Development',
                'Shopify Customization',
                'Shopify Theme Development',
                'Shopify App Integration',
                'Shopify Store Migration',
                'Custom Functionalities',
                'Payment & Shipping Setup',
                'Shopify SEO',
                'Shopify Speed Optimization',
                'Shopify API Integrations',
            ],
            'process' => [
                [
                    'title' => 'Store Planning',
                    'text' => 'We study your products, customers and competitors and plan the store structure.',
                ],
                [
                    'title' => 'Theme Design',
                    'text' => 'We design a custom, mobile-first theme that matches your brand.',
                ],
                [
                    'title' => 'Apps & Features',
                    'text' => 'We set up payments, shipping and the apps your store needs.',
                ],
                [
                    'title' => 'Speed & SEO',
                    'text' => 'We optimise speed, product pages and SEO before launch.',
                ],
                [
                    'title' => 'Launch & Support',
                    'text' => 'We go live, train your team and stay available for updates.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 299,
                    'billing' => 'one-time',
                    'best_for' => 'Start selling online quickly',
                    'features' => ['Premium theme setup & branding', 'Up to 20 products', 'Payment & shipping setup', 'Mobile responsive', '7 days support'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 599,
                    'billing' => 'one-time',
                    'best_for' => 'Growing brands',
                    'features' => ['Custom theme design', 'Up to 100 products', 'App integration (reviews, upsell, email)', 'Speed & SEO setup', '30 days support'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 1199,
                    'billing' => 'one-time',
                    'best_for' => 'Large catalogs and custom needs',
                    'features' => [
                        'Fully custom theme',
                        'Unlimited products',
                        'Custom features & apps',
                        'Store migration',
                        'Conversion optimisation',
                        '60 days support',
                    ],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'wordpress-development',
            'name' => 'WordPress Development',
            'icon' => 'i-blog',
            'h1' => 'WordPress Development Services',
            'description' => 'Custom WordPress website development, themes, plugins, WooCommerce and maintenance by Eralogicsolution. Fast, secure and easy to manage.',
            'lead' => 'Flexible, secure WordPress websites you can update yourself, built with custom themes and clean code instead of heavy page builders.',
            'features' => [
                [
                    'title' => 'Custom Theme Design',
                    'text' => 'Lightweight themes coded for your brand, speed and search engines.',
                ],
                [
                    'title' => 'Plugin Development',
                    'text' => 'Custom plugins for features that off-the-shelf plugins can\'t deliver.',
                ],
                [
                    'title' => 'WooCommerce Stores',
                    'text' => 'Complete online shops with payments, shipping and inventory.',
                ],
                [
                    'title' => 'Speed & Security',
                    'text' => 'Caching, image optimization, hardening and regular backups.',
                ],
                [
                    'title' => 'Website Migration',
                    'text' => 'Move hosts or platforms with zero downtime and preserved rankings.',
                ],
                [
                    'title' => 'Maintenance & Support',
                    'text' => 'Updates, monitoring and fixes so your site stays healthy.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'Will I be able to edit the website myself?',
                    'a' => 'Yes. We set up an easy editor and give you a short training so you can update pages, posts and products.',
                ],
                [
                    'q' => 'Do you fix hacked or slow WordPress sites?',
                    'a' => 'Yes. We clean malware, fix errors and optimize slow WordPress websites.',
                ],
                [
                    'q' => 'How much does a WordPress website cost?',
                    'a' => 'It depends on the number of pages and features. See our pricing page for starting packages.',
                ],
                [
                    'q' => 'Do you build WooCommerce stores?',
                    'a' => 'Yes. We build complete WooCommerce stores with payments, shipping and inventory.',
                ],
            ],
            'summary' => 'Flexible, secure and easy-to-manage WordPress websites, themes and plugins.',
            'intro' => 'Get a WordPress website that is fast, secure and easy for your team to manage. We build custom themes and clean code instead of heavy page builders, so your site stays quick as it grows.',
            'highlights' => ['Easy to update without a developer', 'Custom theme built for speed and SEO', 'Secure, backed up and maintained'],
            'offerings' => [
                'WordPress Website Development',
                'Custom Theme Development',
                'Plugin Development',
                'WooCommerce Development',
                'Elementor & Gutenberg Builds',
                'Speed Optimization',
                'Security Hardening',
                'Website Migration',
                'Maintenance & Support',
            ],
            'process' => [
                [
                    'title' => 'Discovery',
                    'text' => 'We define your pages, content and goals.',
                ],
                [
                    'title' => 'Design',
                    'text' => 'We design the layout and look of every key page.',
                ],
                [
                    'title' => 'Development',
                    'text' => 'We build a lightweight custom theme and the features you need.',
                ],
                [
                    'title' => 'Content & SEO',
                    'text' => 'We add your content, set up SEO and test speed.',
                ],
                [
                    'title' => 'Launch & Training',
                    'text' => 'We go live and show your team how to update the site.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 199,
                    'billing' => 'one-time',
                    'best_for' => 'Small business websites',
                    'features' => ['Up to 5 pages', 'Premium theme customisation', 'Contact form & WhatsApp button', 'Basic on-page SEO', '7 days support'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 449,
                    'billing' => 'one-time',
                    'best_for' => 'Growing businesses',
                    'features' => ['Up to 12 pages', 'Custom theme design', 'Blog setup', 'Speed & security setup', '30 days support'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 899,
                    'billing' => 'one-time',
                    'best_for' => 'Online stores and advanced sites',
                    'features' => ['Fully custom theme', 'WooCommerce store', 'Custom plugin features', 'Migration from old site', '60 days support'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'seo-services',
            'name' => 'SEO',
            'icon' => 'i-search',
            'h1' => 'SEO Services That Grow Organic Traffic',
            'description' => 'Local, on-page, off-page and technical SEO services by Eralogicsolution. Rank higher on Google and get more qualified leads.',
            'lead' => 'Complete search engine optimization: technical fixes, on-page content, local SEO and link building that bring qualified visitors to your website.',
            'features' => [
                [
                    'title' => 'Technical SEO',
                    'text' => 'Site speed, crawlability, indexing, schema markup and Core Web Vitals.',
                ],
                [
                    'title' => 'On-Page SEO',
                    'text' => 'Keyword research, titles, meta descriptions, headings and content optimization.',
                ],
                [
                    'title' => 'Local SEO',
                    'text' => 'Google Business Profile, local citations and map pack rankings.',
                ],
                [
                    'title' => 'Off-Page SEO',
                    'text' => 'Quality backlinks, guest posts and digital PR that build authority.',
                ],
                [
                    'title' => 'SEO Audits',
                    'text' => 'A full report of what is holding your site back and how to fix it.',
                ],
                [
                    'title' => 'Monthly Reporting',
                    'text' => 'Clear reports on rankings, traffic and conversions.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'How long does SEO take to show results?',
                    'a' => 'Most websites see measurable improvement in 3 to 6 months, depending on competition and the current state of the site.',
                ],
                [
                    'q' => 'Do you guarantee the number one position?',
                    'a' => 'No honest agency can. We commit to proven methods, transparent reporting and steady growth.',
                ],
                [
                    'q' => 'How much do SEO services cost?',
                    'a' => 'SEO is billed monthly. See our pricing page for plans, or ask for a free audit first.',
                ],
                [
                    'q' => 'Do you do local SEO?',
                    'a' => 'Yes. We optimise your Google Business Profile, local citations and map rankings.',
                ],
            ],
            'summary' => 'Higher rankings and more organic traffic with technical, on-page and content SEO.',
            'intro' => 'Rank higher on Google and get more customers without paying for every click. Our SEO combines technical fixes, on-page content and local SEO, with clear monthly reports.',
            'highlights' => [
                'More organic traffic and qualified leads',
                'Technical, on-page and local SEO in one plan',
                'Transparent monthly reports',
            ],
            'offerings' => [
                'SEO Audit',
                'Keyword Research',
                'Technical SEO',
                'On-Page SEO',
                'Local SEO & Google Business Profile',
                'Off-Page SEO & Link Building',
                'Content Optimization',
                'Ecommerce SEO',
                'Monthly Reporting',
            ],
            'process' => [
                [
                    'title' => 'Audit',
                    'text' => 'We audit your website, rankings and competitors.',
                ],
                [
                    'title' => 'Keyword Strategy',
                    'text' => 'We choose the keywords your customers actually search.',
                ],
                [
                    'title' => 'On-Site Fixes',
                    'text' => 'We fix technical issues and optimise pages and content.',
                ],
                [
                    'title' => 'Authority Building',
                    'text' => 'We build quality links and local citations.',
                ],
                [
                    'title' => 'Report & Improve',
                    'text' => 'We report results monthly and keep improving.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 149,
                    'billing' => 'per month',
                    'best_for' => 'Local businesses',
                    'features' => ['Up to 10 keywords', 'On-page SEO', 'Google Business Profile', 'Monthly report'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 299,
                    'billing' => 'per month',
                    'best_for' => 'Growing websites',
                    'features' => ['Up to 25 keywords', 'Technical + on-page SEO', '4 blog articles', 'Link building', 'Monthly report'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 599,
                    'billing' => 'per month',
                    'best_for' => 'Competitive markets',
                    'features' => ['Up to 50 keywords', 'Full technical SEO', '8 blog articles', 'Advanced link building', 'Dedicated SEO manager'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'digital-marketing',
            'name' => 'Digital Marketing',
            'icon' => 'i-target',
            'h1' => 'Digital Marketing Services',
            'description' => 'Social media marketing, Google Ads, Meta Ads and content marketing by Eralogicsolution. Reach the right customers and grow sales.',
            'lead' => 'Social media, paid ads and content marketing run as one plan, focused on one goal: more customers for your business.',
            'features' => [
                [
                    'title' => 'Social Media Marketing',
                    'text' => 'Content calendars, posts and community management on Facebook, Instagram and LinkedIn.',
                ],
                [
                    'title' => 'Google Ads (PPC)',
                    'text' => 'Search and shopping campaigns that bring buyers ready to act.',
                ],
                [
                    'title' => 'Meta & TikTok Ads',
                    'text' => 'Targeted ads with creatives that stop the scroll.',
                ],
                [
                    'title' => 'Content Marketing',
                    'text' => 'Blogs, videos and posts that build trust and rankings.',
                ],
                [
                    'title' => 'Email & WhatsApp Marketing',
                    'text' => 'Automated campaigns that bring customers back.',
                ],
                [
                    'title' => 'Analytics & Reporting',
                    'text' => 'Conversion tracking and clear monthly reports.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'Is the ad budget included in your price?',
                    'a' => 'No. Our plans cover management, creatives and reporting. The ad budget is paid directly to Google or Meta.',
                ],
                [
                    'q' => 'Which platforms do you manage?',
                    'a' => 'Facebook, Instagram, TikTok, LinkedIn, Google Search, Shopping and YouTube.',
                ],
                [
                    'q' => 'How much does digital marketing cost?',
                    'a' => 'Plans are monthly. See our pricing page for details.',
                ],
                [
                    'q' => 'How soon will I see results?',
                    'a' => 'Paid ads can bring leads in the first weeks; organic social media grows over 2 to 3 months.',
                ],
            ],
            'summary' => 'Social media, Google Ads, Meta Ads and content marketing that bring real customers.',
            'intro' => 'Turn your marketing budget into real customers. We plan, create and manage campaigns across social media and Google, tracking every lead and sale.',
            'highlights' => ['Campaigns focused on leads and sales', 'Creatives, copy and ads under one roof', 'Transparent results every month'],
            'offerings' => [
                'Social Media Management',
                'Facebook & Instagram Ads',
                'Google Ads (PPC)',
                'TikTok Ads',
                'YouTube Ads',
                'Content Marketing',
                'Email Marketing',
                'WhatsApp Marketing',
                'Conversion Tracking',
            ],
            'process' => [
                [
                    'title' => 'Research',
                    'text' => 'We study your audience, offer and competitors.',
                ],
                [
                    'title' => 'Strategy',
                    'text' => 'We plan channels, budget and content.',
                ],
                [
                    'title' => 'Creatives',
                    'text' => 'We design posts, ads and copy.',
                ],
                [
                    'title' => 'Launch & Optimise',
                    'text' => 'We run campaigns and optimise them weekly.',
                ],
                [
                    'title' => 'Report',
                    'text' => 'We report leads, sales and next steps every month.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 199,
                    'billing' => 'per month',
                    'best_for' => 'Social media presence',
                    'features' => ['12 posts per month', '2 platforms', 'Page management', 'Monthly report'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 399,
                    'billing' => 'per month',
                    'best_for' => 'Leads with paid ads',
                    'features' => ['20 posts per month', 'Meta ads management', 'Ad creatives', 'Conversion tracking', 'Monthly report'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 799,
                    'billing' => 'per month',
                    'best_for' => 'Full-funnel marketing',
                    'features' => ['Daily posts', 'Meta + Google ads', 'Email/WhatsApp campaigns', 'Video reels', 'Dedicated manager'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'laravel-development',
            'name' => 'Laravel Development',
            'icon' => 'i-server',
            'h1' => 'Laravel Development Services',
            'description' => 'Custom Laravel web application, API and SaaS development by Eralogicsolution. Secure, scalable and built with clean code.',
            'lead' => 'Robust web applications, portals and APIs built on Laravel, engineered to stay fast and maintainable as your business grows.',
            'features' => [
                [
                    'title' => 'Custom Web Applications',
                    'text' => 'Business portals, CRMs, booking systems and dashboards.',
                ],
                [
                    'title' => 'REST API Development',
                    'text' => 'Secure APIs for mobile apps and third-party integrations.',
                ],
                [
                    'title' => 'SaaS Platforms',
                    'text' => 'Multi-tenant products with subscriptions and billing.',
                ],
                [
                    'title' => 'Third-Party Integrations',
                    'text' => 'Payment gateways, SMS, email, maps and ERP systems.',
                ],
                [
                    'title' => 'Migration & Upgrades',
                    'text' => 'Upgrade old Laravel or PHP projects to current versions.',
                ],
                [
                    'title' => 'Maintenance & Support',
                    'text' => 'Bug fixes, monitoring and new features on demand.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'Why choose Laravel for my project?',
                    'a' => 'Laravel is secure, well-supported and fast to develop with, which makes it a strong choice for custom business applications.',
                ],
                [
                    'q' => 'Can you take over an existing Laravel project?',
                    'a' => 'Yes. We audit the code first, then continue development or fix issues.',
                ],
                [
                    'q' => 'How much does a Laravel application cost?',
                    'a' => 'It depends on features and complexity. See our pricing page for starting prices or ask for a detailed quote.',
                ],
                [
                    'q' => 'Will I get the source code?',
                    'a' => 'Yes. You own the full source code after final payment.',
                ],
            ],
            'summary' => 'Robust, scalable web applications and APIs built on the Laravel framework.',
            'intro' => 'Build secure, scalable web applications on Laravel, the most popular PHP framework. From portals and dashboards to APIs and SaaS products, our code is clean and easy to maintain.',
            'highlights' => ['Secure and scalable from day one', 'Clean, well-documented code', 'APIs and integrations with any service'],
            'offerings' => [
                'Custom Web Applications',
                'REST API Development',
                'SaaS Development',
                'Admin Panels & Dashboards',
                'Payment Gateway Integration',
                'Third-Party Integrations',
                'Laravel Upgrades & Migration',
                'Performance Optimization',
                'Maintenance & Support',
            ],
            'process' => [
                [
                    'title' => 'Requirements',
                    'text' => 'We map your workflows, users and features.',
                ],
                [
                    'title' => 'Architecture',
                    'text' => 'We design the database and system structure.',
                ],
                [
                    'title' => 'Development',
                    'text' => 'We build features in short sprints you can review.',
                ],
                [
                    'title' => 'Testing',
                    'text' => 'We test functionality, security and performance.',
                ],
                [
                    'title' => 'Deploy & Support',
                    'text' => 'We deploy to your server and support future updates.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 499,
                    'billing' => 'one-time',
                    'best_for' => 'Simple web apps',
                    'features' => ['Up to 5 modules', 'Login & user roles', 'Admin panel', 'Responsive UI', '15 days support'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 999,
                    'billing' => 'one-time',
                    'best_for' => 'Business systems',
                    'features' => ['Up to 12 modules', 'REST APIs', 'Payment integration', 'Reports & dashboard', '30 days support'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 1999,
                    'billing' => 'one-time',
                    'best_for' => 'SaaS & large platforms',
                    'features' => ['Unlimited modules', 'Multi-tenant / SaaS setup', 'Third-party integrations', 'Performance tuning', '60 days support'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'custom-website-development',
            'name' => 'Custom Website Development',
            'icon' => 'i-code',
            'h1' => 'Custom Website Development',
            'description' => 'Custom website development by Eralogicsolution: fast, responsive and SEO-friendly websites tailored to your business needs.',
            'lead' => 'Websites built from scratch around your business, with responsive layouts, fast loading and clean code that search engines can read easily.',
            'features' => [
                [
                    'title' => 'Business Websites',
                    'text' => 'Professional company sites that build trust and generate leads.',
                ],
                [
                    'title' => 'Ecommerce Websites',
                    'text' => 'Custom online stores with secure checkout.',
                ],
                [
                    'title' => 'Landing Pages',
                    'text' => 'High-converting pages for ads and campaigns.',
                ],
                [
                    'title' => 'Responsive Design',
                    'text' => 'A perfect layout on mobile, tablet and desktop.',
                ],
                [
                    'title' => 'SEO-Friendly Build',
                    'text' => 'Clean markup, fast pages and structured data from the start.',
                ],
                [
                    'title' => 'CMS Integration',
                    'text' => 'Manage your own content without a developer.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'What is the difference between a custom and a template website?',
                    'a' => 'A custom website is designed and coded for your business, so it is faster, unique and easier to extend than a template.',
                ],
                [
                    'q' => 'Do you provide hosting and a domain?',
                    'a' => 'We help you choose and set up hosting and a domain, and deploy the site for you.',
                ],
                [
                    'q' => 'How much does a custom website cost?',
                    'a' => 'It depends on pages, design and features. See our pricing page for starting packages.',
                ],
                [
                    'q' => 'Can you redesign my current website?',
                    'a' => 'Yes. We redesign outdated websites and keep your SEO rankings safe.',
                ],
            ],
            'summary' => 'Tailored websites for unique business needs, built for speed, security and performance.',
            'intro' => 'Stand out with a website designed and coded specifically for your business. No templates, no bloat — just a fast, responsive website built to turn visitors into customers.',
            'highlights' => ['100% custom design for your brand', 'Fast-loading and mobile-first', 'SEO-friendly structure from day one'],
            'offerings' => [
                'Business Websites',
                'Corporate Websites',
                'Landing Pages',
                'Ecommerce Websites',
                'Portfolio Websites',
                'Website Redesign',
                'CMS Integration',
                'Responsive Development',
                'Website Maintenance',
            ],
            'process' => [
                [
                    'title' => 'Discovery',
                    'text' => 'We learn about your business, audience and goals.',
                ],
                [
                    'title' => 'Wireframes',
                    'text' => 'We plan the layout of every page.',
                ],
                [
                    'title' => 'Design',
                    'text' => 'We create a custom visual design for approval.',
                ],
                [
                    'title' => 'Development',
                    'text' => 'We code a fast, responsive website.',
                ],
                [
                    'title' => 'Launch & Support',
                    'text' => 'We launch, test and support your website.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 249,
                    'billing' => 'one-time',
                    'best_for' => 'Landing pages & small sites',
                    'features' => ['Up to 3 pages', 'Custom design', 'Contact form', 'Mobile responsive', '7 days support'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 549,
                    'billing' => 'one-time',
                    'best_for' => 'Business websites',
                    'features' => ['Up to 8 pages', 'Custom design & animations', 'CMS for easy editing', 'SEO setup', '30 days support'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 1099,
                    'billing' => 'one-time',
                    'best_for' => 'Advanced websites',
                    'features' => ['Up to 20 pages', 'Advanced features', 'Ecommerce or booking', 'Speed optimisation', '60 days support'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'graphic-designing',
            'name' => 'Graphic Designing',
            'icon' => 'i-pen',
            'h1' => 'Graphic Designing Services',
            'description' => 'Logo design, brand identity, social media posts and print design by Eralogicsolution. Creative graphics that make your brand stand out.',
            'lead' => 'Logos, brand identities and marketing creatives that give your business a consistent, professional look everywhere it appears.',
            'features' => [
                [
                    'title' => 'Logo Design',
                    'text' => 'Memorable logos with full source files and usage guide.',
                ],
                [
                    'title' => 'Brand Identity',
                    'text' => 'Colors, typography and brand guidelines.',
                ],
                [
                    'title' => 'Social Media Design',
                    'text' => 'Posts, stories, covers and ad creatives.',
                ],
                [
                    'title' => 'Print Design',
                    'text' => 'Business cards, brochures, flyers and banners.',
                ],
                [
                    'title' => 'Packaging Design',
                    'text' => 'Labels and packaging that sell on the shelf.',
                ],
                [
                    'title' => 'Web Graphics',
                    'text' => 'Banners, icons and illustrations for your website.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'How many logo concepts do I get?',
                    'a' => 'You receive multiple initial concepts and revisions on the one you choose.',
                ],
                [
                    'q' => 'Which file formats do you deliver?',
                    'a' => 'AI, EPS, SVG, PDF, PNG and JPG, ready for print and web.',
                ],
                [
                    'q' => 'How much does graphic design cost?',
                    'a' => 'See our pricing page for logo, branding and social media packages.',
                ],
                [
                    'q' => 'How many revisions do I get?',
                    'a' => 'Every package includes revisions. The number is listed in each package.',
                ],
            ],
            'summary' => 'Logos, brand identity, social media creatives and print designs that get noticed.',
            'intro' => 'Make your brand look professional everywhere. Our designers create logos, brand identities, social media posts and print materials that are consistent and memorable.',
            'highlights' => ['Unique designs, never templates', 'Consistent brand across every platform', 'Print-ready and editable source files'],
            'offerings' => [
                'Logo Design',
                'Brand Identity',
                'Social Media Posts',
                'Brochure & Company Profile',
                'Business Cards & Stationery',
                'Packaging Design',
                'Banner & Ad Design',
                'Infographics',
                'Web Graphics',
            ],
            'process' => [
                [
                    'title' => 'Brief',
                    'text' => 'We learn about your brand, audience and style.',
                ],
                [
                    'title' => 'Research',
                    'text' => 'We study your market and competitors.',
                ],
                [
                    'title' => 'Concepts',
                    'text' => 'We create initial design concepts.',
                ],
                [
                    'title' => 'Revisions',
                    'text' => 'We refine the chosen design with your feedback.',
                ],
                [
                    'title' => 'Delivery',
                    'text' => 'We deliver final files in every format you need.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 49,
                    'billing' => 'one-time',
                    'best_for' => 'A new logo',
                    'features' => ['2 logo concepts', '2 revisions', 'PNG, JPG & PDF files', '3 days delivery'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 149,
                    'billing' => 'one-time',
                    'best_for' => 'Complete brand starter',
                    'features' => ['4 logo concepts', 'Brand colours & fonts', 'Business card design', '10 social media posts', 'Source files'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 349,
                    'billing' => 'one-time',
                    'best_for' => 'Full brand identity',
                    'features' => ['Unlimited concepts', 'Complete brand guidelines', 'Stationery & brochure', '30 social media posts', 'Source files'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'ui-ux-design',
            'name' => 'Figma & UI/UX Design',
            'icon' => 'i-frame',
            'h1' => 'Figma & UI/UX Design Services',
            'description' => 'UI/UX design in Figma, wireframes, prototypes and Figma-to-website conversion by Eralogicsolution. Clean, user-friendly interfaces.',
            'lead' => 'User-friendly interfaces designed in Figma, tested as clickable prototypes, and converted into pixel-perfect websites and apps.',
            'features' => [
                [
                    'title' => 'UX Research & Wireframes',
                    'text' => 'User flows and wireframes before any visual design.',
                ],
                [
                    'title' => 'UI Design in Figma',
                    'text' => 'Modern, consistent screens for web and mobile.',
                ],
                [
                    'title' => 'Interactive Prototypes',
                    'text' => 'Clickable prototypes you can test with real users.',
                ],
                [
                    'title' => 'Design Systems',
                    'text' => 'Reusable components, colors and type styles.',
                ],
                [
                    'title' => 'Figma to Website',
                    'text' => 'Designs converted to HTML, WordPress, Shopify or React.',
                ],
                [
                    'title' => 'Website Redesign',
                    'text' => 'A fresh, modern look for an outdated website or app.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'Do you convert Figma designs to working websites?',
                    'a' => 'Yes. We convert Figma files into responsive, pixel-perfect websites on the platform you prefer.',
                ],
                [
                    'q' => 'Will I own the Figma files?',
                    'a' => 'Yes. You get full ownership of all design files.',
                ],
                [
                    'q' => 'How much does UI/UX design cost?',
                    'a' => 'It depends on the number of screens. See our pricing page for packages.',
                ],
                [
                    'q' => 'Can you also build the design?',
                    'a' => 'Yes. Our developers can turn the Figma design into a working website or app.',
                ],
            ],
            'summary' => 'Modern, user-friendly interfaces and prototypes, plus Figma-to-website conversion.',
            'intro' => 'Design websites and apps that people find easy and enjoyable to use. We research, wireframe and design in Figma, then hand over clean files your developers can build from.',
            'highlights' => ['User-tested flows that convert', 'Pixel-perfect designs in Figma', 'Developer-ready handover'],
            'offerings' => [
                'UX Research',
                'Wireframing',
                'Website UI Design',
                'Mobile App UI Design',
                'Interactive Prototypes',
                'Design Systems',
                'Dashboard Design',
                'Figma to Website',
                'Website & App Redesign',
            ],
            'process' => [
                [
                    'title' => 'Research',
                    'text' => 'We understand your users and their goals.',
                ],
                [
                    'title' => 'Wireframes',
                    'text' => 'We map flows and screen layouts.',
                ],
                [
                    'title' => 'Visual Design',
                    'text' => 'We design polished screens in Figma.',
                ],
                [
                    'title' => 'Prototype',
                    'text' => 'We build a clickable prototype to test.',
                ],
                [
                    'title' => 'Handover',
                    'text' => 'We deliver files and a design system to developers.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 199,
                    'billing' => 'one-time',
                    'best_for' => 'Landing page or small app',
                    'features' => ['Up to 5 screens', 'Wireframes + UI design', '2 revisions', 'Figma source file'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 499,
                    'billing' => 'one-time',
                    'best_for' => 'Websites & apps',
                    'features' => ['Up to 15 screens', 'Clickable prototype', 'Mobile + desktop versions', '3 revisions', 'Figma source file'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 999,
                    'billing' => 'one-time',
                    'best_for' => 'Products & dashboards',
                    'features' => ['Up to 40 screens', 'UX research', 'Design system', 'Unlimited revisions', 'Developer handover'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'software-development',
            'name' => 'Software Development',
            'icon' => 'i-cpu',
            'h1' => 'Custom Software Development',
            'description' => 'Custom software development by Eralogicsolution: web applications, CRMs, ERPs, dashboards and APIs built for your business workflows.',
            'lead' => 'Software built around the way your business works: web applications, management systems and integrations that save time and reduce errors.',
            'features' => [
                [
                    'title' => 'Web Applications',
                    'text' => 'Secure, scalable applications that run in any browser.',
                ],
                [
                    'title' => 'CRM & ERP Systems',
                    'text' => 'Manage customers, sales, inventory and staff in one place.',
                ],
                [
                    'title' => 'Business Automation',
                    'text' => 'Replace manual spreadsheets and repetitive tasks.',
                ],
                [
                    'title' => 'API Development',
                    'text' => 'Connect your systems and third-party services.',
                ],
                [
                    'title' => 'Dashboards & Reports',
                    'text' => 'Real-time data for better decisions.',
                ],
                [
                    'title' => 'Support & Upgrades',
                    'text' => 'Long-term maintenance and feature development.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'How do you estimate the cost of custom software?',
                    'a' => 'We list your required features, estimate each one and share an itemized quote with a timeline.',
                ],
                [
                    'q' => 'Who owns the source code?',
                    'a' => 'You do. Full source code is handed over on completion.',
                ],
                [
                    'q' => 'How long does custom software take?',
                    'a' => 'Most projects take 6 to 16 weeks depending on features. You get a timeline before we start.',
                ],
                [
                    'q' => 'Can you integrate with our existing tools?',
                    'a' => 'Yes. We connect your software with accounting, payment, email and other tools.',
                ],
            ],
            'summary' => 'Web applications, dashboards, APIs and custom software for your business workflows.',
            'intro' => 'Automate your business with software built around how you work. CRMs, ERPs, dashboards and internal tools that save time and reduce errors.',
            'highlights' => ['Built around your exact workflow', 'Secure, scalable and cloud-ready', 'Full source code ownership'],
            'offerings' => [
                'Custom Software Development',
                'CRM Development',
                'ERP Systems',
                'Inventory & POS Systems',
                'Business Automation',
                'Dashboards & Reports',
                'API Development',
                'Cloud Deployment',
                'Support & Upgrades',
            ],
            'process' => [
                [
                    'title' => 'Analysis',
                    'text' => 'We study your processes and pain points.',
                ],
                [
                    'title' => 'Planning',
                    'text' => 'We define features, timeline and budget.',
                ],
                [
                    'title' => 'Development',
                    'text' => 'We build in stages with regular demos.',
                ],
                [
                    'title' => 'Testing',
                    'text' => 'We test thoroughly with real data.',
                ],
                [
                    'title' => 'Training & Support',
                    'text' => 'We train your team and support the system.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 799,
                    'billing' => 'one-time',
                    'best_for' => 'Small internal tools',
                    'features' => ['Up to 5 modules', 'User roles & login', 'Reports', 'Web based', '30 days support'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 1599,
                    'billing' => 'one-time',
                    'best_for' => 'CRM / inventory systems',
                    'features' => ['Up to 12 modules', 'Dashboards & analytics', 'Integrations', 'Data import/export', '60 days support'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 2999,
                    'billing' => 'one-time',
                    'best_for' => 'ERP & enterprise systems',
                    'features' => ['Unlimited modules', 'Multi-branch support', 'Advanced automation', 'Cloud deployment', '90 days support'],
                    'popular' => false,
                ],
            ],
        ],
        [
            'slug' => 'app-development',
            'name' => 'App Development',
            'icon' => 'i-phone',
            'h1' => 'Mobile App Development Services',
            'description' => 'Android and iOS mobile app development by Eralogicsolution. Flutter and native apps with clean design and smooth performance.',
            'lead' => 'Android and iOS apps with smooth performance and a clean user experience, from the first idea to publishing on the app stores.',
            'features' => [
                [
                    'title' => 'Android App Development',
                    'text' => 'Apps for phones and tablets, published on Google Play.',
                ],
                [
                    'title' => 'iOS App Development',
                    'text' => 'Apps for iPhone and iPad, published on the App Store.',
                ],
                [
                    'title' => 'Cross-Platform Apps',
                    'text' => 'One Flutter codebase for both Android and iOS.',
                ],
                [
                    'title' => 'App UI/UX Design',
                    'text' => 'Simple, attractive screens users enjoy.',
                ],
                [
                    'title' => 'Backend & APIs',
                    'text' => 'Secure servers, databases and admin panels.',
                ],
                [
                    'title' => 'App Maintenance',
                    'text' => 'Updates, bug fixes and new features after launch.',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'How much time does it take to build a mobile app?',
                    'a' => 'A simple app takes 4 to 8 weeks. Larger apps with a backend and many features take longer.',
                ],
                [
                    'q' => 'Do you publish the app on the stores?',
                    'a' => 'Yes. We handle submission to Google Play and the App Store.',
                ],
                [
                    'q' => 'How much does a mobile app cost?',
                    'a' => 'It depends on screens and features. See our pricing page for starting packages.',
                ],
                [
                    'q' => 'Do you build the admin panel too?',
                    'a' => 'Yes. We build the backend, APIs and admin panel your app needs.',
                ],
            ],
            'summary' => 'Android and iOS mobile apps with smooth performance and a clean user experience.',
            'intro' => 'Reach your customers on their phones with fast, beautiful mobile apps. We design, build and publish Android and iOS apps, often from a single Flutter codebase to save time and cost.',
            'highlights' => ['Android and iOS from one codebase', 'Smooth, native-like performance', 'Published on Play Store and App Store'],
            'offerings' => [
                'Android App Development',
                'iOS App Development',
                'Flutter App Development',
                'React Native Apps',
                'App UI/UX Design',
                'Backend & Admin Panel',
                'Push Notifications',
                'App Store Publishing',
                'App Maintenance',
            ],
            'process' => [
                [
                    'title' => 'Idea & Scope',
                    'text' => 'We define your app features and users.',
                ],
                [
                    'title' => 'UI/UX Design',
                    'text' => 'We design every screen in Figma.',
                ],
                [
                    'title' => 'Development',
                    'text' => 'We build the app and its backend.',
                ],
                [
                    'title' => 'Testing',
                    'text' => 'We test on real Android and iOS devices.',
                ],
                [
                    'title' => 'Publish & Support',
                    'text' => 'We publish to the stores and support updates.',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Basic',
                    'price' => 999,
                    'billing' => 'one-time',
                    'best_for' => 'Simple apps',
                    'features' => ['Android or iOS', 'Up to 8 screens', 'Basic backend', 'Store publishing', '30 days support'],
                    'popular' => false,
                ],
                [
                    'name' => 'Standard',
                    'price' => 1999,
                    'billing' => 'one-time',
                    'best_for' => 'Business apps',
                    'features' => ['Android + iOS (Flutter)', 'Up to 20 screens', 'Admin panel & APIs', 'Push notifications', '60 days support'],
                    'popular' => true,
                ],
                [
                    'name' => 'Premium',
                    'price' => 3999,
                    'billing' => 'one-time',
                    'best_for' => 'Marketplace & advanced apps',
                    'features' => ['Android + iOS', 'Unlimited screens', 'Payments & real-time features', 'Advanced admin', '90 days support'],
                    'popular' => false,
                ],
            ],
        ],
    ],
    // Questions shown on the pricing page.
    'pricing_faqs' => [
        ['q' => 'Are these prices final?', 'a' => 'They are starting prices for the scope listed in each package. If you need more pages, features or keywords we send a fixed written quote before any work starts.'],
        ['q' => 'How do payments work?', 'a' => 'One-time projects are paid 50% upfront and 50% before launch. Monthly plans (SEO and marketing) are billed at the start of each month and can be cancelled with 30 days notice.'],
        ['q' => 'Is the advertising budget included?', 'a' => 'No. Marketing plans cover management, creatives and reporting. Your ad budget is paid directly to Google, Meta or TikTok.'],
        ['q' => 'Are domain and hosting included?', 'a' => 'They are billed separately at cost. We can set them up in your name so you stay in control.'],
        ['q' => 'Can I combine services?', 'a' => 'Yes. Many clients combine a website with SEO or marketing. Tell us what you need and we will price it together.'],
    ],

    'faqs' => [
        [
            'q' => 'How long does a website development project take?',
            'a' => 'A standard business website usually takes 2 to 4 weeks. Online stores, custom software and mobile apps take longer depending on features. You get a clear timeline before work starts.',
        ],
        [
            'q' => 'Do you provide ongoing support after launch?',
            'a' => 'Yes. We offer support and maintenance plans covering updates, backups, security, speed and new features.',
        ],
        [
            'q' => 'What technologies do you use?',
            'a' => 'Shopify, WordPress, Laravel, React, Vue.js, Flutter and Figma, plus SEO and marketing tools such as Google Ads, Meta Ads and Google Analytics.',
        ],
        [
            'q' => 'How much does a website cost?',
            'a' => 'Cost depends on scope, design and features. Every service has starting packages on our pricing page, or share your requirements for a free, itemized quote.',
        ],
        [
            'q' => 'Can you redesign or fix my existing website?',
            'a' => 'Yes. We redesign, speed up, migrate and fix existing Shopify, WordPress and custom websites.',
        ],
    ],
    'reviews' => [
        [
            'text' => 'Add your first client review here. Two or three sentences about the project and the result work best.',
            'name' => 'Client name',
            'role' => 'Role, Company',
            'rating' => 5,
        ],
        [
            'text' => 'Add your second client review here. A Shopify or WordPress client is a good fit for this spot.',
            'name' => 'Client name',
            'role' => 'Role, Company',
            'rating' => 5,
        ],
        [
            'text' => 'Add your third client review here. A software or app development client rounds out the set.',
            'name' => 'Client name',
            'role' => 'Role, Company',
            'rating' => 5,
        ],
        [
            'text' => 'Add your fourth client review here. An SEO result with real numbers is very convincing.',
            'name' => 'Client name',
            'role' => 'Role, Company',
            'rating' => 5,
        ],
        [
            'text' => 'Add your fifth client review here. A design or branding client adds variety.',
            'name' => 'Client name',
            'role' => 'Role, Company',
            'rating' => 5,
        ],
    ],
];
