<?php

use Views\CommentsView;
use Repositories\CommentsRepository;

class CommentsController
{
    private $commentRepository;

    public function __construct(CommentsRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function listComments()
    {
        $comments = $this->commentRepository->listComments();
        $commentView = new CommentsView();
        return $commentView->viewComments($comments);
    }
}
