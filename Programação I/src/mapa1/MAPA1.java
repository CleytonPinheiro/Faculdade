package mapa1;

public class MAPA1 {

    public static void main(String[] args) {
        Carro c1 = new Carro();    //Instâncias de objetos
        Moto m1 =new Moto();
        Caminhao cam1=new Caminhao();
        
        System.out.println("________ CARRO_________");
        c1.desativarAlarme();
        c1.ligar();
        c1.acelerar();
        c1.acelerar();
        c1.exibeEstado(); 
        
        System.out.println("________ MOTO _________");
        m1.desativarAlarme();
        m1.ligar();
        m1.acelerar();
        m1.acelerar();
        m1.exibeEstado();
        
        System.out.println("________ CAMINHÃO _________");
        
        cam1.acelerar();
        cam1.acelerar();
                 
        cam1.trocarPneus();
        cam1.exibeEstado();  
     
              
    }
}