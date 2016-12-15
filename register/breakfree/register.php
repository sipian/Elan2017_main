<!DOCTYPE html>
<html>
<head>
<title>Register for Breakfree</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
<style type="text/css">

#main {
    max-width: 800px;
    margin: 0 auto;
}

</style>
</head>
<body>
<div id="main" class="container">
    <h1>Register for Breakfree</h1>
    <div class="my-form">
        <form role="form" method="post" action="verify.php">
        <div class="form-group">
            <p class="leader-text-box">
                <label for="leader">Team Leader ID</label>
                <input type="text" name="leader" value="" id="leader" class="form-control" />
            </p>
            </div>
      <div class="form-group">
            <p class="text-box">
                <label for="box1">Team Member <span class="box-number">1</span> ID</label>
                <input type="text" class="form-control" name="participants[]" value="" id="p1" />
                <a class="add-box" href="#">
                <button type="button" class="btn btn-link">Add More</button></a>
            </p>
            </div>
            <button type="submit" value="Submit" name="submit" class="btn btn-default">Submit</button><br><a href="http://mobile.elan.org.in/register/register.php">Don't have an Elan ID? Click here to register.</a>
        </form>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.my-form .add-box').click(function(){
        var n = $('.text-box').length + 1;
       
        var box_html = $('<div class="form-group"><p class="text-box"><label for="box' + n + '">Team Member <span class="box-number">' + n + ' </span> ID</label> <input type="text" class="form-control" name="participants[]" value="" id="box' + n + '" /> <a href="#" class="remove-box"><button type="button" class="btn btn-link">Remove</button></a></p></div>');
        box_html.hide();
        $('.my-form p.text-box:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    });
    $('.my-form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#FF6C6C' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});
</script>
</body>
</html>
