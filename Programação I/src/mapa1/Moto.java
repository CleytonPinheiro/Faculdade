
package mapa1;
public class Moto extends Automovel{
     public Moto(){ //Metodo construtor, recebe mesmo nome da classe atual.
       this.qportas = 0;
       this.qrodas = 2;
   }
     // Sobrepossição de método
   @Override
   public void acelerar(){
       if 
           (this.velocidade >= 0 && this.motor == true){
           this.velocidade += 20;
           System.out.println("Moto acelerando em 20:" );
           System.out.println(" Velocidade atual:"+ this.velocidade+ "Km/h");
            if
               (this.velocidade > 110){
                System.out.println("Atenção, veículo acima de 110 km/h");
           }
            
       }else{
           System.out.println(" Impossível, moto desligada");           
       }
       if
               (this.velocidade >=0 && this.velocidade <= 20 ){
                this.marcha += 1;
                System.out.println (" Primeira marcha.");
           }if
               (this.velocidade >20 && this.velocidade <= 40){
               this.marcha += 1; 
               System.out.println (" Segunda marcha.");
           }if
               (this.velocidade >40 && this.velocidade <=60){
               this.marcha += 1;
               System.out.println (" Terceira marcha.");
           }
   }
   @Override
   public void diminuir(){
       if
           (this.velocidade > 0 && this.motor == true){
           this.velocidade -= 20;
           System.out.println(" MOto desacelerando em 20:");
           System.out.println(" Velocidade atual:"+ this.velocidade);          
       }else{
           System.out.println(" Impossível, moto desligado");
   }
}
}
    
    
