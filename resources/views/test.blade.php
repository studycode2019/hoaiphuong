<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
$(document).ready(function(){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $("#postThemnhatky").click(function(){
    $.post("/post",
    {
      _token: CSRF_TOKEN,
      name: "Donald Duck"
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
</head>
<body>

<input type="button" id="postThemnhatky">Send an HTTP POST request to a page and get the result back</button>

</body>
</html>
