<?php

declare(strict_types = 1);

namespace Mvc\Libs;

class Helper
{
    /**
     * debugPDO
     *
     * Mostra a consulta SQL emulada em uma instrução PDO. O que ele faz é extremamente simples, mas poderoso:
     * Combina a consulta bruta e os espaços reservados (placeholders). Com certeza não é perfeito (como a PDO é mais complexa do que apenas
     * combinando consultas e argumentos brutos), mas faz o trabalho.
     *
     * @author Ribamar FS
     * @param string $raw_sql
     * @param array $parameters
     * @return string
     */
    static public function debugPDO($raw_sql, $parameters) {

        $keys = array();
        $values = $parameters;

        foreach ($parameters as $key => $value) {

            // Checar se os parâmetros nomeados (':param') ou parâmetros anônimos ('?') são usados
            if (is_string($key)) {
                $keys[] = '/' . $key . '/';
            } else {
                $keys[] = '/[?]/';
            }

            // Converter parâmetro para o formato legível por humanos
            if (is_string($value)) {
                $values[$key] = ''' . $value . '''; // Before "'"
            } elseif (is_array($value)) {
                $values[$key] = implode(',', $value);
            } elseif (is_null($value)) {
                $values[$key] = 'NULL';
            }
        }

        /*
        echo '<br> [DEBUG] Keys:<pre>';
        print_r($keys);

        echo '<br>[DEBUG] Values: ';
        print_r($values);
        echo '</pre>';
        */
        $raw_sql = preg_replace($keys, $values, $raw_sql, 1, $count);
        return $raw_sql;
    }
}
