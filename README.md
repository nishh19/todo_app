# 📋 To-Do List Web App

A modern **To-Do List** web app built using **PHP**, **MySQL**, and **CSS**. The app allows users to add, complete, and delete tasks. It comes with a sleek, responsive design and a motivational quote to keep you focused.

---

## 📍 Introduction

This **To-Do List** web app allows you to keep track of tasks that need to be done in a simple and effective manner. Whether you're working on daily tasks or long-term projects, this app helps you organize and stay productive.

Built with a focus on **ease of use** and **aesthetic appeal**, the app features a dark mode-friendly interface with intuitive task management functions.

---

## 🌟 Features

- **Add Tasks**: Easily add tasks to your to-do list.
- **Complete Tasks**: Mark tasks as completed with a checkmark.
- **Delete Tasks**: Delete tasks once they are completed or no longer needed.
- **Responsive Design**: The app is fully responsive, ensuring a great user experience on both desktop and mobile devices.
- **Motivational Quote**: A quote to inspire you to stay productive as you complete tasks.
- **Dynamic Task Management**: A smooth and interactive task list with instant updates.

---

## 🛠 Technologies Used

- **PHP**: Server-side scripting language to handle backend logic.
- **MySQL**: Database for storing tasks, using simple queries for CRUD operations.
- **HTML5**: For the structure of the app.
- **CSS3**: Styling the app with modern layout techniques such as Flexbox and CSS Grid.
- **JavaScript (Optional)**: Future enhancements for interactivity, such as AJAX updates.
- **XAMPP/WAMP**: Local server environment for running PHP and MySQL.

---

## 🔧 Installation

### Prerequisites

- **PHP** (version 7 or above)
- **MySQL** or **MariaDB**
- **XAMPP** or **WAMP** (local server)

### Steps to Set Up

1. **Clone the repository**:
   ```bash
   git clone https://github.com/nishh19/todo_app.git
   cd todo-list-app
   ```
2. **Set up XAMPP or WAMP:**
    Ensure Apache and MySQL are running.
   
4. **Create the Database:**
    Open phpMyAdmin and create a new database called todo_app.
```bash
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    is_completed BOOLEAN NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
5. **Configure Database Connection:**
    Open the config.php file and set the correct database credentials.

6. **Run the App:**
    Access the app via localhost/todo-list-app/index.php in your browser.

   ---
   ## 🖼 Screenshots
![Screenshot 2025-05-14 134143](https://github.com/user-attachments/assets/864fce69-3c07-4a21-a0f4-41720a3b4eb3)

## 🚀 Usage
**Adding a Task:**
    Simply type your task in the input field and click "Add" to add it to your to-do list.

**Marking a Task as Completed:**
    Click on the ✅ button to mark tasks as completed. This changes the task's appearance and moves it to the "completed" section.

**Deleting a Task:**
 Click on the 🗑️ button to remove a task once you're done with it.

 ## 🤝 Contributing
Contributions are welcome! Please fork the repository and submit a pull request.

## 📫 Contact

Created by [Nishh](https://github.com/nishh19) — feel free to reach out via [pashtenisha33@gmail.com](mailto:pashtenisha33@gmail.com)!

  
