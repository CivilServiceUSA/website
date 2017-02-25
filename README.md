![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

__Civil Services__ is a collection of tools that make it possible for citizens to be a part of what is happening in their Local, State & Federal Governments.


Website at [https://civil.services](https://civil.services)
===

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://raw.githubusercontent.com/CivilServiceUSA/website/master/LICENSE)  [![GitHub contributors](https://img.shields.io/github/contributors/CivilServiceUSA/website.svg)](https://github.com/CivilServiceUSA/website/graphs/contributors)

![App Image](public/img/app-image.jpg "App Image")


Requirements
---

* [Composer](https://getcomposer.org/)
* [Yarn](https://yarnpkg.com)
* [Docker](https://www.docker.com/) ( for local development )

This project uses the [Laravel Framework](https://laravel.com/) and requires PHP 7.0+

#### Install Dependencies:

```bash
yarn install
composer install
```

#### Build Development:

```bash
cp .env.example .env
yarn run dev
```

#### Build Production:

```bash
cp .env.example .env
yarn run production
```

Docker Setup
---

To make developer setup easy, we are using [Docker](https://www.docker.com) for getting a development environment up and running quickly.

Once you have [Docker](https://www.docker.com) installed, you will want to use terminal to run a few commands.

```bash
cd ./laradock
docker-compose up -d nginx
docker-compose exec workspace bash
php artisan key:generate
```

Now you can open your web browser to [http://localhost](http://localhost)

Internally we are using [http://civil-services.loc](http://civil-services.loc) as a developer domain.  This can be added to your `/etc/hosts` by adding:

```apacheconfig
127.0.0.1 civil-services.loc
```

Managing Docker
---

After you you completed the Docker Setup, you can run the following from within this project directory.

#### Start Docker:

`docker-compose start`

#### Stop Docker:

`docker-compose stop`

#### Restart Docker:

`docker-compose restart`

#### Delete Docker:

`docker-compose down`

Join us on Slack
---

__[Join us on Slack](https://slack.civil.services/bkx7n2)__ if you need help developing our Website, or you are interested in contributing.

[![Slack Team Invite](https://cdn.civil.services/common/slack-invite.png)](https://slack.civil.services/bkx7n2)