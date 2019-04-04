<?php
require_once("/var/www/html/site/simple_html_dom.php");
class Foreca
{  
    public $html;
    
    // объявление метода
    public function __construct($country, $city) {
       $this->html = new simple_html_dom();
       $this->html->load_file("https://www.foreca.ru/".$country."/".$city."/");
    }
    
    public function CurrentTemperature() {
       return preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=left]')[0]->find('span[class=warm txt-xxlarge]')[0]->find('strong')[0]);
    }   
    
    public function Feeling() {
       return preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[0]);
    } 
    
    public function Pressure() {
       return round(preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[1])/1.334-10, 2);
    } 
    
    public function DewPoint() {
       return preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[2]);
    } 
    
    public function Humidity() {
       return preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[3]);
    } 
    
    public function Visibility() {
       return preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[4]);
    } 
    
    public function Rising() {
       return preg_replace("/[^-0-9:]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[5]);
    } 
    
    public function Sunset() {
       return preg_replace("/[^-0-9:]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[6]);
    } 
    
    public function Longitude() {
       return strval($this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=right txt-tight]')[0]->find('strong')[7]->innertext);
    } 
    
    public function WindSpeed() {
       return preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=left]')[0]->find('strong')[1]);
    }
    
    public function WindDeg() {
       return strval($this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c1]')[0]->find('div[class=left]')[0]->find('img')[1]->alt);
    }
    
    public function GetTodayPrognoz() {
       return new Prognoz(preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c2]')[0]->find('div[class=c2_a]')[0]->find('a')[0]->find('span')[0]->find('strong')[0]), preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c2]')[0]->find('div[class=c2_a]')[0]->find('a')[0]->find('span')[1]->find('strong')[0]));
    }
    public function GetTomorrowPrognoz() {
       return new Prognoz(preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c2]')[0]->find('div[class=c2_a]')[1]->find('a')[0]->find('span')[0]->find('strong')[0]), preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c2]')[0]->find('div[class=c2_a]')[1]->find('a')[0]->find('span')[1]->find('strong')[0]));
    }
    public function GetAfterTomorrowPrognoz() {
       return new Prognoz(preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c2]')[0]->find('div[class=c2_a]')[2]->find('a')[0]->find('span')[0]->find('strong')[0]), preg_replace("/[^-0-9.]/", '', $this->html->find('div[id=wrap]')[0]->find('div[id=pagewrapper]')[0]->find('div[class=content]')[0]->find('div[class=content_2col]')[0]->find('div[id=webslice_content]')[0]->find('div[class=entry-content]')[0]->find('div[class=table t_cond]')[0]->find('div[class=c2]')[0]->find('div[class=c2_a]')[2]->find('a')[0]->find('span')[1]->find('strong')[0]));
    }
}
class Prognoz
    {
        public $TDay;
        public $TNight;
        public function __construct($TDay, $TNight) {
           $this->TDay = $TDay;
           $this->TNight = $TNight;
        }
    }
?>