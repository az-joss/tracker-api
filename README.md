Tracker API
----

This is task tracker api app

## Getting started

To start the app first you need Docker installed.
For convenience the docker compose is also provided as standalone repo.

1) Lets start with this cli snippet to load all files

```
$ mkdir task-tracker
$ cd task-tracker
$ git clone git@github.com:az-joss/tracker-compose.git
$ git clone git@github.com:az-joss/tracker-api.git
```

2) Copy `.env` from `.env.example`

```
$ cd tracker-api
$ copy .env.example .env
```

3) Start project simply run this command under compose repo

```
$ cd tracker-compose
$ USER_ID=$(id -u) GROUP_ID=$(id -g) docker-compose up -d
```

4) Finally, need to run database migrations (only for first start)

```
$ docker-compose exec tracker-api bash -c "./artisan migrate"
```
