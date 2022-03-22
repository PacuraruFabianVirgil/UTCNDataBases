USE Exams


/* 1. Find the students who didn't sustain the exam with the teacher named 'Ionescu Vasile' */

/* First method - Using Exists/Not Exists function */
SELECT Name, Surname FROM Students
WHERE NOT EXISTS(SELECT 1 FROM Teachers JOIN Marks ON Teachers.Teacher_Id=Marks.Teacher_Id
                 WHERE Marks.Student_Id=Students.Stud_Id AND Name='Ionescu' AND Surname='Vasile')

/* Second method - Using the Group By clause */
SELECT Name, Surname
FROM Marks JOIN Students ON Stud_Id=Student_Id
WHERE Student_Id NOT IN (SELECT Student_Id FROM Marks JOIN Teachers ON Marks.Teacher_Id=Teachers.Teacher_Id
                         WHERE Name='Ionescu' AND Surname='Vasile')
GROUP BY Name, Surname


/* 2. Find the pairs student/teacher that didn't sustain any exam together */

/* First method - Using Exists/Not Exists function */
SELECT CONCAT(Students.Name, ' ', Students.Surname) AS Student, CONCAT(t1.Name,' ',t1.Surname) AS Teacher
FROM Students CROSS JOIN Teachers AS t1
WHERE NOT EXISTS(SELECT 1 FROM Marks JOIN Teachers AS t2 ON Marks.Teacher_Id=t2.Teacher_Id
                 WHERE Marks.Student_Id=Students.Stud_Id AND t1.Name=t2.Name AND t1.Surname=t2.Surname)
GROUP BY Students.Name, Students.Surname, t1.Name, t1.Surname

/* Second method - Not Using Exists/Not Exists */
SELECT CONCAT(Students.Name, ' ', Students.Surname) AS Student, CONCAT(t1.Name,' ',t1.Surname) AS Teacher
FROM Students CROSS JOIN Teachers AS t1
WHERE Stud_Id NOT IN (SELECT Student_Id FROM Marks JOIN Teachers AS t2 ON Marks.Teacher_Id=t2.Teacher_Id
                      WHERE Marks.Student_Id=Students.Stud_Id AND t1.Name=t2.Name AND t1.Surname=t2.Surname)
GROUP BY Students.Name, Students.Surname, t1.Name, t1.Surname