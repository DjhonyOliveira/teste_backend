<?php

namespace persistence;
class Persistencia
{
    protected $conexao;
    public function getConnection()
    {
        $this->conexao;
    }
    function Connect($conexao)
    {
        $this->conexao = $conexao;
    }

    public function getDb()
    {
        $host = getenv('DB_HOST');
        $port = getenv('DB_PORT');
        $dbname = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');

        $dbConection = "host=$host
                        port=$port
                        dbname=$dbname
                        user=$user
                        password=$password";

        return $dbConection;
    }

    public function conect()
    {
        $this->setConnect(pg_connect($this->getDb()));
    }

    public function desconect()
    {
        return pg_close($this->getConnection());
    }

    public function exeQuery($ssql)
    {
        $this->conect();
        $query = pg_exec($this->getConnection(), $ssql);

        $this->desconect();

        return $query;
    }

}


