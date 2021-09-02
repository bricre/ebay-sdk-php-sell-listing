<?php

namespace Ebay\Sell\Listing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the item aspects.
 */
class Aspect extends AbstractModel
{
    /**
     * The name of an aspect, such and Brand.
     *
     * @var string
     */
    public $name = null;

    /**
     * A list of potential values for this aspect.
     *
     * @var string[]
     */
    public $values = null;
}
