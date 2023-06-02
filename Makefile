init: docker-down docker-pull docker-build up app-init
up: docker-up
down: docker-down
restart: down up

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down  --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build --pull

app-init:	composer-install

composer-install:
	docker-compose run --rm php-cli composer install

test:
	docker-compose run --rm php-cli composer tests
