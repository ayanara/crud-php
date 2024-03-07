## CRUD em PHP com Cadastro, Edição e Exclusão de Usuários

**Descrição:**

Este projeto demonstra um CRUD básico em PHP com as funcionalidades de:

**Cadastro de Usuários:** Permite registrar novos usuários com nome, email e senha.
**Edição de Usuários:** Possibilita editar os dados de usuários já cadastrados.
**Exclusão de Usuários:** Permite remover usuários do sistema.

### Tecnologias:

- PHP
- MySQL
- HTML
- CSS
- Bootstrap (opcional)

### Funcionalidades:

**Página de Cadastro:**
- Formulário para inserir nome, email e senha do novo usuário.
- Validação básica dos dados de entrada.
- Mensagem de sucesso ao cadastrar um novo usuário.
  
**Página de Listagem:**
- Exibe uma tabela com todos os usuários cadastrados.
- Links para editar e excluir cada usuário.
  
**Página de Edição:**
- Permite editar os dados de um usuário específico.
- Validação básica dos dados de entrada.
- Mensagem de sucesso ao atualizar os dados do usuário.
  
**Página de Exclusão:**
- Confirmação antes de excluir um usuário.
- Mensagem de sucesso ao excluir um usuário.
  
**Instalação:**

Clone o repositório:

git clone https://github.com/seu-usuario/crud-php.git

Crie um arquivo .env na raiz do projeto e configure as variáveis de conexão ao banco de dados:
```
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=
DB_DATABASE=crud_php
```

Crie o banco de dados e as tabelas necessárias (consulte o arquivo sql/schema.sql).

Inicie o servidor PHP (ex: php -S localhost:8000).

Acesse o projeto no navegador: http://localhost:8000.

## Observações:

Este é um projeto básico e pode ser adaptado de acordo com suas necessidades.
É importante implementar medidas de segurança como validação de entrada e criptografia de senha.
O projeto utiliza Bootstrap para o layout, mas isso é opcional.
Recursos Adicionais:

Tutoriais sobre PHP e CRUD:
W3Schools PHP Tutorial: https://www.w3schools.com/php/
PHP CRUD Tutorial - DevMedia: https://m.youtube.com/watch?v=UjzPFmvJVuE
Documentação do Bootstrap: https://getbootstrap.com/
Melhorias Possíveis:

Implementar autenticação de usuários.
Adicionar funcionalidades como pesquisa e filtros.
Implementar paginação para a lista de usuários.
Melhorar a interface do usuário.
Espero que este projeto te auxilie na criação de um CRUD em PHP!
