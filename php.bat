@echo off
call %~dp0loadenv %~dp0.env
docker exec -i %PROJECT_NAME%_wordpress php %*
