<?php
namespace Oh\Look\A\Ns {
  use Some\Fake\Ns;
  /**
   * Description of newPHPClass
   */
  class newPHPClass extends Ns\abstractPHPClass implements Ns\newPHPInterface {
    use Ns\newPHPTrait;
    
    // Whatever, we aren't doing rocket science here
    const PI_ISH = 22/7;

    // For Earth anyway
    public static $gravity = 9.81;

    public static $url = "https://lolololololololol.com";

    // Define a bunch of junk
    public    $someBool = true;
    public    $someInt = 123;
    protected $someFloat = 123.123;
    protected $someString = 'LOL';
    private   $someArray = array(false, 456, 456.456, 'OMG');
    private   $someObject = null;

    // Define more junk
    public static $staticBool = false;
    protected static $staticArray = array(1,2,3,4,5);
    
    /**
     * 
     */
    public function __construct() {
      $object = new \stdClass();
      $object->someBool = $this->someBool;
      $object->someInt = $this->someInt;
      $this->someObject = $object;
    }
    
    /**
     * 
     */
    public static function iterateSomeArrayStatic() {
      foreach (static::$staticArray as $item) {
        var_dump($item);
      }
    }
    
    /**
     * 
     */
    public static function isStaticBoolTrue() {
      if (self::$staticBool === true) {
        return true;
      }
      else if (self::$staticBool === false) {
        return false;
      }
      else {
        return false;
      }
    }
    
    /**
     * 
     */
    public function useHereDoc() {
echo <<<HEREDOC
FOOOOOOOOO
HEREDOC;
    }

    /**
     * 
     */
    public function overrideMe() {
      $this->iterateSomeArray();
    }
    
    /**
     * 
     */
    public function throws() {
      try {
        throw new \Exception('Throwing an exception');
      }
      catch (\Exception $e) {
        return $e->getMessage();
      }
    }
    
    /**
     * @param string $string A string
     * @param integer $int An integer
     * @param newPHPClass $obj A newPHPClass object
     * @return void
     */
    public function takeSomeArgs($string, $int, newPHPClass $obj) {
      var_dump($string, $int, $obj);
    }
    
    /**
     * 
     */
    protected function iterateSomeArray() {
      $count = count($this->someArray);
      for ($i = 0; $i < $count; $i++) {
        var_dump($this->someArray[$i]);
      }
    }
    
  }
}

namespace Some\Fake\Ns {
  /**
   * Sample abstract class definition
   */
  abstract class abstractPHPClass {
    /**
     * Abstract function that must be overriden
     */
    abstract public function overrideMe();
  }
  
  /**
   * Sample interface that must be implemented
   */
  interface newPHPInterface {
    /**
     * Function prototype that must be implemented
     */
    public function implementMe();
  }
  
  /**
   * Sample trait
   */
  trait newPHPTrait {
    /**
     * Implements implementMe() from newPHPInterface 
     */
    public function implementMe() {
      // Do something here
    }
  }
}