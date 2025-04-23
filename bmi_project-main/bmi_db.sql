-- إنشاء قاعدة البيانات
CREATE DATABASE IF NOT EXISTS bmi_db;
USE bmi_db;

-- جدول المستخدمين
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role VARCHAR(20) NOT NULL DEFAULT 'user'
);

-- جدول قياسات BMI
CREATE TABLE IF NOT EXISTS bmi_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    weight FLOAT NOT NULL,
    height FLOAT NOT NULL,
    bmi FLOAT NOT NULL,
    status VARCHAR(50),
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
