<?php
   
?>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <table border="0px" width="100%" height="100%">
            <tr height="144px" style="background-color: purple;">
                <td width="20%" align="center">
                    <img height="72" width="175" src="images-admin/logo.png" alt="Logo">
                </td>    
                <td width="70%" align="center" colspan="5">
                   
                    <input type="text" placeholder="Search.." name="searchBox" value="" size="60%"/>
                </td>
            </tr>
            <tr>
                <td rowspan="4" align="center" style="background-color: peachpuff  ;">
                    <img height="150" width="150" src="images-admin/admin-profile.jpg" alt="Profile Picture" style="border-radius:50%; padding-bottom: 24px;">
                    <br>
                    <a href="profile-admin.html">
                        <h3>
                            My Profile
                        </h3>
                    </a>
                    <br>
                    <a href="notifications-admin.html">
                        <h3>
                            Notifications
                        </h3>
                    </a>
                    <br>
                    <a href="settings-admin.html">
                        <h3>
                            Settings
                        </h3>
                    </a>
                    <br>
                    <a href="contact-admin.html">
                        <h3>
                            Contact Us
                        </h3>
                    </a>
                    <br>
                    <a href="aboutUs-admin.html">
                        <h3>
                            About us
                        </h3>
                    </a>
                    <br>
                    <br>
                    <form method="post" action="logout.php">
                        <input type="submit" name="logoutSubmit" value="Log Out"/>
                    </form>
                </td>
                <tr>
                <td width="16%" align="center">
                        <div style="height: 100%; width: 100%; background-color: #b5e48c">
                            <a href="uploadedFiles.html">
                                <h2>
                                    Uploaded Files
                                </h2>
                            </a>
                        </div>
                    </td>
                    <td width="16%" align="center">
                        <div style="height: 100%; width: 100%; background-color: #99d98c;">
                            <a href="totalUser.html">
                                <h2>
                                    Total User
                                </h2>
                            </a>
                        </div>
                    </td>
                    <td width="16%" align="center">
                        <div style="height: 100%; width: 100%; background-color:#76c893;">
                            <a href="totalGeneralUser.html">
                                <h2>
                                    Total General User
                                </h2>
                            </a>
                        </div>
                    </td>
                    <td width="16%" align="center">
                        <div style="height: 100%; width: 100%; background-color: #52b69a;">
                            <a href="totalPaidUser.html">
                                <h2>
                                    Total Paid User
                                </h2>
                            </a>
                        </div>
                    </td>
                    <td width="16%" align="center">
                        <div style="height: 100%; width: 100%; background-color: #168aad;">
                            <a href="totalContentCreator.html">
                                <h2>
                                    Total Content Creater
                                </h2>
                            </a>
                        </div>
                    </td>
                    </tr>
            <tr>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: #95d5b2;">
                        <a href="books-admin.html">
                            <h2>
                                Books
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: #74c69d;">
                        <a href="movies-admin.html">
                        <h2>
                            Movies
                        </h2>
                    </a>
                    </div>
                </td >
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: #52b788;">
                        <a href="music-admin.html">
                            <h2>
                                Music
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: #40916c;">
                        <a href="tvSeries-admin.html">
                            <h2>
                                TV Series
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: #43aa8b;">
                        <a href="games-admin.html">
                            <h2>
                                Games
                            </h2>
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>