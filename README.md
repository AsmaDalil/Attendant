# Attendant
As part of the requirements for the engineering bachelor's degree, I was required to complete a Capstone Project by putting the technical and theoretical background I have acquired over the previous academic years into practice.

My project is a web application named ATTENDANT that integrates the efforts of the AUI Health Center faculty and staff. There are many challenges with maintaining a large amount of information on paper. Particularly since there is frequently no backup for the information, access to the information can be challenging and time-consuming. If the staff need to search for information related to a student, accuracy is required. On the system of manual entry of data, chief medical personnel cannot supervise everything that is written on the enormous amount of paper to be used as it could easily get lost.

The application enables staff at the center to manage all students records and makes it simple to access, retrieve, delete, and store. The system helps automate most of the practices in relation with students by keeping track of the prescriptions, consultations details of students in the university. Adopting students’ record management system is considered as a reliable, efficient secretary way to move from the manual technique of managing records at the Center to an automated more advanced way.

The application should support diagnosis process and monitoring students to enable better practice and more effective services by the facility, decreasing the proportion of any human error. 

	The application can be accessed on both desktop and mobile devices and is browser-based. This article gives a detailed explanation of the many stages used to develop my web application. It discusses the Steeple Analysis, feasibility study, and requirement specification. Moreover, by getting into more technical details about the application, this report demonstrates some implementations of work that have been done so far.

1.1	Scope of Project 

The web application I created is called ATTENDANT, as was previously described. In the scope of this project, the application meets the requirements provided by the staff of health, doctors, and nurses, based on the mission of the Health Center at al Akhawayn university to serve their day-to-day necessities. The Health Center operates on a daily basis to accommodate the health needs and emergencies of AUI students from 8:00 am to 12:00 am; however, medical appointments are held from 9:00 am - 6:00 pm every day.  Today, Students make appointments via email, and the Staff performs their tasks in paper based. It is fine to perform some simple tasks manually, but to maximize the performance of this facility adapting a system is very needed in the Health Center at the University. The system is very efficient especially in emergency cases knowing that there are always a nurse and a doctor on call 24/7 in case of emergency at the Health Center at Al Akhawayn University.

1.2	Definitions, Acronyms, and Abbreviations 
BD: Database
CSS: Cascading Style Sheet
HTML: Hyper Text Markup Language
JS: JavaScript
OOP: Object Oriented Programming
PHP: Hypertext Preprocessor
HC: Health Center
SQL: Structured Query Language
UML: Unified Modelling Language
UI: User Interface
AUI:  Al Akhawayn University in Ifrane
RDBMS: Relational Database Management System
1.3.	 Methodology 

	As a student of computer science and aspiring software engineer, I understand that possessing the necessary abilities and knowledge is often insufficient without a well-defined software development methodology. While agile methodologies are commonly adopted by teams for their flexibility in adapting to changing requirements, I opted for the incremental model as the primary software engineering paradigm for my solo capstone project. The incremental model is a software development methodology where the project is divided into small, manageable increments or iterations. Each increment builds upon the previous one, adding new features or functionality.
The incremental model was chosen due to its suitability for managing a project single-handedly and its effectiveness in mitigating risks associated with such endeavors.
I initiated the project by arranging several meetings with Dr. Guennoun, the director of the Health Center at AUI, to gain a comprehensive understanding of the center's operational activities. To determine the most suitable methodology for developing such a system, I needed to familiarize myself with the requisite records and the daily services provided by the center's staff. Additionally, I relied on the insights and experiences of the doctors and nurses at Building 26, who engage in direct daily interactions with AUI students. Through our collaborative meetings, they offered specific requirements aimed at enhancing the efficiency of their services.
This meticulous approach allowed me to integrate the unique needs of the Health Center seamlessly into the development process, ensuring that the resulting application would effectively meet the demands of its users.
2.	Functional requirement specification 

In the first few weeks of the semester, I had regular meetings with Dr. Guennoun in favor of going through the project's preliminary guidelines. I learned more about the procedures followed by the Health Center’s staff during those discussions. ATTENDANT was created based on the demands and specifications provided by the customer, the medical team and Dr. Guennoun. The planning stage of the development process takes up the first several weeks. I had the opportunity to collect all the necessary data during this phase on the requirements specifications and on the features needed in accordance with their procedures for handling students’ records. A preliminary ERD that adheres to the defined business standards was also created using student paperwork and medical forms that I was equipped with at the start of the project. Dr. Guennoun outlined that Health Center is in need of a system that makes it easier to maintain students’ data, and to handle medical forms, appointments with internal or external doctors, visit-consultations, and medication histories. The program must be scalable, secure, useful, and dependable.
2.1	Functional Requirements: 

