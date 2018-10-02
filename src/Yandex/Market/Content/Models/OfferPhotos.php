<?php

namespace Yandex\Market\Content\Models;

use Yandex\Common\ObjectModel;

class OfferPhotos extends ObjectModel
{
    /**
     * Add photo to collection
     *
     * @param OfferPhoto|array $photo
     *
     * @return OfferPhotos
     */
    public function add($photo)
    {
        if (is_array($photo)) {
            $this->collection[] = new OfferPhoto($photo);
        } elseif (is_object($photo) && $photo instanceof OfferPhoto) {
            $this->collection[] = $photo;
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
