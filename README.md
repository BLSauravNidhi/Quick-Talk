<p align="center"><a href="https://ibb.co/dwTptSYp"><img src="https://i.ibb.co/dwTptSYp/Quick-Talk-Photoroom.png" alt="Quick-Talk-Photoroom" border="0"></a></p>

# 🍽️ Realtime Chat Application

A lightning-fast, secure, and modern one-to-one real-time chat application built with **Laravel 11**, **Livewire v4**, **Laravel Reverb (WebSocket server)**, **Socialite**, **Tailwind CSS**, and **MySQL**.This application provides a seamless communication experience with real-time friend management and custom user profiles.

---

## ✨ Features

- ⚡ Blazing Fast Chat: True real-time messaging powered by native PHP WebSockets via Laravel Reverb.
- 🛡️ Secure by Design: Protected endpoints, secure WebSocket channels, and sanitised user inputs.
- 🤝 Friend Management System: Send, receive, and accept/decline friend requests dynamically.
- 👤 Profile Customization: Change user profiles, update display usernames, and upload new profile pictures.

## 🔐 Security

- Private Channel Authorization: Private chat streams are strictly guarded using Laravel Broadcasting authorization gates to prevent eavesdropping.
- Data Validation: Strict backend verification on file uploads (profile pictures) and username variations to neutralize XSS vulnerabilities.
- Secure Sessions: Session-based authorization alongside protected web and broadcast routes using custom Laravel Middleware.

---

## ⚙️ Tech Stack

| Technology | Purpose |
|------------|----------|
| Laravel | Core Backend Framework |
| Livewire | Real-time Components |
| Laravel Reverb | Native WebSocket Server for Broadcasting |
| Laravel Socialite | OAuth Social Authentication Handling |
| MySQL | Database |
| Tailwind CSS | Styling |
| JavaScript | Frontend Interactions |
| Git | Version Control |

---

## 🗄️ Database

The application uses a relational MySQL database with foreign key relationships.
Main tables include:

- users
- messages
- friendship

---

## 🚀 Workflow

### Customer Flow

```
User Authenticates (Socialite / Web)
      │
      ▼
Connects to Reverb WebSocket Server
      │
      ▼
Subscribe to Personal Private & Presence Channels
      │
      ▼
Send / Accept Friend Request (Livewire Event)
      │
      ▼
Open Chat Box with Active Friend
      │
      ▼
Type & Send Message
      │
      ▼
Broadcast Event Dispatched via Reverb
      │
      ▼
Recipient Receives Chat Message Instantly (No Refresh)
```

---

## 📂 Project Structure

```
app/
├── Http/
├── Models/
├── Events/
├── Providers/

resources/
├── views/
│   └── components/
│   └── layouts/
├── css/
├── js/

database/
├── migrations/

storage/
├── app/
    └── private/
    └── public/
        └── profiles/

routes/
├── web.php
└── channels.php
```

---

## 📸 Screenshots

> Screenshots.



```
screenshots/

├── Register & Login.png
├── dashboard
    ├── home.png
    ├── chat.png
    ├── notifications.png
    ├── world-users.png
```

---

## 💻 Installation

Clone the repository

```bash
git clone git@github.com:BLSauravNidhi/Quick-Talk.git
```

Move into the project

```bash
cd Quick-Talk
```

Install dependencies

```bash
composer install

npm install
```

Create environment file

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure your database inside `.env`

Run migrations

```bash
php artisan migrate
```

```bash
php artisan reverb:install
```
```bash
php artisan storage:link
```

Run the application

```bash
# Terminal 1: Application Server
php artisan serve

# Terminal 2: Vite Assets compiler
npm run dev

# Terminal 3: WebSocket Server
php artisan reverb:start
```

---

## 🎯 Future Improvements

- Group messaging architecture
- Message status indicators (Delivered / Read receipts)
- Media attachments (Images, voice notes, documents) inside chat threads
- Typing indicator animations using Presence channels
- Block/Mute user functionalities
- End-to-end encryption layers for absolute message privacy

---

## 📄 License

This project is created for learning. Do not include this project or any modified version of it in your portfolio, resume, academic submission, or professional profile. You are not allowed to copy this project, in whole or in part, and present it as your own work.

---

## 👤 Author

**Your Name**

GitHub: https://github.com/BLSauravNidhi

LinkedIn: https://www.linkedin.com/in/bl-saurav-nidhi-a9217a338/