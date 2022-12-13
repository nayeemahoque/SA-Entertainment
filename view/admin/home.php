<?php
session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}
?>
<html>

<head>
    <title>Admin Home</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <table class="container-table">
    <tr class="top-menu-bar">
            <td class="w-20">
                <img class="logo" src="../../assets/common/logo.png" alt="Logo" />
            </td>
            <td colspan="4" align="right">
                <a href="notifications.php">
                    <span class="top-menu-item">
                        Notifications
                    </span>
                </a>
                <a href="settings.php">
                    <span class="top-menu-item">
                        Settings
                    </span>
                </a>
                <a href="profile.php">
                    <span class="top-menu-item">
                        My Profile
                    </span>
                </a>
                <form method="post" action="../../controller/logout_controller.php">
                    <input type="submit" name="logoutSubmit" value="Log Out" />
                </form>
            </td>
        </tr>
        <tr>
        <td width ="16%" class="w-20" align="center">
        <div class="menu-tile bg-color-gray">
                    <a href="uploadedFiles.html">
                        <h2>
                            Recent Uploades
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
            </td>
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