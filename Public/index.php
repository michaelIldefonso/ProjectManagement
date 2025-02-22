<?php
session_start();

include __DIR__ . '/../config/databaseConnection.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8bits Dashboard</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Use absolute path for CSS -->
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <span class="workspace-title">8bits</span>
            </div>
            <ul class="menu">
                <li>Boards</li>
                <li>Members</li>
                <li>Workspace Settings</li>
                <li class="premium">Premium</li>
                <li>Workspace Views
                    <ul class="submenu">
                        <li>Table</li>
                        <li>Calendar</li>
                    </ul>
                </li>
                <li>Your Boards
                    <ul class="submenu">
                        <li>My 8bits Board</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>My 8BitsBOP</h1>
                <button class="button-create">Create</button>
            </div>
            <div class="board">
                <div class="list">
                    <h3>To Do</h3>
                    <ul>
                        <li>Project Planning</li>
                        <li>Kickoff Meeting</li>
                        <li><button class="add-card">+ Add a card</button></li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Doing</h3>
                    <ul>
                        <li><button class="add-card">+ Add a card</button></li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Done</h3>
                    <ul>
                        <li><button class="add-card">+ Add a card</button></li>
                    </ul>
                </div>
                <div class="list add-list">
                    <button class="add-list-button">+ Add another list</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
