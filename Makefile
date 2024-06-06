serve:
	@symfony serve --dir=tests/Application --daemon
server.start: serve
server.stop:
	@symfony server:stop --dir=tests/Application
frontend.install:
	@cd tests/Application && yarn install
frontend.build:
	@cd tests/Application && yarn build:prod
frontend.setup: frontend.install frontend.build
setup:
	@make frontend.setup
	@cd tests/Application && bin/console assets:install
	@cd tests/Application && bin/console doctrine:database:create --if-not-exists
	@cd tests/Application && bin/console doctrine:migrations:migrate -n
	@cd tests/Application && bin/console sylius:fixtures:load -n
	@cd tests/Application && bin/console doctrine:database:create --if-not-exists
	@cd tests/Application && bin/console doctrine:migrations:migrate -n
	@cd tests/Application && bin/console sylius:fixtures:load -n
