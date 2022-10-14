#!/bin/bash

if [ $1 = 1 ]; then
  ssh -i swarm-instances.pem azureuser@20.127.39.248
elif [ $1 = 2 ]; then
  ssh -i swarm-instances.pem azureuser@20.25.124.172
elif [ $1 = 3 ]; then
  ssh -i swarm-instances.pem azureuser@4.246.149.227
fi
