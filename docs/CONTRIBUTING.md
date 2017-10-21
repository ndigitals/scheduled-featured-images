# Contributing

When contributing please ensure you follow the guidelines below so that we can keep on top of things.

## Getting Started

* Make sure you have a [GitHub account](https://github.com/signup/free)
* Submit a ticket for your issue, assuming one does not already exist.
  * Clearly describe the issue including steps to reproduce when it is a bug.
  * Make sure you fill in the earliest version that you know has the issue.

## Workflow

Fork the repository on GitHub and branch from the `master` branch. Ideally name your branches with prefixes and descriptions, like this: `[type]/[change]`. A good prefix would be:

- `add/` = add a new feature
- `try/` = experimental feature, "tentatively add"
- `update/` = update an existing feature

For example, `add/image-roulette` means you're working on adding a new random image display method.

When making change be sure to write & run all unit tests.  Also ensure you stick to the [WordPress Coding Standards](http://make.wordpress.org/core/handbook/coding-standards/) by running the Php_CodeSniffer.

### Commits & Pull Requests

* When committing, reference your issue (#1234) and include a note about the fix.
* Push the changes to your fork and submit a pull request on the *integration* branch of the Scheduled Featured Images repository.
* Please **don't** modify the changelog - this will be maintained by the core plugin developers.

At this point you're waiting on us to merge your pull request. We'll review all pull requests, and make suggestions and changes if necessary.

## Testing

Scheduled Featured Images encourages testing and code style linting for PHP.

### PHP Testing

Tests for PHP use [PHPUnit](https://phpunit.de/) as the testing framework. Before starting, you should install PHPUnit and have a copy of [WordPress Develop](https://github.com/WordPress/wordpress-develop) available and setup a [`wp-tests-config.php`](https://make.wordpress.org/core/handbook/testing/automated-testing/phpunit/#setup) file. If the Scheduled Featured Images plugin is installed in the context of a WordPress Develop site, you can run `phpunit` directly from the command-line. Otherwise, you will need to specify the path to WordPress Develop's test directory as an environment variable:

```
WP_TESTS_DIR=/path/to/wordpress-develop/tests/phpunit phpunit
```

Code style in PHP is enforced using [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer). It is recommended that you install PHP_CodeSniffer and the [WordPress Coding Standards for PHP_CodeSniffer](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards#installation) ruleset using [Composer](https://getcomposer.org/). With Composer installed, run `composer install` from the project directory to install dependencies, then `composer run-script lint` to verify PHP code standards.

### Code Coverage

Code coverage is measured for each PR using the [codecov.io](https://codecov.io/gh/ndigitals/scheduled-featured-images) tool. [Code coverage](https://en.wikipedia.org/wiki/Code_coverage) is a way of measuring the amount of code covered by the tests in the test suite of a project.  In Gutenberg, it is currently measured for JavaScript code only.

# Additional Resources

* [General GitHub documentation](http://help.github.com/)
* [GitHub pull request documentation](http://help.github.com/send-pull-requests/)
