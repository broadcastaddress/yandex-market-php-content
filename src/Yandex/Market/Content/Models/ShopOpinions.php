<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class ShopOpinions extends ObjectModel
{
    /**
     * Add opinion to collection
     *
     * @param ShopOpinion|array $review
     *
     * @return ShopOpinions
     */
    public function add($opinion)
    {
        if (is_array($opinion)) {
            $this->collection[] = new ShopOpinion($opinion);
        } elseif (is_object($opinion) && $opinion instanceof ShopOpinion) {
            $this->collection[] = $opinion;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return array
     */
    public function getAll()
    {
        return $this->collection;
    }
}
