<?php

namespace Ebay\Sell\Listing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the price details for an item.
 */
class PricingSummary extends AbstractModel
{
    /**
     * The minimum amount the seller is willing to sell the item for. If the reserve
     * price isn't met, the item won't be sold. For details, see How reserve prices
     * work. Restrictions: The value is not supported for FIXED_PRICE format. The value
     * format has a maximum of two decimal points.
     *
     * @var \Ebay\Sell\Listing\Model\Amount
     */
    public $auctionReservePrice = null;

    /**
     * The minimum amount required for the first bid. Note: The auctionStartPrice value
     * must be less than the auctionReservePrice value. Restrictions: The value is not
     * supported for FIXED_PRICE format. The value format has a maximum of two decimal
     * points.
     *
     * @var \Ebay\Sell\Listing\Model\Amount
     */
    public $auctionStartPrice = null;

    /**
     * The Buy It Now Price for the item.
     *
     * @var \Ebay\Sell\Listing\Model\Amount
     */
    public $price = null;
}
