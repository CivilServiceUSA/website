![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

**[↤ Developer Overview](../README.md)**

Unit Testing and Code Coverage Reports
===

#### Unit Tests

Unit tests are run with [PHPUnit](https://phpunit.de). All unit tests exist in the `tests/` directory.

You can run unit tests using either of the following methods:

```bash
yarn run test

```
```bash
./vendor/bin/phpunit

```

#### Code Coverage

IMPORTANT:  To run Code Coverage Reports you will need to have XDebug installed. You can check if you have Xdebug installed via `php -i | grep xdebug`

If you are developing on OSX and you do not have Xdebug installed, you can install it via Homebrew `brew install php70-xdebug`.

To generate Code Coverage Reports, run either of the following commands:

```bash
yarn run test-coverage
```
```bash
./vendor/bin/phpunit -d memory_limit=1024M --log-junit 'reports/unitreport.xml' --coverage-html 'reports/clover_html' tests/
```

This will generate an HTML report that you can access via `./reports/clover_html/index.html`

#### PHPDoc Documentation

Documentation is automatically generates everytime you run `npm start` and can be accessed via http://127.0.0.1:5000/docs/.
