# Versionar projetos com git

Especialmente para projetos importantes é bom ter um versionamento com Gir e cópias no GitHub, sincronizadas com o projeto local.

## Criar repositório para o projeto no GitHub, public ou private. 

Ex: https://github.com/ribafs/testes

## Enviar a chave pública do SSH do seu desktop para o GitHub

Caso ainda não tenha enviado

### Gerar a chave

ssh-keygen -t rsa -b 4096 -C "ribafs@gmail.com"

Enter 3 vezes ou entre com uma senha e repita

### Exibir a chave gerada

cat ~/.ssh/id_rsa.pub

### Copie para a memória a chave

Seleciona a chave completa, desde "ssh-rsa" até o final, que aqui é o nome da máquina. Depois de completamente selecionado, clique com o botão direito - Copiar.

### Vá até o GitHub 

Na sua conta clique acima e à direita em seu avatar - Settings - SSH and GPG keys

New SSH key

Title - entre com um nome para a chave

Key - clique na caixa para selecioná-la e tecle Ctrl+V.

Add SSH key

Agora poderá trabalhar com mais conforto, pois o Git não pedirá a senha. Apenas pedirá se você tiver usado na geração da chave.

### Criar o projeto localmente

### Instalar o laravel ou acessar um aplicativo existente
```bash
laravel new blog --jet --stack=livewire

cd blog

git config --global user.name "Ribamar FS"
git config --global user.email "ribafs@gmail.com"
git init
git add .
git commit -m "First"
git remote add origin git@github.com:ribafs/testes.git
git push -u -f origin master
```
Vá até o repositório testes no GH e atualize o navegeador para ver o projeto.

Os dois primeiros comandos são usados apenas uma vez. Nas próximas começamos com git init. Aliás, git init é usado quando estamos criando um projeto.

## Podemos criar um script/batch para automatizar estes comandos

Agora que o projeto foi enviado para o GitHub basta executar os 4 comandos abaixo para sincronizar e atualizar as alterações. Isso pode ser feito com um dos scripts abaixo.

### Linux

sudo nano /usr/local/bin/gs

Contendo
```bash
git add .
git commit -m "$1"
git pull
git push
```
### Windows

Use um editor, como o notepad++ ou VSCode para criar um gs.bat no windows

c:\windows\gs.bat
```bash
git add .
git commit -m "%1"
git pull
git push
```
### Executando

#### Linux

cd /var/www/html/blog

gs "Segundo commit"

#### Windows

cd c:\laragon\www\blog

gs.bat "Segundo commit"

## VSCode

O VSCode vem com ferramentasa antivas para trabalhar com o Git. Eu experimentei mas acho mais simples direto pelo terminal/prompt, como relatei acima. Mas o VSCode é um ótimo editor de código com muitos bons recursos. Caso esteja trabalhando em um projeto com o VSCode pode usar seu terminal para trabalhar com Git, talvez ache mais simples que usar as ferramentas do VSCode, como eu acho. Mas é uma decisão que cada um tem que tomar, de acordo com o que sentir.

Tem algo muito importante no VSCode que ajuda quem é iniciante com Git. Ele tem diversos comandos para gerenciar o projeto com Git. Clique no ícone Source Control e depois nos 3 pontos acima e verá diversos comandos para gerenciar a versão com Git. Estes comandos através do VSCode ficam mais simples que pela linha de comando. Outro detalhe a favor do VSCode é que ele mostra na aba do Source Control os arquivos alterados, até que seja feito o commit.

## GitHub Desktop

Com versões para todos os principais sistemas operacionais, o GitHub Desktop é uma alternativa que simplifica muito o uso do Git com projetos no GitHub, especialmente para os iniciantes em Git. Abaixo um tutorial com foco em Linux Mint mas que aborda recursos comuns a outros sistemas:

https://github.com/ribafs/tutoriais/blob/master/7Ferramentas/GitHub/UsandoGitHubDesktop.md


## Referências

https://medium.com/@ujalajha/connecting-the-laravel-project-on-github-73acf55bbd63
