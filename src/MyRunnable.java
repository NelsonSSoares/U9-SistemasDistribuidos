//Programa para demonstrarmos o uso de Threads

class ClasseRunnable implements java.lang.Runnable{
    private int contador;
    private final int contadorTotal;

    public ClasseRunnable(int contadorTotal){
        this.contadorTotal = contadorTotal;
        this.contador = 0;
    }
    
    @Override
    public void run() {
        while(contador <= contadorTotal){
            System.out.println(Thread.currentThread().getName() + "Prioridade :" + Thread.currentThread().getPriority());

            System.out.println(Thread.currentThread().getContextClassLoader() + "Contador: " + contador);
            
            contador++;
            System.out.println(contador);
            //pausa no processamento (sleep)
            try{
                System.out.println(Thread.currentThread().getName() + "Dormindo...");
                Thread.sleep(2000);
            }catch(Exception e){
                e.printStackTrace(System.err);
            }
            
        }
        System.out.println("Thread Finalizada");    
    }
}

public class MyRunnable {
    public static void main(String[] args) {
        // criação dos objetos runnable
        ClasseRunnable r1 = new ClasseRunnable(5);
        ClasseRunnable r2 = new ClasseRunnable(10);
        ClasseRunnable r3 = new ClasseRunnable(7);
        ClasseRunnable r4 = new ClasseRunnable(3);
        
        // criação e execução dos Threads
        Thread t1 = new Thread(r1);
        Thread t2 = new Thread(r2);
        Thread t3 = new Thread(r3);
        Thread t4 = new Thread(r4);
        t1.setName("Runnable1 'R1' - ");
        t2.setName("Runnable2 'R2' - ");
        t3.setName("Runnable3 'R3' - ");
        t4.setName("Runnable4 'R4' - ");
        // MIN(1), NORMAL(5) MAX(10)
        t1.setPriority(Thread.NORM_PRIORITY);
        t2.setPriority(Thread.NORM_PRIORITY);
        t3.setPriority(Thread.NORM_PRIORITY);
        t4.setPriority(Thread.NORM_PRIORITY);
        
        t1.start();
        t2.start();
        t3.start();
        t4.start();
        
    }
}