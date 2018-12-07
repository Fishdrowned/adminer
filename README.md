## MySQL Adminer Ready for Deploy

### Usage
1. Clone this repository and configure web root
    ```bash
    git clone --single-branch -b deploy https://github.com/Fishdrowned/adminer.git
    ```
1. Copy `config/sample/` to `config/local/` [Optional]
1. Edit `config/local/config.php` to set `development_mode` [Optional]
1. Edit `config/local/servers.php` to add your servers [Optional]
1. Serve directory `public` via http and enjoy

### Containing
* [Adminer 4.6.3](https://github.com/vrana/adminer/releases/tag/v4.6.3)
* Theme `pepa-linha` [[Modified]](designs/pepa-linha/fix.css)
* Plugins:
    - login-servers
    - dump-bz2
    - dump-date
    - tables-filter
    - logo-link
    - enum-option
    - pretty-json-column
    - table-indexes-structure
    - table-structure
    - login-password-less (for `development_mode` only)

### License
Apache License 2.0 or GPL 2
