import java.util.Scanner;

public class ParImpar {
    public static void main(String[] args) {
        /*
            Faça um programa que peça N números inteiros,
            calcule e mostre a quantidade de números pares
            e a quantidade de números impares.
        */

        Scanner scan = new Scanner(System.in);

        int qtdeNumero;
        int numero;
        int par = 0;
        int impar = 0;

        System.out.println("Quantidade de números: ");
        qtdeNumero = scan.nextInt();

        int count = 0;
        do {
            System.out.println("Número: ");
            numero = scan.nextInt();
            if (numero % 2 == 0){
                par++;
            } else {
                impar++;
            }
            count++;
        } while (count < qtdeNumero);

        System.out.println("Quantidade de Par: " + par);
        System.out.println("Quantidade de Impar: " + impar);
    }
}
