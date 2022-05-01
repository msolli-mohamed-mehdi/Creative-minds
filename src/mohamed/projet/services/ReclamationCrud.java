/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mohamed.projet.services;

import mohamed.projet.entities.Reclamation;
import java.util.List;
import mohamed.projet.utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.control.Alert;


/**
 *
 * @author ni3a
 */
public class ReclamationCrud {
    
    public void ajouterReclamation2(Reclamation r){
        
        boolean conditionMessage = r.getMessage().length() >= 50;
        
        boolean conditionType = r.getType().length() >= 5;
        
        boolean conditionEmail = r.getEmail().indexOf("@gmail.com")!=-1 || r.getEmail().indexOf("@outlook.fr")!=-1 || r.getEmail().indexOf("@esprit.tn")!=-1 ;
        
        String message="RECLAMATION EST AJOUTEE AVEC SUCCES";
        String requete2="INSERT INTO reclamation (message,status,type,user_id,reservation_id,email) VALUES(?,?,?,?,?,?) ";
        
        if( !conditionEmail ){
            alerter("VEUILLEZ RESPECTER LE FORMAT ADEQUAT DE L'EMAIL : par exemple sous la forme '....@gmail.com' ou bien '....@outlook.fr.com' ou bien '....@esprit.tn' ");     
           
        }else{
            if(!conditionMessage){alerter("RESPECTER LE FORMAT ADEQUAT DE MESSAGE : 50 caractères min ");}
            else{
                if(!conditionType){alerter("RESPECTER LE FORMAT ADEQUAT DU TYPE : 5 caractères min ");}
                else{
                    try {
                    MyConnection conn = new MyConnection();
                    conn.connect();
                    PreparedStatement pst = conn.getConn().prepareStatement(requete2);
                    pst.setString(1, r.getMessage());
                    pst.setString(2, r.getStatus());
                    pst.setString(3, r.getType());
                    pst.setInt(4, r.getUser_id());
                    pst.setInt(5, r.getReservation_id());
                    pst.setString(6, r.getEmail());
                    pst.executeUpdate();
                    alerter(message);
            
            
                } catch (SQLException ex) {
                     System.err.println(ex.getMessage());
                }
                    
                }
            }
            
            
        
        }
        
        
        
        
    }
    
    public void UpdateReclamation(Reclamation r) {
        
        boolean conditionMessage = r.getMessage().length() >= 50;
        
        boolean conditionType = r.getType().length() >= 5;
        
        boolean conditionEmail = r.getEmail().indexOf("@gmail.com")!=-1 || r.getEmail().indexOf("@outlook.fr")!=-1 || r.getEmail().indexOf("@esprit.tn")!=-1 ;
        String message="RECLAMATION EST MISE A JOUR";
        String query = " update reclamation set message = ? ,type=? ,email=? where id = ?; " ;
        
        if( !conditionEmail ){
            alerter("VEUILLEZ RESPECTER LE FORMAT ADEQUAT DE L'EMAIL : par exemple sous la forme '....@gmail.com' ou bien '....@outlook.fr.com' ou bien '....@esprit.tn' ");     
           
        }else{
            if(!conditionMessage){alerter("RESPECTER LE FORMAT ADEQUAT DE MESSAGE : 50 caractères min ");}
            else{
                if(!conditionType){alerter("RESPECTER LE FORMAT ADEQUAT DU TYPE : 5 caractères min ");}
                else{
        
                    try {


                    MyConnection conn = new MyConnection();
                    conn.connect();

                    PreparedStatement preparedStmt = conn.getConn().prepareStatement(query);


                    preparedStmt.setString(1, r.getMessage());
                    preparedStmt.setString(2, r.getType());
                    preparedStmt.setString(3, r.getEmail());
                    preparedStmt.setInt(4, r.getId());
                    preparedStmt.execute();
                    alerter(message);


                    } catch (SQLException ex) {
                    System.out.println(ex.getMessage());
                    System.out.println("here u are");
                    }

                }
            }
        }
    }
    
