<?php

namespace CivilServices;

class SiteMetaData
{
    private $meta;

    public function __construct()
    {
        // Set Default Meta Data
        $this->meta = [
            'title' => 'Civil Services - Accountability in Action',
            'keywords' => 'Track what is happening in your Local, State & Federal Governments.',
            'description' => 'Civil, Services, Local, State, Federal, Government, Legislation, Accountability, Action, Information, Elected, Officials, API, Developers',
            'image' => asset('img/app-image.jpg'),
        ];

        $this->meta['json_ld'] = '{
            "@context": "http://schema.org/",
            "@type": "Service",
            "serviceType": "Public Service",
            "provider": {
                "@type": "LocalBusiness",
                "name": "Civil Services",
                "image": "' . $this->meta['image'] . '",
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "US",
                    "addressLocality": "St. Petersburg",
                    "addressRegion": "FL",
                    "postOfficeBoxNumber": "Suite 420",
                    "postalCode": "33701",
                    "streetAddress": "200 2nd Avenue South"
                },
                "description": "' . $this->meta['description'] . '",
                "name": "' . $this->meta['title'] . '",
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

    public function get($key)
    {
        return array_get($this->meta, $key, null);
    }
}
