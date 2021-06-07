<?php

namespace App\Modules\AboutMe\Model;

class Hobbie
{
    private string $theme;
    private array $arrUrls;


    public function __construct(string $theme, array $arrUrls)
    {
        $this->theme = $theme;
        $this->arrUrls = $arrUrls;
    }

    public function getHeader(): string
    {
        return $this->theme;
    }

    public function getArrUrls(): array
    {
        return $this->arrUrls;
    }
}