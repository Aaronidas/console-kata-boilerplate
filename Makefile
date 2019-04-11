UID=$(shell id -u)
GID=$(shell id -g)

.PHONY: bash
bash: ## gets inside a php container
	docker-compose run --rm --user=${UID}:${GID} php sh