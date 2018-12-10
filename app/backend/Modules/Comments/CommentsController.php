<?php
namespace App\Backend\Modules\Comments;

use \BlogFram\BackController;
use \BlogFram\HTTPRequest;

class CommentsController extends BackController
{
    public function executeComm(HTTPRequest $request)
    {
        $this->page->addVar('title','Gestion des commentaires');

        $manager = $this->managers->getManagerOf('Comments');

        $this->page->addVar('nombreComm', $manager->countComm());
        $this->page->addVar('nombreSigne', $manager->countSigne());

        $comments = $manager->getList();
        $this->page->addVar('comments', $comments);
    }
}