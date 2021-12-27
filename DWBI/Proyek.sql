DROP DATABASE Proyek;
CREATE DATABASE Proyek;

use Proyek;

DROP TABLE [dbo].[Work_Time_TA_Fact]; 
DROP TABLE [dbo].[Activities_TA_Fact]; 
DROP TABLE [dbo].[Student_Attendance_Fact];
DROP TABLE [dbo].[TA_Enrollment_Fact];
DROP TABLE [dbo].[TA_Vacancies_Fact];
DROP TABLE [dbo].[DimLogActivity];
DROP TABLE [dbo].[DimUser];
DROP TABLE [dbo].[DimCourse];
DROP TABLE [dbo].[DimVacancy];
DROP TABLE [dbo].[DimCourseOwner];
DROP TABLE [dbo].[DimSemester];
DROP TABLE [dbo].[DimSchedule];
DROP TABLE [dbo].[DimDate];

CREATE TABLE [dbo].[DimLogActivity] (
   [log_number] int  NOT NULL,  
   [schedule_id]  int   NULL,  
   [attendance]  int   NULL,  
   [activity_type]  nvarchar(255)   NULL,  
   [date_time]  datetime   NULL,  
   [description]  nvarchar(255)   NULL,  
   [activity_report]  nvarchar(255)   NULL,  
   [status]  nvarchar(255)   NULL,  
   [attachment_id]  int   NULL,
   CONSTRAINT [dbo.DimLogActivity] PRIMARY KEY CLUSTERED ( [log_number])) ON [PRIMARY]
;

CREATE TABLE [dbo].[DimUser] (
   [id]  int  NOT NULL,  
   [first_name]  nvarchar(255)   NULL,  
   [middle_name]  nvarchar(255)   NULL,  
   [last_name]  nvarchar(255)   NULL,  
   [username]  nvarchar(255)   NULL,  
   [initial]  nvarchar(255)   NULL,  
   [password]  nvarchar(255)   NULL, 
   [registration_number]  nvarchar(255)   NULL,  
   [email]  nvarchar(255)   NULL,  
   [study_program]  nvarchar(255)   NULL,  
   [batch]  int   NULL,  
   [role]  nvarchar(255)   NULL, 
   [status]  nvarchar(255)   NULL, 
   CONSTRAINT [dbo.DimUser] PRIMARY KEY CLUSTERED ( [id] )) ON [PRIMARY]
;

CREATE TABLE [dbo].[DimCourse] (
   [id]  int NOT NULL,  
   [course_code]  nvarchar(255)   NOT NULL,  
   [course_initial]  nvarchar(255)   NOT NULL,  
   [name]  nvarchar(255)   NOT NULL,  
   [credit]  tinyint   NOT NULL,  
   [course_owner_id]  int   NOT NULL, 
   CONSTRAINT [dbo.DimCourse] PRIMARY KEY CLUSTERED ( [id] )) ON [PRIMARY]
;

CREATE TABLE [dbo].[DimVacancy] (
   [id]  int  NOT NULL,  
   [semester_id] int  NOT NULL,  
   [minimum_batch]  int   NOT NULL,  
   [deadline]  date   NOT NULL,  
   [teaching_duration]  tinyint   NOT NULL,  
   [minimum_score]  nvarchar(255)   NOT NULL, 
   [description]  nvarchar(255)   NOT NULL,
   CONSTRAINT [dbo.DimVacancy] PRIMARY KEY CLUSTERED ( [id] )) ON [PRIMARY]
;

CREATE TABLE [dbo].[DimCourseOwner] (
   [id]  int  NOT NULL,  
   [name]  nvarchar(255)   NOT NULL,  
   [curriculum]  nvarchar(255)   NOT NULL,  
   [level]  nvarchar(255)   NOT NULL,  
   [status]  nvarchar(255)   NOT NULL,   
   [description]  nvarchar(255)   NOT NULL,
   CONSTRAINT [dbo.DimCourseOwner] PRIMARY KEY CLUSTERED ( [id] )) ON [PRIMARY]
