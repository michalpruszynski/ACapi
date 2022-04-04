## Getting Started

0. git clone https://github.com/michalpruszynski/ACapi

1. docker-compose build --pull --no-cache

2. docker-compose up -d

3. bin/console doctrine:migrations:migrate

4. php bin/console doctrine:fixtures:load
  

## Client version

0. git clone https://github.com/michalpruszynski/ACclient

1. docker-compose build --pull --no-cache

2. docker-compose up -d
  

## Usage
Check api at - https://api.localhost/api

Use client version app at - https://localhost:444/

## Todo
 - [ ] write tests
 - [ ] refactor
