# MVC
1. [Model-View-Controller Architecture](#model-view-controller-architecture)
1. [Model in MVC](#model-in-mvc)
1. [View in MVC](#view-in-mvc)
1. [Controller in MVC](#controller-in-mvc)
1. [Separation of Concerns in MVC](#separation-of-concerns-in-mvc)
----
## Model-View-Controller Architecture
The *Model-View-Controller (MVC)* framework is an architectural/design pattern that separates an application into three main logical components *Model, View, and Controller*. Each architectural component is built to handle specific development aspects of an application. It isolates the business logic and presentation layer from each other. It was traditionally used for desktop graphical user interfaces (GUIs). Nowadays, MVC is one of the most frequently used industry-standard web development frameworks to create scalable and extensible projects. It is also used for designing mobile apps.

----
## The MVC methodology separates an application's logic into three distinct layers:-
1. Model.
2. View.
3. Controller.
----  
## Model in MVC
The model layer is responsible for the application's data logic and storing and retrieving data from back-end data stores. The model layer might also include mechanisms for validating data and carrying out other data-related tasks. This layer is *responsible for maintaining all aspects of the data and ensuring its [integrity](https://www.techtarget.com/searchdatacenter/definition/integrity) and accessibility*.

----
## View in MVC
The view layer *provides the UI necessary to interact with the application*. It includes components needed to display the data and enables users to interact with that data. For example, the view layer might include buttons, links, [tables](https://www.techtarget.com/whatis/definition/table), drop-down lists or text boxes.

----
## Controller in MVC
The [controller](https://www.techtarget.com/whatis/definition/controller) layer contains the application logic necessary to facilitate communications across the application, *acting as an interface between the view and model layers*. The controller is sometimes viewed as the brains of the application, keeping everything moving and in sync.

----
## Conceptualizing model-view-controller
![Model-View-Controller](https://cdn.ttgtmedia.com/rms/onlineimages/conceptualizing_the_mvc_model-f.png)

-----
## Separation of Concerns in MVC
Separation of Concerns *(SoC)* is about keeping components separate and MVC design pattern aims to separate content from presentation and data-processing from content. Modular programming is based on the idea of keeping the information and functionality of the program separated into modules; in MVC it’s recommended to use Model for business logic, Controller for processing incoming requests and Views to display information to end user.

Keeping the components separate has a myriad of benefits. *A good program that represents SoC well can have each of the sections reused, and updated and developed independently of each other.*

-----
## Resources:-
1. [Model-View-Controller Architecture](https://www.geeksforgeeks.org/mvc-framework-introduction/)
1. [Model in MVC](https://www.techtarget.com/whatis/definition/model-view-controller-MVC#:~:text=The%20MVC%20methodology%20separates%20an,out%20other%20data%2Drelated%20tasks.)
1. [View in MVC](https://www.techtarget.com/whatis/definition/model-view-controller-MVC#:~:text=The%20MVC%20methodology%20separates%20an,out%20other%20data%2Drelated%20tasks.)
1. [Controller in MVC](https://www.techtarget.com/whatis/definition/model-view-controller-MVC#:~:text=The%20MVC%20methodology%20separates%20an,out%20other%20data%2Drelated%20tasks.)
1. [Separation of Concerns in MVC](https://goformarty.github.io/MVC-SoC/)