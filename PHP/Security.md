# PHP website security and hacking protection

## Main points:-
1. Principle of least privilege.
1. Passwords and encryption.
1. Data hiding.
1. Security through obscurity.
1. Account lock attacks.
1. Brute force attacks.
1. Modified requests.
1. Error reporting.
1. Forced browsing.
1. Path traversal.
1. Data parameter delimiters.
1. SQL/PHP injection attacks.
1. XSS attacks.
1. Session hijack/fixation.
1. Phishing.
1. General security principles.
----
### Why web security?
- because when websites are created they're public so anyone could check them out.
- because users add personal informations on this website like their email addresses, passwords or phone numbers. so, they need to know that their info are safe.
----
### What is social engineering?
It's the act of persuading somebody to give you their confidential information and then you could hack their account that way.

----
### How could you protect yourself from social engineering?
- Keep you confidential information -like your password- hidden.
- Always clean your trash.
- Don't open suspicious emails cause they might contain a keylogger.
#### Whats's a keylogger?
a keylogger is a computer program that records every keystroke made by a computer user, especially in order to gain fraudulent access to passwords and other confidential information.

- Make sure you put the 2-step verification on whatever system you have.
- Beware of phishing; which is the act of giving you the wrong/fake form to fill in your information so they'd steal this info.

----
## Improtant things to do to be safe:-
**1- KEEP FUNCTIONAL CODE PRIVATE**
Meaning that functions or classes should be kept in a separate folder from the index page and you could call these functions -or include them- in the index page.

So, at fisrt you should create two folder named public and private; in the public folder add your index page and in the private one add your functions or classes.

Imagine that you're in the public folder that contains the index page and you want to include a function from the private folder.

php 
```
include "../private/functions.php";
hey(); // the function name
```
the two dots before the backslash mean that I have to go two directories back to reach the functions which is correct because first I have to leave the public folder/directory then outside to the security directory -which has the private and public folders- then go to the private folder which has all the functions, but if I put only one dot before the backslash that means that I'm in the same directory.

after including all the functions I could simply just call whatever function I need and it'll work and do whatever in this function.

and by doing this two folders thing you'll get extra security to your code and when a user type your website name they'll go/be in the landing page aka the public folder and if they tried to type this `../` afterwards it'll not allow them to see what's in your private folder.

----
**2- EACH FOLDER INSIDE THE PUBLIC OR PRIAVTE FOLDERS SHOULD HAVE A DEFAULT *index.php* FILE**

This makes sure that the sensitive files that I don't want the user to see are kept private and he/she could only access the landing page.

another way to do this is to add a file maybe called *.htaccess* in your private folder and inside this file type `Options -Indexes` and if someone tried to access this private folder or see what's in it they'll get a message telling them it's **forbidden**.

For extra security, add the *index.php* file and this *.htaccess* file too.

---
**3- ALWAYS USE PHP EXTENSIONS**
Serves will automatically process php fles and not display them. On the other hand, if I saved my data or the database I have in a json or a txt file then anyone could access it and see whatever is in there.

----
## PHP code injection using the `include` function :-
when you're including files it's possible -not very common tho- that someone might add their own PHP code or even uploading a file that contains an image or that pretends to contain an image but it really contains a PHP code and using your `include` or `require` functions they may end up running that PHP code and if they could run this code then they pretty much own this PHP code on the server and they could do so much more such as checking your database to see anything they want and that's a very dangerous thing to happen.

How could you prohibit such thing?

1. don't leave the file extension in the URL.
1. when you're loading jpegs or images make sure to crop them; because every time you crop an image it'll no longer contain the hidden information as this info will change while resizing the image and changing its pixels.
1. check for files to make sure that you're only reading the files that are contained in our current folder. to do so we must collect all the files that exist, for example:-


