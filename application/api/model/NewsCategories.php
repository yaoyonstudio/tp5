<?php
namespace app\api\model;

use think\Model;

class NewsCategories extends Model{
    protected $autoWriteTimestamp = true;
    protected $insert             = [
        'cat_group' => 0,
        'parent_id' => 0,
        'type' => 1,    //1为分类，2为标签
    ];

    protected $field = [
        'cat_id'          => 'int',
        'cat_group'      => 'int',
        'parent_id'      => 'int',
        'type'      => 'int',
        'create_time'      => 'int',
        'update_time'      => 'int',
        'cat_name'
    ];


    // public function getCateName(){
    //     return $this->cat_name;
    // }

}