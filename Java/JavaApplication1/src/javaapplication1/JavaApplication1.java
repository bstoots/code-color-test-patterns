/*
 * Description of javaapplication1
 */
package javaapplication1;

/**
 * Description of JavaApplication1
 */
public class JavaApplication1 {

  /**
   * @param args the command line arguments
   */
  public static void main(String[] args) {
    NewClass nc = new NewClass();
    // 
    System.out.println(nc.someBool);
    System.out.println(nc.someInt);
    // 
    System.out.println(NewClass.isStaticBoolTrue());
    // 
    Double value = NewClass.gravity / NewClass.PI_ISH;
    System.out.println(value);
    // 
    nc.takeSomeArgs("Something", 123, nc);
    // 
    System.out.println(nc.throwException());
  }
  
}
