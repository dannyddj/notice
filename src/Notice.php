<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 2018/5/16
 * Time: 下午5:09
 */

namespace Notice;


class Notice {
    protected $target;
    protected $content;
    public function __construct($target,$content) {
        $this->target = $target;
        $this->content = $content;
    }

    public function send(){
        return 'notice [' . $this->target . ']:' . $this->content;
    }
}