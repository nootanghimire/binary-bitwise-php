<?php 

/**
 * Pizza: 
 *      0 0 0 0 0 0 0 0
 *      ^ ^ ^ ^ ^ ^ ^ ^
 *      S O A M J B P R
 */
class Pizza {
    
    public const TOPPING_ROCKET   = 1;   // 00000001
    public const TOPPING_PINAPPLE = 2;   // 00000010
    public const TOPPING_BACON    = 4;   // 00000100
    public const TOPPING_JALAPENO = 8;   // 00001000 
    public const TOPPING_MUSHROOM = 16;  // 00010000
    public const TOPPING_ANCHOVY  = 32;  // 00100000
    public const TOPPING_OLIVES   = 64;  // 01000000
    public const TOPPING_SALAMI   = 128; // 10000000
    public const TOPPING_ALL      = 255; // 11111111
    public const TOPPING_NONE     = 0;   // 00000000

    public const TOPPINGS = [
        'Rocket' => self::TOPPING_ROCKET,
        'Pineapple' => self::TOPPING_PINAPPLE,
        'Bacon' => self::TOPPING_BACON,
        'Jalapeño' => self::TOPPING_JALAPENO,
        'Mushroom' => self::TOPPING_MUSHROOM,
        'Anchovy' => self::TOPPING_ANCHOVY,
        'Olives' => self::TOPPING_OLIVES,
        'Salami' => self::TOPPING_SALAMI,
    ];

    /**
     * @var int
     */
    private $toppings;

    /**
     * @var string
     */
    private $name;

    public function __construct($toppings, $name = "Some Random Pizza") {
        $this->toppings = $toppings;
        $this->name = $name;
    }

    public function addTopping($topping) {
        $this->toppings = $this->toppings | $topping;
    }

    public function removeTopping($topping) {
        $this->toppings = $this->toppings & ~$topping;
    }

    public function toggleTopping($topping) {
        $this->toppings = $this->toppings ^ $topping;
    }

    public function cook() {
        echo "Here's your pizza with: ";
        foreach(self::TOPPINGS as $key => $topping) {
            if ($this->toppings & $topping) {
                echo $key . ", ";
            }
        }
        echo "\nIs that how {$this->name} looks like?\n\n";
    }

    public function setName($name) {
        $this->name = $name;
    }
}

// I want Pizza with everything
$pizza = new Pizza(Pizza::TOPPING_ALL, "Everything Pizza");
$pizza->cook();

// Oh, actually remove Salami and Jalapeno
$pizza->removeTopping(Pizza::TOPPING_SALAMI);
$pizza->removeTopping(Pizza::TOPPING_JALAPENO);
$pizza->setName("NOSALAMI-NOSPICE Pizza");
$pizza->cook();

// Mhh, Last one: Add back the Jalepeno
$pizza->addTopping(Pizza::TOPPING_JALAPENO);
$pizza->setName("NOSALAMI-SPICE Pizza");
$pizza->cook();


// I want a Pizza with nothing; just the basic cheeze and stuff
$pizzaA = new Pizza(Pizza::TOPPING_NONE, "Basic Pizza for A");

// Add some Olives, maybe?
$pizzaA->addTopping(Pizza::TOPPING_OLIVES);
// And some mushroom would be good
$pizzaA->addTopping(Pizza::TOPPING_MUSHROOM);

// Maybe, Pinaeapple? or not?
//$pizzaA->addTopping(Pizza::TOPPING_PINAPPLE);

$pizzaA->cook();


// I'm the pinapple-controversy-maker, I'll have the same as pizzaA, but
// if he has pinapple in it, I wont have it in mine. If he doesn't I will.
$pizzaB = clone $pizzaA;
$pizzaB->setName("Basic Pizza for B");
$pizzaB->toggleTopping(Pizza::TOPPING_PINAPPLE);
$pizzaB->cook();
