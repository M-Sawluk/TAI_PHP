<?php
class Car {
    private $name;
    private $price;
    
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
    
    public function getSlide(){
        echo "<div class='carousel-item' ><img src='../static/zdjecia/"
                .$this->name.".jpg' alt=''><div class='details'>"
                ."<p>".$this->name."</p>"
                ."<p>Cena: ".$this->price."zł/dzień</p>"
                ."<button class='but butdetails' value='Wynajmij!'>Wynajmij!</button>"
                ."</div></div>";
    }
    
    public function getThumbnail(){
        echo "<div class='item  col-xs-4 col-lg-4'>"
                ."<div class='thumbnail slide-in-elliptic-top-fwd'>"
                    ."<img src='../static/zdjecia/".$this->name.".jpg' alt=''/>"
                    ."<div class='caption'>"
                        ."<h4 class='group inner list-group-item-heading' >".$this->name."</h4>"
                        ."<span>".$this->price."</span><span>zł/dzień</span><br>"
                        ."<button class='butrent' value='Wynajmij!'>Wynajmij!</button>"
                    ."</div>"
                ."</div>"
            ."</div>";
    }
    
}

    

