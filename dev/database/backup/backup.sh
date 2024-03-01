#!/bin/bash
docker compose exec basedatos bash -c "mysqldump -u a22danielsc -p prestashowdb" > ./database/backup/backup.sql
