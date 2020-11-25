<!DOCTYPE html>
<html xmlns =" http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one time modal</title>
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-min.css" rel="stylesheet" />
    <script src="https://ajax/googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<form id="form1" runat="server">
<h1>Welcome You</h1>
<div id="myModal" class="modal fade">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" area-hidden="true">$time;</button>
<h2 class="modal-title" style="text-align:center; color:red"><b>Only Once</b></h2>
</div>
<div class="modal-body">
<p><b>This popup shows only one time to user</b></p>
</div>
</div>
</div>
</div>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/npm.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    if(sessionStorage.getItem('#myModal') !=='true'){
        $("#myModal").modal('show');

        sessionStorage.setItem('#myModal', 'true');
    }
});

</script>
</form>

    
</body>
</html>
