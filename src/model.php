<?php


namespace Hillel;


abstract class model
{

    public static function getRealName(){

            return substr(static::class,(strrpos(static::class,'\\'))+1);

    }
    public static function find($id){

        $sql= 'SELECT * FROM '. strtolower(self::getRealName(static::class,'//')) . ' WHERE id = :id';
        var_dump($sql);
    }
    public function create(){
        $cols = get_object_vars($this);

        $values = array_map(function ($item){
              return ':' . $item;
        }, array_keys($cols));


        $sql = 'INSERT INTO  '. strtolower(self::getRealName(static::class,'//')) .  '  (' . implode(', ', array_keys($cols)) . ') VALUES ('. implode(', ', $values) .') ';
         var_dump($sql);
    }
    public function update(){
       $sql = 'UPDATE user SET name = :name, email = :email WHERE id = :id';
       var_dump($sql);
    }
    public function save($id){
        if(self::find($id)){
            $this->update();

        }  else {
            $this->create();
        }
    }
    public function delete(){

        $sql= 'DELETE FROM ' . strtolower(static::class) . ' WHERE id = :id';
        var_dump($sql);
    }


}
