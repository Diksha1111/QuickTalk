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
├── css/<br>
│ └── style.css<br>
├── database/<br>
│ └── db.php<br>
├── socket/<br>
│ ├── chat.php <br>
│ └── server.php <br>
├── database.sql <br>
├── login.php <br>
├── register.php <br>
├── chat_room.php <br>

## ⚙️ Setup Instructions

### 1. Clone the repository

git clone https://github.com/Diksha1111/chat_app.git<br>
cd chat_app

### 2. Install dependencies (WebSocket)
composer install<br>
Make sure you have Composer installed.

### 3. Import the Database
Open phpMyAdmin or MySQL CLI

Create a database named chat_app<br>
Run the database.sql file to create tables<br>

SOURCE path/to/chat_app/database.sql;

### 4. Start PHP Server

php -S localhost:8000<br>
Open your browser:<br>
➡️ http://localhost:8000/register.php

### 5. Start WebSocket Server
In a new terminal, run:

cd socket<br>
php server.php

✅ Usage
Register a new user<br>
Log in to the chat room<br>
Open another tab or browser to simulate another user<br>
Start chatting in real-time!<br>


👩‍💻 Author
Diksha Sahu<br>
📧 dikshasahu11112001@gmail.com


