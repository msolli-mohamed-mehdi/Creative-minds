/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mohamed.projet.GUI;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author ni3a
 */
public class TraiterController implements Initializable {

    @FXML
    private TextField tfEmail;
    @FXML
    private TextField tfType;
    @FXML
    private ComboBox<?> statusField;
    @FXML
    private TextField tfMessage;
    @FXML
    private Label labelemail;
    @FXML
    private Label labeltype;
    @FXML
    private Label labelemail1;
    @FXML
    private Label labelMessage;
    @FXML
    private Button btnconfirmer;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void afficherpossibilite(ActionEvent event) {
    }

    @FXML
    private void confirmer(ActionEvent event) {
    }
    
}
