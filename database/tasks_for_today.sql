CREATE DATABASE IF NOT EXISTS tasks_for_today
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE tasks_for_today;

DROP TABLE IF EXISTS tasks;
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review the daily project priorities', 'completed', CURDATE(), NOW()),
('Prepare the team progress update', 'in progress', CURDATE(), NOW()),
('Check open support requests', 'pending', CURDATE(), NOW()),
('Submit the end-of-day summary', 'pending', CURDATE(), NOW()),
('Archive completed sprint notes', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Confirm the weekly meeting agenda', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Plan tomorrow sprint activities', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Schedule the stakeholder review', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('demo.user', 'Demo User', 'demo.user@example.com', NOW());
