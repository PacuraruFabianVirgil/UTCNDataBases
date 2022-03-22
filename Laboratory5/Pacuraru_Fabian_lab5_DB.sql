USE Exams


SELECT Students.Name, Students.Surname, Gr_Name
FROM ((Students JOIN Groups ON Group_Id=Gr_Id) JOIN
      (Marks JOIN Teachers ON Marks.Teacher_Id=Teachers.Teacher_Id)
      ON Stud_Id=Student_Id)
WHERE Teachers.Name='Popovici'
GROUP BY Students.Name, Students.Surname, Gr_Name


SELECT Name, Surname
FROM (Marks JOIN Students ON Student_Id=Stud_Id)
      JOIN Disciplines ON Disc_Id=Discipline_Id
WHERE Disc_name='Databases' AND
       Mark > (SELECT Mark 
	           FROM (Marks JOIN Students ON Student_Id=Stud_Id)
                     JOIN Disciplines ON Disc_Id=Discipline_Id
			   WHERE Disc_name='Databases' AND
			          Name='Popescu' AND 
					  Surname='Ion')


SELECT TOP 3 Name, Surname, Gr_Name
FROM ((Students JOIN Groups ON Group_Id=Gr_Id) JOIN
      (Marks JOIN Disciplines ON Disc_Id=Discipline_Id)
      ON Stud_Id=Student_Id)
WHERE Disc_name='Computer Programming'
ORDER BY Mark DESC


SELECT Name, Surname, AVG(Mark)
FROM (Students JOIN Groups ON Group_Id=Gr_Id)
      JOIN Marks ON Student_Id=Stud_Id
WHERE Gr_Name='3021'
GROUP BY Name, Surname


SELECT Gr_Name, Group_description, COUNT(Stud_Id)
FROM Students JOIN Groups ON Group_Id=Gr_Id
Group BY Gr_Name, Group_description


SELECT Name, Surname, COUNT(Mark)
FROM Students LEFT JOIN Marks ON Stud_Id=Student_Id
GROUP BY Name, Surname


SELECT Name, Surname
FROM (Marks JOIN Teachers ON Marks.Teacher_Id=Teachers.Teacher_Id)
      JOIN Disciplines ON Disc_Id=Discipline_Id
WHERE Disc_name='Databases' AND
      Teachers.Name IN (SELECT Teachers.Name
	                          FROM (Marks JOIN Teachers ON Marks.Teacher_Id=Teachers.Teacher_Id)
                                    JOIN Disciplines ON Disc_Id=Discipline_Id
						      WHERE Disc_name='Computer Programming')
GROUP BY Name, Surname


SELECT Name, Surname, Gr_Name
FROM Students JOIN Groups ON Group_Id=Gr_Id
WHERE Stud_Id NOT IN (SELECT Student_Id
                      FROM Marks JOIN Disciplines ON Disc_Id=Discipline_Id
					  WHERE Disc_Name='Databases')