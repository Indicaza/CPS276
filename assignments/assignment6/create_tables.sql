CREATE TABLE Customer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    address VARCHAR(255),
    city VARCHAR(255),
    state VARCHAR(255),
    zip VARCHAR(255),
    phone VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
) ENGINE=InnoDB;

CREATE TABLE ProductGroup (
    id INT AUTO_INCREMENT PRIMARY KEY,
    groupname VARCHAR(255),
    imagefolder VARCHAR(255)
) ENGINE=InnoDB;

CREATE TABLE Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    groupid INT,
    productname VARCHAR(255),
    productprice DECIMAL(10, 2),
    image VARCHAR(255),
    description TEXT,
    FOREIGN KEY (groupid) REFERENCES ProductGroup(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE Orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    customerid INT,
    FOREIGN KEY (customerid) REFERENCES Customer(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE OrderInfo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    orderid INT,
    productid INT,
    amount INT,
    FOREIGN KEY (orderid) REFERENCES Orders(id) ON DELETE CASCADE,
    FOREIGN KEY (productid) REFERENCES Product(id) ON DELETE CASCADE
) ENGINE=InnoDB;
