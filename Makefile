down: 
	docker-compose down --remove-orphans

up:
	docker-compose up -d
	
build:
	docker-compose build --pull --no-cache

doctrinemigrate:
	bin/console doctrine:migrations:migrate

storedata:
	symfony run psql < dump.sql