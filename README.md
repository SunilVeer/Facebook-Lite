# Facebook-Lite
Building a web application with a database (Mysql) backend 

## Assessment Details
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
