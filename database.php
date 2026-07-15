<?php

class DB
{
    public $db;

    public function __construct($config)
    {
        $this->db = new PDO(
            $this->getDsn($config),
            $config['user'] ?? null,
            $config['password'] ?? null,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        );
    }

    private function getDsn($config)
    {
        $driver = $config['driver'];
        $dsnConfig = $config;
        unset($dsnConfig['driver']);

        if ($driver === 'sqlite') {
            return $driver . ':' . ($dsnConfig['database'] ?? 'database.sqlite');
        }

        return $driver . ':' . http_build_query($dsnConfig, '', ';');
    }

    public function artigos($pesquisar)
    {
        $prepare = $this->db->prepare("select * from artigo where titulo like :pesquisar or dataPublicacao like :pesquisar or descricao like :pesquisar");
        $prepare->bindValue('pesquisar', "%$pesquisar%");
        $prepare->setFetchMode(PDO::FETCH_CLASS, Artigo::class);
        $prepare->execute();
        return $prepare->fetchAll();
    }

    public function artigo($id)
    {
        $prepare = $this->db->prepare("select * from artigo where id = :id");
        $prepare->bindValue('id', $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Artigo::class);
        $prepare->execute();

        return $prepare->fetch();
    }

    public function query($sql, $class = null, $params = [])
    {
        $prepare = $this->db->prepare($sql);
        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);
        return $prepare;
    }
}

$database = new DB($config['database']);
