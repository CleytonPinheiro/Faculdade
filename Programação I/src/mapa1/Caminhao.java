
package mapa1;
public class Caminhao extends Automovel {
    public Caminhao (){ //Metodo construtor, recebe mesmo nome da classe atual.
       this.qportas = 2;
       this.qrodas = 4;
   }
     // Sobrepossição de método
   
    @Override
   public void acelerar(){
       if 
           (this.velocidade >= 0 && this.motor == true){
           this.velocidade += 5;
           System.out.println("Caminhão acelerando em 5:");
           System.out.println(" Velocidade atual:"+ this.velocidade);
        
        if
               (this.velocidade > 80){
                System.out.println("Atenção, veículo acima de 80 km/h");
           }
            
       }else {
           System.out.println(" Impossível acelerar, caminhão desligado");           
       }
   
   }
   
   public void marcha(){
       if
               (this.velocidade >=0 && this.velocidade < 10 ){
           this.marcha += 1;
           System.out.println (" Primeira marcha.");
       } else {
       }
       if
               (this.velocidade >=10 && this.velocidade < 20){
               this.marcha += 2; 
               System.out.println (" Segunda marcha.");
        }
       if 
               (this.velocidade >= 20){
      System.out.println("Atenção, reduzir velocidade.");
       }   
 }
   @Override
   public void diminuir(){
       if
           (this.velocidade > 0 && this.motor == true){
           this.velocidade -= 5;
           System.out.println(" Caminhão desacelerando em 5:");
           System.out.println(" Velocidade atual:"+ this.velocidade + "Km/h");          
       }else{
           System.out.println(" Impossível, caminhão desligado");
       }
}
}

    

