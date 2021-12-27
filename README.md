# PSI-2021ge-06-sisten
Please read [RULES.md](RULES.md).

## General Description
A simple teaching assistant information system (Web Service) using Laravel framework and phpMyAdmin that can be tested UI in Selenium IDE and Functional in Laravel Test.

## Features
* [FR-01] Registration
* [FR-02] Login
* [FR-03] Read list of users
* [FR-04] Delete user account
* [FR-05] Create profile of user
* [FR-06] Edit profile of user
* [FR-07] Create vacancy
* [FR-08] Read list of vacancies
* [FR-09] Edit vacancies
* [FR-10] Delete vacancies
* [FR-11] Apply Vacancies
* [FR-12] Read list of applicant
* [FR-13] Create log activity
* [FR-14] Read list of log activity
* [FR-15] Edit log activity
* [FR-16] Delete log activity
* [FR-17] Add comment of log activity
* [FR-18] Create announcement
* [FR-19] Read list of announcements
* [FR-20] Edit announcement
* [FR-21] Delete announcement
* [FR-22] Create course
* [FR-23] Read list of courses
* [FR-24] Edit course
* [FR-25] Delete course
* [FR-26] Create schedule
* [FR-27] Read list of schedules
* [FR-28] Edit schedule
* [FR-29] Delete schedule
* [FR-30] Read list of user log activity
* [FR-31] Delete user log acivity

