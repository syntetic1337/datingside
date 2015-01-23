<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" ref="text/css" href="css/css.css" />
    </head>
    <body>
        <header>
            <div class="wrap">
            <form action="?search" method="post">
                    <input type="text" placeholder="Search for something, someone or anything else...">
                </form>
            <nav>
                <ul>
                    <li><a href="#">my page</a></li>
                    <li><a href="#">messages</a></li>
                    <li><a href="#">matches</a></li>
                    <li><a href="#">notifications</a></li>
                    <li><a href="#">stream</a></li>     
                </ul>
            </nav>
            </div> 
        </header>
        <div id="wrapper">
            <div id="sidebarLeft">
                <div class="box">
                <div class="topbox">
                    <img class="profileImage" src="images/profile/75/marcus.jpg" width="40" height="40">
                    <p>Settings</p>
                </div>
                <div class="widget"></div>
            </div>
            </div>

            <div id="mainfield">
                <div id="poststatus">
                    <div class="nav">
                        <ul>
                            <li>
                                Story</li><li>
                                Media</li><li>
                                Life Event</li>
                        </ul>
                        <form action="?post&type=" method="post">
                            <textarea></textarea>
                            <input type="submit" value="Post">
                            <label>What's your mood like?</label>
                            <select>
                                <option>Happy</option>
                                <option>Sad</option>
                                <option>Angry</option>
                                <option>Deep</option>
                            </select>

                        </from>
                    </div>
                </div>
                <div id="postfield">
                    <div class="post">
                    </div>
                    <div class="post">
                    </div>
                    <div class="post">
                    </div>
                </div>
            </div>
            <div id="sidebarRight">
                
            </div>
            
        </div>
    </body>
</html>


