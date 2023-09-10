<html>
    <head>
        <style>
            body{
                margin: 0px;
                }
                .wrapper{
                    height: 100vh;
                    display: grid;
                    place-items: center;
                    background: black;
                }
                .txt{
                    font-size: 100px;
                    text-align: center;
                    color:#fff;
                    background: black;
                    font-weight: bold;
                    text-transform: uppercase;
                    font-family: arial;
                }
                .txt::before{
                    /*content:"Codepen";*/
                    position: absolute;
                    mix-blend-mode: difference;
                    filter: blur(3px);
                }
                .neon-wrapper{
                    display: inline-grid;
                    filter: brightness(200%);
                    overflow: hidden;
                }
                .gradient{
                    background: linear-gradient(117.73992253205643deg, rgba(231, 244, 245,1) 7.05078125%,rgba(78, 240, 250,1) 93.76953124999999%);
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                    mix-blend-mode: multiply;
                }
                .dodge{
                    background: radial-gradient(white, black 35%) center/25% 25%;
                    position: absolute;
                    top: -100%;
                    left: -100%;
                    right: 0px;
                    bottom: 0px;
                    mix-blend-mode: color-dodge;
                    animation: dodge-area 3s linear infinite running;
                }
                @keyframes dodge-area{
                    to{
                        transform: translate(50%, 50%);
                    }
                }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="neon-wrapper">
                <div class="txt">
                   Welcome {{ tenant('id') }} to Your Page
                </div>
                <span class="gradient"></span>
                <span class="dodge"></span>
            </div>
        </div>
    </body>
</html>