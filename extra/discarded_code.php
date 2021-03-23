<?php
//This document is discarded code only.

//Prep and variables.
//api.openweathermap.org/data/2.5/weather?q=london&appid=c0f764ce5e4c25576b8d6325fc223810


// This was a bit of code I was going to use to 
//make sure that the use input the first correct word.
//Demonstrate that I know abit about regex at the same time.$pattern = "/weather/i"; 
/*
preg_match($pattern, $line);
$array_cmd = explode(' ',$line);
$weather_word = '';
preg_match($pattern,$array_cmd[0],$weather_word);
$weather_city = $array_cmd[1];
/*
//But in the end, I tried to make it 
//simple so he user just had to input a good city name

//**
// // This was used to make sure that the city input was a real city.
/*
$citylist_json = file_get_contents('world_cities.json'); //Original 2MB file.
$worldCityList = json_decode($citylist_json);
$arrayCityList = array();
foreach($worldCityList as $key => $value)
{
array_push($arrayCityList, $value->name);
}
$arrayCityList_json = json_encode($arrayCityList);
file_put_contents('city_list.json', $arrayCityList_json);
die();
*/

/*
$arrayCity_json = file_get_contents("city_list.json");
$arrayCity = json_decode($arrayCity_json);

foreach($arrayCity as $key => $value)
{
    if($value === $line)
    {
        $cityCount++;
    } 
}
I discovered that there was more than one London, one in USA, one in Canada...
*/



/*

use PHPUnit\Framework\TestCase;
class WeatherMyDude 
{
public function __construct()
{
    $line = "random";
    $weather = "random";
}



if (! defined('SIMPLE_TEST')) {
    define('SIMPLE_TEST', 'simpletest/');
}
require_once(SIMPLE_TEST . 'autorun.php');

class TestOfLogging extends UnitTestCase {
    function testCreatingNewFile() {
    }
}
*/

/*
test-weather.php


<?php
namespace weather {

    require_once('/weather.php');

    class request_console_test
    {
        public function __construct()
        {
            function runtests()
            {
                if (! defined('SIMPLE_TEST')) {
                     define('SIMPLE_TEST', '/tests/simpletest/');
                }
                function testCreatingNewFile()
                {
                }
            }
        }
    }

}

//Waiting for string got array
//Waiting for array got string
*/ 
print_r("Nothing to see here captain, only comments & code. Have a nice day");