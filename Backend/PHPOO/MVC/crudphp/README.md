# crudphp
https://github.com/dancodeweb/crudphp

CRUD em PHP na estrutura MVC. Respeitando as boas práticas da programação nesta estrutura, este CRUD apresenta também um login:
- Usuário: crud
- Senha: crud

# Frameworks usados:

- Para o visual foi usado o "Bootstrap": https://getbootstrap.com/
- Para a tabela foi usado o "DataTables": https://datatables.net/

# Antes de usar:
- Criar o banco de dados conforme estrutura no arquivo dbinit.sql na raiz do projeto.
- Alterar o arquivo config.php e .htaccess conforme sua preferência.

# Notas importantes:

- Nesta estrutura foi organizado que arquivos de imagem, vídeo e som fiquem na pasta "media", na raiz do projeto.
- Nunca altere os arquivos da pasta "core" (controller.php, core.php e model.php), fazendo isso você estará arriscando a estrura do projeto.
- Não foram usados links CDN neste projeto. Tanto o "Bootstrap" quanto o "DataTables" foram baixados para a pasta "assets". Isto facilita para testes em localhost e otimiza velocidade, mas claro os links podem ser substituidos sem alteração no resto da estrutura.

# Contato:

Para o esclarecimento de qualquer dúvida estou disponível no email: contato@danerscode.com
