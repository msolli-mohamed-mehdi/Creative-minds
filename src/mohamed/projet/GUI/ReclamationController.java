/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mohamed.projet.GUI;


import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.util.Duration;
import mohamed.projet.entities.Reclamation;
import mohamed.projet.services.ReclamationCrud;

/**
 * FXML Controller class
 *
 * @author ni3a
 */
public class ReclamationController implements Initializable {

    @FXML
    private Label labelemail;
    @FXML
    private Label labeltype;
    @FXML
    private Label labelMessage;
    
    @FXML
    private TextField tfEmail;
    @FXML
    private TextField tfType;
    @FXML
    private TextField tfMessage;
    @FXML
    private Button btnModifier;
    @FXML
    private TableView<Reclamation> tvReclamations;
    @FXML
    private TableColumn<Reclamation, String> typecol;
    @FXML
    private TableColumn<Reclamation, String> emailcol;
    @FXML
    private TableColumn<Reclamation, String> statutcol;
    @FXML
    private TableColumn<Reclamation, String> messagecol;
    @FXML
    private Button btnajout;
    @FXML
    private Button btnsupprimer;
    
    MediaPlayer mediaPlayer;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        showReclamation(); 
        
        tvReclamations.setOnMouseClicked( e -> {
              
            Reclamation r = new Reclamation();
            
            r = tvReclamations.getSelectionModel().getSelectedItem() ;
            
            
             
            tfEmail.setText(r.getEmail()) ;
            tfType.setText(r.getType() )  ; 
            tfMessage.setText(r.getMessage()) ; 


            });
    }    

    @FXML
    private void modifierReclamation(ActionEvent event) {
        int nombre=tvReclamations.getSelectionModel().getSelectedItem().getId();
        
        Reclamation r = new Reclamation();
        r.setId(nombre);
        r.setEmail(tfEmail.getText()); 
        r.setType(tfType.getText()); 
        r.setMessage(tfMessage.getText());
        System.out.println(r);
        ReclamationCrud reclamationserv = new ReclamationCrud();
        
        reclamationserv.UpdateReclamation(r);
        
        
        showReclamation() ; 
        
        
        
        tfEmail.setText("") ;
        tfType.setText("") ;
        tfMessage.setText("") ;
        
    }

    @FXML
    private void ajouterclamation(ActionEvent event) {
        
        Reclamation r = new Reclamation();
        r.setUser_id(2);
        r.setReservation_id(2);
        r.setStatus("encours"); 
        r.setEmail(tfEmail.getText());
        r.setType(tfType.getText()); 
        r.setMessage(tfMessage.getText());
        ReclamationCrud reclamationserv = new ReclamationCrud();
        reclamationserv.ajouterReclamation2(r);
        showReclamation() ; 
    }

    @FXML
    private void supprimereclamation(ActionEvent event) {
        
        int nombre=tvReclamations.getSelectionModel().getSelectedItem().getId();
        
        ReclamationCrud reclamationserv = new ReclamationCrud();
        reclamationserv.DeleteReclamation(nombre);
        
        showReclamation() ; 
    }

    public void showReclamation()
    {
        ReclamationCrud reservationservice = new ReclamationCrud();
        ObservableList list = reservationservice.afficherReclamationfx() ;

        typecol.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("type") );
        emailcol.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("email") );
        statutcol.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("status") );
        messagecol.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("message") );

        tvReclamations.setItems(list);
        

    }

  
    
    private void playHitSound(){
               
        
        URL resource = getClass().getResource("Survive the Montage.mp3");
        MediaPlayer a =new MediaPlayer(new Media(resource.toString()));
        a.setOnEndOfMedia(new Runnable() {
            public void run() {
                a.seek(Duration.ZERO);
            }
        });
        a.play();
        
    }


    @FXML
    private void playMusic(ActionEvent event) {
        playHitSound();
    }
    
    
}
