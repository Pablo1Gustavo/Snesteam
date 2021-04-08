<h1 align='center'>Snesteam</h1>
<p align="center">Plataforma para download de roms de Super Nintendo.</p>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200"></a></p>

## Objetivo
>Software válido como atividade avaliativa da matéria "Programação para a internet", do 4º ano do curso Técnico integrado em Informática do IFRN.

## Resumo
>O Snesteam é um software web para o download de roms de Super Nintendo. Com uma interface amigável e simples, é possível visualizar o catálogo completo, a visão geral de cada jogo, além de ser possível adicionar comentários avaliativos sobre cada game. Para o acesso, é necessário fazer o cadastro na plataforma. É possível testar o sistema remotamente [clicando aqui](http://snesteam.herokuapp.com/).

## Tecnologias Utilizadas
 * Html
 * CSS
 * JavaScript
 * Php
 * Laravel(Framework)
 * MySQL
 * Bootstrap(Framework)
 * AWS S3

 ## Instalação
 Realize a instalação do Php e do Composer. Em seguida, execute os seguintes comandos:
 * ``` git clone https://github.com/Pablo1Gustavo/Snesteam.git ```
 * ``` composer install ```
 * ``` php artisan key:generate ```
 * Renomeie o .env.example para .env e em seguida configure suas credenciais da base de dados, da AWS S3 e do serviço de envio de Email:<br>
 <img src='https://user-images.githubusercontent.com/72264674/113461652-cb2d1f00-93f3-11eb-90a0-30d2edfb5e78.png'><br>
 * ``` php artisan migrate ```
