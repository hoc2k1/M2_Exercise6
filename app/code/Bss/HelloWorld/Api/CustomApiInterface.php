<?php
namespace Bss\HelloWorld\Api;

interface CustomApiInterface
{
    /**
     * @param int $id
     * @return array
     */
    public function getData($id);
}