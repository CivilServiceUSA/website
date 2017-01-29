<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package Application
 * @subpackage Models
 * @category Meta_model
 * @author Peter Schmalfeldt <me@peterschmalfeldt.com>
 */
class Meta_model extends CI_Model
{
    public $meta;

    public function __construct()
    {
        parent::__construct();

        $media_path = $this->config->item('media_path');

        // Set Default Meta Data
        $this->meta = array(
            'title' => 'Civil Services - Accountability in Action',
            'keywords' => 'Track what is happening in your Local, State & Federal Governments.',
            'description' => 'Civil, Services, Local, State, Federal, Government, Legislation, Accountability, Action, Information, Elected, Officials, API, Developers',
            'image' => $media_path . '/assets/img/app-image.jpg'
        );
    }

    public function get_meta()
    {
        $this->set_json_ld($this->meta['title'], $this->meta['description'], $this->meta['image']);

        return $this->meta;
    }

    public function set_title($title)
    {
        $this->meta['title'] = $title;
    }

    public function set_keywords($keywords)
    {
        $this->meta['keywords'] = $keywords;
    }

    public function set_description($description)
    {
        $this->meta['description'] = $description;
    }

    public function set_image($image)
    {
        $this->meta['image'] = $image;
    }

    public function set_json_ld($title, $description, $image)
    {
        $this->meta['json_ld'] = '{
            "@context": "http://schema.org/",
            "@type": "Service",
            "serviceType": "Public Service",
            "provider": {
                "@type": "LocalBusiness",
                "name": "Civil Services",
                "image": "' . $image . '",
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "US",
                    "addressLocality": "St. Petersburg",
                    "addressRegion": "FL",
                    "postOfficeBoxNumber": "Suite 420",
                    "postalCode": "33701",
                    "streetAddress": "200 2nd Avenue South"
                },
                "description": "' . $description . '",
                "name": "' . $title . '",
                "telephone": "N/A",
                "priceRange": "0",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "27.7691736",
                    "longitude": "-82.6379893"
                },
                "sameAs": [
                    "https://github.com/CivilServiceUSA",
                    "https://twitter.com/CivilServiceUSA",
                    "https://www.facebook.com/CivilServiceUSA/"
                ]
            },
            "areaServed": {
                "@type": "Country",
                "name": "US"
            },
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Civil Services",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Accountability in Action"
                        }
                    }
                ]
            }
        }';
    }
}