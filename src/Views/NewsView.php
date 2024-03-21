<?php

namespace Views;

class NewsView
{
    public function viewNews(array $newsList)
    {
        foreach ($newsList as $news) {
            echo "############ NEWS " . $news['title'] . " ############<br/>";
            echo $news['body'] . "<br/>";
        }
    }

    public function viewNewsWithComments(array $newsListWithComments)
    {
        foreach ($newsListWithComments as $news) {
            echo "############ NEWS " . $news->getTitle() . " ############<br/>";
            echo $news->getBody() . "<br/><br/>";

            foreach ($news->getComments() as $comment) {
                echo "Comment " . $comment->getId() . " : " . $comment->getBody() . "<br/>";
            }
            echo "<br/>";
        }
    }
}
