# Laravel Vue Docker Config

Please note this is made mostly for development and is not supposed to handle a lot of workload.

## Setup:
```bash
cp app/.env.example app/.env
./bin/fix-fs
./bin/run composer install
./bin/yarn install
./bin/yarn production # to build app.js and app.css files
```

## Run
```bash
./bin/start
```

## Dev mode
```bash
./bin/start # as usual
./bin/dev # live app.js and app.css files with hot reloading
```
