<?php


class DB
{

    // Criação do atributo $Db que vai receber o obj do tipo PDO
    public $db;


    public function __construct($config)
    {
        $this->db = new PDO($this->getDsn($config));
    }

    private function getDsn($config)
    {

        $driver = $config['driver'];
        unset($config['driver']);

        $dsn = $driver . ':' . http_build_query($config, '', ';');

        if ($driver == 'sqlite') {
            $dsn = $driver . ':' . $config['database'];
        }

        return $dsn;
         
    }






    public function artigos($pesquisar)
    {


        $prepare = $this->db->prepare("select * from artigos 
        where
        titulo like :pesquisar or dataPublicacao like :pesquisar or descricao like :pesquisar");

        $prepare->bindValue('pesquisar', "%$pesquisar%");
        $prepare->setFetchMode(PDO::FETCH_CLASS, Artigo::class);
        $prepare->execute();
        return $prepare->fetchAll();
    }



    public function artigo($id)
    {
        $prepare = $this->db->prepare("select * from artigos 
        where id = :id");
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
