up:
	docker-compose -f docker-compose.yml down && docker-compose -f docker-compose.yml up -d --remove-orphans

watch:
	docker-compose -f docker-compose.yml down && docker-compose -f docker-compose.yml up --remove-orphans	

stop:
	docker-compose -f docker-compose.yml stop

down:
	docker-compose -f docker-compose.yml down -v	
	
build:
	cp .docker/config.php.dist app/etc/env.php
	docker-compose -f docker-compose.yml down && docker-compose -f docker-compose.yml up -d --build --remove-orphans


# Docker commands
remove-all-images-docker:
	docker network prune
	docker rm -vf $(docker ps -a -q); docker rmi -f $(docker images -a -q)


# Magento commands
magento-bash:
	 docker-compose run deploy

magento-restore-db:
	docker exec -i magento-mysql sh -c 'exec mysql -u"root" -p"magento2"  -e "create database  IF NOT EXISTS magento2"'
	docker cp $(filter-out $@,$(MAKECMDGOALS)) magento-mysql:/$(filter-out $@,$(MAKECMDGOALS))
	docker exec -i magento-mysql sh -c 'exec mysql -u"root" -p"magento2" magento2' < $(filter-out $@,$(MAKECMDGOALS))

magento-composer:
	docker-compose run deploy sh -c 'COMPOSER_MEMORY_LIMIT=-1 composer $(filter-out $@,$(MAKECMDGOALS))'

magento-clear:
	docker-compose run deploy sh -c 'rm -rf pub/static/* rm -rf /var/di/ /var/generation/ var/view_preprocessed/ var/cache/ var/page_cache/ var/di/ var/generation/* /generated/*;php -d memory_limit=-1 bin/magento setup:upgrade; php -d memory_limit=-1 bin/magento cache:flush; php -d memory_limit=-1 bin/magento cache:clean; php -d memory_limit=-1 bin/magento setup:static-content:deploy en_US es_MX -f; php -d memory_limit=-1 bin/magento setup:di:compile; php -d memory_limit=-1 bin/magento cache:flush; php -d memory_limit=-1 bin/magento cache:clean; php -d memory_limit=-1 bin/magento index:reindex; php -d memory_limit=-1 bin/magento cron:run; chmod -R 777 var; chmod -R 777 generated; chmod -R 777 pub/static'	
