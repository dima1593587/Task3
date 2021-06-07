<?php

namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\Infrastructure\ConstHobbieConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Infrastructure\ImageProvider;

class HobbieService
{
    public array $result;

    public function __construct(
                                HobbieConfigurationInterface $exempl,
                                ImageProviderInterface $imageUrls
                               )
    {
        $this->exempl = $exempl->getHobbieMap();
        $this->imageUrls = $imageUrls;
    }

    public function getHobbies(): array
    {
        foreach ($this->exempl as $header)
        {
           $this->addHobbie($header);
        }
        return $this->result;
    }

    private function addHobbie($theme)
    {
        $hobbie = new Hobbie($theme, $this->imageUrls->getImageUrls($theme));
        $this->result[] = [
            $hobbie->getHeader(),
            $hobbie->getArrUrls(),
        ];
    }
}