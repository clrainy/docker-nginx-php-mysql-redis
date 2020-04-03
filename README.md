# docker-nginx-php-mysql-redis

docker-compose.yml

## 【项目介绍】

1. 单独配置web项目 nginx

2. 配置php项目 nginx+php

3. 配置mysql项目

4. 配置redis项目

## 【参数版本】

1. ngxin:1.17.9

2. php:7.4.4

3. mysql:8.0.16

4. redis:5.0.8

## 【常用命令】

### 查看所有容器（包括未运行）
docker ps -a

### 查看所有镜像
docker images

### 启动docker-compose.yml
docker-compose --compatibility up -d

### 删除已运行的容器和网络
docker-compose down

### 重启所有容器
docker restart $(docker ps -aq)

### 删除所有容器
docker rm -f $(docker ps -aq)

### 删除所有镜像
docker rmi $(docker images -q)
