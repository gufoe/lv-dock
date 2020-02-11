# Laravel Vue Docker Config

Please note this is made mostly for development and is not supposed to handle a lot of workload.

## Setup:
```bash
cp app/.env.example app/.env
./bin/fix-fs
./bin/run composer install
./bin/art migrate # updates database schema
./bin/yarn install
./bin/yarn production # to build app.js and app.css files
```

## Run
```bash
./bin/start -d
```

## Dev mode
```bash
./bin/start
./bin/dev # live app.js and app.css files with hot reloading
```

## Database Backup
```bash
./bin/db-dump /tmp/checkpoint.bak
./bin/db-restore /tmp/checkpoint.bak
```
