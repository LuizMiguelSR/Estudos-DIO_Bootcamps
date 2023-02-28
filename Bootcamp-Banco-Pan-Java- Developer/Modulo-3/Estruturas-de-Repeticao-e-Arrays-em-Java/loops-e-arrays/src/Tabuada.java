import java.util.Scanner;

public class Tabuada {
    public static void main(String[] args) {
        /*
            Desenvolva um gerador de tabuada,
            capaz de gerar a tabuada de qualquer número inteiro entre 1 a 10.
            O usuário deve informar de qual numero ele deseja ver a tabuada.
            A saída deve ser conforme o exemplo abaixo:
            Tabuada de 5:
            5 X 1 = 5
            5 X 2 = 10
            ...
            5 X 10 = 50
        */

        Scanner scan = new Scanner(System.in);

        int tab;

        System.out.println("Escolha a tabuada: ");
        tab = scan.nextInt();

        for (int i = 1; i <= 10; i++) {
            System.out.println(tab + " X " + i + " = " + (tab*i));
        }
    }
}
