#!/bin/bash
docker compose exec basededatos bash -c "mysqldump -u user -p minhabd" > database/backup/backup.sql