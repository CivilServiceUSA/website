![Civil Services Logo](https://raw.githubusercontent.com/CivilServiceUSA/api/master/docs/img/logo.png "Civil Services Logo")

__Civil Services__ is a collection of tools that make it possible for citizens to be apart of what is happening in their Local, State & Federal Governments.


Website at [https://civil.services](https://civil.services)
===

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://raw.githubusercontent.com/CivilServiceUSA/website/master/LICENSE)  [![GitHub contributors](https://img.shields.io/github/contributors/CivilServiceUSA/website.svg)](https://github.com/CivilServiceUSA/website/graphs/contributors)


Developers
---

This project uses the [Codeigniter Framework](https://www.codeigniter.com/user_guide/) and requires PHP 7.0+


Virtual Machine
---

### Docker Setup

To make developer setup easy, we are using [Docker](https://www.docker.com) for getting a development environment up and running quickly.

Once you have [Docker](https://www.docker.com) installed, you will want to use terminal to run a few commands.

__NOTE:__ Make sure to change the `/path/to/civil-services/website` path below to your actual path to this project on your local machine.

```bash
cd /path/to/civil-services/website
docker build -t civil_services --rm .
docker run -p 80:80 -p 9000:9000 --name civil_services_website -v /path/to/civil-services/website/web-root:/var/www/html -t civil_services
```

### Managing Docker Image

Start Project:

```bash
docker start civil_services_website
```

Stop Project:

```bash
docker stop civil_services_website
```

SSH into Docker Image

```bash
docker exec -it civil_services_website zsh
```