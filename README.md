# Kirby Multisite

- Populate content
  - Install kirby on root `/public_html/` (localhost and/or remote server)
  - Create `./site.php` file on root
  - Create directory structure for every domain at `./$domain/content/...`
  - A directory structure for every domain must be added manually
- Setup IP host names
  - All domains to be mapped must be added manually
- Setup Apache virtual hosts (if needed)
  - Virtual hosts separate domains in multiple independent clusters
  - If no virtual host is found, domains will resolve to system localhost
