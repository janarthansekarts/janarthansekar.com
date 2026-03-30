# janarthansekar.com

Personal website of Janarthansekar Sekar — backend-heavy full-stack engineer
working on PLM-based ERP systems.

## Stack

- [Jigsaw](https://jigsaw.tighten.com/) — static site generator built on Laravel Blade
- [Tailwind CSS](https://tailwindcss.com/) — utility-first styling
- Content written in Markdown

## Local Development

**Requirements:** PHP 8.1+ (with `curl` and `mbstring` extensions), Composer, Node.js 18+

On Debian/Ubuntu, install PHP dependencies first:

```
sudo apt install -y php-cli php-mbstring php8.2-curl unzip curl
```

Then set up the project:

```
composer install
npm install
npm run serve
```

Site will be available at `http://localhost:8000`.

## Building for Production

```
npm run build
```

Output goes to `build_production/`.

## Project Structure

```
source/
├── _assets/          CSS and JS source files
├── _layouts/         Blade layout templates
├── _partials/        Reusable components (nav, footer)
├── _writing/         Blog posts (Markdown)
├── _case_studies/    Case studies (Markdown)
├── index.blade.php   Homepage
├── about.blade.php   About page
├── work.blade.php    Work/Experience page
├── writing.blade.php Writing listing page
├── case-studies.blade.php  Case studies listing
└── contact.blade.php Contact page
```

## Adding Content

### New writing post

Create a Markdown file in `source/_writing/`:

```
source/_writing/your-post-title.md
```

Front matter format:

```yaml
---
extends: _layouts.post
title: "Your Post Title"
date: 2026-04-01
description: "A short description of the post."
section: content
---
```

### New case study

Create a Markdown file in `source/_case_studies/`:

```
source/_case_studies/your-case-study-title.md
```

Front matter format:

```yaml
---
extends: _layouts.case_study
title: "Your Case Study Title"
date: 2026-04-01
description: "A short description of the case study."
section: content
---
```

## Deployment

Static files in `build_production/` can be deployed to Netlify:

1. Push this repo to GitHub
2. Connect the repo to Netlify
3. Set build command: `npm run prod && vendor/bin/jigsaw build production`
4. Set publish directory: `build_production`
5. Every push to main triggers a deploy

Alternatively, build locally and deploy the `build_production` folder directly.

## Custom Domain

Add your domain in Netlify > Site Settings > Domain Management.
Netlify handles SSL automatically via Let's Encrypt.
