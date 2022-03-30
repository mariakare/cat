package com.example.CAT;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.ProtocolException;
import java.net.URL;
import org.json.*;


public class DBTest {

    public String makeGETRequest(String urlName){
        BufferedReader rd = null;
        StringBuilder sb = null;
        String line = null;
        try {
            URL url = new URL(urlName);
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");
            conn.connect();
            rd = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            sb = new StringBuilder();
            while ((line = rd.readLine()) != null)
            {
                sb.append(line + '\n');
            }
            conn.disconnect();
            return sb.toString();
        }
        catch (MalformedURLException e){
            e.printStackTrace();
        }
        catch (ProtocolException e){
            e.printStackTrace();
        }
        catch (IOException e){
            e.printStackTrace();
        }
        return "";

    }

    public String[] parseJSON(String jsonString){
        String mU = "";
        String location = "";
        String lV = "";
        String maxV = "";
        try {
            JSONArray array = new JSONArray(jsonString);
            for (int i = 0; i < array.length(); i++)
            {
                JSONObject curObject = array.getJSONObject(i);
                mU = curObject.getString("MeasurementUnits");
                location = curObject.getString("Location");
                lV = curObject.getString("LastValue");
                maxV = curObject.getString("Max_Value");
            }
        }
        catch (JSONException e){
            e.printStackTrace();
        }
        String data[] = new String[] {mU, location, lV, maxV};
        return data;
    }


    public static void main(String[] args) {
        DBTest rc = new DBTest();
        String response = rc.makeGETRequest("https://studev.groept.be/api/a21ib2a03/test" );
        System.out.println(rc.parseJSON(response));
    }

    public String[] parseJSONUserTable(String jsonString){
        String username = "";
        String password = "";
        String cat1 = "";
        String cat2 = "";
        String cat3 = "";
        String cat4 = "";
        String cat5 = "";
        try {
            JSONArray array = new JSONArray(jsonString);
            for (int i = 0; i < array.length(); i++)
            {
                JSONObject curObject = array.getJSONObject(i);
                username = curObject.getString("username");
                password = curObject.getString("password");
                cat1 = Integer.toString(curObject.getInt("cat1_id"));
                cat2 = Integer.toString(curObject.getInt("cat2_id"));
                cat3 = Integer.toString(curObject.getInt("cat3_id"));
                cat4 = Integer.toString(curObject.getInt("cat4_id"));
                cat5 = Integer.toString(curObject.getInt("cat5_id"));
            }
        }
        catch (JSONException e){
            e.printStackTrace();
        }
        String data[] = new String[] {username, password, cat1, cat2, cat3, cat4, cat5};

        return data;
    }

    public String[] parseJSONCatTable(String jsonString){
        String name = "";
        String id = "";
        String age = "";
        String type = "";
        String ideal_weight="";
        //String description = "";

        try {
            JSONArray array = new JSONArray(jsonString);
            for (int i = 0; i < array.length(); i++)
            {
                JSONObject curObject = array.getJSONObject(i);
                name = curObject.getString("cat_name");
                id = Integer.toString(curObject.getInt("idcat"));
                age = Integer.toString(curObject.getInt("age"));
                type = curObject.getString("type");
                ideal_weight = Integer.toString(curObject.getInt("ideal_weight"));

            }
        }
        catch (JSONException e){
            e.printStackTrace();
        }
        String data[] = new String[] {name, id, age, type, ideal_weight};
        return data;
    }

    public String[] parseJSONempty(String jsonString){

        try {
            JSONArray array = new JSONArray(jsonString);


        }
        catch (JSONException e){
            e.printStackTrace();
        }
        String data[] = new String[] {};
        return data;
    }

    public String[][] parseJSONWeight(String jsonString){
        String[] id = new String[5];
        String[] catid = new String[5];
        String[] date = new String[5];
        String[] weight = new String[5];
        try {
            JSONArray array = new JSONArray(jsonString);
            for (int i = 0; i < 5; i++)
            {
                    JSONObject curObject = array.getJSONObject(i);
                    id[i] = Integer.toString(curObject.getInt("idw"));
                    catid[i] = Integer.toString(curObject.getInt("cat_id"));
                    date[i] = curObject.getString("date_and_time");
                    weight[i] = Double.toString(curObject.getDouble("weight"));

            }
        }
        catch (JSONException e){
            e.printStackTrace();
        }
        String data[][] = new String[5][4] ;
        data= new String[][]{{id[0], catid[0], date[0], weight[0]}, {id[1], catid[1], date[1], weight[1]}, {id[2], catid[2], date[2], weight[2]}, {id[3], catid[3], date[3], weight[3]}, {id[4], catid[4], date[4], weight[4]}};
        return data;
    }
}
