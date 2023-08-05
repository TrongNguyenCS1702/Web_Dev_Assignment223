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

-- Insert sample data for Users table
INSERT INTO Users (username, password, email, role)
VALUES ('trong', 'admin', 'trong@example.com', 'admin'),
      ('duong', 'admin', 'duong@example.com', 'admin'),
      ('cuong', 'admin', 'cuong@example.com', 'admin'),
      ('anh', 'admin', 'anh@example.com', 'admin'),
      ('john_doe', '12345', 'john@example.com', 'user'),
      ('jane_doe', '54321', 'jane@example.com', 'user'),
      ('test_user1', 'test123', 'test1@example.com', 'user'),
      ('test_user2', 'test456', 'test2@example.com', 'user'),
      ('test_user3', 'test789', 'test3@example.com', 'user'),
      ('test_user4', 'testabc', 'test4@example.com', 'user');


INSERT INTO Figures (name, description, price, quantity, image_url)
VALUES ('Figure A', 'This is Figure A description', 25.99, 10, 'https://example.com/figureA.jpg'),
      ('Figure B', 'This is Figure B description', 19.99, 5, 'https://example.com/figureB.jpg'),
      ('Figure C', 'This is Figure C description', 34.99, 8, 'https://example.com/figureC.jpg'),
      ('Figure D', 'This is Figure D description', 12.99, 15, 'https://example.com/figureD.jpg');

INSERT INTO Vouchers (code, discount, start_date, end_date)
VALUES ('SUMMER20', 20.00, '2023-06-01', '2023-08-31'),
      ('SALE50', 50.00, '2023-07-15', '2023-07-31');

INSERT INTO ShoppingCarts (user_id)
VALUES (5), (6);

INSERT INTO ShoppingCartItems (cart_id, figure_id, quantity)
VALUES (1, 1, 2), (1, 2, 3), (1, 3, 1),
      (2, 1, 1), (2, 3, 2);

INSERT INTO Orders (user_id, voucher_code)
VALUES (5, 'SUMMER20'), (6, 'SALE50');


INSERT INTO OrderItems (order_id, figure_id, quantity, rating)
VALUES (1, 1, 2, 4), (1, 3, 1, 5),
      (2, 2, 3, 5), (2, 4, 1, 4);


INSERT INTO PurchaseHistory (user_id, figure_id, purchase_date)
VALUES (5, 1, '2023-07-20'), (5, 3, '2023-07-20'),
      (6, 2, '2023-07-25'), (6, 4, '2023-07-25');
