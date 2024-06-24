#!/usr/bin/env bash

echo "Launching Docker [composer:latest] to begin installation"
echo -e "========================================================\n\n"

cp .env.example .env

docker run \
  --rm --interactive --tty \
  --volume $PWD:/app \
  --user $(id -u):$(id -g) \
  composer install --ignore-platform-reqs

echo -e "\n\n==============================================================="
echo "=> Installed, launch the containers with './vendor/bin/sail up'"
