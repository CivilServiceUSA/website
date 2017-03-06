![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

**[↤ Developer Overview](../README.md)**

Getting Setup with Docker ( Recommended )
===

![Docker Logo](img/docker-logo.png "Docker Logo")

#### Good News, You only need to do this initial setup once ;)

Requirements
---

* [Docker](https://www.docker.com/)
* [Docker Compose](https://docs.docker.com/compose/install/)


Build Docker Containers
---

Build the Docker Containers we need:

```bash
cd /path/to/website/docker
docker-compose up --build -d nginx redis
```

Install Dependencies
---

Connect to Docker Container to prepare to run Bash Commands:

```bash
cd /path/to/website/docker
docker-compose exec workspace bash
```

First, let's remove folders that may cause problems:


```bash
rm -fr node_modules
rm -fr vendor
```

Now we can install our dependencies:

```bash
yarn install
composer install
php artisan key:generate
```

Build Website
---

Now that we have all the dependencies installed, we can build the website.

If you are not already connected to the Docker Container, you will need to do that:

```bash
docker-compose exec workspace bash
```

#### Build for Development

```bash
yarn run dev
```

#### Build for Production

```bash
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

From your local development machine, you can manage our docker containers using `docker-compose`

```bash
cd /path/to/website/docker
```

| command                  | description                                                     |
|--------------------------|-----------------------------------------------------------------|
| `docker-compose start`   | Start Docker Services                                           |
| `docker-compose logs`    | View output from Docker containers                              |
| `docker-compose stop`    | Stop Docker Services                                            |
| `docker-compose restart` | Restart Docker Services                                         |
| `docker-compose down`    | Stop and remove Docker Containers, Networks, Images & Volumes   |
