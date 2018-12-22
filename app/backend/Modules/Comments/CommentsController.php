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
        $this->page->addVar('nombreReport', $manager->countReport());

        $comments = $manager->getList();
        $this->page->addVar('comments', $comments);
    }
    public function executeReportOff(HTTPRequest $request)
    {
        $id = $request->getData('id');
        $this->managers->getManagerOf('Comments')->reportOff($id);
        $this->app->user()->setFlash('Le signalement du commentaire a été enlevé !');

        $this->app->httpResponse()->redirect('/blog/Web/admin/comm');
    }
}