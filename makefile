start: ## Start the client and server in docker for local development
	docker-compose up --build
run:
	docker-compose up
stop: ## Start the client and server in docker for local development
	docker-compose down

install-php: 
	docker-compose run --rm --no-deps apache  bash -ci 'cd /var/www/html/appli/ && php /var/www/html/appli/composer.phar install --no-interaction'

reload-apache: 
	docker-compose run --rm --no-deps apache bash -ci '/usr/sbin/apache2ctl restart'

