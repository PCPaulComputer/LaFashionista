<?php 
class Style {
    protected $cities;
    private $women_fashion_inventory;
    private $men_fashion_inventory;
    private $page_banner;

    public function get_data($data){
        $info = [];
        switch($data){
            case 'cities':
                $info = [
                    1 => [
                    "city" => "Milan",
                    "description" => "Beautiful description of Romantic architecture. Center of fashion here in Italy. \n
                                        Surprised that with architecture, there are various arts to be found in the city.",
                    "alt" => "Milan architecture",
                    "image" => "image_milan.jpg"
                    ],
                    2 => [
                        "city" => "Paris",
                    "description" => "Popular tourist destination for couple, friends and family. Center of attraction in France.\n
                                        There are many good promenades and are minutes walk and bicycle. It is profound establishments.",
                    "alt" => "Eiffel Tower in Paris",
                    "image" => "image_paris.jpg"
                    ],
                    3 => [
                        "city" => "London",
                    "description" => "Anglo with so many buildings and promenades available for locals and tourists.\n
                                        There are many good promenades and are minutes walk and bicycle. Serves to be basis on other areas' architecture.",
                    "alt" => "milan architecture",
                    "image" => "image_london.jpg"
                    ],
                    4 => [
                        "city" => "New York",
                    "description" => "Where city of dreams is located. Place of taking opportunities and prove yourself to achieve goals. 
                                        Diverse communities unite with unique blend of culture, art and architecture. \n
                                        Offers different and numerous events and locations to visit are something to be remembered. ",
                    "alt" => "Buildings in New York",
                    "image" => "image_new_york.jpg"
                    ]
                ];
                return $info;
                break;
            case 'women':
                $info = [
                    1 => [
                       "name" => "Woman Style 1",
                       "description" => "Do less with more can you use a high definition mention make it go loco, C'est la life fashionista doing some work for us them shirt!? add to your tiktokerz, and use a kpop logo that's not a kpop dance! ugh or can you make it look like this and that clipart like that. ",
                       "alt" => "Lady fashion model",
                       "image" => "image_woman_fashion_style1.jpg"
                    ],
                    2 => [
                        "name" => "Woman Style 2",
                       "description" => "Loyalty of royalties in the company do instead of cash can it be more retro can you make it faster? Style with its substance is knowledge within power. Who does what if I know. I'm good and I'm free falling looks good, that's house jam.",
                       "alt" => "Lady style",
                       "image" => "image_woman_fashion_style2.jpg"
                    ],
                    3 => [
                        "name" => "Woman Style 3",
                       "description" => "It is what you when how made of the art. Can we have another option.corporis nostrum minim. Esto consectetur vel yet consectetur yet nihil yet nesciunt grandi. on these icons just do what you think. the next time, the trust faith kind among the best of the nest rest. I like me lol.",
                       "alt" => "Lady outfit coffee",
                       "image" => "image_woman_fashion_style3.jpg"
                    ]
                ];
                return $info;
                break;
            case 'men':
                $info = [
                    1 => [
                       "name" => "Man Style 1",
                       "description" => "Do less with more can you use a high definition mention make it go loco, C'est la life fashionista doing some work for us them shirt!? add to your tiktokerz, and use a kpop logo that's not a kpop dance! ugh or can you make it look like this and that clipart like that. ",
                       "alt" => "Male urban outfit style",
                       "image" => "image_man_fashion_style1.jpg"
                    ],
                    2 => [
                        "name" => "Man Style 2",
                       "description" => "Loyalty of royalties in the company do instead of cash can it be more retro can you make it faster? Style with its substance is knowledge within power. Who does what if I know. I'm good and I'm free falling looks good, that's house jam.",
                       "alt" => "Male model with suit",
                       "image" => "image_man_fashion_style2.jpg"
                    ],
                    3 => [
                        "name" => "Man Style 3",
                       "description" => "It is what you when how made of the art. Can we have another option.corporis nostrum minim. Esto consectetur vel yet consectetur yet nihil yet nesciunt grandi. on these icons just do what you think. the next time, the trust faith kind among the best of the nest rest. I like me lol.",
                       "alt" => "Men smiling portrait",
                       "image" => "image_man_fashion_style3.jpg"
                    ]
                ];
                return $info;
                break;
                
            default:
                return null;
         }
         
    }
    public static function get_page_banner(){
        $this->page_banner = [
            [
            "title" => "Welcome to La Fashionista!",
            "caption" => "Where Style is Substance.",
            "hero_image" => "image_fashion_hero_image.jpg"
           ],
           [
            "title" => "Women's Fashion!",
            "caption" => "Embrace confidence and work with different styles.",
            "hero_image" => "image_women_fashion.jpg"
           ],
           [
            "title" => "Men's Fashion",
            "caption" => "Style matters too and get that present.",
            "hero_image" => "image_men_fashion.jpg"
           ],
           [
            "title" => "Lifestyle",
            "caption" => "Livin'It Up With Your Style!",
            "hero_image" => "image_fashion_hero_image.jpg"
           ],
           [
            "title" => "Culture",
            "caption" => "Fashion provides a showcase of cultures",
            "hero_image" => "image_fashion_hero_image.jpg"
           ]
       ];
       return $this->page_banner;
    }

