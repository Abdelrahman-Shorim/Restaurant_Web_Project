<html>
    <style>
        .quick_cart {
            width: 330px;
            text-align: left;
            position: absolute;
            border: 2px solid #000;
            border-radius: 0;
            outline: none;
            background: #fff;
            right: -2px;
            top: 50px;
            z-index: 9999;
        }
    </style>
     <body>
    <input type="button" value="button name" onclick="popup()" />
    <!-- <a onclick="window.open(document.URL, '_blank', 'location=no,height=100,width=100,scrollbars=no,status=no');">
Open New Window
</a>  -->
<script>
    function popup(){
var newWin = open('url','windowName','location=no,resizable=no,height=300,width=300,menubar=no,scrollbars=no,status=no,left=-100,top=-1000');
newWin.document.write('html to write...');
    }
</script>
</body>
</html>