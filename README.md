# Facebook-Lite
Building a web application with a database (Mysql) backend 

# Assessment Details
Let’s assume that a decision has been made to develop a light version (called Facebook-Lite) of
the ever-popular Facebook application. This light version has limited functionalities compared to
the full version. Only core functionalities are to be retained. You are tasked with the design of the
database backend and web frontend.
After a careful analysis, the following core functionalities are to be retained in the light version.
The system stores information on members; each member is uniquely identified by email and a
full name, screen name, date of birth, gender, status, and location are to be stored. Each
member has a visibility level on Facebook-Lite (private, friends-only, or everyone).
As in the case of Facebook, members form networks of friends. A friendship is always between
two members. A member can send a friend request to another member. Once that member
accepts the request, they become friends on Facebook-Lite. Each friendship has a start date.
Members can make posts on Facebook-Lite. A post has a unique postID and a body and a
timestamp. Facebook-Lite only allows textual posts.
Other members can respond to posts. They can also respond to previous responses. Responses
are identical to posts in structure, so, they share the same structure as in the original post. Each
response will have a parent post or a parent response.
Members can “like” posts and responses. The system keeps track of likes, specifically the
member who makes the like and the corresponding post/ response. No other information is
required on likes.

## Summary of Tasks:
1. Draw an entity-relationship model to represent these requirements. Make sensible
assumptions for cardinality and participation constraints where they are not clearly outlined in
the description.
2. Use Oracle SQL Developer (or SQL Designer) tool to general DDL script to build the tables
required for the database backend.
3. Write a PHP application to do the following tasks:
1. Create a new facebook-lite account, log into your current account;
2. Manage account;
3. Invite a friend (among current users) and accept (or reject) friend requests you receive;
4. Add a post;
5. Add a Like to other posts;
6. Add a response to other posts;
7. Display your Facebook page rendered in a user-friendly and accessible manner.
4. Demonstrate your complete web database application, hosted on school's web server.

## Task Descriptions:
There are three milestones in this assignment.

### Milestone 1:
You are required to build the data model for this application using an Entity-Relationship
diagram. This diagram should be developed on Oracle SQL Developer. This diagram
should be of professional quality with sufficient details that any other database personnel
should be able to comprehend.
Then, convert your data model into the physical database design and finally generate the
DDL script to build the back-end database schema for the application.
In order to complete this milestone, you are required to demonstrate your workings and the
final DDL script to your tutor during Week 4 lab sessions. It is very important to get it
marked off by the tutor before you proceed to Milestone 2. If your design does not meet the
business requirements, your tutor will allow you to make any amendments (only once) and
present again for evaluation.

### Milestone 2:
In this milestone, you will develop SQL scripts required to do all the CRUD (create, read,
update and delete) operations associated with various functions of the application. Most of
these functions will require more than one SQL statement. These SQL statements are then
embedded within PHP scripts using Oracle oci API.
Application homepage:
The home page will have a small form to enter the username and password of a facebooklite
user. There must be a link to another page for new users to create a new account. When
the form is submitted, the user credentials are checked and if correct, the user will be taken
to their main page.
New User Creation page:
This page will ask for email (used as username, as well as communication) and a full name,
screen name, date of birth, gender, status, and the location. Furthermore, the user will be
required to enter their visibility level. Read problem specification for details. Once the
account is created, the user will be taken to their main page.
Main page:
This page will have several sections. (1) at the middle section, it shows up posts (your own
as well as friends). Beneath each post, there is a button "like" it and a test box to end
comments/ responses. (2) at the top of posts, there must be a text box to enter your new
posts. (3) the right-hand pane is for managing friendships. At the top, it will show a list of
pending friendship requests (if any). At the bottom section of the right pane, will let the user
to search other users and send friendship requests. (4) The left-hand pane is for managing
your account. It should have links to separate pages for updating the profile, and for
deleting the account.
Account Profile Maintenance page:
This page should allow you to change your screen name, status, location, and visibility
level.
You are required to complete this milestone by the due date and submit your codebase, by
following the submission instructions.

### Milestone 3:
You are required to do a demo of your complete application hosted on the school's web
server. These demos will be conducted during the week of 9th September (Week 7). You
should have some users and posted already stored in the application and the tutor will test
out the functionality by adding new users, posts, likes, and responses.
Tutors will use a standard testing plan for all submissions and you will only receive your
second milestone marks if you can demonstrate the functionality of your application
in this milestone.
