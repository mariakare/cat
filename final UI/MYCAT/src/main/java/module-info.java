module com.example.CAT {
    requires javafx.controls;
    requires javafx.fxml;
    requires json;
    requires java.desktop;


    //opens com.example.co2_dashboard to javafx.fxml;
    //exports com.example.co2_dashboard;
    exports com.example.CAT;
    opens com.example.CAT to javafx.fxml;
}