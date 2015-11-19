public class largest_prime_factor{
  public static void main(String[] args) {

    int x = 1;
    long y = 600851475143L;
    long fim = 600851475143L;

    while(x <= fim){
      x += 1;

      if(y % x == 0){
        System.out.println(x);
        fim = fim/x;
        }
    }
    System.out.println("Resultado: "+ x);
  }
}
