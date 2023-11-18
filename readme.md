# Desafio PS Estágio ARCA

Este é um projeto para o desafio do Processo Seletivo da empresa: ARCA

# Requirements
- Docker
- php 7.2+
- mariadb ou mysql 

# Running the app using Docker

Para executar o programa voce deve copiar o arquivo .env.exemple e criar um .env.
Altere o .env com as informações necessário.
```bash
$ cp .env.exemple .env
```
Inicie a aplicação com os seguinte comando:
```bash
# inicia aplicação
$ docker compose up -d
```
Finalizando a aplicação
```bash
# finaliza
$ docker compose down
```
Finalizando a aplicação e removendo volumes e imagens (utilize apenas para limpar completamente TODOS os dados !!CUIDADO!!) 
```bash
# finaliza
$ docker compose down --volumes --rmi local
```