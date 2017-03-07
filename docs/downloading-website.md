![Civil Services Logo](https://cdn.civil.services/common/github-logo.png "Civil Services Logo")

**[↤ Developer Overview](../README.md)**

Downloading Website
===

You can download this Website using the code below ( this assumes you have [SSH integrated with Github](https://help.github.com/articles/adding-a-new-ssh-key-to-your-github-account/) ):

```bash
cd /path/to/website
git clone git@github.com:CivilServiceUSA/website.git .
git submodule init 
git submodule update
```

Setup Environment
---

```bash
cp .env.example .env
```

Use your favorite text editor and set the following values in `.env` to whatever you need:

```
APP_ENV=local
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost
BUGSNAG_API_KEY=
SEGMENT_API_KEY=
CIVIL_SERVICES_API_BASE=
CIVIL_SERVICES_API_KEY=
```

__NOTE__: for `CIVIL_SERVICES_API_BASE` if you are connecting to an API running on your local development machine, 
you will need to set this to your local IP address.  Not, `http://localhost:5000` or `http://127.0.0.1:5000` but rather 
something like `http://192.168.1.123:5000`