<?php

class ProductModel
{
    public function getlist()
    {
        return [
            'item 1',
            'item 2',
            'item 3',
            'item 4'
        ];
    }

    public function listid($id = '')
    {
        $arr = ['item 1','item 2','item 3','item 4'];

        return $arr[$id];
    }
}
