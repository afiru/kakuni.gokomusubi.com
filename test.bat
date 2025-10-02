
call loadenv .env
docker exec -w /home/ -it %PROJECT_NAME%_wordpress sh /etc/ssl/private/inst.sh
