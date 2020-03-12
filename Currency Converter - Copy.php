<!DOCTYPE html>
<html lang ="en">
    <head>
        <style>
        .icon_image{
            width:19px;
            height:16px;
            margin-right:5px;
        }
        </style>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-dropdown.js"></script>
        <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet"/>
        <title>Currency Converter</title>
    </head>
    <body>
        <div class = "money-amount">
            <label for ="amount">Amount</label>
            <input type="text" class="money-amount">
        </div>

        
        <div class="btn-group">
            <button aria-expanded="true" data-toggle="dropdown" class="btn btn-primary btn-lg dropdown-toggle" type="button">From&nbsp;&nbsp;&nbsp;<b class="caret"></b></button>
            <ul class="dropdown-menu">
                <li><a><img class="img-thumbnail hidden-xs" src="chinese_flag.png">&nbsp;&nbsp;Chinese Yuan</a></li>
                <li><a><img class="img-thumbnail hidden-xs" src="">&nbsp;&nbsp;US Dollar</a></li></ul>
            </div>


    </body>
</html>