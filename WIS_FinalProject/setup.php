CREATE DATABASE database_name;
USE database_name;
SHOW DATABASES;
select * from student;

CREATE TABLE Student (
    StudentID int not null,
    FirstName varchar(255),
    LastName varchar(255),
    DateOfBirth varchar(255),
    Email varchar(255),
    Phone varchar(255),
    PRIMARY KEY(StudentID)
);

CREATE TABLE Course (
    CourseID int not null,
    CourseName varchar(255),
    Credits varchar(255),
    PRIMARY KEY(CourseID)
);

CREATE TABLE Instructor (
    InstructorID int not null,
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(255),
    Phone varchar(255),
    PRIMARY KEY(InstructorID)
);

CREATE TABLE Enrollment (
    EnrollmentID int NOT NULL,
    StudentID int(255),
    CourseID int(255),
    EnrollmentDate varchar(255),
    Grade varchar(255),
    PRIMARY KEY(EnrollmentID),
    FOREIGN KEY(StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY(CourseID) REFERENCES Course(CourseID)
);