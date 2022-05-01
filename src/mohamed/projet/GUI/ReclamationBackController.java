/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mohamed.projet.GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import mohamed.projet.entities.Reclamation;
import mohamed.projet.services.ReclamationCrud;

/**
 * FXML Controller class
 *
 * @author ni3a
 */
public class ReclamationBackController implements Initializable {

    @FXML
    private TableView<Reclamation> Table_reclam;
    @FXML
    private TableColumn<Reclamation, String> Email_col;
    @FXML
    private TableColumn<Reclamation, String> statu_col;
    @FXML
    private TableColumn<Reclamation, String> type_col;
    @FXML
    private TableColumn<Reclamation, String> message_col;
    @FXML
    private Button btnrecattente;
    @FXML
    private Button btnrectraite;
    @FXML
    private TextField rechercheField;
    @FXML
    private Button btntraiter;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        showReclamation();
        rechercheField.textProperty().addListener((observable, oldValue, newValue) -> {
          
           ReclamationCrud reclamationservice = new ReclamationCrud();
        ObservableList list = reclamationservice.recherchereclamation(newValue);

        type_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("type") );
        Email_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("email") );
        statu_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("status") );
        message_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("message") );

        Table_reclam.setItems(list);
        
        });
    }    

    @FXML
    private void redirectionReclamationEnAttente(ActionEvent event) {
        showReclamationenattente();
    }

    @FXML
    private void redirectionReclamationTraitees(ActionEvent event) {
        showReclamationtraitees();
    }
    
    public void showReclamation()
    {
        ReclamationCrud reclamationservice = new ReclamationCrud();
        ObservableList list = reclamationservice.tousReclamations() ;

        type_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("type") );
        Email_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("email") );
        statu_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("status") );
        message_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("message") );

        Table_reclam.setItems(list);
        

    }
    
    public void showReclamationtraitees()
    {
        ReclamationCrud reclamationservice = new ReclamationCrud();
        ObservableList list = reclamationservice.showReclamationsTraites() ;

        type_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("type") );
        Email_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("email") );
        statu_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("status") );
        message_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("message") );

        Table_reclam.setItems(list);
        

    }
    
    public void showReclamationenattente()
    {
        ReclamationCrud reclamationservice = new ReclamationCrud();
        ObservableList list = reclamationservice.showReclamationsEnAttente() ;

        type_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("type") );
        Email_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("email") );
        statu_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("status") );
        message_col.setCellValueFactory( new PropertyValueFactory<Reclamation,String>("message") );

        Table_reclam.setItems(list);
        

    }
    

    @FXML
    private void traiter(ActionEvent event) throws IOException {
        if (!Table_reclam.getSelectionModel().getSelectedCells().isEmpty()) {
           Stage ModifStage = new Stage();
            try {
                  Stage stage = (Stage) btntraiter.getScene().getWindow();
                  
                FXMLLoader loader = new FXMLLoader(getClass().getResource("traiter.fxml"));
                Parent root = loader.load();
                /*
                ReclamationCrud pc = loader.getController();
                Table_reclam.getSelectionModel().getSelectedItems().stream().forEach(e -> {
                    pc.setData(e.getId() ,e.getStatus(),e.getEmail(),e.getType(),e.getMessage());
                });
               */
                 Scene scene = new Scene(root, 400, 400);
                ModifStage.setScene(scene);
                ModifStage.setTitle("Modifier");
                ModifStage.show();
                stage.close();
            } catch (IOException ex) {
                System.err.println(ex.getMessage());
            }
        } else {
            
        }
         
    }
    
}
