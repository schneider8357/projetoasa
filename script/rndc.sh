#!/bin/bash
chown named /etc/projetoasa/zones.conf
rndc reload
