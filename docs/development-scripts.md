![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

**[↤ Developer Overview](../README.md)**

Development Scripts
===

Most of the repetitive tasks have been moved to Development Scripts you can run in terminal via `yarn`.

If you are using Docker, connect to the Docker Container via `docker-compose exec workspace bash` before running these commands:

| command                  | description                                                     |
|--------------------------|-----------------------------------------------------------------|
| `yarn run test-lint`     | Check PHP Code for Invalid Markup                               |
| `yarn run test-unit`     | Run PHP Unit Tests                                              |
| `yarn run test-coverage` | Generate Code Coverage Reports into `./reports/clover_html/`    |
| `yarn run test`          | Runs `yarn run test-lint` and `yarn run test-unit`              |
| `yarn run clean`         | Remove Generated JS & CSS Files                                 |
| `yarn run dev`           | Build Website for Development                                   |
| `yarn run watch`         | Build Website for Development and Watch for Live Changes        |
| `yarn run hot`           | Build Website for Development and Enable Hot Module Replacement |
| `yarn run production`    | Build Website for Production                                    |
| `yarn run help`          | Generates List of Scripts you can run                           |


Need Help ?
---

#### Get Description of Scripts

```bash
yarn run help
```

#### Get Description on Specific Script

```bash
npm run help [name]
```