     public void DeleteReclamation(int id) {
         String message="RECLAMATION SUPPRIMEE AVEC SUCCES";
        String query = " delete from reclamation where id = ? ; " ;
        try {

            
            MyConnection conn = new MyConnection();
            conn.connect();

            PreparedStatement preparedStmt = conn.getConn().prepareStatement(query);
        
            preparedStmt.setInt(1, id);
            preparedStmt.execute();
            alerter(message);
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }
    
    
    public List<Reclamation> afficherReclamations(){
        List<Reclamation> myList =new ArrayList<>();
        try {
            
            String requete3="SELECT * fROM reclamation";
            Statement st;
            MyConnection conn = new MyConnection();
            conn.connect();            
            st = conn.getConn().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Reclamation p = new Reclamation();
                p.setId(rs.getInt(1));
                p.setMessage(rs.getString("message"));
                p.setStatus(rs.getString("status"));
                p.setType(rs.getString("type"));
                p.setEmail(rs.getString("email"));
                myList.add(p);
            }
            
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }

    public ObservableList<Reclamation> afficherReclamationfx(){
        ObservableList<Reclamation> myList =FXCollections.observableArrayList();
        try {
            
            String requete3="SELECT * fROM reclamation where user_id = 2 ";
            Statement st;
            MyConnection conn = new MyConnection();
            conn.connect();            
            st = conn.getConn().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Reclamation p = new Reclamation();
                p.setId(rs.getInt(1));
                p.setMessage(rs.getString("message"));
                p.setStatus(rs.getString("status"));
                p.setType(rs.getString("type"));
                p.setEmail(rs.getString("email"));
                myList.add(p);
            }
            
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }
    
    public ObservableList<Reclamation> tousReclamations(){
        ObservableList<Reclamation> myList =FXCollections.observableArrayList();
        try {
            
            String requete3="SELECT * fROM reclamation ";
            Statement st;
            MyConnection conn = new MyConnection();
            conn.connect();            
            st = conn.getConn().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Reclamation p = new Reclamation();
                p.setId(rs.getInt(1));
                p.setMessage(rs.getString("message"));
                p.setStatus(rs.getString("status"));
                p.setType(rs.getString("type"));
                p.setEmail(rs.getString("email"));
                myList.add(p);
            }
            
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }
    
    
    
    public ObservableList<Reclamation> showReclamationsEnAttente(){
        ObservableList<Reclamation> myList =FXCollections.observableArrayList();
        try {
            
            String requete3="SELECT * fROM reclamation where status = 'encours' ";
            Statement st;
            MyConnection conn = new MyConnection();
            conn.connect();            
            st = conn.getConn().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Reclamation p = new Reclamation();
                p.setId(rs.getInt(1));
                p.setMessage(rs.getString("message"));
                p.setStatus(rs.getString("status"));
                p.setType(rs.getString("type"));
                p.setEmail(rs.getString("email"));
                myList.add(p);
            }
            
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }
    
    
    public ObservableList<Reclamation> showReclamationsTraites(){
        ObservableList<Reclamation> myList =FXCollections.observableArrayList();
        try {
            
            String requete3="SELECT * fROM reclamation where status = 'réclamation refusé' or status = 'réclamation accepter' ";
            Statement st;
            MyConnection conn = new MyConnection();
            conn.connect();            
            st = conn.getConn().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Reclamation p = new Reclamation();
                p.setId(rs.getInt(1));
                p.setMessage(rs.getString("message"));
                p.setStatus(rs.getString("status"));
                p.setType(rs.getString("type"));
                p.setEmail(rs.getString("email"));
                myList.add(p);
            }
            
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }
    
    public ObservableList<Reclamation> recherchereclamation(String value){
        ObservableList<Reclamation> myList =FXCollections.observableArrayList();
        try {
            
            String requete3="SELECT * fROM reclamation where status like '%"+value+"%' or type like '%"+value+"%' or message like '%"+value+"%' ";
            Statement st;
            MyConnection conn = new MyConnection();
            conn.connect();            
            st = conn.getConn().createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while(rs.next()){
                Reclamation p = new Reclamation();
                p.setId(rs.getInt(1));
                p.setMessage(rs.getString("message"));
                p.setStatus(rs.getString("status"));
                p.setType(rs.getString("type"));
                p.setEmail(rs.getString("email"));
                myList.add(p);
            }
            
            
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
        
    }
    
    
    
    public void alerter(String mesageAlerte){
        
        
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("INFORMATION DIALOG");
        alert.setHeaderText(null);
        alert.setContentText(mesageAlerte);
        alert.showAndWait();
        
    
    }
    
   
    /*
    @FXML
    private void supprimerUser(ActionEvent event) {
        
        String username=tableviewuser.getSelectionModel().getSelectedItem().getUsername();
        User u=us.findByUsername(username);
        us.supprimer(u.getId());
        TrayNotification tray = new TrayNotification();
            
            AnimationType type = AnimationType.POPUP;
            tray.setAnimationType(type);
            tray.setTitle("Delete Success");
            tray.setMessage("User is deleted");
            tray.setNotificationType(NotificationType.WARNING);
            tray.showAndDismiss(Duration.millis(1000));
            refreshlist();
    }


*/

    public void setData(int id, String status, String email, String type, String message) {
        throw new UnsupportedOperationException("Not supported yet.");
    }
}
