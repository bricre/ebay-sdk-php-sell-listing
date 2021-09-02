<?php

namespace Ebay\Sell\Listing;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'createItemDraft' => [
            '201.' => 'Ebay\\Sell\\Listing\\Model\\ItemDraftResponse',
        ],
    ];
}
