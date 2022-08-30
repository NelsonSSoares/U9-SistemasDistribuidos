public class Assincrona {
    public static void main(String[] args) {
        Valores valor = new Valores();
        System.out.println("Iniciando os Threads");

        //Teste teste = new Teste(40);
        
       // teste.getValor();

        // criação dos threads
        new Thread(new Produtor(valor)).start();
        new Thread(new Consumidor(valor)).start();
    }
}
/*
class Teste{

    private int value;

    public Teste(int value){
        this.value = value;
    }

    public int getValor(){
        return value;
    }
}
 */
// Atividade
// Executar 10 vezes o código e observar a partir de quando
// ocorre um problema com a sincronia.
// Execute novamente as 10 rodadas, alterando o tempo do: 
// Produtor e do Consumidor de forma diferente