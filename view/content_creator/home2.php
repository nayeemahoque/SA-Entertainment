<?php

?>

<html>
    <head>
        <title>Content Creator | Home</title>
        <link rel="stylesheet" href="../../assets/style.css">
    </head>
    <body>
        <table border="0px" width="100%" height="100%">
            <tr height="144px" style="background-color: purple;">
                <td width="20%" align="center">
                    <img height="72" width="175" src="../../assets/common/logo.png" alt="Logo">
                </td>    
                <td width="70%" align="center" colspan="5" >
                   
                    <input type="text" placeholder="Search.." name="searchBox" value="" size="60%"/>
                </td>
            </tr>
            <tr>
                <td rowspan="2" align="center" style="background-color: peachpuff  ;">
                    <img height="150" width="150" src="../../assets/content_creator/images/content-creator.jpg" alt="Profile Picture" style="border-radius:50%; padding-bottom: 24px;">
                    <br>
                    <a href="profile.html">
                        <h3>
                            My Profile
                        </h3>
                    </a>
                    <br>
                    <a href="notifications.html">
                        <h3>
                            Notifications
                        </h3>
                    </a>
                    <br>
                    <a href="settings.html">
                        <h3>
                            Settings
                        </h3>
                    </a>
                    <br>
                    <a href="contact.html">
                        <h3>
                            Contact Us
                        </h3>
                    </a>
                    <br>
                    <a href="aboutUs.html">
                        <h3>
                            About us
                        </h3>
                    </a>
                    <br>
                    <form method="post" action="logout.php">
                        <input type="submit" name="logoutSubmit" value="Log Out"/>
                    </form>
                    
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: gray;">
                        <a href="uploadBooks.html">
                            <h2>
                               Upload Books
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: skyblue;">
                        <a href="uploadMovies.html">
                        <h2>
                           Upload Movies
                        </h2>
                    </a>
                    </div>
                </td >
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: gray;">
                        <a href="uploadMusic.html">
                            <h2>
                               Upload Music
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: skyblue;">
                        <a href="uploadtvSeries.html">
                            <h2>
                               Upload TV Series
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: gray;">
                        <a href="uploadGames.html">
                            <h2>
                               Upload Games
                            </h2>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/content_creator/images/books.jpg" alt="book">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/content_creator/images/movie.jpg" alt="movie">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/content_creator/images/music.jpg" alt="music">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/content_creator/images/series.jpg" alt="series">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/content_creator/images/game.jpg" alt="game">
                </td>
                
            </tr>
        </table>
    </body>
</html>