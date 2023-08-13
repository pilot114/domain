build:
	export PUID=$(id -u $USER)
	export PGID=$(id -g $USER)
	docker-compose -f serve.yml build --build-arg $PUID --build-arg $PGID
start:
	docker run -v $(PWD)/../:/app -w /app/bin -it domain-php bash
