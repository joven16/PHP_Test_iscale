<?php

namespace Views;

class CommentsView
{
    public function viewComments(array $commentsList)
    {
        foreach ($commentsList as $comment) {
            echo "############ NEWS " . $comment['id'] . " ############\n";
            echo $comment['body'] . "\n";
        }
    }
}
