CREATE TABLE  members(
    member_uid UUID NOT NULL PRIMARY KEY,
    member_name VARCHAR(100) NOT NULL,
    member_address VARCHAR(100) NOT NULL,
    member_phone_number VARCHAR(20) NOT NULL,
    email_address VARCHAR(100)
);

CREATE TABLE gym_subscriptions(
    subscription_uid UUID NOT NULL PRIMARY KEY,
    member_uid UUID REFERENCES members(member_uid),
    start_date DATE,
    end_date DATE
);

CREATE TABLE instructor(
    instructor_uid UUID NOT NULL PRIMARY KEY,
    instructor_name VARCHAR(100) NOT NULL,
    instructor_address VARCHAR(100) NOT NULL,
    instructor_phone_number VARCHAR(20) NOT NULL,
    instructor_email_address VARCHAR(100),
    expertise VARCHAR(100) NOT NULL
);

CREATE TABLE  fitness_classes(
    class_uid UUID NOT NULL PRIMARY KEY,
    class_title VARCHAR(20) NOT NULL,
    class_description VARCHAR(100) NOT NULL,
    schedule TIMESTAMP,
    max_capacity INT NOT NULL,
    instructor_uid UUID REFERENCES instructor(instructor_uid)

);

CREATE TABLE class_enrollment(
    enrollment_uid UUID NOT NULL PRIMARY KEY,
    member_uid UUID REFERENCES members(member_uid),
    class_uid UUID REFERENCES fitness_classes(class_uid),
    enrollment_date DATE 
);

CREATE TABLE gym_equipment(
  equipment_uid UUID NOT NULL PRIMARY KEY,
  equipment_name VARCHAR(50) NOT NULL,
  equipment_description VARCHAR(200) NOT NULL,
  equipment_availability BOOLEAN 
);

CREATE TABLE class_equipment_assignment(
    assignment_uid UUID NOT NULL PRIMARY KEY,
    class_uid UUID REFERENCES fitness_classes(class_uid),
    equipment_uid UUID REFERENCES gym_equipment(equipment_uid)
);

