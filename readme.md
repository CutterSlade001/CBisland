# PHP Project Codename "CBisland" a minimal viable Point&Click Adventure

As part of a PHP course, the need for a starter template arose.  
Given the participants' level of knowledge, this small project was created as a starting aid.

Deliberately, tools like Composer, the PDO extension, etc., were omitted.

## Requirements

- PHP 8.2
- MySQLi extension
- Apache

## Setting up the configuration file

Copy or rename `example.config.php` to `config.php` in the `config` directory.  
This will serve as the main configuration file for the application.

## Setting up Apache

To point Apache to the public folder (document root), set up a virtual host  
within your Apache vhost file as follows:

Replace `$PATH_TO_PUBLIC_FOLDER` with the absolute path to the public folder in your system.

```apacheconf
# File: http-vhosts.conf

<VirtualHost 127.0.0.1:8009>
    DocumentRoot "$PATH_TO_PUBLIC_FOLDER"
    <Directory "$PATH_TO_PUBLIC_FOLDER">
        Options FollowSymLinks
        AllowOverride all
        Require local
    </Directory>
</VirtualHost>
```

If necessary, replace `127.0.0.1:8009` with your desired configuration. Otherwise, make sure  
Apache is set up to listen on localhost (127.0.0.1) and port 8009:

```apacheconf
# File: httpd.conf

Listen 127.0.0.1:8009
```
