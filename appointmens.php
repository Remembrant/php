
 <table>
   <tr>
     <th>id</th>
     <th>username</th>
     <th>email</th>
     <th>date</th>
     <th>timeslot</th>
   </tr>
   <tbody id="data"> <!--data will be displayed here-->

   </tbody>
 </table>



 <script>
   // call ajax
   var ajax = new XMLHttpRequest();
   var method = "GET";
   var url = "data.php";
   var asynchronous = true;

   ajax.open(method, url, asynchronous);
   // sending ajax XHLHttpRequest
   ajax.send();

   //receiving response from
   ajax.onreadystatechange = function()
   {
     if (this.readyState == 4 && this.status == 200) {
       // converting JSON back to array
       //alert(this.responseText);

       var data = JSON.parse(this.responseText);
       console.log(data); // for debugging

       //html value for <tbody>
       var html = "";
       // looping through the database
       for (var i = 0; i < data.length; i++) {
         var id = data[i].bookId;
         var username = data[i].username;
         var email = data[i].email;
         var date = data[i].date;
         var timeslot = data[i].timeslot;

         // storing at html
         html += "<tr>";
         html += "<td>" + id +  "</td>";
         html += "<td>" + username +  "</td>";
         html += "<td>" + email +  "</td>";
         html += "<td>" + date +  "</td>";
         html += "<td>" + timeslot +  "</td>";
         html += "</tr>";
       }

       // replacing the <tbody> of <table>
       document.getElementById("data").innerHTML = html;
     }
   }
 </script>
