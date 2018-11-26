TimeKeeper API
===============================================================================

Server-side JSON API for the TimeKeeper application.

See [TimeKeeper][] for more details.

### Requirements

- PHP 7.2
- MySQL
- Composer

### Installation

1. Run `composer install` to install all dependencies.
2. Copy `src/environment.example.php` to `src/example.php` and fill in the
   missing database constants.
3. Run `composer doctrine migrations:migrate` to install the database tables.

You can now run `composer start` to start the internal PHP development server.

### Testing

Run `composer test` to run the test suite.

### TimeKeeper is Built Using

- [Slim Framework][]

[TimeKeeper]: https://github.com/Kynda/TimeKeeper
[Slim Framework]: https://www.slimframework.com/
