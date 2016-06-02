<?php
class MyQueue
{
    private $MyQueue = array(); //Init

    public function clear() //Clearing the Queue
        {
            $this->MyQueue = array();
        }

    public function addToTop($item) //Add item to the top of the Queue
        {
            array_unshift($this->MyQueue[] = $item);
            return $this->MyQueue;
        }

    public function remove() //Remove element
        {
            return array_shift($this->MyQueue);
        }

    public function peek() //returns the next element to be removed
        {
            return current($this->MyQueue);
        }

    public function printOut() //Only for reference to print out
        {
          for($i=1;$i < count($this->MyQueue)+1;$i++)
          {
            echo($i.". ".$this->MyQueue[$i-1]."<br>");
          }
        } 
}

$MyResults = new MyQueue();
$MyResults->addToTop("White");
$MyResults->addToTop("Black");
$MyResults->addToTop("Red");
$MyResults->addToTop("Blue");
$MyResults->addToTop("Yellow");
echo "Show the content of the array"."<br>";
$MyResults->printOut();
$MyResults->remove();
echo "The array after remove"."<br>";
$MyResults->printOut();
echo "The next element to be removed"."<br>";
echo $MyResults->peek()."<br>";
echo "Show the content of the array after consult the next element to be romoved"."<br>";
$MyResults->printOut();
?>
