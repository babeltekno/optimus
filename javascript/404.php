
<html>
    <head>
        <title>CodeAnalytic 404 Page Not Found</title>
        <style type="text/css">
            body{
                width: auto;
                margin: auto;
                background: #CCC;
            }
            #wrap_front{
                width: 100%;
                height: 320px;
                margin: auto;
                background-image: -moz-linear-gradient(top, #f9f9f9 , #BBB);
                background-image: -webkit-gradient(linear, center top, center bottom, from(#f9f9f9), to(#BBB));
                background-image: -o-linear-gradient(top, #f9f9f9 , #BBB);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#bbbbbb');
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#bbbbbb')";
                background-image: linear-gradient(top, #f9f9f9 , #f9f9f9);
                -moz-box-shadow: 0px 15px 50px #a0a0a0;
                -webkit-box-shadow: 0px 15px 50px #A0A0A0;
                box-shadow: 0px 15px 50px #A0A0A0;
                filter: progid:DXImageTransform.Microsoft.Shadow(strength=15, direction=180, color='#a0a0a0');
                -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength=15, Direction=180, Color='#a0a0a0')";
            }
            #content{
                margin: 10px auto;
                width:800px;
                
            }
            .top{
                margin-top: 10px;
                text-align: center;
                font-family: 'sans-serif';
                font-weight: 600;
                font-size: 36px;
                text-transform: capitalize;
                color: #333;
                float:left;
                width:100%;
            }
            .images{
                background: url("/docs/images/404.png") no-repeat;
                float: left;
                width: 500px;
                top:80px;
                left :18%;
                height: 220px;
                position: absolute;
            }
            .center{
                text-align: center;
                font-family: 'sans-serif';
                font-size: 20px;
                color: #333;
                margin-bottom: 40px;
                width:100%;
                padding: 5px;
            }
            .bottom{
                float:left;
                width:100%;
            }

            .bottom a{
                padding: 7px 15px;
                margin-left: 10px;
                border-radius: 3px;
                background-color: #e77817;
                background-image: linear-gradient(bottom, #ff6e12 6%, #e77817 53%);
                background-image: -o-linear-gradient(bottom, #ff6e12  6%, #e77817 53%);
                background-image: -moz-linear-gradient(bottom, #ff6e12  6%, #e77817 53%);
                background-image: -webkit-linear-gradient(bottom, #ff6e12  6%, #e77817 53%);
                background-image: -ms-linear-gradient(bottom,#ff6e12  6%, #e77817 53%); 
                border: 1px solid #e77817;
                box-shadow: #ff6e12 ;
                color: #F9F9F9;
                text-decoration: none;
                border-radius: 3px;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                -o-border-radius: 3px;
                font-weight: bold;
            }
            .bottom a:hover {
                color: #fff;
                text-decoration: none;
                border: 1px solid #EBEBEB;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                -o-border-radius: 3px;
                font-weight: bold;
            }
             
        </style>
        <script type="text/javascript" src="../js/jquery.1.7.2.min.js"></script> 

        <script type="text/javascript" src="../js/ca-core-optimus.js"></script>
        <script type="text/javascript" src="../js/ca-ajax-optimus.js"></script>
        
    </head>
    <body>
        <div id="wrap_front">
            <div class="images"></div>
        </div>
        <div id="content">
            <div class="top">404 Page Not Found</div>
            <div class="center"><p>The page you requested was not found.</p>            </div>
            <div class="bottom">
                <a href="./">Back to Documentation</a> 
            </div>
        </div>
    </body>
</html>