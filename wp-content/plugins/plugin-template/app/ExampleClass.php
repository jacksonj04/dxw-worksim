<?php 

class ExampleClass 
{
    public function foo()
    {
        $link = get_permalink(42);
        return $link . 'bar';
    }
}