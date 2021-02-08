# Sourcefit Full Stack Developer Exam Version 1.0

## Leave Management System
The system has two portals. One for the Manager and one for the Employee.

### Manager Portal
* This is where the Manager can list, add, edit, and delete Employee records.
* This is where the Manager can give or remove Employee leave credits.
* Employee record will be Id, First and Last Name only. The Id must not be a MySQL generated number.
* The interface for adding and removing Employee leave credits is up to you.
* The interface for approving and denying Employee leave request is up to you.

### Employee Portal
* This is where the Employee can file for a paid leave.
* This is where the Employee can cancel a filed leave.
* This is where the Employee can see the status of his filed leaves.

### Business rules
* Only employee records can list, file, approve, deny or cancel leaves. 
* An employee must file a leave one week ahead of schedule.
* An employee cannot file a leave without leave credits.
* An employee can only have 12 available leaves in a year.
* An expired or used leave cannot be cancelled.
* An employee cannot file a leave that overlaps another leave.

### Instructions
* Fork this repository to yours. 
* We have prepared docker images for you to use. This is to ensure we are going to use the same environment.
* You can immediately build and start our docker containers.
* There is a ready codeigniter/ directory inside this repository. That is your workspace.
* Export your database schema in the database/ directory.
* You should also show how can we switch data storage from MySQL to JSON files with no changes in your source code.
* JSON files should be stored in the codeigniter/storage/ directory.
* Leave the instructions in your README.MD on how to switch storage.
* Once you are done, just email us the link to your repository. Make it public so we can pull it.

### Coding guidelines (Very important)
* The controllers MUST NOT have any instances of classes from the src/Sourcefit/Domain/ directory. 
* The controllers MUST NOT have any business rule related codes.
* The controllers CAN have instances of classes from the src/Sourcefit/Application/ directory (Command and Handler classes).
* The classes inside src/Sourcefit/Domain/ and src/Sourcefit/Application/ directories MUST 
NOT have any CodeIgniter or external framework codes.
* There are ready interfaces that you can use for your concrete classes.
* You can implement repository interfaces (Ex.: EmployeeRepository) to your models if you want your records to be 
saved in your database from the Application folder.
* You can make your own exception classes if needed inside the src/Sourcefit/ directories. 


### Explanation
* The content of the src/Sourcefit/ should only contain classes related to the business so that it can be easily moved to a 
different PHP framework if needed. 
* The repository interfaces is made so that we can switch Data Storage if needed.
* The controller should only know about the commands of the Application (Ex.: FileLeave) and what handler class that
 will handle the command (Ex. LeaveFilingHandler).
* The controller can decide which concrete implementation of the repository classes will the handler class will use.

### Bonus points
* If you can separate the business rules into it's own classes and demonstrate how I can add or remove business rules without modifying 
the source code, the better.


Good luck and have fun!