;

CREATE TABLE [dbo].[DimSemester] (
   [id]  int  NOT NULL,  
   [course_id]  int   NOT NULL,  
   [academic_year]  nvarchar(255)   NOT NULL,  
   [name]  nvarchar(255)   NOT NULL,  
   [number_of_students]  int   NOT NULL,   
   [ta_seats]  int   NOT NULL,
   CONSTRAINT [dbo.DimSemester] PRIMARY KEY CLUSTERED ( [id] )) ON [PRIMARY]
;

CREATE TABLE [dbo].[DimSchedule] (
   [id]  int  NOT NULL,  
   [semester_id]  int   NOT NULL,  
   [session_name]  nvarchar(255)   NOT NULL,  
   [duration]  int   NOT NULL,  
   [week]  int   NOT NULL,   
   [date_time]  datetime   NOT NULL,
   CONSTRAINT [dbo.DimSchedule] PRIMARY KEY CLUSTERED ( [id] )) ON [PRIMARY]
;


CREATE TABLE [dbo].[DimDate] (
   [id]  int  NOT NULL,  
   [day_date]  date   NOT NULL,  
   [day_name]  nvarchar(255)   NOT NULL,  
   [semester]  nvarchar(255)   NOT NULL,  
   CONSTRAINT [dbo.DimDate] PRIMARY KEY CLUSTERED ( [id] )) ON [PRIMARY]
;


CREATE TABLE [dbo].[DimApplication] (
   [applicant_number]  int  NOT NULL,  
   [participant_registration_number]  nvarchar(255)   NOT NULL,  
   [vacancy_id]  int   NOT NULL,  
   [send_date]  date   NOT NULL,  
   [score]  nvarchar(255)   NOT NULL,
   [motivation]  nvarchar(255)   NOT NULL,
   [decision]  int   NOT NULL,      
   CONSTRAINT [dbo.DimApplication] PRIMARY KEY CLUSTERED ( [applicant_number] )) ON [PRIMARY]
;

CREATE TABLE [dbo].[Work_Time_TA_Fact] (
   [fk_logactivity]  int  NOT NULL,  
   [fk_user]  int   NOT NULL,  
   [fk_date]  int  NOT NULL,  
   [amount_hours]  int   NOT NULL,  
   CONSTRAINT pkFactWorkTime PRIMARY KEY (fk_user, fk_logactivity, fk_date),
  
);


CREATE TABLE [dbo].[Activities_TA_Fact] (
   [fk_logactivity]  int  NOT NULL,  
   [fk_date]  int  NOT NULL,  
   [total_activity_type]  int   NOT NULL,  
   CONSTRAINT pkActivities PRIMARY KEY (fk_date, fk_logactivity),
  
);

CREATE TABLE [dbo].[Student_Attendance_Fact] (
   [fk_logactivity]  int  NOT NULL,  
   [fk_date]  int  NOT NULL,  
   [total_attendance]  int   NOT NULL,  
   CONSTRAINT pkFactAttendance PRIMARY KEY (fk_date, fk_logactivity),
  
);

CREATE TABLE [dbo].[TA_Vacancies_Fact] (
   [fk_vacancy]  int  NOT NULL,  
   [fk_date]  int  NOT NULL,  
   [total_vacancy]  int   NOT NULL,  
   CONSTRAINT pkFactVacancies PRIMARY KEY (fk_date, fk_vacancy),
  
);

CREATE TABLE [dbo].[TA_Enrollment_Fact] (
   [fk_application]  int  NOT NULL,  
   [fk_date]  int  NOT NULL,  
   [total_vacancy]  int   NOT NULL,  
   CONSTRAINT pkFactEnrollment PRIMARY KEY (fk_date, fk_application),
  
);
