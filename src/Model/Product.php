<?php

namespace Ebay\Sell\Listing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type that defines the fields for the aspects of a product.
 */
class Product extends AbstractModel
{
    /**
     * The list of item aspects that describe the item (such as size, color, capacity,
     * model, brand, etc.).
     *
     * @var \Ebay\Sell\Listing\Model\Aspect[]
     */
    public $aspects = null;

    /**
     * The name brand of the item, such as Nike, Apple, etc.
     *
     * @var string
     */
    public $brand = null;

    /**
     * An EPID is the eBay product identifier of a product from the eBay product
     * catalog. Note: If you submit both a category ID and an EPID, eBay determines the
     * best category based on the EPID and uses that. The category ID will be ignored.
     *
     * @var string
     */
    public $epid = null;

    /**
     * The image URLs of the item. The first URL will be the primary image, which
     * appears on the View Item page in the eBay listing. The URL can be from the
     * following: The eBay Picture Services (images previously uploaded). A server
     * outside of eBay (self-hosted). For more details, see PictureURL and Introduction
     * to Pictures in Listings. Maximum: 12 URLs (for most categories and marketplaces)
     * Restrictions: You cannot mix self-hosted and EPS-hosted URLs in the same
     * listing. All image URLs must be 'https'.
     *
     * @var string[]
     */
    public $imageUrls = null;
}
