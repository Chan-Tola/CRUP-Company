-- step 1 create database
CREATE DATABASE staffs;
-- Step 2 Use new database;
USE staffs;
-- Createa User table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL UNIQUE,
    name VARCHAR(50) NOT NULL,
    create_at VARCHAR(100) DEFAULT CURRENT_TIMESTAMP,
)

-- create products table
-- CREATE TABLE products


-- Step 2: Create the staff table
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,     -- Unique identifier for each staff member
    first_name VARCHAR(100) NOT NULL,       -- First name of the staff
    last_name VARCHAR(100) NOT NULL,        -- Last name of the staff
    email VARCHAR(100) NOT NULL UNIQUE,     -- Staff email (unique)
    phone VARCHAR(15),                      -- Staff phone number
    position VARCHAR(100),                  -- Staff position or job title
    salary DECIMAL(10, 2),                  -- Staff salary
    is_active BOOLEAN DEFAULT 1,            -- staff work
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Timestamp of record creation
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Timestamp of record creation
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);


