#!/bin/bash
docker compose exec basedatos bash -c "mysql -u a22danielsc -pabc123. --binary-mode=1 prestashowdb < ./database/backup/backup.sql"