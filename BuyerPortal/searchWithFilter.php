<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
          function state() {
               var a = document.getElementById('states').value;

               if (a === '31') {
                    if (a === 'GREATER ACCRA REGION') {
                    var array = ['Select District', 'Accra', 'Tema', 'East Legon', 'Ga East', 'Adenta'];
               } else if (a === 'VOLTA REGION') {
                    var array = ['Select District', 'Ho Municipal', 'Hohoe Municipal', 'Keta Municipal', 'South Tongu', 'Ketu South'];
               } else if (a === 'ASHANTI REGION') {
                    var array = ['Select District', 'Kumasi', 'Obuasi Municipal', 'Mampong Municipal'];
               } else if (a === 'CENTRAL REGION') {
                    var array = ['Select District', 'Cape Coast', 'Mfantsiman', 'Gomoa West', 'Effutu'];
               } else if (a === 'OTI REGION') {
                    var array = ['Select District', 'Krachi East', 'Nkwanta South', 'Kadjebi', 'Jasikan'];
               } else if (a === 'WESTERN REGION') {
                    var array = ['Select District', 'Sekondi Takoradi', 'Tarkwa Nsuaem', 'Nzema East'];
               } else if (a === 'NORTHERN REGION') {
                    var array = ['Select District', 'Tamale Metropolitan', 'Yendi Municipal'];
               } else if (a === 'EASTERN REGION') {
                    var array = ['Select District', 'Koforidua', 'Somanya', 'Akosombo'];
               } else if (a === 'UPPER EAST REGION') {
                    var array = ['Select District', 'Bolgatanga'];
               } else if (a === 'UPPER WEST REGION') {
                    var array = ['Select District', 'Wa'];
               } else if (a === 'BONO REGION') {
                    var array = ['Select District', 'Sunyani', 'Dormaa East', 'Wenchi'];
               } else if (a === 'SAVANNAH REGION') {
                    var array = ['Select District', 'Central Gonja', 'Bole', 'East Gonja'];
               } else if (a === 'NORTH EAST REGION') {
                    var array = ['Select District', 'West Mamprusi', 'East Mamprusi'];
               } else if (a === 'BONO EAST REGION') {
                    var array = ['Select District', 'Techiman', 'Techiman North', 'Kintanpo North'];
               } else if (a === 'AHAFO REGION') {
                    var array = ['Select District', 'Tano North', 'Tano South'];
               } else if (a === 'WERSTERN REGION') {
                    var array = ['Select District', 'Bia East ', 'Bia West'];
              
               }
               var string = "";
               for (let i = 0; i < array.length; i++) {
                    string = string + "<option>" + array[i] + "</option>";

               }
               string = "<select nmae = 'lol'>" + string + "</select>"
               document.getElementById('district').innerHTML = string;
          }
     </script>
     <script>
          var a;

          function display() {
               if (a == 0) {
                    document.getElementById("majic").style.visibility = "hidden";
                    document.getElementById("show").style.visibility = "visible";
                    return a = 1;
               } else {
                    document.getElementById("majic").style.visibility = "visible";
                    document.getElementById("show").style.visibility = "hidden";
                    // document.getElementById("show").style. visibility= "hidden";

                    return a = 0;
               }

          }
     </script>
 
<label>State</label>
                <table>
                    <select id="states" onchange="state()" tabindex="1">
                         <option value="GREATER ACCRA REGION">GREATER ACCRA REGION</option>
                              <option value="VOLTA REGION">VOLTA REGION</option>
                              <option value="ASHANTI REGION">ASHANTI REGION</option>
                              <option value="CENTRAL REGION">CENTRAL REGION</option>
                              <option value="OTI REGION">OTI REGION</option>
                              <option value="WESTERN REGION">WESTERN REGION</option>
                              <option value="NOTHERN REGION">NOTHERN REGION</option>
                              <option value="EATERN REGION">EATERN REGION</option>
                              <option value="UPPER EAST REGION">UPPER EAST REGION</option>
                              <option value="UPPER WEST REGION">UPPER WEST REGION</option>
                              <option value="BONO REGION">BONO REGION</option>
                              <option value="SAVANNAH REGION">SAVANNAH REGION</option>
                              <option value="NORTH EAST REGION">NORTH EAST REGION</option>
                              <option value="BONO EAST REGION">BONO EAST REGION</option>
                              <option value="AHAFO REGION">AHAFO REGION</option>
                              <option value="WESTERN NORTH REGION">WESTERN NORTH REGION</option>

                    </select>


                    <select name="" id="district">
                         <option>Select District</option>
                    </select>


               </table>

</body>
</html>