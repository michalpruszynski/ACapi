
This is an API for Client version app. 

## Getting Started

Using makefile:
1. make build
2. make up
3. make importdb

Without makefile:
1. docker-compose build --pull --no-cache
2. docker-compose up -d
3. bin/console doctrine:migrations:migrate


## Credits

Docker integration created by [Kévin Dunglas](https://dunglas.fr), co-maintained by [Maxime Helias](https://twitter.com/maxhelias) and sponsored by [Les-Tilleuls.coop](https://les-tilleuls.coop) // edited for own needs by Michał Pruszyński
