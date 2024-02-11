# 1. What is RDBMS?

- RDBMS stands for Relational Database Management System.
- RDBMS is the basis for all modern database systems.
---
## RDBMS Example systems :-
1. PostgreSQL
1. MySQL
1. Microsoft SQL Server
1. Oracle
1. Microsoft Access

---
# 2. RDBMS vs. DBMS :-

**DBMS** or **Database Management System** is software used to identify, manage, and create a database that provides administered access to the data. In **DBMS**, the data is stored as a file, whereas in **RDBMS**, data is stored in the form of tables. [RDBMS vs. DBMS.](https://byjus.com/gate/difference-between-dbms-and-rdbms/#:~:text=DBMS%20stands%20for%20Database%20Management,in%20the%20form%20of%20tables.)

---
# 3. What Is PostgreSQL?
- It's the most advanced open-source relational database out there.
- It's an object-relational database management system **(ORDMBS)**, which means that it has relational capabilities and an object-oriented design. [PostgreSQL.](https://www.postgresql.org/)
---
## What Does Object-Relational Database Mean?
An object-relational database **(ORD)** is a database management system **(DBMS)** that’s composed of both a relational database **(RDBMS)** and an object-oriented database **(OODBMS)**. 
[to know more about object-Relational Database.](https://www.techopedia.com/definition/8714/object-relational-database-ord)

---
# 4. PostgreSQL Clients :-
Postgres can be connected from a programming language, a CLI tool or a GUI. Postgres follows the Client Server architecture where the server listens to requests from the client and returns a response.

---
## Some of the popular client applications for PostgreSQ :-

- **pg_dump** - Extracting database into a file.
- **pg_restore** - Restoring a database from a file.
- **create_db** - Create a new PostgreSQL database.
- **create_user** - Create a new PostgreSQL user account.
- **psql** - Interactive terminal.
[PostgreSQL clients.](https://www.postgresql.org/docs/current/reference-client.html)

---
# 5. What purpose does pgAdmin serve in PostgreSQL?
 - pgAdmin is the leading open source management tool for PostgreSQL.
 - It provides a powerful graphical interface that simplifies the creation, maintenance, and use of database objects.
 [more about pgAdmin.](https://www.enterprisedb.com/postgres-tutorials/pgadmin-comparable-tool-plsql-developer-postgresql#:~:text=pgAdmin%20is%20the%20leading%20open,and%20use%20of%20database%20objects.)

 ---
 # 6. Naming conventions :-
 for example, when we name **RDBMS** we should always remember that consistency is the best approach.

 ## some of the most importants rules :-
1. Use lowercase names. e.g. user, username
1. If the name of the table or column must consist of more than one word, use an underscore(_) to connect them(i.e. snake_case). e.g. user_account
1. Use UPPERCASE for SQL keywords (e.g. SELECT, INSERT) and built-in functions (e.g. LOWER(), COUNT()).
1. Avoid use of dots, spaces, or dashes in database, schema, table, or column names.
1. When naming objects, balance the objective of keeping names short and easy to use with the objective of making names as descriptive as possible. When in doubt, choose the more descriptive name, because the objects in the database may be used by many people over a period of time. For example use payment_due_date instead of pmdd.
[for more info about naming conventions.](https://www.coding-guidelines.lftechnology.com/docs/rdbms/rdbms-naming-convention/)

----
# 7. Constraints in PostgreSQL:-
- **Constraints** are a way to tell Postgres which kinds of data can be inserted into tables, columns, or rows.
- **Constraints** give you as much control over the data in your tables as you wish. If a user attempts to store data in a column that would violate a constraint, an error is raised. This applies even if the value came from the default value definition.
[To know more about constraints and their types.](https://www.postgresql.org/docs/current/ddl-constraints.html)
---
# 8. Indexing in PostgreSQL:-
- **Indexing** is a data structure that you build and assign on top of an existing table that looks through your table, tries to anaylize it and summarize it so it can create kind of a shortcut. Basically, **Indexing** are a common way to enhance database performance.

 For example, if you want to reference all pages in a book that discusses a certain topic, you have to first refer to the **index**, which lists all topics alphabetically and then refer to one or more specific page numbers.
 [Indexing in PostgreSQL.](https://www.tutorialspoint.com/postgresql/postgresql_indexes.htm)





