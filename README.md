![Civil Services Logo](https://raw.githubusercontent.com/CivilServiceUSA/api/master/docs/img/logo.png "Civil Services Logo")

__Civil Services__ is a collection of tools that make it possible for citizens to be apart of what is happening in their Local, State & Federal Governments.


Website at [https://civil.services](https://civil.services)
===

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat)](https://raw.githubusercontent.com/CivilServiceUSA/website/master/LICENSE)  [![GitHub contributors](https://img.shields.io/github/contributors/CivilServiceUSA/website.svg)](https://github.com/CivilServiceUSA/website/graphs/contributors)


Docker
---

To make setup easy, we are using [Docker](https://www.docker.com) for getting a development environment up and running quickly.

### Installation

Once you have Docker Installed, you will want to use the `DOCKER CLI` to run a few commands.

Pull the image from the docker index rather than downloading the git repo. This prevents you having to build the image on every docker host.

Once you are done pulling the Docker Image, you will need to run the initial setup.

__NOTE:__ Make sure to change the `/path/to/civil-services/website` path below to your actual to this project on your local machine.

```
cd /path/to/this/project
docker build -t civil_services --rm .
docker run -p 80:80 -p 9000:9000 --name civil_services_website -v /Users/peter/Projects/CivilServices/website/web-root:/var/www/html -t civil_services
```

### Managing Docker Image

Start Project:

```
docker start civil_services_website
```

Stop Project:

```
docker stop civil_services_website
```

SSH into docker

```bash
docker exec -it civil_services_website zsh
```