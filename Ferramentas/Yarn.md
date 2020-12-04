Instalação num Mint

curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -

echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list

Caso tenha o node, pode usar o comando abaixo que instala sem o node

sudo apt-get install --no-install-recommends yarn

Instalação completa

sudo apt-get update && sudo apt-get install yarn



Instalar algo

cd pasta

yarn install

Build

yarn build
