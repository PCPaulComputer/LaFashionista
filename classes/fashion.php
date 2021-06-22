<?php

global $style;
class Fashion {
   public $title = "La Fashionista";
   public $banner = "Make Style A Substance.";
   public $description = "Your source to the latest trends in fashion, lifestyle and culture.";
   
   public function get_banner($page){
       $page_banner = $this->get_data('banner');
        switch($page) {
            case 'cities':
                echo '
                <div class="container p-2 bg-warning text-center">
                    <h1 class="display-4">'.$page_banner[0]["title"].'</h1>
                    <p class="lead">'.$page_banner[0]["caption"].'</p>
                </div>';
                break;
            case 'women':
                echo '
                <div class="container p-2 bg-warning text-center">
                    <h1 class="display-4">'.$page_banner[1]["title"].'</h1>
                    <p class="lead">'.$page_banner[1]["caption"].'</p>
                </div>';
                break;
            case 'men':
                echo '
                <div class="container p-2 bg-warning text-center">
                    <h1 class="display-4">'.$page_banner[2]["title"].'</h1>
                    <p class="lead">'.$page_banner[2]["caption"].'</p>
                </div>';
                break;
            case 'lifestyle':
                echo '
                <div class="container p-2 bg-warning text-center">
                    <h1 class="display-4">'.$page_banner[3]["title"].'</h1>
                    <p class="lead">'.$page_banner[3]["caption"].'</p>
                </div>';
                break;
            case 'culture':
                echo '
                <div class="container p-2 bg-warning text-center">
                    <h1 class="display-4">'.$page_banner[4]["title"].'</h1>
                    <p class="lead">'.$page_banner[4]["caption"].'</p>
                </div>';
                break;
            default:     
                echo '
                <div class="container p-2 bg-warning text-center">
                    <h1 class="display-4">'.$page_banner[0]["title"].'</h1>
                    <p class="lead">'.$page_banner[0]["caption"].'</p>
                </div>';      
        }
   }
   /**
    * get_new_arrivals method storing new arrivals in array and looping its data and include data into html elements
    */
    public function get_big_four_cities(){
            $cities = $this->get_data('cities');
            $this->get_banner('cities');
            echo '
            <!--Hero Image -->
                    <div class="container">';
                        echo '<div class="row">';                            
                            echo '<div class="col-sm-2"></div>';
                            echo '<section class="callout col-sm-8 mt-4">';
                            echo '<h1 id="big4" class="text-center">The Big 4</h1>';
                                    foreach($cities as $product => $item):                                       
                                    echo '<div class="row">';                       
                                        echo ' <section class="calloutBoxImage fl col-sm-4">
                                                <img class="w-100" src="images/'.$cities[$product]['image'].'" alt="'.$cities[$product]['alt'].'">
                                            </section>
                                            <section class="calloutBoxText fr col-sm-8">';
                                                echo '<h2>'.$cities[$product]['city'].'</h2>';
                                                echo '<p>'.$cities[$product]['description'].'</p>
                                            </section>
                                            <br />
                                        </div>';
                                    endforeach;
                                echo '</section>';
                            echo '<div class="col-sm-2"></div>';
                        echo "</div>";
                echo '</div>';
    }

    public function get_wfashion(){
        $w_fashion = $this->get_data('women');           
        $this->get_banner('women');
            echo "<section class='container'>";
                echo '<section class="row text-center">';
                echo '<section class="col-sm-1"></section>';
                foreach($w_fashion as $product => $item):                   
                        echo '<section class="col-sm-3 col-xs-3 bg-light m-3 text-center p-2">
                                    <img src="images/'.$w_fashion[$product]['image'].'" alt="'.$w_fashion[$product]['alt'].'">
                                    <h3>'.$w_fashion[$product]['name'].'</h3>
                                    <p>'.$w_fashion[$product]['description'].'</p>
                              </section>';                          
                endforeach;
                echo '<section class="col-sm-2"></section>';
                echo '</section>';
            echo "</section>";  
    }

    public function get_mfashion(){
        $m_fashion = $this->get_data('men');
        $this->get_banner('men');
            echo "<section class='container'>";
                echo '<section class="row text-center">';
                echo '<section class="col-sm-1"></section>';
                foreach($m_fashion as $product => $item):                   
                        echo '<section class="col-sm-3 col-xs-3 bg-light m-3 text-center p-2">
                                    <img src="images/'.$m_fashion[$product]['image'].'" alt="'.$m_fashion[$product]['alt'].'">
                                    <h3>'.$m_fashion[$product]['name'].'</h3>
                                    <p>'.$m_fashion[$product]['description'].'</p>
                              </section>';                          
                endforeach;
                echo '<section class="col-sm-2"></section>';
                echo '</section>';
            echo "</section>";  
    }

    public function get_lifestyle(){
        $this->get_banner('lifestyle');
        echo '<!--Lifestyle-->
                <section class="details container">
                    <!--Gallery- -->
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_lifestyle1.png" alt="lifestyle colourful suit, fashionista man"></p></section>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_lifestyle2.png" alt="lifestyle man with jacket and a coffee"></p></section>  
                        <div class="col-sm-1"></div>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_lifestyle3.png" alt="lifestyle man with cool style"></p></section>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_lifestyle4.png" alt="lifestyle confident man"></p></section>  
                        <div class="col-sm-1"></div>
                    </div>               
                </section>'; 
    }

    public function get_culture(){
        $this->get_banner('culture');
        echo '<!--Culture -->
                <section class="details container">                 
                    <!--Gallery- -->
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_culture1.jpg" alt="lifestyle feature image lady with umbrella during rainy season"></p></section>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_culture2.jpg" alt="lifestyle feature image with garmets that represents culture"></p></section>  
                        <div class="col-sm-1"></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_culture3.jpg" alt="lifestyle feature image earrings, colourful tradition and mix of culture."></p></section>
                        <section class="col-sm-5 collection"><p class="bg-light m-3"><img class="w-100 p-2" src="images/image_fashion_culture4.jpg" alt="lifestyle feature image proud, confident, represent good."></p></section>  
                        <div class="col-sm-1"></div>
                    </div>                             
                </section>'; 
    }

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
            case 'banner':
                $info =  [
                    [
                    "title" => "Welcome to La Fashionista!",
                    "caption" => "Where Style is Substance.",
                    "hero_image" => "image_hero_image_fashion.jpg"
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
                    "hero_image" => "image_lifestyle_fashion.jpg"
                   ],
                   [
                    "title" => "Culture",
                    "caption" => "Fashion provides a showcase of cultures",
                    "hero_image" => "image_culture_fashion.jpg"
                   ]
               ];
               return $info;
               break;
            default:
                return null;
         }
         
    }


    /**
     * display method - shows multi-page feel in a single page application
     */
    public function display($page){      
        switch($page){
            case 'cities':
                $this->get_big_four_cities();
                break;
            case 'women':
                $this->get_wfashion();
                break;
            case 'men':
                $this->get_mfashion();
                break;
            case 'lifestyle':
                $this->get_lifestyle();
                break;
            case 'culture':
                $this->get_culture();
                break;
            default:
                $this->get_big_four_cities();
            
        }        
    }
}