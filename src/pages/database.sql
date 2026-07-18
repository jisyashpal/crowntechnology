-- Production-ready Crown CMS Schema
CREATE DATABASE IF NOT EXISTS `crown_cms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crown_cms`;

-- Admin Users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'editor') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dynamic Pages Content
CREATE TABLE pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(100) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    subtitle TEXT,
    status ENUM('draft', 'published') DEFAULT 'published',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Page Sections (The Page Builder Backbone)
CREATE TABLE page_sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_id INT,
    section_key VARCHAR(100), -- e.g., 'hero', 'about_main', 'cta_footer'
    section_title VARCHAR(255),
    content_json LONGTEXT, -- Stores text, buttons, and image paths as JSON
    sort_order INT DEFAULT 0,
    FOREIGN KEY (page_id) REFERENCES pages(id) ON DELETE CASCADE
);

-- Services Management
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    icon VARCHAR(50),
    price DECIMAL(10, 2),
    category VARCHAR(100),
    image_path VARCHAR(255),
    status ENUM('active', 'inactive') DEFAULT 'active',
    sort_order INT DEFAULT 0
);

-- Blog System
CREATE TABLE blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content LONGTEXT,
    featured_image VARCHAR(255),
    author_id INT,
    status ENUM('draft', 'published') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id)
);

-- Appointments & Leads
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(20),
    service_id INT,
    appointment_date DATE,
    status ENUM('pending', 'approved', 'completed', 'cancelled') DEFAULT 'pending',
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Testimonials
CREATE TABLE testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(100),
    designation VARCHAR(100),
    feedback TEXT,
    rating INT DEFAULT 5,
    image_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Leads/Contact Requests
CREATE TABLE leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    subject VARCHAR(255),
    message TEXT,
    source VARCHAR(50) DEFAULT 'contact_page',
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Media Manager
CREATE TABLE media (
    id INT AUTO_INCREMENT PRIMARY KEY,
    file_name VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    file_type VARCHAR(50),
    file_size INT,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Menus & Navigation
CREATE TABLE menus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    link VARCHAR(255) NOT NULL,
    parent_id INT DEFAULT NULL,
    sort_order INT DEFAULT 0,
    position ENUM('header', 'footer') DEFAULT 'header'
);

-- Notifications
CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    message TEXT,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Global Site Settings
CREATE TABLE settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(100) UNIQUE,
    setting_value TEXT,
    setting_group VARCHAR(50) DEFAULT 'general'
);

-- Initial Admin (Username: ajay, Password: ajay@123)
INSERT INTO users (name, username, email, password, role) 
VALUES ('Ajay Munda', 'ajay', 'ajay@crowntechnology.in', '$2y$10$89v8z.S2y5M0XueUv9p6X3o9v/R6z/N6yGzZ7X6iW8vWpG', 'admin');

-- Seed initial page data for Services
INSERT INTO pages (slug, title, subtitle) 
VALUES ('services', 'Our Services', 'Creative solutions designed to elevate brands, engage audiences, and drive growth.');

-- Initial Site Settings
INSERT INTO settings (setting_key, setting_value, setting_group) VALUES 
('site_name', 'CROWN TECHNOLOGY', 'general'),
('contact_email', 'info@crowntechnology.in', 'contact'),
('contact_phone', '+91 7970509143', 'contact'),
('address', 'Morabadi, Ranchi', 'contact'),
('facebook_link', '#', 'social'),
('whatsapp_no', '917970509143', 'social'),
('logo_path', 'assets/img/logo.png', 'appearance');

-- Seed initial services
INSERT INTO services (title, description, icon, category) VALUES 
('Design & Development', 'Modern, responsive, and performance-driven digital experiences.', '🌐', 'Core'),
('Branding & Promotions', 'Building strong brand identities and impactful visual communication.', '🎨', 'Core'),
('Film & Visual Production', 'Cinematic storytelling designed to inspire and influence.', '🎬', 'Core');