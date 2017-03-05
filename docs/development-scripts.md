![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

**[↤ Developer Overview](../README.md)**

Development Scripts
===

Most of the repetitive tasks have been moved to Development Scripts you can run in terminal via `yarn`.

| command                   | description                                                                                         |
|---------------------------|-----------------------------------------------------------------------------------------------------|
| `yarn run docker-build`   | Build or Rebuild Docker Services
| `yarn run docker-start`   | Start Docker Services
| `yarn run docker-logs`    | View output from Docker containers
| `yarn run docker-stop`    | Stop Docker Services
| `yarn run docker-restart` | Restart Docker Services
| `yarn run docker-destroy` | Stop and remove Docker Containers, Networks, Images & Volumes
| `yarn run test-lint`      | Check PHP Code for Invalid Markup
| `yarn run test-unit`      | Run PHP Unit Tests
| `yarn run test-coverage`  | Generate Code Coverage Reports into `./reports/clover_html/`
| `yarn run test`           | Runs `yarn run test-lint` and `yarn run test-unit`
| `yarn run clean`          | Remove Generated JS & CSS Files
| `yarn run dev`            | Build Website for Development
| `yarn run watch`          | Build Website for Development and Watch for Live Changes
| `yarn run hot`            | Build Website for Development and Enable Hot Module Replacement
| `yarn run production`     | Build Website for Production
| `yarn run help`           | Generates List of Scripts you can run

#### Get Description of Scripts

```bash
yarn run help
```

#### Get Description on Specific Script

```bash
npm run help [name]
```