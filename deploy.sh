#!/bin/bash

# Exit on error
set -e

# Color codes for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${YELLOW}🚀 Starting deployment...${NC}"

# Check if Docker is running
if ! docker info > /dev/null 2>&1; then
    echo -e "${RED}❌ Docker is not running. Please start Docker first.${NC}"
    exit 1
fi

# Stop and remove old container
echo -e "${YELLOW}🔄 Stopping old container...${NC}"
docker stop php-app 2>/dev/null || true
docker rm php-app 2>/dev/null || true

# Build new image
echo -e "${YELLOW}🔨 Building new Docker image...${NC}"
docker build -t php-app:latest .

# Run new container
echo -e "${YELLOW}🚀 Starting new container...${NC}"
docker run -d \
    --name php-app \
    --restart unless-stopped \
    -p 80:80 \
    -p 443:443 \
    php-app:latest

# Wait for container to be ready
echo -e "${YELLOW}⏳ Waiting for container to be ready...${NC}"
sleep 5

# Check if container is running
if docker ps | grep -q php-app; then
    echo -e "${GREEN}✅ Deployment successful!${NC}"
    echo -e "${GREEN}🌐 Application is running on http://localhost${NC}"
else
    echo -e "${RED}❌ Container failed to start.${NC}"
    docker logs php-app
    exit 1
fi