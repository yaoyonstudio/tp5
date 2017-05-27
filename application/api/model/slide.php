<?php
namespace app\api\model;

use think\Model;

class Slide extends Model{
    protected $autoWriteTimestamp = true;

    protected $field = [
        'slide_id'          => 'int',
        'create_time'      => 'int',
        'update_time'      => 'int',
        'slide_title',
        'slide_link',
        'slide_src'
    ];

}