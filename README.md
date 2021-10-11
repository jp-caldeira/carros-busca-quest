# Projeto Estoque Quest Carros

Sistema que faz captura de dados de veículos do estoque de uma concessionária e salva as informações em um banco de dados.

## Instruções

1. Clonar projeto

2. Executar o arquivo **quest-carros.sql** para criar o banco de dados e as tabelas. Você pode usar o MySQL Workbench, phpMyAdmin, HeidiSQL, etc.

3. Renomeie o arquivo **.env.example** para **.env**

4. Abra o arquivo .env e altere as variáveis DB_CONNECTION, DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD conforme o necessário.
   Ex:
   DB_USERNAME=nome_do_usuario_do_banco_de_dados
   DB_PASSWORD=senha_banco_de_dados

5. Instalação de dependências -->
   Abra um terminal, acesse a pasta do projeto e digite:

> composer install

(caso não tenha o composer, baixe-o aqui https://getcomposer.org/download/)

6. Ainda no terminal, e ainda dentro da pasta do projeto, digite:

> php artisan key:generate

7. Também no terminal, rode o servidor com o comando:

> php artisan serve

8. Uma mensagem como esta deverá aparecer no seu terminal:

`Starting Laravel development server: http://127.0.0.1:8000 [Mon Oct 10 22:47:42 2021] PHP 7.4.14 Development Server (http://127.0.0.1:8000)`

Acesse o endereço (neste caso, http://127.0.0.1:8000) indicado através do seu navegador.

9. Acesse o sistema usando o email admin@admin.com e a senha admin.

### **ATENÇÃO**:

Se você usa o anti-vírus Avast, é muito provável que ele vai achar que o arquivo server.php é uma ameaça e colocar ele em quarentena.

Caso isso ocorra, abra o Avast, acesse a aba Proteção e depois Quarentena. Selecione o server.php na lista, clique nos três pontinhos (Mais Opções) e escolha "Restaurar e adicionar exceção".