i.	Student
The nurse/ doctor should have the ability to modify the records of a students by : 
-	Add student
-	See the list of students
-	Search student

ii.	Prescription 
The nurse/ doctor should have the ability to modify the records of a students by : 
-	Add Prescription
-	View Prescription
-	Search Prescription 
-	Delete Prescription
-	edit Prescription

iii.	Student records
The nurse/ doctor manages the records of each student by:
-	View records
-	Edit record 
-	Delete record
-	Explore CSV file of all the records
-	Import CSV file file one and more records
iv.	Account

The admin should have the ability to register 
-	Create an account 
-	Reset the password by Admins 
-	login to account 
-	Delete an account by Admins 
-	Edit profile information
2.2	Non-Functional Requirements 
i.	 Usability Requirement
The ATTENDANT interface is simple and user friendly. It is easy to use and to adapt in the health sector. The functionalities are clear and quick to be accessed. The pages and the menu are in the same style and easy to navigate from one to another. 

ii.	Performance Requirement 
The software performs quickly and provides the output in a few seconds. The system should be responsive and provide quick responses to user actions. It should handle multiple concurrent users efficiently without significant delays or performance degradation.

iii.	Development Requirement 
 The system is built by using Laravel and its framework Livewire as a platform and mostly PHP as a backend programing language. Livewire helped me to add more simplicity to the project by using JavaScript code to perform the actions on the multiple form of ATTENDANT. 

iv.	Reliability Requirement
The application should perform as required and expected. The system should be highly reliable, with minimal downtime and errors. It should be able to recover gracefully from failures and ensure data integrity at all times.

v.	Portability Requirement 
The piece of code should operate with Windows operating systems. The system should be platform-independent, capable of running on different operating systems and hardware configurations without requiring significant modifications.

vi.	Ethical Requirement

	The Health Center Student Record Management System should follow ethical rules and regulations of AUI HC like securing student’s personal pieces of information and respecting their sensitive and private data.

vii.	Delivery Requirement

	The Health Center Student Record Management System is to be delivered by the Start of January. During the testing phase of the application, ran  the following tinker, Factory Command in order to create dummy records in the table of student and test the accuracy and efficiency of the functionalities of ATTENDANT.
 
Figure 2.2.1: Command for Dummy Records


2.3	 Requirements Specification:
The demands of Dr. Guennoun, who is considered as manager and at the same time the customer of the health center, are taken into consideration during the designing phase of the system ATTENDANT. Even during requirements and specifications phase, all pertinent data on the desired features were gathered. The customer precisely stated these aspects in great detail. 
Customers placed an emphasis on the desktop application's simplicity and use. They requested the system to manage all areas of the center's operations, including the management of patients, documents, prescriptions, and some medical histories. The papers I used in part to develop the criteria are included in the report's appendices. The paperwork Dr. Guennoun handed out that are utilized in the HC are among those documentations.

2.3.	1 Feasibility Study 

The AUI HC can gain from this initiative because it is incredibly beneficial. A session to the HC can be somewhere around five minutes to an hour, according to nurses at the HC. Somedays, the waiting room gets crowded because of the time the nurse is taking to fill the prescription of each student. The number of students served on time depends on what time of the day the visit was and on the season. Moving from using a paper-based forms to fill prescriptions and gather student’s records, to such an enormous folder database standing in the heart of the room including all patients' records and histories is to improve both nurses’ performance and students’ experience. Consequently, replacing the present overhead with an electronic system will increase the effectiveness of the center. Furthermore, the waiting area may be enlarged to accommodate more patients with the deletion of the folder database, which uses up a significant amount of space. The AUI HC will now be provided with a new tool that will help them improve their future decisions in order to match the data gathered.

Because I'm able to use resources and facilities based on university, database like PhpMyAdmin for example, to carry out the research, it will be reasonably inexpensive. Additionally, I made use of proper free development software tools like Laravel, Bootstrap…etc. However, the database of the HC will be used as they will be equipped by ATTENDANT. Because student’s health is at risk, it is critical that the system be dependable and always accessible. For this reason, I adopted two roles when creating the authentication of the application, an admin, and a simple user with limited access. A project of this scale also needs upwards of three months to be completed, especially considering I am balancing four other courses at the same time. This investigation led me to the conclusion that the project is indeed doable with very specific requirements. I am certain that I took this project from a concept into an actuality with the direction and support of professor Nisar Naeem Sheikh and the motivation to produce a product that will truly be useful for others and help others need and facilitate their lives. 


2.3.2 Schedule 

