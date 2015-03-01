/*
 * Description of javaapplication1
 */
package javaapplication1;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

/**
 *
 * Description of NewClass
 */
public class NewClass extends AbstractClass implements NewInterface {
  
  // Whatever, we aren't doing rocket science here
  final public static Double PI_ISH = 22.0/7.0;

  // For Earth anyway
  public static Double gravity = 9.81;

  // Define a bunch of junk
  public Boolean someBool = true;
  public Integer someInt = 123;
  protected Double someDouble = 123.123;
  protected String someString = "LOL";
  private final List<String> someArray = Arrays.asList("a","b","c","d","e");
  private NewInnerClass someObject;

  // Define more junk
  public static Boolean staticBool = false;
  protected static List<Integer> staticArray = Arrays.asList(1,2,3,4,5);
  
  /**
   * 
   */
  public NewClass() {
    NewInnerClass innerClass = new NewInnerClass();
    innerClass.someBool = this.someBool;
    innerClass.someInt = this.someInt;
    this.someObject = innerClass;
  }
  
  /**
   * 
   */
  public static void iterateSomeArrayStatic() {
    for (Integer item : staticArray) {
      System.out.println(item);
    }
  }
  
  /**
   * 
   * @return boolean
   */
  public static Boolean isStaticBoolTrue() {
    if (true == NewClass.staticBool) {
      return true;
    }
    else if (false == NewClass.staticBool) {
      return false;
    }
    else {
      return false;
    }
  }
  
  /**
   * 
   */
  @Override
  public void overrideMe() {
    iterateSomeArray();
  }
  
  /**
   * 
   */
  @Override
  public void implementMe() {
    // Do something
  }
  
  /**
   * 
   * @return string
   */
  public String throwException() {
    try {
      throw new RuntimeException("Throwing an exception");
    }
    catch (Throwable e) {
      return e.getMessage();
    }
  }
  
  /**
   * 
   * @param s
   * @param i
   * @param o
   */
  public void takeSomeArgs(String s, Integer i, NewClass o) {
    System.out.println(s);
    System.out.println(i);
    System.out.println(o);
  }
  
  /**
   * 
   */
  protected void iterateSomeArray() {
    for (String s : someArray) {
      System.out.println(s);
    }
  }
  
  /**
   * Define an inner class
   */
  private class NewInnerClass {
    public Boolean someBool;
    public Integer someInt;
  }
  
}