```php
<?php
$page = isset($_GET['page']) ? $_GET['page'] : "home.php";//to get the name of the page
$folder = "./"; //this is the current folder or you could only type this => ""
$files = glob($folder . "*.php"); //to collect all the files -the php ones- that exist

if(in_array("./" . $page . ".php", $files)){ //to check whether the page that the user supplied exists in the files or not
    require($page . ".php"); //to make sure we're always running a php file so that we could mess up the image that has the hidden info
}else{
    echo "couldn't find the file";
} //we did all this to make sure that the file you are opening exists inside the folder and when we try to open the .jpg extension it won't work.
//I could add all the files I want in an array before the if condition so that this if could make sure that they exist in order to open them and this method is called whitelisting; you're selecting what you want to see as opposed to banning certain things. so, this is more secure because no one could add any different file that you didn't put there for as long as it doesn't exist in that array 
?> 
```
**side note** : when you use the `require` function in your code it'll run this PHP code even if this code is in a *.txt* file or a *.json* file.

so, instead you could use `file_get_contents` to run nothing from this code and outside the `<?php ?>` you could write anything and it'll appear.

----
## How to keep things simple? (video #06)
- less points of entry(if you have many pages that are independent from one another, convert them all to run from the same single page by including all the files in the index/main page).
- segmented code (meaning that if you find yourself typing too much code in one file, cut a certain amout of code and put it in a different file and then just include this file; to make error detecting/debugging easier).
- use OOP; as it makes your code more organized and it's easier to figure out where the problem is.

---
## How to create clean URLs? (video #07)
instead of **www,website.com/index.php?page=login** we want it to be more clean like this **www.website.com/login**. so, in order to get rid of the **index.php?page=** we need to do this:-
We need to use the *.htaccess* file which contains two orders that are saying we should ignore the files or directories, so that when we want to upload an image from a certain file and other ones from a certain folder we'd be able to do that.

Create a header file; in this file add the html line of code from the home page that has `<center></center>` and change the first href to this `href ="home"`, the second href to this `href="profile"`, the third href to this `href="posts"` and the last one to this `href="login"`.

Then, in each page we have we need to change the link of the header to this => `<?php include('header.php') ?>` 

Now, instead of using the `$_GET` function to get the name from the page, we'll be getting it from the url so rewrite the line like this:-
```php
$page = isset($_GET['url']) ? $_GET['url'] : "home"; 
```
----
## Login error messaging:- (video #10) 
In this part we're concerned with the weaknesses that are in the login page such as:-

giving a message that's too obvious; like when the user writes a wrong email it says "wrong email" or when he/she write a wrong password it says "wrong password". This might seem useful at the first glance but it isn't cause it's just obvious for the hacker to know.

    Instead, the message should be "wrong email or password" in both cases.

---
## The principle of least privilege:- (video #11)

This is about putting everyone in the place they should be at.

For example, if you want someone to run your social media for you, they shouldn't be given the admin access, the editor access is what they should get.

So, these are the main roles that should be in your system and should be given each of them to the right people:-

- Admin access.
- Editor access.
- User access.
- Everyone.

### how can we limit the access?
1. we should go to the user's table in our db and a new column called **Rank/Level** for example.
1. for all people, we need to give access to them depending on their ranking.
1. to make sure that they all access what they need to, we'll create a function called `access($rank)` :-
  ```php
  function access($rank){
    $user_rank = isset($_SESSION['user_rank']) ? $_SESSION['user_rank'] : "";//so, user rank is gonna be an empty string if we're not set 

    switch($needed_rank){//keep in mind that these are the requirements and not the rank
        case 'admin':
        $allowed[] = "admin";
        return (in_array($user_rank, $allowed));
        break;

        case 'editor':
        $allowed[] = "admin";
        $allowed[] = "editor";
        return (in_array($user_rank, $allowed));
        break;

        case 'user':
        $allowed[] = "admin";
        $allowed[] = "editor";
        $allowed[] = "user";
        return (in_array($user_rank, $allowed));
        break;

        default:
         
        break;
    }
     return false;
  }
  ```