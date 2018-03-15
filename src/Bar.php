<?php

namespace Cothema\EuCookies;

class Bar extends \Nette\Application\UI\Control
{

    /** @var string */
    public $moreInfoLink = 'https://www.google.com/policies/technologies/cookies/';

    public function render()
    {
        $template = $this->template;
        $template->setFile(__DIR__ . '/Bar.latte');
        $template->moreInfoLink = $this->moreInfoLink;
        $template->alreadyConfirmed = $this->isAlreadyConfirmed();

        $template->render();
    }

    private function isAlreadyConfirmed()
    {
        return isset($_SERVER["HTTP-X-COOKIESOK"]);
    }

}
