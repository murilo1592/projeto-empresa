<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## PROJETO LARAVEL

Siga as instruções abaixo para iniciar o projeto. Sistema desenvolvido para cadastro e atualização de empresas e seus respectivos colaboradores.

## PASSO 1 [ Parametrizar Banco de Dados ]

Crie uma base de dados PostgreSQL chamada "lara_test" com schema "public".

Configure o arquivo .env para conexão com o banco de dados.

No terminal do projeto execute o comando "php artisan migrate" para criação automática das tabelas.

## PASSO 2 [ INTALAR DEPENDÊNCIAS ]

Execute no terminal o comando "composer install".
Caso necessário, execute o comando "yarn install" e logo depois "npm run production" ( Instalação de plugins Jquery ) 

## PASSO 3 [ START PROJETO ]

No terminal execute o comando "php artisan serve" para iniciar o projeto.

## LISTAR COLABORADORES [ API ]

Execute um GET passando como parâmetro na url o ID da empresa e mês de aniversário.

Exemplo:
curl --request GET \
     --url http://127.0.0.1:8000/api/colaboradores/1/7