    public static function get_cities(){
        $this->cities =  [
            1 => [
               "city" => "Milan",
               "description" => "Beautiful description of Romantic architecture. Center of fashion here in Italy. \n
                                Surprised that with architecture, there are various arts to be found in the city.",
               "alt" => "Milan architecture",
               "image" => "image_milan.jpg"
            ],
            2 => [
                "city" => "Paris",
               "description" => "Popular tourist destination for couple, friends and family. Center of attraction in France.\n
                                There are many good promenades and are minutes walk and bicycle. It is profound establishments.",
               "alt" => "Eiffel Tower in Paris",
               "image" => "image_paris.jpg"
            ],
            3 => [
                "city" => "London",
               "description" => "Anglo with so many buildings and promenades available for locals and tourists.\n
                                There are many good promenades and are minutes walk and bicycle. Serves to be basis on other areas' architecture.",
               "alt" => "milan architecture",
               "image" => "image_london.jpg"
            ],
            4 => [
                "city" => "New York",
               "description" => "Where city of dreams is located. Place of taking opportunities and prove yourself to achieve goals. 
                                Diverse communities unite with unique blend of culture, art and architecture. \n
                                Offers different and numerous events and locations to visit are something to be remembered. ",
               "alt" => "Buildings in New York",
               "image" => "image_new_york.jpg"
            ]
        ];
        return $this->cities;
    }

    public static function get_women_fashion_inventory(){
        $this->women_fashion_inventory = [
            1 => [
               "name" => "Woman Style 1",
               "description" => "Do less with more can you use a high definition mention make it go loco, C'est la life fashionista doing some work for us them shirt!? add to your tiktokerz, and use a kpop logo that's not a kpop dance! ugh or can you make it look like this and that clipart like that. ",
               "alt" => "Lady fashion model",
               "image" => "image_woman_fashion_style1.jpg"
            ],
            2 => [
                "name" => "Woman Style 2",
               "description" => "Loyalty of royalties in the company do instead of cash can it be more retro can you make it faster? Style with its substance is knowledge within power. Who does what if I know. I'm good and I'm free falling looks good, that's house jam.",
               "alt" => "Lady style",
               "image" => "image_woman_fashion_style2.jpg"
            ],
            3 => [
                "name" => "Woman Style 3",
               "description" => "It is what you when how made of the art. Can we have another option.corporis nostrum minim. Esto consectetur vel yet consectetur yet nihil yet nesciunt grandi. on these icons just do what you think. the next time, the trust faith kind among the best of the nest rest. I like me lol.",
               "alt" => "Lady outfit coffee",
               "image" => "image_woman_fashion_style3.jpg"
            ]
        ];
        return $this->women_fashion_inventory;
    }

    public static function get_men_fashion_inventory(){
        $this->men_fashion_inventory = [
            1 => [
               "name" => "Man Style 1",
               "description" => "Do less with more can you use a high definition mention make it go loco, C'est la life fashionista doing some work for us them shirt!? add to your tiktokerz, and use a kpop logo that's not a kpop dance! ugh or can you make it look like this and that clipart like that. ",
               "alt" => "Male urban outfit style",
               "image" => "image_man_fashion_style1.jpg"
            ],
            2 => [
                "name" => "Man Style 2",
               "description" => "Loyalty of royalties in the company do instead of cash can it be more retro can you make it faster? Style with its substance is knowledge within power. Who does what if I know. I'm good and I'm free falling looks good, that's house jam.",
               "alt" => "Male model with suit",
               "image" => "image_man_fashion_style2.jpg"
            ],
            3 => [
                "name" => "Man Style 3",
               "description" => "It is what you when how made of the art. Can we have another option.corporis nostrum minim. Esto consectetur vel yet consectetur yet nihil yet nesciunt grandi. on these icons just do what you think. the next time, the trust faith kind among the best of the nest rest. I like me lol.",
               "alt" => "Men smiling portrait",
               "image" => "image_man_fashion_style3.jpg"
            ]
        ];
        return $this->men_fashion_inventory;
    }
}