package com.example.CAT;

import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

import java.lang.reflect.GenericDeclaration;
import java.lang.reflect.TypeVariable;

public class catDisplay {
    private StringProperty nr;
    private StringProperty name;
    private StringProperty type;

    public catDisplay(String nr, String name, String type){
        nrProperty().set(nr);
        nameProperty().set(name);
        typeProperty().set(type);
    }

    public StringProperty nrProperty() {
        if (nr == null) nr = new SimpleStringProperty(this, "nr");
        return nr;
    }

    public StringProperty nameProperty() {
        if (name == null) name = new SimpleStringProperty(this, "name");
        return name;
    }

    public StringProperty typeProperty() {
        if (type == null) type = new SimpleStringProperty(this, "type");
        return type;
    }
}
