# HotelReservationSystem-ByPHP
HotelReservationSystem-ByPHP Web application

# CINEMA TICKET SALES SYSTEM

(CTSS)

SOFTWARE DESIGN DOCUMENT


## INTRODUCTION
	
 Purpose: The System Design Document requires the necessary information which is effectively defining the system design and architecture of Cinema Ticket Sales System to give the development team guidance on the architecture of the system to be developed.
 It also shows the use cases detailed in the SRS will be implemented in the system using this design and show the required database.
Therefore, basically the purpose of this document is to define the "Software Design Specifications" of the CTSS (Cinema Ticket Sales System) software.
	

Scope:
Cinema Ticket Sales System is a system that helps  customers to book a cinema ticket or cancel the booking which they already have and to monitor the details of the move (date of the vision, Showtime, price etc.). This system also allows the customer to create and movie booking. Booking Clerk which is the responsible staff will be able to update and delete the booking that has been made by the customer.
	This document covers the following issues:
•	the database requirements,
•	the user interfaces including user screens,
•	the design constraints.
	This document will not cover the following issues:
•	the performance requirements.


2.  SYSTEM OVERVIEW
2.1.	Functionality
	The "Cinema Ticket Sales System (CTSS)" will cover the following basic functionalities:
•	Select Date,
•	Select Movie,
•	Select Showtime,
•	Check Availability and Select Seat,
•	Book Seats,
•	Purchase ticket and getting information of customer,
•	Cancel Ticket.
2.2.  User Characteristics
	The user groups and their capabilities are presented in the below table:
	Code		User Group		Capabilities
	A		Customers	•	Select date/movie/time/seat, check availability, book/cancel the ticket
	B		The Cinema Ticket Sales System Manager (SCRTS Manager)	
•	Access all of the functions.
	C		Booking Clerk	•	Select date/movie/time/seat, check availability, book/sell/cancel  the ticket
	
	
2.3.  General Constraints
The Cinema Ticket Sales System must be web-based system which run onto different browsers such as Internet Explorer, Mozilla Firefox, Google Chrome, Safari, etc.
MySQL will be used in the system as database system. 
The Java, JavaScript and PHP languages will be used in Cinema Ticket Sales System.

3. SYSTEM ARCHITECTURE

3.1 Architectural Design
Main Menu: After the website is opened, the user will be prompted to home page.
After choosing branch, the user will be prompted to the categorized upcoming movies.
•	Select Date:
	 When customer wants to book a ticket for associated movie, firstly he/she must choose the date which he/she wants to reserve.
•	Select Movie:
	This system provides the latest information on upcoming movie releases. Include the title, cast and genre. It will update the visitors about the upcoming movies.



  •	Select Showtime:
	After a user select the date and movie, he/she must choose the showtime of associated movie from Showtime options which include the related movie. It will update the visitors about the upcoming movies.
•	Check Availability and Select Seat:
	After a user select the date, movie and Showtime, he/she must check availability of the seat then select the seat that they want to book. It will update the visitors about the upcoming movies.
•	Book Seats:
	After a user select the date, movie, Showtime, checking the availability of the seat and selecting the seat and booking the seat that they want to book. It will update the visitors about the upcoming movies.
•	Purchase ticket and getting information of customer:
	After a user select the date, movie, Showtime, checking the availability of the seat and selecting the seat, booking the seat and purchasing the ticket and getting information of customer. It will update the visitors about the upcoming movies.
•	Cancel Ticket:
		After a user select the date, movie, Showtime, checking the availability of the seat, 	selecting the seat, booking the seat and purchasing the ticket then getting information of 	customer. User will have a right in first 6 hours to cancel the ticket and to get refund. It will 	update the visitors about the upcoming movies.


### Class Diagram:
 ![image](https://user-images.githubusercontent.com/50169967/172059591-0d1a5e40-62ae-46a2-bec4-5c1fa1a9cdc2.png)
 
 ### use case diagram
![image](https://user-images.githubusercontent.com/50169967/172059606-11762052-8a2f-4b17-8feb-83a389d3e568.png)

### Aggregation Hierarchy Diagram:
![image](https://user-images.githubusercontent.com/50169967/172059634-bad81177-bf47-488c-971a-6d152403e40b.png)


### Sequence Diagram:
![image](https://user-images.githubusercontent.com/50169967/172059638-b67fc808-504e-4596-9056-a8e2ceb12cc9.png)


![image](https://user-images.githubusercontent.com/50169967/172059695-d45054cf-c51d-4f69-8c65-6840fb9a80a9.png)
![image](https://user-images.githubusercontent.com/50169967/172059700-44adbbf5-e4ab-4122-971e-547263cdc44a.png)


### SQL Statements to Create Database Tables

create database ctss;
grant all on ctss.* to ctss@localhost identified by "ctp001";

create table movie
( mov_id	VARCHAR(10) NOT NULL UNIQUE PRIMARY KEY,
  mov_name VARCHAR(100) NOT NULL default " ",
mov_description	VARCHAR(500),
mov_time	DATETIME NOT NULL,
  mov_date	DATE NOT NULL,
  mov_price	FLOAT NOT NULL,
  mov_catagory VARCHAR(50),)

create table customer
( cus_id	     VARCHAR(10) NOT NULL UNIQUE PRIMARY KEY,
  cus_name	VARCHAR(100) NOT NULL default " ",
cus_surname	VARCHAR(50) NOT NULL,
cus_phoneno	INT NUT NULL,
cus_mail	VARCHAR(100), )

create table employee
( emp_id		INT NOT NULL UNIQUE PRIMARY KEY,
emp_name	VARCHAR(50) NOT NULL,
emp_surname	VARCHAR(50) NOT NULL,
emp_password	VARCHAR(50) NOT NULL,
emp_phoneno	INT NOT NULL,
emp_mail	VARCHAR(100),
emp_info	 VARCHAR(500),
emp_department	VARCHAR(100),

create table seat
( seat_id	VARCHAR(10) NOT NULL UNIQUE PRIMARY KEY,
seat_column	VARCHAR(1) NOT NULL,
seat_number	INT NOT NULL,


create table booking
( book_id	VARCHAR(10) UNIQUE PRIMARY KEY,
mov_id		INT NOT NULL,
mov_name	VARCHAR(50),
  mov_time	TIME,
seat_id	INT NOT NULL,
emp_id	    INT NOT NULL,
cus_id		INT NOT NULL,
book_made_date		DATE,


