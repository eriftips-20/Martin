#!/bin/bash
echo "Stopping old container..."

docker stop php-app || true
docker rm php-app || true

echo "Building new image..."

docker build -t php-app .

echo "Starting new container..."

docker run -d \
    --name php-app \
    -p 80:80 \
    php-app

echo "Deployment Complete"