package com.example.CAT;

 import javafx.application.Application;
 import javafx.collections.FXCollections;
 import javafx.collections.ObservableList;
 import javafx.event.EventHandler;
 import javafx.fxml.FXMLLoader;
 import javafx.scene.Node;
 import javafx.scene.Scene;
 import javafx.scene.chart.LineChart;
 import javafx.scene.chart.XYChart;
 import javafx.scene.control.*;
 import javafx.scene.control.cell.PropertyValueFactory;
 import javafx.scene.image.Image;
 import javafx.scene.image.ImageView;
 import javafx.scene.input.MouseEvent;
 import javafx.stage.Stage;

 import javax.swing.*;
 import java.io.File;
 import java.io.IOException;
 import java.text.DecimalFormat;
 import java.time.LocalDate;
 import java.time.LocalDateTime;
 import java.time.LocalTime;
 import java.time.format.DateTimeFormatter;
 import java.util.List;

//catType:ginger,black,brown,grey,others

public class CatApplication extends Application {

    private String owner;
    private int cat1;
    private int cat2;
    private int cat3;
    private int cat4;
    private int cat5;
    private int current_cat;
    private static int counter=9;
    private int numOfCats;


    @Override
    public void start(Stage stage) throws IOException {
        FXMLLoader fxmlLoader = new FXMLLoader(com.example.CAT.CatApplication.class.getResource("OpenPage.fxml"));
        Scene scene = new Scene(fxmlLoader.load(), 400, 600);

        FXMLLoader HomefxmlLoader = new FXMLLoader(com.example.CAT.CatApplication.class.getResource("HomePage.fxml"));
        Scene HomeScene = new Scene(HomefxmlLoader.load(), 400,600);

        FXMLLoader CatfxmlLoader = new FXMLLoader(com.example.CAT.CatApplication.class.getResource("catPage.fxml"));
        Scene CatScene = new Scene(CatfxmlLoader.load(), 400,600);

        FXMLLoader WeightfxmlLoader = new FXMLLoader(com.example.CAT.CatApplication.class.getResource("WeightPage.fxml"));
        Scene WeightScene = new Scene(WeightfxmlLoader.load(), 400,600);

        FXMLLoader AddfxmlLoader = new FXMLLoader(com.example.CAT.CatApplication.class.getResource("AddPage.fxml"));
        Scene AddScene = new Scene(AddfxmlLoader.load(), 400,600);

        FXMLLoader PersonalfxmlLoader = new FXMLLoader(com.example.CAT.CatApplication.class.getResource("PersonalPage.fxml"));
        Scene PersonalScene = new Scene(PersonalfxmlLoader.load(), 400,600);

        FXMLLoader ChangePWfxmlLoader = new FXMLLoader(com.example.CAT.CatApplication.class.getResource("ChangePWPage.fxml"));
        Scene ChangePWScene = new Scene(ChangePWfxmlLoader.load(), 400,600);


        Label myName = (Label)PersonalfxmlLoader.getNamespace().get("myName");
        Label numberOfCats = (Label)PersonalfxmlLoader.getNamespace().get("catsNumber");
        TableView cats = (TableView)HomefxmlLoader.getNamespace().get("cats");
        LineChart weightchart = (LineChart)WeightfxmlLoader.getNamespace().get("weightchart");

        //Home Page : add cat
        ImageView addCat = (ImageView)HomefxmlLoader.getNamespace().get("add");
        addCat.setOnMouseClicked(e -> stage.setScene(AddScene));

        //Add Page : return
        ImageView addBack = (ImageView)AddfxmlLoader.getNamespace().get("home");
        addBack.setOnMouseClicked(e -> {
            initializeHome(cats);
            stage.setScene(HomeScene);
        });

        //Add Page : add action
        TextField newName = (TextField)AddfxmlLoader.getNamespace().get("name");
        TextField newType = (TextField)AddfxmlLoader.getNamespace().get("type");
        TextField newAge = (TextField)AddfxmlLoader.getNamespace().get("age");
        TextArea newDescription = (TextArea)AddfxmlLoader.getNamespace().get("description");
        TextField newIdealWeight = (TextField)AddfxmlLoader.getNamespace().get("idealWeight");
        Button FinishButton = (Button)AddfxmlLoader.getNamespace().get("finish");
        FinishButton.setOnAction(e -> {
            //the name, age, type should not be empty, or an error message would be displayed
            if(!newName.getText().isEmpty() && !newType.getText().isEmpty() && !newAge.getText().isEmpty()){
                String name = newName .getText();
                String type = newType.getText();
                String age = newAge.getText();
                String idealWeight = newIdealWeight.getText();
                int age_int  = Integer.parseInt(age);
                if(idealWeight.isEmpty()){
                    if(age_int<=1) idealWeight = "1";
                    else if(age_int<=2) idealWeight = "2";
                    else if(age_int<=3) idealWeight = "3";
                    else idealWeight = "4";
                }
                newName.clear();
                newAge.clear();
                newType.clear();
                newIdealWeight.clear();
                newDescription.clear();
                DBTest db = new DBTest();
                db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/add_cat/"+name+"/"+counter+"/"+age+"/"+type+"/"+idealWeight);
                if(cat1==0) cat1 = counter;
                else if(cat2==0) cat2 = counter;
                else if(cat3==0) cat3 = counter;
                else if(cat4==0) cat4 = counter;
                else if(cat5==0) cat5 = counter;
                else JOptionPane.showMessageDialog(null, "You cannot add any cats!","CAT",JOptionPane.ERROR_MESSAGE);
                counter++;
                numOfCats++;
                numberOfCats.setText(String.valueOf(numOfCats));
                db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/add_cat_to_user/"+cat1+"/"+cat2+"/"+cat3+"/"+cat4+"/"+cat5+"/"+owner);
                initializeHome(cats);
                stage.setScene(HomeScene);
            }
            else{
                JOptionPane.showMessageDialog(null, "You need to input enough information","CAT",JOptionPane.ERROR_MESSAGE);
                newName.clear();
                newAge.clear();
                newType.clear();
                newIdealWeight.clear();
                newDescription.clear();
            }
        });

        //Add Page : go to personal Page
        ImageView addToPersonal = (ImageView)AddfxmlLoader.getNamespace().get("user");
        addToPersonal.setOnMouseClicked(e -> {
            myName.setText(owner);
            stage.setScene(PersonalScene);
        });

        //Open Page : check login
        TextField id = (TextField)fxmlLoader.getNamespace().get("name");
        PasswordField password = (PasswordField) fxmlLoader.getNamespace().get("password");
        Button EnterButton = (Button)fxmlLoader.getNamespace().get("enter");
        EnterButton.setOnAction(e -> {
            numOfCats = 0;
            DBTest db = new DBTest();
            String Name = id.getText();
            String pass = password.getText();
            String data_user[] = db.parseJSONUserTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/login/"+Name));
            String actual_password = data_user[1];
            if(pass.isEmpty()){
                //Exception 1: empty password
                JOptionPane.showMessageDialog(null, "Please enter the password!","CAT",JOptionPane.ERROR_MESSAGE);
                id.clear();
            }
            else{
                if(data_user[0].isEmpty()){
                    //Exception 2: cannot find the user in database
                    //Exception 3: empty username
                    JOptionPane.showMessageDialog(null, "Users do not exist or Unmatched password!","CAT",JOptionPane.ERROR_MESSAGE);
                }
                else {
                    cat1 = Integer.parseInt(data_user[2]);
                    cat2 = Integer.parseInt(data_user[3]);
                    cat3 = Integer.parseInt(data_user[4]);
                    cat4 = Integer.parseInt(data_user[5]);
                    cat5 = Integer.parseInt(data_user[6]);
                    for(int i=2;i<7;i++){
                        if(Integer.parseInt(data_user[i])!=0) numOfCats ++;
                    }
                    numberOfCats.setText(String.valueOf(numOfCats));
                }
                if(pass.equals(actual_password)){
                    initializeHome(cats);
                    stage.setScene(HomeScene);//replace with pass word
                    owner = Name;
                }
                else if(!Name.isEmpty() && !data_user[0].isEmpty()){
                    //Exception 4: password does not match
                    JOptionPane.showMessageDialog(null, "Users do not exist or Unmatched password!","CAT",JOptionPane.ERROR_MESSAGE);
                }
                id.clear();
                password.clear();
            }
        });

        //Open Page : register
        Button register = (Button)fxmlLoader.getNamespace().get("register");
        register.setOnAction(e -> {
            //register a new account
            String name = id.getText();
            String pass = password.getText();
            DBTest db = new DBTest();
            if(!name.isEmpty() && !pass.isEmpty()){
                try{
                    String data_user[] = db.parseJSONUserTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/login/"+name));
                    String p = db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/register/"+name+"/"+pass);
                    if(data_user[0]==""){
                        JOptionPane.showMessageDialog(null, "Registered!","CAT",JOptionPane.INFORMATION_MESSAGE);
                    }
                    else{
                        JOptionPane.showMessageDialog(null, "Username not available!","CAT",JOptionPane.ERROR_MESSAGE);
                    }
                }
                catch (Exception exception){
                    //error message
                    //doesn't work for some reason
                }
            }
            else {
                //Excecption: not enter enough information
                JOptionPane.showMessageDialog(null, "Please enter correct information","CAT",JOptionPane.INFORMATION_MESSAGE);
            }
            id.clear();
            password.clear();
        });

        //Home Page : search cat
        Button SearchButton = (Button)HomefxmlLoader.getNamespace().get("searchButton");
        TextField search = (TextField)HomefxmlLoader.getNamespace().get("search");
        Label catOwner = (Label)CatfxmlLoader.getNamespace().get("owner");
        Label catAge = (Label)CatfxmlLoader.getNamespace().get("age");
        Label catIdealWeight = (Label)CatfxmlLoader.getNamespace().get("idealweight");
        Label catName = (Label)CatfxmlLoader.getNamespace().get("name");
        ImageView catType = (ImageView )CatfxmlLoader.getNamespace().get("type");
        SearchButton.setOnAction(e -> {
            //I want to get the list of cats
            String searchName = search.getText();
            DBTest db = new DBTest();
            String data_cat[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat/"+searchName));//here
            //check if the cat exist in our database
            boolean exist = false;
            if(!data_cat[0].isEmpty()){
                //The cat should be found in database, so the return array is not empty
                int id_cat = Integer.parseInt(data_cat[1]);
                current_cat = id_cat;
                if (id_cat != 0 && (id_cat == cat1 || id_cat == cat2 || id_cat == cat3 || id_cat == cat4 || id_cat == cat5)) {
                    exist = true;
                }
            }
            if(exist){
                search.clear();
                search.setPromptText("Name");
                stage.setScene(CatScene);
                catOwner.setText("Owner : "+owner);
                catAge .setText("Age : "+data_cat[2]);
                catIdealWeight.setText("Ideal weight : "+data_cat[4]+"kg");
                catName.setText(data_cat[0]);

                File f;
                if (data_cat[3].equals("ginger")) f = new File("src\\main\\resources\\com\\example\\CAT\\Gingercat.jpg");
                else if(data_cat[3].equals("black")) f = new File("src\\main\\resources\\com\\example\\CAT\\Blackcat.png");
                else if(data_cat[3].equals("grey"))  f = new File("src\\main\\resources\\com\\example\\CAT\\Greycat.png");
                else if(data_cat[3].equals("brown"))  f = new File("src\\main\\resources\\com\\example\\CAT\\Browncat.png");
                else f = new File("src\\main\\resources\\com\\example\\CAT\\Othercat.png");
                Image cat = new Image(f.toURI().toString());
                catType.setImage(cat);
            }
            else{
                //Exception: cannot find the cat
                search.setPromptText("Non-exist name");
                search.clear();
            }
        });

        //Home Page : enable double-clicked on the cats enter cat page
        cats.setOnMousePressed(new EventHandler<MouseEvent>() {
            @Override
            public void handle(MouseEvent event) {
                if (event.isPrimaryButtonDown() && event.getClickCount() == 2){
                    Node node = ((Node) event.getTarget()).getParent();
                    TableRow row;
                    if (node instanceof TableRow){
                        row = (TableRow) node;
                    }
                    else{
                        row = (TableRow) node.getParent();
                    }
                    String s = ((catDisplay)row.getItem()).nrProperty().getValue();
                    //from clicking, we get the id of the cat
                    int id_cat = Integer.parseInt(s);
                    DBTest db = new DBTest();
                    String data_cat[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+id_cat));
                    if(id_cat != 0){
                        //initializing the cat page with: owner, name, age, type, idealweight
                        current_cat = id_cat;
                        stage.setScene(CatScene);
                        catOwner.setText("Owner : "+owner);
                        catAge .setText("Age : "+data_cat[2]);
                        catIdealWeight.setText("Ideal weight : "+data_cat[4]+" kg");
                        catName.setText(data_cat[0]);
                        File f;
                        if (data_cat[3].equals("ginger")) f = new File("src\\main\\resources\\com\\example\\CAT\\Gingercat.jpg");
                        else if(data_cat[3].equals("black")) f = new File("src\\main\\resources\\com\\example\\CAT\\Blackcat.png");
                        else if(data_cat[3].equals("grey"))  f = new File("src\\main\\resources\\com\\example\\CAT\\Greycat.png");
                        else if(data_cat[3].equals("brown"))  f = new File("src\\main\\resources\\com\\example\\CAT\\Browncat.png");
                        else f = new File("src\\main\\resources\\com\\example\\CAT\\Othercat.png");
                        Image cat = new Image(f.toURI().toString());
                        catType.setImage(cat);
                    };
                }
            }
        });

        //Home Page : enter personal page
        ImageView homeToPersonal = (ImageView)HomefxmlLoader.getNamespace().get("user");
        homeToPersonal.setOnMouseClicked(e -> {
            myName.setText(owner);
            stage.setScene(PersonalScene);
        });


        //Cat Page : return
        ImageView returnHome = (ImageView)CatfxmlLoader.getNamespace().get("back");
        returnHome.setOnMouseClicked(e -> stage.setScene(HomeScene));

        //Cat Page : enter personal page
        ImageView catToPersonal = (ImageView)CatfxmlLoader.getNamespace().get("user");
        catToPersonal.setOnMouseClicked(e -> {
            myName.setText(owner);
            stage.setScene(PersonalScene);
        });

        //Cat Page : start weighing
        ImageView weighCat = (ImageView)CatfxmlLoader.getNamespace().get("weigh");
        LineChart weights = (LineChart)WeightfxmlLoader.getNamespace().get("weightchart");
        ImageView catType_weight = (ImageView)WeightfxmlLoader.getNamespace().get("type");
        Label catName_weight = (Label)WeightfxmlLoader.getNamespace().get("name");
        Label weight = (Label)WeightfxmlLoader.getNamespace().get("weight");
        weighCat.setOnMouseClicked(e -> {
            //I send a signal to database to indicate storing the value

            LocalDateTime myDateObj = LocalDateTime.now();
            DateTimeFormatter myFormatObj = DateTimeFormatter.ofPattern("dd-MM-yyyy HH:mm:ss");

            String formattedDate = myDateObj.format(myFormatObj);
            LocalDate d = LocalDate.now();
            LocalTime t = LocalTime.now();

            String date = d.toString();
            String time = t.toString();

            String code = "303";
            String feed = "yes";
            String p = Integer.toString(current_cat);
            //sending the signal to the database
            DBTest db = new DBTest();
            db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/log/" + code + "/" + date + "/" +  time+ "/"+ p + "/" + feed);
            //display the new measurement
            String newWeight = initializeWeight(weights);
            DecimalFormat df = new DecimalFormat("#.0");
            weight.setText(df.format(Double.parseDouble(newWeight))+" kg");
            String data_cat[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+current_cat));
            catName_weight.setText(data_cat[0]);
            stage.setScene(WeightScene);

            data_cat = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+current_cat));
            File f;
            if (data_cat[3].equals("ginger")) f = new File("src\\main\\resources\\com\\example\\CAT\\Gingercat.jpg");
            else if(data_cat[3].equals("black")) f = new File("src\\main\\resources\\com\\example\\CAT\\Blackcat.png");
            else if(data_cat[3].equals("grey"))  f = new File("src\\main\\resources\\com\\example\\CAT\\Greycat.png");
            else if(data_cat[3].equals("brown"))  f = new File("src\\main\\resources\\com\\example\\CAT\\Browncat.png");
            else f = new File("src\\main\\resources\\com\\example\\CAT\\Othercat.png");
            Image cat = new Image(f.toURI().toString());
            catType_weight.setImage(cat);
        });



        //Weight Page : return
        ImageView back = (ImageView)WeightfxmlLoader.getNamespace().get("back");
        back.setOnMouseClicked(e -> {
            stage.setScene(HomeScene);
            weights.getData().clear();
        });


        //Personal Page : return to home Page
        ImageView personalToHome = (ImageView)PersonalfxmlLoader.getNamespace().get("home");
        personalToHome.setOnMouseClicked(e -> stage.setScene(HomeScene));

        //Personal Page : add cat
        ImageView personalToAdd = (ImageView)PersonalfxmlLoader.getNamespace().get("add");
        personalToAdd.setOnMouseClicked(e -> stage.setScene(AddScene));

        //Personal Page : log out
        Button out = (Button)PersonalfxmlLoader.getNamespace().get("logout");
        out.setOnAction(e -> {
            owner = null;
            cat1 =0;
            cat2 =0;
            cat3 =0;
            cat4 =0;
            cat5 =0;
            JOptionPane.showMessageDialog(null, "Log out successfully!","CAT",JOptionPane.INFORMATION_MESSAGE);
            stage.setScene(scene);
        });

        //Personal Page : change password
        Button PW = (Button)PersonalfxmlLoader.getNamespace().get("changePW");
        PW.setOnAction(e -> {
            stage.setScene(ChangePWScene);
        });


        //ChangePW Page : check consistency
        Button confirm = (Button)ChangePWfxmlLoader.getNamespace().get("confirm");
        TextField pw1 = (TextField)ChangePWfxmlLoader.getNamespace().get("pw1");
        TextField pw2 = (TextField)ChangePWfxmlLoader.getNamespace().get("pw2");
        confirm.setOnAction(e -> {
            if(pw1.getText().equals(pw2.getText())){
                //we send back the new password
                stage.setScene(HomeScene);
                String newPassword = pw1.getText();
                DBTest db = new DBTest();
                db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/change_password/"+newPassword+'/'+owner);
            }
            else{
                pw2.setPromptText("different pw!");
            }
            pw1.clear();
            pw2.clear();
        });

        //ChangePW Page : return to home Page
        ImageView changePWToHome = (ImageView)ChangePWfxmlLoader.getNamespace().get("home");
        changePWToHome.setOnMouseClicked(e -> stage.setScene(HomeScene));

        //Personal Page : add cat
        ImageView changePWToAdd = (ImageView)ChangePWfxmlLoader.getNamespace().get("addPW");
        changePWToAdd.setOnMouseClicked(e -> stage.setScene(AddScene));

        //Personal Page : enter personal page
        ImageView changePWToPersonal = (ImageView)ChangePWfxmlLoader.getNamespace().get("userPW");
        changePWToPersonal.setOnMouseClicked(e -> stage.setScene(PersonalScene));

        stage.setTitle("CAT");
        stage.setScene(scene);
        stage.show();
    }
    public static void main(String[] args) {
        launch();
    }

    public void initializeHome(TableView cats){
        //initializing the table of cats in our home page
        DBTest db = new DBTest();
        String data_id1[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+cat1));
        String data_id2[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+cat2));
        String data_id3[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+cat3));
        String data_id4[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+cat4));
        String data_id5[] = db.parseJSONCatTable(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/search_cat_id/"+cat5));
        List<catDisplay> catDisplays = List.of(new catDisplay(data_id1[1],data_id1[0],data_id1[3]),new catDisplay(data_id2[1],data_id2[0],data_id2[3]),
                new catDisplay(data_id3[1],data_id3[0],data_id3[3]), new catDisplay(data_id4[1],data_id4[0],data_id4[3]), new catDisplay(data_id5[1],data_id5[0],data_id5[3]));
        ObservableList<catDisplay> mycats = FXCollections.observableArrayList(catDisplays);
        cats.setItems(mycats);

        TableColumn<catDisplay, String> firstNameCol = new TableColumn<>("number");
        firstNameCol.setCellValueFactory(new PropertyValueFactory<>(mycats.get(0).nrProperty().getName()));
        TableColumn<catDisplay, String> secondNameCol = new TableColumn<>("name");
        secondNameCol.setCellValueFactory(new PropertyValueFactory<>(mycats.get(0).nameProperty().getName()));
        TableColumn<catDisplay, String> thirdNameCol = new TableColumn<>("type");
        thirdNameCol.setCellValueFactory(new PropertyValueFactory<>(mycats.get(0).typeProperty().getName()));

        cats.getColumns().setAll(firstNameCol,secondNameCol,thirdNameCol);
    }

    public String initializeWeight(LineChart weightchart){
        //initializing the linechart in our weight page
        DBTest db = new DBTest();
        String weight[][]=db.parseJSONWeight(db.makeGETRequest("https://studev.groept.be/api/a21ib2a03/graph/"+current_cat));
        XYChart.Series dataSeries1 = new XYChart.Series();
        String news = null;
        for (int i = 0; i < 5; i++) {
            if(i==0) news = weight[i][3];
            dataSeries1.getData().add(new XYChart.Data(weight[i][2],Double.parseDouble(weight[i][3])));
        }
        dataSeries1.setName("Last five records");
        weightchart.getData().add(dataSeries1);
        return news;
    }
}