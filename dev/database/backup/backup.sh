#!/bin/bash
docker compose exec basedatos /bin/bash -c "mysqldump -u a22danielsc -pabc123. prestashowdb" >./database/backup/backup.sql