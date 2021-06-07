<?php

namespace App\Modules\AboutMe\Infrastructure;

use IvanUskov\ImageSpider\ImageSpider;
use App\Modules\AboutMe\App\ImageProviderInterface;

class ImageProvider implements ImageProviderInterface
{
    private const QUANTITY_IMAGES = 5;

    public function getImageUrls(string $theme): array
    {
        $urls = ImageSpider::find($theme);
        if (count($urls) >= self::QUANTITY_IMAGES)
        {
            $result = [];
            foreach (array_rand($urls, self::QUANTITY_IMAGES) as $index)
            {
                $result[] = $urls[$index];
            }

            return $result;
        }
        return [];
    }
}