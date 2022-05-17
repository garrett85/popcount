#!/bin/bash
#  :%s/[[:space:]]*$//g

BK_ID="$(date +"%Y%m%d_%H%m%S")"
rsync -vac --exclude '*.swp' bin lib DATA TEMPLATES BK/${BK_ID}
echo "${BK_ID} NOTES:" > BK/${BK_ID}/NOTES.txt
vi BK/${BK_ID}/NOTES.txt
#END#
