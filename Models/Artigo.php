<?php


class Artigo
{


    public $id;
    public $titulo;
    public $dataPublicacao;
    public $descricao;
    public $img;
    public $link;
    public $id_usuario;



    public function query($where, $params)
    {

        $database = new DB(config('database'));

        return $database->query(
            sql: "SELECT * FROM artigos  where $where",
            class: self::class,
            params: $params
        );
    }


    public static function get($id){

        return (new self)->query('id = :id', 
        ['id' => "$id"])->fetch();
    }

    public static function all($filtro){

        return (new self)->query('titulo like :filtro or autor like :filtro or descricao like :filtro', 
        ['filtro' => "%$filtro%"])->fetchAll();
    }

    public static function meus($usuario_id){

        return (new self)->query('usuario_id = :usuario_id', 
        ['usuario_id' => "$usuario_id"])->fetchAll();
    }
}




    
