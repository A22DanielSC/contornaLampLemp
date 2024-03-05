#!/bin/bash
docker compose exec basedatos bash -c "mysql -u a22danielsc -pabc123. prestashowdb" < ./database/backup/backup.sql