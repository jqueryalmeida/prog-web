# Compartilhando arquivos

- Compartilhar Linux com Windows
- Compartilhar Windows com Linux

## Compartilhar Linux com Windows

## Instalar o samba

sudo apt install samba

## Adicionar seu user para o samba

sudo smbpasswd -a ribafs

## Compartilhar uma pasta

Abra o seu gerenciador de arquivos (nemo, nautilus)

- Selecione a pasta que deseja compatilhar com o Windows, nomeu caso /home/ribafs/transp
- Clique na pasta com o botão direito - Opções de compartilhamento
- Ative Compartilhar esta pasta
- Nome do compartilhamento - sugestão "Linux"
- Abaixo masque as opções desejadas: eprmitir que excluam e acesso anônimo

ifconfig (anotar seu IP. Ex: 192.168.0.32)

## Checando no Windows

- Abrir o gerenciador de arquivos
- Digitar na barra de endereços acima

\\192.168.0.32

- Tecle enter e verá o compartilhamento Linux criado
- Clique sobre Linux com o botão direito
- Mapear unidade de rede...
- Concluir

Caso não tenha marcado para acesso anônimo precisa entrar com usuário e senha do linux

## Compartilhando o Windows com Linux

- Seleciona a pasta que deseja compartilhar
- Clique nela com botão direito
- Compartilhamento Avançado
- Nome de compartilhamento - Windows (sugestão)
- Clique em Permissões
- Remova Todos
- Adicionar o usuário que deseja usar no compartilhamento
- Em Locais digite RIBAFS

Verificar locais

OK

- Dê permissão de controle total - OK
- Acesse a aba Segurança e adicione o usuário RIBAFS
- Com permissões de controle total
- Abra o prompt e digite

ipconfig (anote seu IP, ex: 192.168.0.33)

- Pronto. Já pode acessar pelo Linux

## Checando no Linux

- Abra o gerenciador de arquivos e digite na barra de endereços

smb://192.168.0.33

- Tecle enter
- Entre com login e senha do windows

## Alternativamente no nemo ou nautilus

- Arquivo - Conectar a um servidor
- Em Tipo - Compartilhamento do windows
- Em Nome do domínio pode deixar em branco

## Referência

https://www.todoespacoonline.com/w/2015/06/compartilhamento-de-arquivos-entre-linux-e-windows/
