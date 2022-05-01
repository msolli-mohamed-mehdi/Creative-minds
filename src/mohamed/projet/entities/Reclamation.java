/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mohamed.projet.entities;

/**
 *
 * @author ni3a
 */
public class Reclamation {
    
    private int id,user_id,reservation_id;
    private String message,status,type,email;

    public Reclamation() {
    }

    public Reclamation(int id, int user_id, int reservation_id, String message, String status, String type, String email) {
        this.id = id;
        this.user_id = user_id;
        this.reservation_id = reservation_id;
        this.message = message;
        this.status = status;
        this.type = type;
        this.email = email;
    }

    public Reclamation(int user_id, int reservation_id, String message, String status, String type, String email) {
        this.user_id = user_id;
        this.reservation_id = reservation_id;
        this.message = message;
        this.status = status;
        this.type = type;
        this.email = email;
    }

    public Reclamation(int reservation_id, String message, String status, String email, String type) {
        this.reservation_id = reservation_id;
        this.message = message;
        this.status = status;
        this.email = email;
        this.type = type;
    }
    
    

    
    
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getUser_id() {
        return user_id;
    }

    public void setUser_id(int user_id) {
        this.user_id = user_id;
    }

   

    public int getReservation_id() {
        return reservation_id;
    }

    public void setReservation_id(int reservation_id) {
        this.reservation_id = reservation_id;
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }
    
    

    @Override
    public String toString() {
        return "Reclamation{" + "id=" + id + ", user_id=" + user_id + ", reservation_id=" + reservation_id + ", message=" + message + ", status=" + status + ", type=" + type + ", email=" + email + '}';
    }
    
    
    
    
}

