# Kaniz Fatiha Journal

A Linux-inspired WordPress blog theme and editorial starter kit for Kaniz Fatiha. The theme includes a responsive dark terminal-style design, accessible article layouts, and WordPress post/archive templates. The `assets/` and `starter-posts/` folders contain original illustrations and editable article HTML.

## Repository contents

- Theme files: `style.css`, `functions.php`, `header.php`, `footer.php`, `index.php`, `single.php`, and `page.php`.
- `assets/`: original SVG/PNG artwork and editable About, Contact, and Linux article content.
- `starter-posts/`: additional Linux article drafts for future publication.

## Install the theme

1. Use an existing WordPress installation; this repository is **not** a complete WordPress site and does not include WordPress core or its database.
2. Copy this folder into `wp-content/themes/kaniz-journal/`, or zip it and upload through **Appearance → Themes → Add New Theme → Upload Theme**.
3. Activate **Kaniz Fatiha Journal** in **Appearance → Themes**.
4. Set the site title to **Kaniz Fatiha** under **Settings → General**. Create and assign a Primary menu containing Journal, About, and Contact.
5. Publish posts with **Posts → Add New**. Add a featured image in the post editor; posts then appear on the homepage automatically.

## Import the supplied content

Article HTML in `assets/` and `starter-posts/` is source material; it does not automatically create WordPress posts. Create each post from **Posts → Add New**, paste in the desired HTML using the editor's code view, and upload the corresponding cover image from `assets/` to the Media Library. Set that cover as the featured image. For `assets/about-page.html`, upload `assets/youtube-avatar.jpg` and replace `YOUR_WORDPRESS_AVATAR_URL` with the URL WordPress gives the uploaded image before adding the content to your About page.

## Publishing and security

This repository contains theme and editorial source only. To migrate the actual blog, separately migrate the WordPress database and `wp-content/uploads/` using a trusted host or migration tool. Do not commit `wp-config.php`, database backups, passwords, API tokens, or private credentials. The local preview address is specific to its developer machine and is not a public production URL.
