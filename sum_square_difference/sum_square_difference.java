public class sum_square_difference{

public static void main(String[] args) {

  int[] result = new int [100];
  int i = 0, soma = 0, a = 0;

    for(int x = 0; x <= 100; x++){
      result[i] = x * x;
      soma = result[i] + soma;
    }
    for(int y = 0; y <= 100; y++){
      a = a + y;
    }
    int resultadofinal = a*a - soma;
    System.out.println("Square of the sum:  "+ a*a);
    System.out.println("Sum os the squares: "+ soma);
    System.out.println("-----------------------------");
    System.out.println("Difference between: "+ resultadofinal);
  }
}
