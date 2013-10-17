<?php
namespace AlbumApi\Controller;

use AlbumApi\Controller\AbstractRestfulJsonController;
use ExampleCommon\Entity\Person;

use Zend\View\Model\JsonModel;

class IndexController extends AbstractRestfulJsonController
{
    public function getList()
    {
        $person = new Person();
        $person->firstName = 'Alec';
        $person->lastName = 'Test';

        return new JsonModel(array('person' => $person));
    }
}