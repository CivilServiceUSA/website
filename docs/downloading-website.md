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
```

Ping us on Slack if you need a `BUGSNAG_API_KEY` or `SEGMENT_API_KEY`.