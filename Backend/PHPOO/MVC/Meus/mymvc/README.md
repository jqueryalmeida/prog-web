# MY MVC

## URL deste projeto

https://github.com/ribafs/mymvc

Após baixar e copiar para seu diretório web e efetuar alguma alteração na estrutura, então execute:

composer dump-autoload

## Criação de um aplicativo em PHP usando MVC e com bons recursos.

Partirá do aplicativo framework-mini (https://github.com/ribafs/mini-framework), que é baseado no 
mini3 (https://github.com/panique/mini3)

- Inicialmente com apenas uma tabela: customer.

- Usa psr-4
- composer
- Namespace - Mvc
- Pasta principal - mvc (ex: namespace Mvc;)
- BootStrap nas views

- Sem nenhuma dependência externa. Somente código nativo na primeira versão.

## Observações

Os comentários deste aplicativo foram traduzidos para o português do Brasil, pois mesmo tendo consciência de que é importante para o programador aprender inglês, ainda assim o programador iniciante, que ainda não aprendeu a usar MVC e não tem tanta facilidade com o inglês, este programador poderá tirar mais proveito deste texto e deste aplicativo. Mas ressalto que é importante aprender inglês para tirar mais proveito da programação. Estando em português poderá ser útil para domina inglês e para quem não domina.

Importante - este projeto tem somente a finalidade de aprendizado, para mostrar o conhecimento do MVC, de rotas e de outros conceitos.

Para uso em produção a recomendação vai para um dos frameworks profissionais já bem testados: CakePHP, Zend, Laravel, Symfony, etc

Algo que cheguei a me interessar em aprender, devido à complexidade, foi o sistema de roteamento. Acontece que depois de refletir eu lembrei que não preciso investir tempo aqui, visto que os frameworks que irei trabalhar já têm seu sistema de rotas prostos, que terei apenas que enender.

## Estrutura de arquivos:

Alguns diretórios

```php
/public
    /css
    /js/
    /images
/mvc/
    /config
    /Controller
    /Core
    /Libs
    /Model
    /template
    /View

Detalhado

- .htaccess
- /public
    .htaccess
    index.php
    /css
    /js
    /images
- /mvc
    bootstrap.php
- /mvc/config
    config.php
- /mvc/Core
    Model.php
    Router.php
- /mvc//Libs
    Helper.php
- /mvc/Controller
    CustomerController.php
    ErrorController.php
- /mvc/Model
    CustomersModel.php
- /mvc/View
    CsutomersView.php
- /mvc/template
    /customers
        add.php
        edit.php
        index.php
    /error
        index.php
    /_templates
        footer.php
        header.php
```

## Algumas explicações

- Um .htaccess no raiz que redireciona toda chegada para a pasta public
- Chegando na pasta /public, outro .htaccess redireciona tudo que chega para o arquivo /public/index.php
- O arquivo /public/index.php, que é o único ponto de entrada d aplicativo, envia tudo que chega para mvc/bootstrap.php. Este inicializa de fato o aplicativo, definindo algumas constantes, chamando o config.php com as configurações do banco e diversas outras, carregando e chamando um objeto da classe Router. Faz as inicializações do aplicativo pra valer.

Todas as configurações estão no arquivo mvc/config/config.php. Neste existem várias configurações do aplicativo, do banco de dados e outras

## Após criar todos os arquivos e pastas executar no raiz:

composer dump-autoload

## Case

Observe que pastas com objetos são escritas iniciadas com maiúsculas

Pastas que não contém objetos iniciam com minúsculas

## Roteamento - URL traduzem para controllers

http://localhost/mymvc/customers   - abre o controller default, que é o Home
http://localhost/mymvc/customers - abre o controller Customers/index
http://backup/mymvc/customers/edit/2 - abre o customer 2 para edição
http://backup/mymvc/customers/add - abre o customers/index por que o form add está no customers/index
http://backup/mymvc/customers/delete/2 - exclui o customer cm id 2

## Original

Detalhes no repositório original: https://github.com/panique/mini3

## Licença

Este projeto está sob a licença MIT.
Isto significa que você pode usar e modificar ele livremente para projetos pessoais e comerciais, apenas preservando o crédito dos autores.

