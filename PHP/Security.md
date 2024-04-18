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
