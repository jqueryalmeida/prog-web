# Trabalhando com includes em PHP

Exemplo simples

a.php

$varA = 'A';


b.php

$varB = 'B';


c.php

echo 'Este arquivo recebe os includes dos outros dois: a.php e b.php';

include 'a.php';

include 'b.php';

Então o conteúdo do arquivo c.php passa a ser algo assim:

echo 'Este arquivo recebe os includes dos outros dois: a.php e b.php';

$varA = 'A';

$varB = 'B';

As variáveis $varA e $varB estarão disponíveis no arquivo c.php.


## Path nos includes

Imagine a seguinte estrutura

index.php

/clients/header.php

/assets/css/estilo.css

No clients/header.php iremos incluir o /assets/css/estilo.css

Pela lógica no clients/header.php para incluir o /assets/css/estilo.css, subirá um nível para ficar no mesmo nível de /assets e faria assim:

require_once '../assets/css/style.css';

No index.php iremos incluir o clients/header.php

Mas precisamos entender que header.php será incluído pelo index.php, então ele ficará no mesmo nível do index.php, que é o mesmo do /assets, então o
header.php deve ter um include assim:

require_once 'assets/css/style.css';

Para que funcione corretamente.

Experimente usar 

require_once '../assets/css/style.css';

O PHP irá dizer que não encontrou o arquivo.

Então quando trabalharmos com includes precisamos entender que o arquivo incluído agora faz parte do arquivo que o incluiu e está no mesmo path dele.

## Caminho relativo e absoluto

Absoluto é todo o caminho desde o raiz da partição.

Relativo é o caminho comparado com o atual.

Absoluto - /var/www/html/clients/index.php ou c:\xampp\htdocs\clients\index.php

Relativo

Se estou em /var/www/html/clients/index.php

E faço assim:

require_once './footer.php';

Então estou incluindo o arquivo footer.php que está na mesma pasta do index.php

Se fizer assim no index.php:

require_once '../teste.php';

Estou incluindo o arquivo teste.php que está na pasta antes da pasta do index.php. Como o index.php está em clients, então teste.php está um nível antes de clients, ou seja, está em /var/www/html

Pasta atual - './parsta'; e 'pasta';

Pasta um nível antes '../pasta';

Dois níveis antes '../../pasta';

## Tipos de includes

include - pode incluir várias vezes o mesmo arquivo e o processará e em caso de erro continua o processamento

include_once - pode incluir somente uma vez e em caso de erro continua o processamento.  Este é um comportamento similar a declaração include, com a única diferença que, se o código do arquivo já foi incluído, não o fará novamente, e o include_once retornará true. Como o nome sugere, o arquivo será incluído somente uma vez. O include_once pode ser utilizado em casos em que o mesmo arquivo pode ser incluído e valiado mais de uma vez durante uma execução de um script em particular, neste caso, ajudará a evitar problemas como redefinição de funções, reatribuição de valores de variáveis, e etc. 

require - pode ser incluído várias vezes o mesmo arquivo e o processará mas em caso de erro no arquivo incluído o processamento será paprado com erro fatal. A declaração require é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível E_COMPILE_ERROR. Em outras palavras, ele parará o script enquanto que o include apenas emitirá um alerta (E_WARNING) permitindo que o script continue. 

require_once - pode ser incluído somente uma única vez mas em caso de erro no arquivo incluído o processamento será paprado com erro fatal. A declaração require_once é idêntica a requirem exceto que o PHP verificará se o arquivo já foi incluído, e em caso afirmativo, não o incluirá (exigirá) novamente. 

## Meu preferido

require_once 'arquivo.php';

Pois ele somente incluirá o arquivo uma única vez e se houver algum erro no arquivo ele disparará um fatal error e parará o processamento. 
Nunca esconda error. Se existirem devem s er tratados. Mesmo que susupeitemos qeu certo trecho de código possa mostrar um erro devemomso prever uma saída para ele.

