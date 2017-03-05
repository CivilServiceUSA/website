![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

**[↤ Developer Overview](../README.md)**

Getting Setup with Docker ( Recommended )
===

Requirements
---

* [Composer](https://getcomposer.org/)
* [Yarn](https://yarnpkg.com)
* [Docker](https://www.docker.com/)
* [Docker Compose](https://docs.docker.com/compose/install/)


Install Dependencies
---

Using Docker is Super Easy once it's installed, you just need to run the following commands:

```bash
cd /path/to/website
yarn install
composer install
```

Build Docker Containers
---

```bash
cd ./laradock
docker-compose up -d nginx redis
docker-compose run workspace php artisan key:generate
```

Build Website
---

Now that we have all the dependencies installed, we can build the website:

#### Build for Development

```bash
cd /path/to/website
yarn run dev
```

#### Build for Production

```bash
cd /path/to/website
yarn run production
```


Accessing the Website
---

Now you can open your web browser to [http://localhost](http://localhost)

Internally we are using [http://civil-services.loc](http://civil-services.loc) as a developer domain.  This can be added to your `/etc/hosts` by adding:

```
127.0.0.1 civil-services.loc
```

Managing Docker
---

After you you completed the Docker Setup, you can run the following from within this project directory.

#### Start Docker:

```bash
cd /path/to/website/laradock
docker-compose start
```

#### Stop Docker:

```bash
cd /path/to/website/laradock
docker-compose stop
```

#### Restart Docker:

```bash
cd /path/to/website/laradock
docker-compose restart
```

#### Delete Docker:

```bash
cd /path/to/website/laradock
docker-compose down
```