<?php


namespace Hillel;


abstract class model
{

    public static function getRealName(){

            return substr(static::class,(strrpos(static::class,'\\'))+1);

    }
    public static function find($id){

        $sql= 'SELECT * FROM '. strtolower(self::getRealName(static::class,'//')) . ' WHERE id = '.$id;
        var_dump($sql);
    }
    public function create(){
        $cols = get_object_vars($this);
var_dump($cols);
        $values = array_map(function ($item){
              return ':' . $item;
        }, array_values($cols));


        $sql = 'INSERT INTO  '. strtolower(self::getRealName(static::class,'//')) .  '  (' . implode(', ', array_keys($cols)) . ') VALUES ('. implode(', ', $values) .') ';
         var_dump($sql);
    }
    public function update(){
        $cols = get_object_vars($this);

        $values = array_map(function ($item){
            return ':' . $item;
        }, array_values($cols));

       $sql = ' UPDATE  '. strtolower(self::getRealName(static::class,'//')) .  ' SET (' . implode(', ', array_keys($cols)) . ') = ('. implode(', ', $values) .') WHERE id = '. $this->getId();
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

        $sql= 'DELETE FROM '. strtolower(self::getRealName(static::class,'//')) . ' WHERE id = '. $this->getId() ;
        var_dump($sql);
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }

}
