<?php

namespace Ebay\Sell\Listing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the field for the createItemDraft response.
 */
class ItemDraftResponse extends AbstractModel
{
    /**
     * The eBay generated ID of the listing draft.
     *
     * @var string
     */
    public $itemDraftId = null;

    /**
     * The URI the Partner uses to send the seller to their listing draft that was
     * created on the eBay site. From there the seller can change, update, and publish
     * the item on eBay. This is returned when the seller is using a mobile app.
     *
     * @var string
     */
    public $sellFlowNativeUri = null;

    /**
     * The web URL the Partner uses to send the seller to the listing draft that was
     * created on the eBay site. From there the seller can change, update, and publish
     * the item on eBay. This is returned when the seller is using mobile web (mweb) or
     * the desktop web. Note: You must construct the URL using the URL returned in this
     * field and a session token. For example: sellFlowUrl?id_token=session_token.
     *
     * @var string
     */
    public $sellFlowUrl = null;
}