The requirements specification for the project's first phase was developed through discussions with the Dr. Guennoun in order to define what "digitalizing their job" meant. The doctor acknowledged that the added responsibility of managing student records manually has made their job more stressful. It makes their regular services more difficult and ineffective.
Therefore, the primary goal of this project was to list the difficulties encountered, which are essentially caused by keeping a lot of information on paper. The goal is always to create a web application that will handle such records and involve everyone at the health center. Therefore, the functional and non-functional requirements made up most of the requirements’ specifications for this report. The project's second phase, which consists of the feasibility study, then began. In order to demonstrate how the requirements were properly addressed, a thorough report of the prospective Engineering Standards, programming languages, and servers used will be provided in this step. The design and analysis phase, which includes the creation of an entity relationship diagram, a use case diagram, and examples of sequence diagrams, was completed before moving on to the implementation phase.

The design and analysis phase, which includes the creation of an entity relationship diagram, a use case diagram, and examples of sequence diagrams, were fulfilled before moving on to the implementation phase. Finally, there will be the implementation phase, which will be supported with screenshots of the web application's primary features as well as certain crucial sections of the code. 

Last but not least, during the deployment phase, this application will assist in managing student data by keeping track of their visits and appointments for the HC. For the safety of the data, those services demand rigorous security. The application will also enable staff to submit a CSV file to the database of student records and contain a list of references to all student records. It will also adhere to the capstone project's shared standards and guidelines as well as the IEEE SRS templates.
3.	Design and analysis

The design and analysis phase of the ATTENDANT project focused on establishing a robust database schema to support the efficient handling of health center operations at Al Akhawayn University. This phase was crucial for ensuring that the application could manage student health records, appointments, prescriptions, and other related data effectively. The Entity-Relationship Diagram (ERD) serves as the backbone of the database design, illustrating the entities involved in the system, their attributes, and the relationships between them.
 Entities and Attributes:
i.	Student
   - Attributes StudentID (PK), FirstName, LastName, DateOfBirth, Gender, ContactInfo, MedicalHistory
   - Description: Represents the students at Al Akhawayn University. The StudentID serves as the primary key.

ii.	Appointment
   - Attributes: AppointmentID (PK), StudentID (FK), DoctorID (FK), Date, Time, Reason, Status
   - Description: Manages the scheduling of appointments. AppointmentID is the primary key. StudentID and DoctorID are foreign keys linking to the Student and Doctor entities, respectively.

iii.	Doctor
   - Attributes: DoctorID (PK), Name, Specialty, ContactInfo
   - Description: Stores information about doctors. DoctorID is the primary key.

iv.	Prescription
   - Attributes: PrescriptionID (PK), StudentID (FK), DoctorID (FK), Date, Medication, Dosage, Duration
   - Description: Contains details about prescriptions issued to students. PrescriptionID is the primary key, with StudentID and DoctorID as foreign keys.

v.	MedicalRecord
   - Attributes: RecordID (PK), StudentID (FK), VisitDate, DoctorID (FK), Diagnosis, Treatment
   - Description: Records details of student visits. RecordID is the primary key, with StudentID and DoctorID as foreign keys.
 User
   - Attributes: UserID (PK), Username, Password, Role
   - Description:Manages user accounts for accessing the system. UserID is the primary key.
Connectivity and Relationships:
- Student to Appointment: One-to-Many. A student can have multiple appointments but each appointment is for a specific student.
- Doctor to Appointment: One-to-Many. A doctor can have multiple appointments but each appointment is associated with one doctor.
- Student to Prescription: One-to-Many. A student can have multiple prescriptions, each issued by a doctor.
- Doctor to Prescription: One-to-Many. A doctor can issue multiple prescriptions to different students.
- Student to MedicalRecord: One-to-Many. A student can have multiple medical records, documenting different visits to the health center.
- Doctor to MedicalRecord: One-to-Many. A doctor can be associated with multiple medical records, indicating their involvement in the treatment of students.

i.	 ERD Diagram Comprehensive Design:
The ERD diagram will visually depict the entities listed above, their attributes, and the relationships between them. The diagram will clearly show the primary keys (PK) and foreign keys (FK) to indicate the relationships. For instance, the StudentID in the Appointment, Prescription, and MedicalRecord entities will be marked as a foreign key (FK) linking back to the Student entity's primary key. Similarly, DoctorID in the Appointment, Prescription, and MedicalRecord entities connects to the primary key of the Doctor entity.

The relationships will be represented with lines connecting the entities, with symbols at each end to illustrate the nature of the relationship (one-to-one, one-to-many, or many-to-many). This comprehensive ERD design will facilitate understanding how data flows within the ATTENDANT system and ensure that the database structure supports all required operations efficiently and effectively.

