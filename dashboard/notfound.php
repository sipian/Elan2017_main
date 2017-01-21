<!DOCTYPE html>
 <html>
 <head>
     <title>
         NOT FOUND
     </title>
 </head>
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css">
 <body>
 <br><br><br>
 Enter ID
<input type="text" id="id" name="id">
<button id="submit">SUBMIT</button>
 </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function () {
      $("#submit").click(function () { 
  var id = $("#id").val();
  if(id=="" || id==null)
    alert("PLEASE ENTER");
    else{
        var as = "https://nvision.org.in/admin/user/"+id;
        window.location.href = as;

    }  
});
  })


</script>
 </html>