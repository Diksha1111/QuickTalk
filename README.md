# QuickTalk - Real-Time PHP Chat Application 💬

QuickTalk is a real-time multi-user chat application built using **PHP**, **MySQL**, **Ratchet WebSockets**, and **Vanilla JavaScript**. Users can register, log in, and chat with others instantly in a simple, responsive interface.

## 🚀 Features

- 🔐 User registration and login (secure with hashed passwords)
- 💬 Real-time messaging using WebSockets (Ratchet)
- 📄 Chat messages displayed instantly to all connected users
- 🎨 Clean and responsive UI with custom CSS
- 📦 Built using PHP, MySQL, and WebSockets without frameworks

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (Vanilla), WebSockets (Ratchet)
- **Database**: MySQL
- **Server**: PHP's built-in server (`php -S`) + WebSocket server

## 📂 Folder Structure
chat_app/<br>
│<br>
├── css/
│ └── style.css
├── database/
│ └── db.php
├── socket/
│ ├── chat.php 
│ └── server.php 
├── database.sql 
├── login.php 
├── register.php 
├── chat_room.php 

## ⚙️ Setup Instructions

### 1. Clone the repository

git clone https://github.com/Diksha1111/chat_app.git
cd chat_app

### 2. Install dependencies (WebSocket)
composer install
Make sure you have Composer installed.

### 3. Import the Database
Open phpMyAdmin or MySQL CLI

Create a database named chat_app
Run the database.sql file to create tables

SOURCE path/to/chat_app/database.sql;

### 4. Start PHP Server

php -S localhost:8000
Open your browser:
➡️ http://localhost:8000/register.php

### 5. Start WebSocket Server
In a new terminal, run:

cd socket
php server.php

✅ Usage
Register a new user
Log in to the chat room
Open another tab or browser to simulate another user
Start chatting in real-time!


👩‍💻 Author
Diksha Sahu
📧 dikshasahu11112001@gmail.com


