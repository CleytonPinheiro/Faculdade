
package mapa1;
public class Automovel {
   protected boolean motor = false;
   protected float velocidade = 0f;
   protected int qrodas;
   protected int qportas;
   protected int marcha = 0;
   protected boolean alarme = false;
    
    //Métodos com comportamentos distintos.   
    public void acelerar (){
        
    }
    public void diminuir(){
        
    }
     //Métodos Comuns
    public void trocarPneus(){
        System.out.println("Substituição de pneus:" + "R$ 150,00.");
        
    } 
   public void ligar (){
       this.motor = true;
       System.out.println("Carro ligado.");
   }
   public void desligar(){
       this.motor = false;
       System.out.println("Carro desligado.");
   }  
   public void ativarAlarme(){
      
         this.alarme =true;     
         System.out.println("Alarme/trava ativado.");  
       }
       
   
   public void desativarAlarme(){
      
         this.alarme =false;     
         System.out.println("Alarme/trava Desativado.");  
   }
   
   public void exibeEstado(){
     if (this.motor == true){
        System.out.println ("--------------------------------:");
        System.out.println ("Veículo se encontra ligado:"); 
        System.out.println ("Velocidade atual:" + this.velocidade + " Km/h");        
        
        System.out.println ( "Quantidade de  portaS: " + this.qportas);
        System.out.println ( "Quantidade de rodas: " + this.qrodas);
        
     }else{
        System.out.println ("--------------------------------:");
        System.out.println ("Veículo se encontra desligado:");
        System.out.println ("Velocidade atual:" + this.velocidade + " Km/h");        
        
        System.out.println ( "Quantidade de  portaS: " + this.qportas);
        System.out.println ( "Quantidade de rodas: " + this.qrodas);
    }
    
}
}

