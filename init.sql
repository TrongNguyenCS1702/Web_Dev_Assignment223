CREATE TABLE Users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  role ENUM('admin', 'user') NOT NULL DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Figures (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  price DECIMAL(10, 2) NOT NULL,
  quantity INT NOT NULL,
  image_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE ShoppingCarts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE ShoppingCartItems (
  id INT PRIMARY KEY AUTO_INCREMENT,
  cart_id INT NOT NULL,
  figure_id INT NOT NULL,
  quantity INT NOT NULL,
  FOREIGN KEY (cart_id) REFERENCES ShoppingCarts(id),
  FOREIGN KEY (figure_id) REFERENCES Figures(id)
);

CREATE TABLE Orders (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  voucher_code VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE OrderItems (
  id INT PRIMARY KEY AUTO_INCREMENT,
  order_id INT NOT NULL,
  figure_id INT NOT NULL,
  quantity INT NOT NULL,
  rating INT CHECK (rating >= 1 AND rating <= 5),
  FOREIGN KEY (order_id) REFERENCES Orders(id),
  FOREIGN KEY (figure_id) REFERENCES Figures(id)
);

CREATE TABLE Vouchers (
  id INT PRIMARY KEY AUTO_INCREMENT,
  code VARCHAR(255) NOT NULL,
  discount DECIMAL(10, 2) NOT NULL,
  start_date DATE,
  end_date DATE
);

CREATE TABLE PurchaseHistory (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  figure_id INT NOT NULL,
  purchase_date DATE NOT NULL,
  FOREIGN KEY (user_id) REFERENCES Users(id),
  FOREIGN KEY (figure_id) REFERENCES Figures(id)
);