* Front-end: Using <a href="http://demo.thedevelovers.com/dashboard/klorofil-v2.0/index.html">Klorofil Templates</a> 
## Architectural Design
![image](https://user-images.githubusercontent.com/60679744/116128538-40d69300-a6f3-11eb-8a4e-5282c571705d.png)

## Database Design
![image](https://user-images.githubusercontent.com/60679744/116172392-e2ca9f80-a734-11eb-97dd-98fb866fd111.png)

## Installation Guide
* [Step 1: Download the Repository](#step1)
* [Step 2: Initialize Application](#step2)
* [Step 3: Serve](#step3)

-----
<a name="step1"></a>
### Step 1: Download the Repository

Either Clone the repository using git clone: `git clone https://github.com/proyek-mahasiswa/psi-2021-ge-06-sisten.git` 
or install via <a target="_blank" href="https://github.com/proyek-mahasiswa/psi-2021-ge-06-sisten/archive/master.zip">zip</a> and extract 
to any of your folders you wish.

-----
<a name="step2"></a>
### Step 2: Initialize the Application

Next make sure to create a new database and add your database credentials to the .env file:

```
DB_HOST=localhost
DB_DATABASE=sisten
DB_USERNAME=root //your database username, by default : root
DB_PASSWORD= //your database user password
```

To install the composer dependencies you need to have composer installed. Run, `composer install` in the `psi-2021-ge-06-sisten/sisten` directory.

Run `php artisan migrate --seed` which will ask you to migrate and seed our boilerplate application 
with fake data. Do not forget that all variables with `DB_` prefixes in your `.env` file relates to your database configuration. 

-----
<a name="step3"></a>
### Step 3: Serve

To serve the application, you can use `php artisan serve`, then open [http://localhost:8000](http://localhost:8000) 

### Minimum Software Requirements
+ PHP >= 7.3
+ Laravel version 8.x
+ MySQL v5.6.16
+ Composer v2.0.13
+ PHP version: 8.0.3

## User Guide
* [Guide 1: Registration](#guide1)
* [Guide 2: Login](#guide2)
* [Guide 3: Applying for vacancy](#guide3)
* [Guide 4: Responding Student or Teaching Assistant applications](#guide4)
* [Guide 5: Managing Courses and Schedules](#guide5)
* [Guide 7: Managing Teaching Assistant Log Activity](#guide7)
* [Guide 8: Managing Users](#guide8)

-----

<a name="guide1"></a>
### Registration

Click the `Login/Registration` button on the top right of the page

![login-register](https://user-images.githubusercontent.com/43809347/124373030-3a4b3580-dcb9-11eb-8e51-e62bf7485626.png)

After clicking the button you may be able to see this Login and Registration Form

<img width="1440" alt="Screen Shot 2021-07-02 at 23 13 21" src="https://user-images.githubusercontent.com/43809347/124373119-e42ac200-dcb9-11eb-8379-2eec5d196420.png">

Fill all the field in Registration form and then press the Register button

<img width="793" alt="Screen Shot 2021-07-02 at 23 14 12" src="https://user-images.githubusercontent.com/43809347/124373288-4932e780-dcbb-11eb-8d80-caef87b0d010.png">

You will receive "Registration Success, Please login" message if the registration was success

<img width="809" alt="Screen Shot 2021-07-04 at 11 28 04" src="https://user-images.githubusercontent.com/43809347/124373298-6bc50080-dcbb-11eb-931a-f248cbd200a0.png">


-----

<a name="guide2"></a>
### Login

Click the `Login/Registration` button on the top right of the page

![login-register](https://user-images.githubusercontent.com/43809347/124373030-3a4b3580-dcb9-11eb-8e51-e62bf7485626.png)

Fill the Username Password field and press Login button

<img width="451" alt="Screen Shot 2021-07-02 at 23 13 41" src="https://user-images.githubusercontent.com/43809347/124373061-7f6f6780-dcb9-11eb-8239-26fab8035cf6.png">

you will redirected to dashboard page if the login section was success

-----

<a name="guide3"></a>
### Applying for vacancies

You must login as Students or Teaching Assistant to apply available vacancies

Then click the `Vacancies` button on the sidebar

<img width="452" src="https://user-images.githubusercontent.com/43809347/124374214-9ca93380-dcc3-11eb-9536-dfdb81546c55.png">


List of available vacancies and number of vacancies youve been applied will be shown, then click the envelop icon on the vacancy that you want to apply

<img width="1440" alt="Screen Shot 2021-07-04 at 11 33 47" src="https://user-images.githubusercontent.com/43809347/124373489-d460ad00-dcbc-11eb-86f3-537873281cc4.png">

Fill the grade field with your grade on the required course and fill the motivation with your motivation for applying this vancancy

<img width="1440" alt="Screen Shot 2021-07-04 at 11 34 12" src="https://user-images.githubusercontent.com/43809347/124373633-23f3a880-dcbe-11eb-9658-e34ccc703ca6.png">

You may reveice the success message after click the Send button

<img width="1179" alt="Screen Shot 2021-07-04 at 11 34 42" src="https://user-images.githubusercontent.com/43809347/124373647-3f5eb380-dcbe-11eb-8dbf-c79ef8cfd8c4.png">



-----

<a name="guide4"></a>
### Responding Student or Teaching Assistant applications

You must be loged in as Lecturer to respond student and TA application

Click the Application Report button on the sidebar

<img width="451" alt="lecturer sidebar" src="https://user-images.githubusercontent.com/43809347/124374015-ceb99600-dcc1-11eb-9eac-5112afee7a8f.png">

It will be show all the Application sended by Student or TA, to approve the application press the green checklist icon, and to see the application detail press the i icon

<img width="1440" alt="Screen Shot 2021-07-04 at 11 53 04" src="https://user-images.githubusercontent.com/43809347/124374024-e729b080-dcc1-11eb-96be-c9e1e654c340.png">

The application detail will be look like this

<img width="1438" alt="Screen Shot 2021-07-04 at 11 54 26" src="https://user-images.githubusercontent.com/43809347/124374065-4982b100-dcc2-11eb-8454-d3782214c586.png">

After approving the application, success message will appear on the top of the Application page

<img width="1440" alt="Screen Shot 2021-07-04 at 11 54 45" src="https://user-images.githubusercontent.com/43809347/124374115-bac26400-dcc2-11eb-8ff8-61be2c68cace.png">

-----

<a name="guide5"></a>
### Managing Courses and Schedule

You must be loged in as Admin a.k.a BAA to use this feature

Click the course menu on the sidebar

<img width="453" src="https://user-images.githubusercontent.com/43809347/124374197-6ec3ef00-dcc3-11eb-969d-585865b2d089.png">

It will show list of all course that assigned to class or not even assingned yet

<img width="1440" alt="Screen Shot 2021-07-04 at 11 55 14" src="https://user-images.githubusercontent.com/43809347/124375116-95395880-dcca-11eb-935c-e57c7316485f.png">

Click the + icon to create a new course 

<img width="407" alt="Screen Shot 2021-07-02 at 23 15 59" src="https://user-images.githubusercontent.com/43809347/124375416-4987ae80-dccc-11eb-82b9-1ef4325a2e81.png">

Fill all the field and click submit

<img width="1440" alt="Screen Shot 2021-07-04 at 11 56 07" src="https://user-images.githubusercontent.com/43809347/124375445-6ae89a80-dccc-11eb-960c-7d8c0fb73e9c.png">

then success message will appear

<img width="1193" alt="Screen Shot 2021-07-04 at 11 56 18" src="https://user-images.githubusercontent.com/43809347/124375656-8e601500-dccd-11eb-99ab-0ffc624bd0e4.png">

if you want to assign class to the course press + icon with blue colour in line with the course information and fill all the required field

to create the class schedule, click the schedule menu on sidebar and click + icon on the top right then fill all the required field

<img width="1440" alt="Screen Shot 2021-07-04 at 12 04 27" src="https://user-images.githubusercontent.com/43809347/124375935-c7e55000-dcce-11eb-8f41-ce10f8d95ce8.png">

-----

<a name="guide7"></a>
### Managing Teaching Assistant Log Activity

You must be loged in as TA to send TA log activity and loged in as Lecturer to Respond the TA log activity

For sending TA log activity, click the Teaching Assistant Report menu on sidebar

<img width="1440" alt="Screen Shot 2021-07-04 at 13 58 09" src="https://user-images.githubusercontent.com/43809347/124376537-9e79f380-dcd1-11eb-9299-ef9b3e50824d.png">


click the blue icon for creating report for selected schedule and fill all the required field

<img width="1440" alt="Screen Shot 2021-07-04 at 13 58 17" src="https://user-images.githubusercontent.com/43809347/124376546-aafe4c00-dcd1-11eb-8974-401f4de7288d.png">

Click send and success message will appear

<img width="1177" alt="Screen Shot 2021-07-04 at 13 59 00" src="https://user-images.githubusercontent.com/43809347/124376552-b5b8e100-dcd1-11eb-8d0d-15a48be644a5.png">


In Lecturer Perspective

Click the Log Activity icon on the sidebar and it will shows all the log activity sended by TA

<img width="1440" alt="Screen Shot 2021-07-04 at 13 59 34" src="https://user-images.githubusercontent.com/43809347/124376596-fadd1300-dcd1-11eb-9503-10085eb3f419.png">

to see the log activity detail, click the yellow i icon on log activity

<img width="1440" alt="Screen Shot 2021-07-04 at 13 59 48" src="https://user-images.githubusercontent.com/43809347/124376627-2102b300-dcd2-11eb-962e-26ea98fef4a4.png">

you can also add a comment to the log activity as the TA can also commenting

<img width="477" alt="Screen Shot 2021-07-04 at 14 00 42" src="https://user-images.githubusercontent.com/43809347/124376645-3546b000-dcd2-11eb-9106-ececbb455ace.png">

to approve the log activity, click the blue checklist icon next to the log activity and success message will appear

<img width="1182" alt="Screen Shot 2021-07-04 at 14 01 01" src="https://user-images.githubusercontent.com/43809347/124376708-7e96ff80-dcd2-11eb-9546-4f1e3be0cedf.png">

-----


<a name="guide8"></a>
### Managing Users

You must be loged in as Admin a.k.a BAA to use this feature

Click User Management menu on sidebar and it will show list of all user

<img width="1440" alt="Screen Shot 2021-07-04 at 12 05 09" src="https://user-images.githubusercontent.com/43809347/124376004-0c70eb80-dccf-11eb-94e3-e7c74c8ad9a1.png">

click to the user status to edit user status and role, change the user status or role and click update

<img width="1440" alt="Screen Shot 2021-07-04 at 12 05 23" src="https://user-images.githubusercontent.com/43809347/124376021-21e61580-dccf-11eb-833c-d805f61e142c.png">

Success message will appear after clicking the update button

<img width="1182" alt="Screen Shot 2021-07-04 at 12 05 36" src="https://user-images.githubusercontent.com/43809347/124376063-51951d80-dccf-11eb-8821-a2cc8ad70559.png">

-----

# Contributors
+ 12S18002 - Wiranda Megawati Siahaan <a href="https://github.com/wirandasiahaan1602">(@wirandasiahaan1602)</a>
+ 12S18015 - Della Cenovita Tarigan <a href="https://github.com/dellatarigan">(@dellatarigan)</a>
+ 12S18027 - Christopher Alfred Hutabarat <a href="https://github.com/totopotato">(@totopotato)</a> 
+ 12S18032 - Sarah H. M. Siahaan <a href="https://github.com/sarah-h-m-siahaan">(@sarah-h-m-siahaan)</a>
+ 12S18048 - Rifka Uli Siregar <a href="https://github.com/RifkaSiregar">(@RifkaSiregar)</a>

