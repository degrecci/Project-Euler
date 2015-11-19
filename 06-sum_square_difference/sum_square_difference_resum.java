public class sum_square_difference_resum{
public static void main(String[] args) {

    int res1 = 0, res2 = 0;

    for(int x = 0; x <= 100; x++){
      res1 += x * x;
    }
    for(int y = 0; y <= 100; y++){
      res2 += y;
    }
    res2 *= res2;
    System.out.println("Square of the sum:  "+ res2);
    System.out.println("Sum os the squares: "+ res1);
    System.out.println("-----------------------------");
    System.out.println("Difference between: "+ (res2-res1));
  }
}
