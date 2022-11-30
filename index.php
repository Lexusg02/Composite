<?php

abstract class Component
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public abstract function display();
}

class Leaf extends Component
{
    public function display()
    {
        print_r($this->name);
    }
}

class Composite extends Component
{
    private $children = array();

    public function add(Component $component)
	{
		$this->children[$component->name] = $component;
	}

    public function display()
    {
        foreach($this->children as $child)
        {
            $child->display();
        }
    }
}