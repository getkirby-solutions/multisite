# Kirby Multisite

- Populate content
  - Create a kirby instance on `/public_html/` (localhost and/or remote server)
  - Create `/public_html/site.php` file
  - Create directory structure for every domain at `/public_html/$domain/...`
  - A directory structure for every domain must be added manually
- Setup IP host names
  - All domains to be mapped must be added manually
- Setup Apache virtual hosts (if needed)
  - If no virtual host is found, domains will resolve to system localhost
