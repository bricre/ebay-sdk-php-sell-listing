<?php

namespace Ebay\Sell\Listing\Api;

use Ebay\Sell\Listing\Model\ItemDraft as ItemDraftModel;
use Ebay\Sell\Listing\Model\ItemDraftResponse as ItemDraftResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ItemDraft extends AbstractAPI
{
    /**
     * This call gives Partners the ability to create an eBay draft of a item for their
     * seller using information from their site. This lets the Partner increase the
     * exposure of items on their site and leverage the eBay user listing experience
     * seamlessly. This experience provides guidance on pricing, aspects, etc. and
     * recommendations that help create a listing that is complete and improves the
     * exposure of the listing in search results. After the listing draft is created,
     * the seller logs into their eBay account and uses the listing experience to
     * finish the listing and publish the item on eBay.
     *
     * @param ItemDraftModel $Model
     *
     * @return ItemDraftResponse
     */
    public function create(ItemDraftModel $Model): ItemDraftResponse
    {
        return $this->client->request('createItemDraft', 'POST', 'item_draft/',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
