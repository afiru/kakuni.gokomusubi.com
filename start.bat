@echo Start Docker..
docker-compose start
call loadenv .env
docker exec -w /home/ -it %PROJECT_NAME%_wordmove /bin/bash
