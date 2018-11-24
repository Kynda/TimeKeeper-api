TimeKeeper API
===============================================================================

Server-side JSON API for the TimeKeeper application.

See [TimeKeeper][] for more details.

### Requirements

- PHP 7.2
- MySQL
- Composer

### Installation

1. `database_installer.sql` contains the create table query for the one table
   that TimeKeeper uses.
2. Rename `config.example.php` to `config.php` and fill in the empty fields.
3. Run `composer install` to install the dependencies.
4. Run `composer start` to fire up the development server.

### Testing

Run `composer test` to run the test suite.

### TimeKeeper is Built Using

- [Slim Framework][]

[TimeKeeper]: https://github.com/Kynda/TimeKeeper
[Slim Framework]: https://www.slimframework.com/
