-- Event configuration table
CREATE TABLE event_config (
  id INT AUTO_INCREMENT PRIMARY KEY,
  event_name VARCHAR(255) NOT NULL,
  category VARCHAR(100) NOT NULL,
  event_date DATE NOT NULL,
  registration_start_date DATE NOT NULL,
  registration_end_date DATE NOT NULL
);

-- Event registration table
CREATE TABLE event_registration (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  college_name VARCHAR(255) NOT NULL,
  department VARCHAR(255) NOT NULL,
  category VARCHAR(100) NOT NULL,
  event_date DATE NOT NULL,
  event_name VARCHAR(255) NOT NULL,
  created INT NOT NULL
);

