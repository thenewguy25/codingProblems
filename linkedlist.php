<?php
class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public $head;
    public function __construcct()
    {
        $this->head = null;
    }

    public function addNode($data)
    {
        $newNode = new Node($data);

        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $currentNode = $this->head;
            while ($currentNode->next != null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
    }

    public function deleteNode($key)
    {
        $currentNode = $this->head;

        if ($currentNode != null && $currentNode->data == $key) {
            $this->head = $currentNode->next;
            $currentNode = null;
            return;
        }

        $prevNode = null;
        while ($currentNode != null && $currentNode->data != $key) {
            $prevNode = $currentNode;
            $currentNode = $currentNode->next;
        }

        if ($currentNode == null) {
            return;
        }

        $prevNode->next = $currentNode->next;
        $currentNode = null;
    }

    public function reverse()
    {
        $prevNode = null;
        $currentNode = $this->head;
        while ($currentNode !== null) {
            $nextNode = $currentNode->next;
            $currentNode->next = $prevNode;
            $prevNode = $currentNode;
            $currentNode = $nextNode;
        }
        $this->head = $prevNode;
    }

    public function display()
    {
        $currentNode = $this->head;
        while ($currentNode !== null) {
            echo $currentNode->data . " -> ";
            $currentNode = $currentNode->next;
        }
        echo "None\n";
    }
}
$linkedList = new LinkedList();
$linkedList->addNode(1);
$linkedList->addNode(2);
$linkedList->addNode(3);
$linkedList->addNode(4);

echo "Original Linked List:\n";
$linkedList->display();

// Deleting a node with data 2
$linkedList->deleteNode(2);
echo "Linked List after deleting node with data 2:\n";
$linkedList->display();

// Reversing the linked list
$linkedList->reverse();
echo "Reversed Linked List:\n";
$linkedList->display();
?>