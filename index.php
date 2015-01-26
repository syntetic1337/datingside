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
            <div class="boxLeft">
                <div class="topbox">
                    <img class="profileThumb40" src="images/profile/75/marcus.jpg" width="40" height="40">
                    <p>Settings</p>
                </div>
                <div class="widgetLeft"></div>
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
                        <div class="header">
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <p class="username"><a href="#">Marcus Klausen</a></p><br />
                            <p class="underInfo">22 mins ago</p>
                        </div>
                        <div class="content">
                            <p>her er min status opdatering med tekst!</p>
                        </div>
                        <div class="actions">
                            <p>
                                <a href="#">Like</a> &middot;
                                <a href="#">Dislike</a> &middot;
                                <a href="#">Share</a>
                            </p>

                        </div>
                        <div class="footer">
                            <p>354 people likes this.</p>
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <form action="?post&comment&postID=var" method="post">
                                <textarea class="comment"></textarea>
                            </from>
                        </div>
                    </div>
                    <div class="post">
                        <div class="header">
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <p class="username"><a href="#">Marcus Klausen</a></p><br />
                            <p class="underInfo">22 mins ago</p>
                        </div>
                        <div class="content">
                            <p>Savner fandme defqon!</p>
                            <img src="images/posts/defqon.jpg">
                        </div>
                        <div class="actions">
                            <p>
                                <a href="#">Like</a> &middot;
                                <a href="#">Dislike</a> &middot;
                                <a href="#">Share</a>
                            </p>

                        </div>
                        <div class="footer">
                            <p>354 people likes this.</p>
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <form action="?post&comment&postID=var" method="post">
                                <textarea class="comment"></textarea>
                            </from>
                        </div>
                    </div>
                    <div class="post">
                        <div class="header">
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <p class="username"><a href="#">Marcus Klausen</a></p><br />
                            <p class="underInfo">22 mins ago</p>
                        </div>
                        <div class="content">
                            <p>her er min status opdatering med tekst!</p>
                        </div>
                        <div class="actions">
                            <p>
                                <a href="#">Like</a> &middot;
                                <a href="#">Dislike</a> &middot;
                                <a href="#">Share</a>
                            </p>

                        </div>
                        <div class="footer">
                            <p>354 people likes this.</p>
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <form action="?post&comment&postID=var" method="post">
                                <textarea class="comment"></textarea>
                            </from>
                        </div>
                    </div>
                    <div class="post">
                        <div class="header">
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <p class="username"><a href="#">Marcus Klausen</a></p><br />
                            <p class="underInfo">22 mins ago</p>
                        </div>
                        <div class="content">
                            <p>her er min status opdatering med tekst!</p>
                        </div>
                        <div class="actions">
                            <p>
                                <a href="#">Like</a> &middot;
                                <a href="#">Dislike</a> &middot;
                                <a href="#">Share</a>
                            </p>

                        </div>
                        <div class="footer">
                            <p>354 people likes this.</p>
                            <img class="profileThumb40 left" src="images/profile/75/marcus.jpg" width="40" height="40">
                            <form action="?post&comment&postID=var" method="post">
                                <textarea class="comment"></textarea>
                            </from>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebarRight">
                <div class="boxRight">
                    <div class="widgetRight">
                        <div class="header">
                            <h2>People you might like</h2>
                        </div>
                        <img class="profileThumb40 left round" src="images/profile/75/marcus.jpg" width="40" height="40">
                        <p class="username"><a href="#">Marcus Klausen</a></p><br />
                        <p class="underInfo">22 mins ago</p>
                    </div>
                </div>

            </div>

        </div>
    </body>
    </html>


