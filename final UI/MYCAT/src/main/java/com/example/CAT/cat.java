package com.example.CAT;

import javafx.beans.property.*;

public class cat {

    private final SimpleIntegerProperty id;
    private final SimpleStringProperty location;
    private final SimpleStringProperty measurementUnits;
    private final SimpleIntegerProperty max;
    private final SimpleIntegerProperty min;
    cat(int id,String l, String m, int max,int min) {
        this.id = new SimpleIntegerProperty(id);
        this.max = new SimpleIntegerProperty(max);
        this.min = new SimpleIntegerProperty(min);
        this.location = new SimpleStringProperty(l);
        this.measurementUnits = new SimpleStringProperty(m);
    }
}
