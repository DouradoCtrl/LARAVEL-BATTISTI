## MIGRATION
- Versionamento do banco de dados
- Pode avançar ou retroceder
- Adicionar ou remover
- Migrate status

### COMANDOS (basics)
php artisan migrate
    - cria a tabela no banco de dados
php artisan migrate:status;
    - vê o estado da migrate
php artisan make:migration create_users_table
    - cria a migration
php artisan migrate:fresh
    - Deleta e gera denovo

## MIGRATION V2
> CONCEITO

ADICONAR COLUNA
ROLL BACK
- FAZER UM TESTE COM DADOS ADICIONADO NA TABELA E ADICIONAR UMA NOVA COLUNA