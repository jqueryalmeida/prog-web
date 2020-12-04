# Sintaxe
# sh gh.sh "Primeiro Commit" "mkdocs.git"
git config --global user.name "Ribamar FS"
git config --global user.email "ribafs@gmail.com"
git init
git add .
git commit -m $1"Primeiro commit"
git remote add origin git@github.com:ribafs/$2
git push -f origin master

