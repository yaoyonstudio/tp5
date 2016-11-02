<?php
namespace app\common\validate;

use think\Validate;

class CategoriesValid extends Validate
{
    protected $rule = [
        'cat_name'  => 'require',
        'cat_group'  => 'number',
        'parent_id'  => 'number',
        'type'  => 'number',
    ];

}