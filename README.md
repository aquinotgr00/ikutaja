# ikutaja
IkutAja is a platform for organiser to connect to their volunteers.

# requirements
* PHP 7.2.x
* Apache 2.4
* MariaDB 10.1.x

## How to use this
1. config your database credentials in application/config/database
2. change application/config/config:
  * base_url = 'http://your-site.dev',
3. add these to application/config/autoload:
  * libraries = ('database'),
  * helper = ('url'),
