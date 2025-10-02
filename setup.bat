
Powershell Start-Process -FilePath "ssl.bat" -Verb RunAs -Wait


@echo Start Docker..
docker-compose up -d

call loadenv .env
cd ./certs
mkcert %LOCAL_DOMAIN% %LOCAL_IP%
cd ../

docker exec -w /home/ -it %PROJECT_NAME%_wordpress sh /etc/ssl/private/inst.sh

@echo install SSH..
docker exec -w /home/ -it %PROJECT_NAME%_wordmove sh ssh.sh

@echo docker restart
docker-compose restart

@echo Finish

