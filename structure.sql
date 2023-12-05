-- Customer Table
CREATE TABLE Customer (
    ID INT PRIMARY KEY,
    Year_Birth INT,
    Education VARCHAR(50),
    Marital_Status VARCHAR(50),
    Income INT
);

-- Purchase Table
CREATE TABLE Purchase (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Customer_ID INT,
    Dt_Customer DATE,
    Recency INT,
    MntWines INT,
    MntFruits INT,
    MntMeatProducts INT,
    MntFishProducts INT,
    MntSweetProducts INT,
    MntGoldProds INT,
    NumDealsPurchases INT,
    NumWebPurchases INT,
    NumCatalogPurchases INT,
    NumStorePurchases INT,
    NumWebVisitsMonth INT,
    FOREIGN KEY (Customer_ID) REFERENCES Customer(ID)
);

-- Campaign Table
CREATE TABLE Campaign (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Customer_ID INT,
    AcceptedCmp3 INT,
    AcceptedCmp4 INT,
    AcceptedCmp5 INT,
    AcceptedCmp1 INT,
    AcceptedCmp2 INT,
    FOREIGN KEY (Customer_ID) REFERENCES Customer(ID)
);

-- Complaint Table
CREATE TABLE Complaint (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Customer_ID INT,
    Complain INT,
    FOREIGN KEY (Customer_ID) REFERENCES Customer(ID)
);

-- Contact Cost and Revenue Table
CREATE TABLE Contact_Cost_Revenue (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Customer_ID INT,
    Z_CostContact INT,
    Z_Revenue INT,
    FOREIGN KEY (Customer_ID) REFERENCES Customer(ID)
);

-- Response Table
CREATE TABLE Response (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Customer_ID INT,
    Response INT,
    FOREIGN KEY (Customer_ID) REFERENCES Customer(ID)
);

CREATE TABLE `Log` (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    File_Name VARCHAR(255),
    Created_At DATETIME DEFAULT CURRENT_TIMESTAMP
);
