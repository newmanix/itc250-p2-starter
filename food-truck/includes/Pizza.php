<?php
/**
 * 
 * @package FoodTruck
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 0.1 2016/07/20
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @todo finish instruction sheet
 * @todo add more complicated checkbox & radio button examples
 */

/**
* Pizza class, stores pizza
*
* I love pizza!
*
*<code>
* $myPizza = new Pizza('Pepperoni','Large',19.99);
*</code>
*
* @todo none
*/

class Pizza()
{
    public $Type = '';
    public $Size = '';
    public $Price = 19.99;
    
    
    
  /**
   * Loads pizza data
   *
   * More detail about description
   *
   *<code>
   * $myPizza = new Pizza('Pepperoni','Large',19.99);
   *</code>
   *
   * @param string $Type What kind of pizza it is
   * @param string $Size How large the pizza is
   * @return float $Price Cost of the pizza
   * @todo none
   */

    public function __construct($Type,$Size,$Price)
    {
        $this->Type = $Type;
        $this->Size = $Size;
        $this->Price = $Price;
        
    }//end constructor
}//end Pizza class










