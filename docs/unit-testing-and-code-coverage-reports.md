![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

**[↤ Developer Overview](../README.md)**

Unit Testing and Code Coverage Reports
===

#### Unit Tests

Unit tests are run with [PHPUnit](https://phpunit.de). All unit tests exist in the `tests/` directory.

```bash
yarn run test

```

#### Code Coverage

To generate Code Coverage Reports, run:

```bash
yarn run test-coverage
```

This will generate an HTML report that you can access via `./reports/clover_html/index.html`