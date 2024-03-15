# Documentação: Projeto Simple CRUD 💻

## Introdução
Este documento descreve a estrutura e o funcionamento de um projeto simples de CRUD (Create, Read, Update, Delete) desenvolvido em PHP, MySQL e Bootstrap. O projeto permite realizar operações básicas de manipulação de dados em um banco de dados de estudantes.

## Tecnologias Utilizadas 🛠️
- **PHP:** Utilizei para desenvolver a lógica do app.
- **MySQL:** Para armazenar os dados dos estudantes.
- **HTML/CSS:** Para criar a interface do usuário.
- **Bootstrap:** Para estilizar a interface do usuário e torná-la responsiva.

## Componentes do Projeto 📂
O projeto é composto pelos seguintes arquivos:

1. **connect_php.php:** Este arquivo contém as configurações de conexão com o banco de dados MySQL. Define as constantes de hostname, nome de usuário, senha e nome do banco de dados, e estabelece a conexão usando a função mysqli_connect().

2. **header.php:** Arquivo que contém o cabeçalho comum a todas as páginas do projeto. Inclui o HTML básico do cabeçalho da página e pode conter links para folhas de estilo CSS, scripts JavaScript e outros elementos comuns.

3. **index.php:** Página principal do projeto que exibe uma tabela com todos os estudantes cadastrados no banco de dados. Permite visualizar, adicionar, atualizar e excluir estudantes.

4. **update_page1.php:** Página de atualização de estudantes. Permite atualizar os dados de um estudante específico selecionado da página index.php.

5. **insert_data.php:** Script PHP que processa o formulário de adição de estudantes da página index.php. Insere os dados do novo estudante no banco de dados.

6. **delete_page.php:** Script PHP que processa a exclusão de estudantes da página index.php. Exclui o estudante selecionado do banco de dados.
7. **main.css:** Arquivo CSS para personalização adicional da aparência do projeto.
8. **bootstrap.js:** Arquivo JavaScript para funcionalidades adicionais do Bootstrap.


## Funcionamento 🚀
- Ao acessar a página index.php, todos os estudantes cadastrados são exibidos em uma tabela.
- O usuário pode criar um novo estudante clicando no botão "Adicionar Estudante", que abre um modal com um formulário.
- Para atualizar os dados de um estudante, o usuário clica no botão "Atualizar" correspondente à linha do estudante desejado. Isso o redireciona para update_page1.php, onde ele pode editar os dados do estudante e salvar as alterações.
- Para excluir um estudante, o usuário clica no botão "Deletar" correspondente à linha do estudante desejado. Isso o redireciona para delete_page.php, onde ele pode confirmar a exclusão do estudante.

## Inspiração e Disponibilidade 💡
- **Inspiração:** Me inspirei em projetos semelhantes encontrados na internet para criar este projeto.
- **GitHub:** Você pode encontrar o código-fonte completo deste projeto no [GitHub](https://github.com/diegobomfimx/projeto-crud).
