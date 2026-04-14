## Detalhes - aula06

	Na pasta aula06, existem dois arquivos:
 - **index.html** - Arquivo que contém o formulário que irá pegar os dados digitados e enviá-los ao banco de dados;
 - **processa.php** - Arquivo com o código de PHP, responsável por fazer a ligação entre o banco de dados e o formulário em HTML.

	O banco de dados foi feito no phpmyadmin, utilizando o servidor do xampp (Apache e MySQL, localhost).
	___

No **phpmyadmin**, indo na barra lateral e clicando em "Novo",  criamos o banco de dados com o nome "projeto_site". Dei o nome de "contatos" para a tabela, deixando o padrão de 4 colunas.

Agora, nas colunas, editamos elas da seguinte forma:

 - **1ºColuna:
 Nome**: ID
 **Tipo:** INT (Preenchendo o campo A.I., no caso, Auto Increment, definindo a coluna como a chave primária).

 - **2ºColuna**:
	**Nome:** nome
	**Tipo:** VARCHAR
	**Valores:** limite de 100

-	**3ºColuna:**
	 **Nome:** e-mail
	 	**Tipo:** VARCHAR
	**Valores:** limite de 100

- **4ºColuna:**
	**Nome:** mensagem
	**Tipo:** TEXT