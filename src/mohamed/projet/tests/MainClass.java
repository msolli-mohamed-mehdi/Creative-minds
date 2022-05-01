/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mohamed.projet.tests;

import mohamed.projet.entities.Reclamation;
import mohamed.projet.services.ReclamationCrud;
import mohamed.projet.utils.MyConnection;

/**
 *
 * @author ni3a
 */
public class MainClass {
    public static void main(String[] args){
       
        
        
        
        
        ReclamationCrud pcd = new ReclamationCrud();
        
        //Reclamation p2 = new Reclamation(2,1,"wooooooooooooooooooowwwwwwwwwww","réclamation reff","Offre","eee@ee.eee"); 
        //pcd.ajouterReclamation2(p2);
        
        System.out.println(pcd.afficherReclamations());
        
        
        Reclamation p3 = new Reclamation (2,1,"wooooooooooooooooooowwwwwwwwwww22333","réclamation reff","Offre","eee@ee.eee");
        p3.setId(3);
        //pcd.UpdateReclamation(p3);
        
      //  System.out.println(pcd.afficherReclamations());
      //pcd.ajouterReclamation2(p3) ; 
        
        
        
        pcd.DeleteReclamation(80);
        
         
         
    }
    
}
