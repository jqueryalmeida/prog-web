#!/bin/sh -e
# Criado por Ribamar FS - https://ribafs.org
# Script que mata o processo do mysql imediatamente antes de desligar/reiniciar o computador, pois o mesmo estava emperrando
# Efetuar uma cópia para o /etc/init.d e
# Ciar um link simbólico para o /etc/rc0.d com:
# sudo ln -s /etc/init.d/desligar_my.sh /etc/rc0.d/K01desligar
sudo pkill mysqld
exit 0
