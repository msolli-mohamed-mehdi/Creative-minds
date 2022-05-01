/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package mohamed.projet.utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


/**
 *
 * @author ni3a
 */
public class MyConnection {
    
    public String url="jdbc:mysql://localhost:3306/agencedevoyage";
    public String login="root";
    public String pwd="";
    
    Connection conn;


    public void connect() {
        try {
            conn = DriverManager.getConnection(url, login, pwd);

           // System.out.println("Connected to db ");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    
    public Connection getConn() {
        return conn;
    }
    
}
