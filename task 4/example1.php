<?php
class Employee
{
    private $man_no;
    private $name;
    protected $position;
    public function __construct($man_no,$name,$position)
    {
        $this->man_no = $man_no;
        $this->name = $name;
        $this->position = $position;
    }
    public function setManNo($man_no)
    {
        $this->man_no = $man_no;
    }
    public function getManNo()
    {
        return $this->man_no;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
}
$employee = new Employee('123','Son','aptx');
echo "Man_no: " .$employee->getManNo().'<br>';
echo "Name: " .$employee->getName().'<br>';
echo "Position: " .$employee->getPosition().'<br>';