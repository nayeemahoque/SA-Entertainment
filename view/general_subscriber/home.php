<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <table border="0px" width="100%" height="100%">
            <tr height="144px" style="background-color: #034ea1;">
                <td width="20%" align="center">
                    <img height="72" width="175" src="../../assets/common/logo.png" alt="Logo">
                </td>    
                <td width="70%" align="center" colspan="5" >
                   
                    <input type="text" id="search" placeholder="Search.." name="searchBox" onkeypress ="search()" value="" size="60%"/>
                </td>
            </tr>
            <tr>
                <td rowspan="2" align="center" style="background-color: peachpuff  ;">
                    <img height="150" width="150" src="../../assets/general_subscriber/images/cat.jpg" alt="Profile Picture" style="border-radius:50%; padding-bottom: 24px;">
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
                        <a href="books.html">
                            <h2>
                                Books
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: skyblue;">
                        <a href="movies.html">
                        <h2>
                            Movies
                        </h2>
                    </a>
                    </div>
                </td >
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: gray;">
                        <a href="music.html">
                            <h2>
                                Music
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: skyblue;">
                        <a href="tvSeries.html">
                            <h2>
                                TV Series
                            </h2>
                        </a>
                    </div>
                </td>
                <td width="16%" align="center">
                    <div style="height: 100%; width: 100%; background-color: gray;">
                        <a href="games.html">
                            <h2>
                                Games
                            </h2>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/general_subscriber/images/books.jpg" alt="book">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/general_subscriber/images/movie.jpg" alt="movie">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/general_subscriber/images/music.jpg" alt="music">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/general_subscriber/images/series.jpg" alt="series">
                </td>
                <td width = "16%">
                    <img height="20%" width="100%" src="../../assets/general_subscriber/images/game.jpg" alt="game">
                </td>
                
            </tr>
        </table>
        <script>
            function search(){
                var searchKey = document.getElementById('search').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../../controller/general_subscriber/registration_controller.php', true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send('name='+name+'&email='+email+'&password='+password+'&confirmPassword='+confirmPassword+'&gender='+gender+'&dob='+dob);
                xhttp.onload = function() {
                    if (xhttp.status == 200) {
                    alert(xhttp.responseText);
                    } else {
                    alert(`Error ${xhttp.status}: ${xhttp.statusText}`);
                    }
                };
            }
        </script>
    </body>
</html>