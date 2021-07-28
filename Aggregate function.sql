SELECT COUNT(*)  
FROM studentinfo;  

SELECT COUNT(*)  
FROM studentinfo 
WHERE Marks>=350;  

SELECT COUNT(DISTINCT language)  
FROM mothertongue;

SELECT lastname, COUNT(*)  
FROM mothertongue  
GROUP BY lastname;  

SELECT SUM(COST)  
FROM PRODUCT_MAST;  

SELECT AVG(Marks)  
FROM studentinfo;  //406.5000

SELECT MAX(Marks)  
FROM studentinfo;

SELECT MIN(Marks)  
FROM studentinfo;